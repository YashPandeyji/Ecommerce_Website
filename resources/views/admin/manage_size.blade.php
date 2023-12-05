@extends('admin/layout')
@section('page_title','Manage_Size')
@section('size_select','active')


@section('container')

<h2 class="mb10">Manage Size</h2>
<a href="{{url('admin/size')}}">
    <button type="button" class="btn btn-outline-success">Back</button>
</a>

    <div class="row m-t-30">
  
    
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- <div class="card-header">Manage Category</div> -->
                                    <div class="card-body">
                                       
                                       
                                        <form action="{{route('size.manage_size_process')}}" method="post" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="size"  class="control-label mb-1">Size</label>
                                                <input id="size" value="{{$size}}" required name="size" type="text" class="form-control" aria-required="true" aria-invalid="false" ">
                                                @error('size')
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