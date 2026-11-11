@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Create Blog Comment </h3>
       <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                   
                    <form action="{{ url('admin/blog-comments') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Blog</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="comment_on_id" >
                                            @foreach($blogs as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_name" >
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Comment</label>
                                    <div class="col-sm-10">
                                        <textarea name="comment" class="form-control">
                                        </textarea>
                                        
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Stars</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="stars" >
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