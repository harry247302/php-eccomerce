@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update stories  </h3>
       <a href="{{ url('admin/stories') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
          @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul class='text'>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    @foreach($stories as $row)
                  {!! Form::open(array('url' =>'admin/stories/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" required  value="{{ $row->title }}" >
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" class="form-control">
                                            {{ $row->content }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('content');
                                        </script>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image or video</label>
                                    <div class="col-sm-10">
                                        			    
                                         @if (strpos($row->image, '.mp4') !== false) 
                                               	<video width="120" height="120" controls>
                                                  <source src="{{asset('public/images/stories/'.$row->image)}}" type="video/mp4">
                                                  <source src="{{asset('public/images/stories/'.$row->image)}}" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                               	@else
                                               	<img src="{{asset('public/images/stories/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';" />
                                               	@endif
                                         
                                        <input type="file" class="form-control" name="image" value="{{ $row->image }}" >
                                        <p> Video file must be .mp4 format</p>
                                    </div>
                                </div>
                            </div>
                           
                          

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option @if($row->page_status == 'enable') selected @endif>enable</option>
                                            <option @if($row->page_status == 'disable') selected @endif>disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                        </div>



                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>
                   @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection