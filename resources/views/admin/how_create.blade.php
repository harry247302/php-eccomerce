@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Create How We Work </h3>
        <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <form action="{{ url('admin/hows') }}" class="form-sample" method="post" enctype="multipart/form-data">
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
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" >
                                        <!-- <p>Image resolution must be 1350*560</p>-->
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
                                    <label class="col-sm-2 col-form-label">Order By</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="order_by" >
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