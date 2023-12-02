@extends('admin/layout')
@section('page_title','Manage_Coupon')

@section('container')

<h2 class="mb10">Manage Coupon</h2>
<a href="{{url('admin/coupon')}}">
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
                                       
                                       
                                        <form action="{{route('coupon.manage_coupon_process')}}" method="post" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="title"  class="control-label mb-1">Title</label>
                                                <input id="title" value="{{$title}}" required name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" ">
                                                @error('title')
                                                <div class="alert alert-danger">
                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="code" class="control-label mb-1">Code</label>
                                                <input id="code" required value="{{$code}}"  name="code" type="text" class="form-control" aria-required="true" aria-invalid="false"">
                                                @error('code')
                                                <div class="alert alert-danger">
                                                {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="value" class="control-label mb-1">Value</label>
                                                <input id="value" required value="{{$value}}"  name="value" type="text" class="form-control" aria-required="true" aria-invalid="false"">
                                                @error('value')
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