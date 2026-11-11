@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Create Testimonial </h3>
        <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                   
                    <form action="{{ url('admin/testimonials') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" class="form-control">
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('content');
                                        </script>
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
                                    <label class="col-sm-2 col-form-label">Video </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="video" >
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                                <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Thumbnail Image </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="thumbnail" >
                                        
                                    </div>
                                </div>
                            </div>
                            
                          <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Work Profile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="work_profile" >
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