@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Add Team  </h3>
         <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                  
                    <form action="{{ url('admin/teams') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Designation</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="designation" >
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                                 <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" >
                                          
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Facebook Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="facebook_link" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Twitter Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="twitter_link" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Instagram Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="insta_link" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Linkedin Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="linkedin_link" >
                                    </div>
                                </div>
                            </div>
                            
                          
                           <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Order By</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="order_by" >
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status" >
                                            <option>enable</option>
                                            <option>disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                        </div>



                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection