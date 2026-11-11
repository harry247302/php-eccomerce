@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Comment </h4>
                    @foreach($comments as $row)
                  {!! Form::open(array('url' =>'admin/product-comments/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Product</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="comment_on_id" >
                                            @foreach($product as $row1)
                                            <option @if($row->comment_on_id == $row1->id) selected @endif  value="{{ $row1->id }}">{{ $row1->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_name"   value="{{ $row->user_name }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Comment</label>
                                    <div class="col-sm-10">
                                        <textarea name="comment" class="form-control" >
                                             {{ $row->comment }}
                                        </textarea>
                                        
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Stars</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="stars"  value="{{ $row->stars }}">
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