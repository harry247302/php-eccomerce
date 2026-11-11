@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Office Dismantling  </h3>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                   
                
                  {!! Form::open(array('url' =>'/admin/office_dismantling/update/'.$ofd->id, 'method'=>"POST"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" required  value="{{ $ofd->title }}" >
                                    </div>
                                </div>
                            </div>
                         
                          <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Image</label>
                                    <div class="col-sm-10">
                                         <img src="{{asset('public/images/officedismantling/'.$ofd->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"/>
                                        <input type="file" class="form-control" name="image" value="{{ $ofd->image }}" >
                                         <!--<p>Image resolution must be 360*367</p>-->
                                    </div>
                                </div>
                            </div>
                            
                           
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="long_description" class="form-control">
                                             {{ $ofd->description }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('long_description');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title" value="{{ $ofd->meta_title }}" > 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_description" value="{{ $ofd->meta_description }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_keywords" value="{{ $ofd->meta_keywords }}" >
                                    </div>
                                </div>
                            </div>
                           

                             



                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection