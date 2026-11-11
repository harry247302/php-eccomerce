@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        
        <h3 class="page-title">Edit User  </h3>
       <a href="{{ url('admin/users') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                   @foreach($users as $row)
                  {!! Form::open(array('url' =>'admin/users/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        
                     <!--   <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status" required>
                                           <option  @if($row->id_status == 'enable') selected @endif>enable</option>
                                            <option  @if($row->id_status == 'disable') selected @endif>disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="first_name" required value="{{ $row->first_name }}">
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="last_name" value="{{ $row->last_name }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="gender" required>
                                            <option  @if($row->gender == 'Male') selected @endif>Male</option>
                                            <option  @if($row->gender == 'Female') selected @endif>Female</option>
                                            <option  @if($row->gender == 'Others') selected @endif>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phonecode</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" required name="phonecode">
                                             <option  @if($row->phonecode == '+91') selected @endif>+91</option>
                                            <option  @if($row->phonecode == '+92') selected @endif>+92</option>
                                            <option  @if($row->phonecode == '+93') selected @endif>+93</option>
                                            <option  @if($row->phonecode == '+83') selected @endif>+83</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" required name="mobile" value="{{ $row->mobile }}" >
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" required name="email" value="{{ $row->email }}" >
                                    </div>
                                </div>
                            </div>
                            </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" required name="password" value="{{ $row->password }}">
                                    </div>
                                </div>
                            </div>
                            
                        </div>

               <div class="row">
                           
                           <div class="col-md-4 offset-3">
                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Update</button>
                               </div>
                    </div>

                    </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .col-form-label{
        padding-left:14%;
    }
</style>
@endsection