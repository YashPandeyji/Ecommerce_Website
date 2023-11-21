@extends('admin/layout')
@section('page_title','Manage_Category')

@section('container')

<h2 class="mb10">Manage Category</h2>
<a href="{{url('admin/category')}}">
    <button type="button" class="btn btn-outline-success">/Back</button>
</a>

    <div class="row m-t-30">
  
    
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- <div class="card-header">Manage Category</div> -->
                                    <div class="card-body">
                                       
                                       
                                        <form action="{{route('category.manage_category_process')}}" method="post" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="category_name"  class="control-label mb-1">Category Name</label>
                                                <input id="category_name" value="{{$category_name}}" required name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" ">
                                                @error('category_name')
                                                <div class="alert alert-danger">
                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                                <input id="category_slug" required value="{{$category_slug}}"  name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false"">
                                                @error('category_slug')
                                                <div class="alert alert-danger">
                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                         
                                            
                                            
                             </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   
                                                 Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{$id}}">
                                        </form>
                                    </div>
                                </div>
                            </div>  
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

</div>
@endsection