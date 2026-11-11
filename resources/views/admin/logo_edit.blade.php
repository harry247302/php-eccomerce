@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Logo </h3>
       <a href="{{ url('admin/logos') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                    
                     @foreach($logos as $row)
                  {!! Form::open(array('url' =>'admin/logos/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
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
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" required value="{{ $row->name }}">
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Logo Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{asset('public/images/logos/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';" />
                                         <input type="file" class="form-control"  name="image"  value="{{ $row->photo }}">
                                       <!-- <p>Image resolution must be  1350*560</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                 


 
                        <div class="row">
                            <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>
                            </div>
                            </div>
@endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection