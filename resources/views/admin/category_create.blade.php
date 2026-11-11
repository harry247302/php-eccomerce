@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Create Catgeory </h3>
         <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                 
                    <form action="{{ url('admin/categories') }}" class="form-sample" method="post" enctype="multipart/form-data">
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
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" required>
                                        <!-- <p>Image resolution must be 360*367</p>-->
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description" class="form-control">
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('short_description');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Long Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="long_description" class="form-control">
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('long_description');
                                        </script>
                                    </div>
                                </div>
                            </div>
                        
                          
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title" >
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_description" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_keywords" >
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Popular ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_popular" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Featured ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_featured" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Hot Product ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_hot" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Best Product ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_best" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is New Arraival ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_new_arraival" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Special Offer ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_special_offer" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Set as Home ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="set_as_home" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
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