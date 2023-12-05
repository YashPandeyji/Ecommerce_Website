@extends('admin/layout')
@section('page_title','Manage_Color')
@section('color_select','active')


@section('container')

<h2 class="mb10">Manage Color</h2>
<a href="{{url('admin/color')}}">
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
                                       
                                       
                                        <form action="{{route('color.manage_color_process')}}" method="post" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="color"  class="control-label mb-1">Color</label>
                                                <input id="color" value="{{$color}}" required name="color" type="text" class="form-control" aria-required="true" aria-invalid="false" ">
                                                @error('color')
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