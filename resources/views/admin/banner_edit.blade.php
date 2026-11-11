@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Update Banner</h3>
       <a href="{{ url('admin/banners') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                
                     @foreach($banners as $row)
                  {!! Form::open(array('url' =>'admin/banners/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                       
                        <div class="row">
                         
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status" required>
                                           <option  @if($row->status == 'enable') selected @endif>enable</option>
                                            <option  @if($row->status == 'disable') selected @endif>disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="description"  value="{{ $row->description }}">
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name"  value="{{ $row->name }}">
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Banner Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{asset('public/images/banners/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                         <input type="file" class="form-control"  name="image"  value="{{ $row->photo }}">
                                        <!--<p>Image resolution must be  1920*1080</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                 

                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Order By</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="order_by" value="{{ $row->order_by }}" >
                                    </div>
                                </div>
                             </div>
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