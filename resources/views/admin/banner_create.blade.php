@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Create Banner </h3>
         <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> </h4>
                    <form action="{{ url('admin/banners') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="row">
                         
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status" required>
                                            <option>enable</option>
                                            <option>disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" >
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="description" >
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Banner Image</label>
                                    <div class="col-sm-9">
                                         <input type="file" class="form-control"  name="image" required>
                                        <!-- <p>Image resolution must be  1920*1080</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                         <div class="row">
                           <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Order By</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="order_by" >
                                    </div>
                                </div>
                             </div>
                            </div>
                       
                       
                      
                         <div class="row">
                            <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection