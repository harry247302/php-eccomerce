@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Testimonial </h3>
         <a href="{{ url('admin/testimonials') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                   
                    @foreach($testimonials as $row)
                  {!! Form::open(array('url' =>'admin/testimonials/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
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
                                    <label class="col-sm-2 col-form-label">Image </label>
                                    <div class="col-sm-10">
                                        			    
                                       
                                               	<img src="{{asset('public/images/testimonials/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                               
                                        <input type="file" class="form-control" name="image" value="{{ $row->image }}" >
                                       
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Video </label>
                                    <div class="col-sm-10">
                                        			    
                                       
                                                <video width="300" controls >
                             <source src="{{ asset('public/videos/testimonials/'.$row->video) }}" type="video/mp4">
                         </video>
                                               
                                        <input type="file" class="form-control" name="video" value="{{ $row->video }}" >
                                       
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Thumbnail Image </label>
                                    <div class="col-sm-10">
                                        			    
                                       
                                               	<img src="{{asset('public/images/testimonials/thumb/'.$row->thumbnail)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                               
                                        <input type="file" class="form-control" name="thumbnail" value="{{ $row->thumbnail }}" >
                                       
                                    </div>
                                </div>
                            </div>
                           
                           
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Work Profile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="work_profile" value="{{ $row->work_profile }}"  >
                                    </div>
                                </div>
                            </div>
                         
                         
                           <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Order By</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="order_by" value="{{ $row->order_by }}" >
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