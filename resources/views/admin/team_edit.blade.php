@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Team </h3>
         <a href="{{ url('admin/teams') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                    <h4 class="card-title"> </h4>
                    @foreach($teams as $row)
                  {!! Form::open(array('url' =>'admin/teams/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" required value="{{ $row->name }}">
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Designation</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="designation" value="{{ $row->designation }}" >
                                    </div>
                                </div>
                            </div>
                            
                       
                           
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        			    
                                    
                                               	<img src="{{asset('public/images/teams/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                              
                                        <input type="file" class="form-control" name="image" value="{{ $row->image }}" >
                                      
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Facebook Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="facebook_link" value="{{ $row->facebook_link }}" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Twitter Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="twitter_link" value="{{ $row->twitter_link }}" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Instagram Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="insta_link" value="{{ $row->insta_link }}" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Linkedin Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="linkedin_link" value="{{ $row->linkedin_link }}" >
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