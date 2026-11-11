@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Edit CMS Page </h3>
         <a href="{{ url('admin/cmspages') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                    
                    @foreach($cmspages as $row)
                  {!! Form::open(array('url' =>'admin/cmspages/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Page Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" required  value="{{ $row->name }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title" value="{{ $row->meta_title }}" > 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_description" value="{{ $row->meta_description }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_keywords" value="{{ $row->meta_keywords }}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Header Image</label>
                                    <div class="col-sm-10">
                                         <img src="{{asset('public/images/cmspages/'.$row->header_image)}}" alt="image not uploaded" style="height:auto; width:80px;"  onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"
                                         />
                                        <input type="file" class="form-control" name="header_image" value="{{ $row->header_image }}" >
                                        <!-- <p>Image resolution must be 1350*560</p>-->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                         <img src="{{asset('public/images/cmspages/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                        <input type="file" class="form-control" name="image" value="{{ $row->image }}" >
                                        <!-- <p>Image resolution must be 1350*560</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description" class="form-control">
                                            {{ $row->short_description }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('short_description');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Long Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="long_description" class="form-control">
                                             {{ $row->long_description }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('long_description');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Page Show IN</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="show_in" >
                                            <option  @if($row->show_in == 'header and footer') selected @endif>header and footer</option>
                                            <option  @if($row->show_in == 'header and top') selected @endif>header and top</option>
                                            <option  @if($row->show_in == 'header') selected @endif>header</option>
                                            <option  @if($row->show_in == 'footer') selected @endif>footer</option>
                                            <option  @if($row->show_in == 'inner page') selected @endif>inner page</option>
                                            <option  @if($row->show_in == 'left sidebar') selected @endif>left sidebar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Page Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="page_type" >
                                            <option @if($row->page_type == 'cms page') selected @endif>cms page</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                          


                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="page_status">
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