@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Add Image </h3>
           <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                  
                    <form action="{{ url('admin/galleries') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf
                       
                      
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                            </div>
                        
                       
                        
                          <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Images Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category" required>
                                            <option>No Category</option>
                                            <?php $category = App\Model\GalleryCategory::get(); ?>
                                            @foreach($category as $row)
                                                  <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                            @endforeach 
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                         <input type="file" class="form-control"  name="image" required>
                                        <!--<p>Image resolution must be 1262 × 799</p>-->
                                    </div>
                                </div>
                            </div>
                      
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alt Tag</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="alternative_text" >
                                    </div>
                                </div>
                            </div>
                            
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Set as Home ?</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="set_as_home" >
                                            <option>no</option>
                                            <option>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status" required>
                                            <option>enable</option>
                                            <option>disable</option>
                                        </select>
                                    </div>
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