@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Seo Ranking  </h3>
        <a href="{{ url('admin/seorankings') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                   
                    @foreach($seoranking as $row)
                  {!! Form::open(array('url' =>'admin/seorankings/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                               <div class="col-md-12">
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Project Name</label>
                                    <div class="col-sm-10">
                                         <select class="form-control" name="project_id">
                                            <option @if('project_id' == '') selected @endif>No Project</option>
                                            @foreach($projects as $data)
                                            <option value="{{ $data->id }}" @if($data->id == $row->project_id) selected @endif>{{ $data->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            </div>
                    </div>
                     
                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keyword</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="keyword" value="{{ $row->keyword }} " required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Page Result </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="page_result" required  value="{{ $row->page_result }} ">
                                    </div>
                                </div>
                            </div>
                        </div>
                             <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option @if($row->status == 'enable') selected @endif>enable</option>
                                            <option @if($row->status == 'disable') selected @endif>disable</option>
                                        </select>
                                    </div>
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