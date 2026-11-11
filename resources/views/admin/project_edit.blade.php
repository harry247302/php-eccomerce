@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Project </h3>
        <a href="{{ url('admin/all_projects') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                  
                    @foreach($projects as $row)
                  {!! Form::open(array('url' =>'admin/all_projects/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
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
                                    <label class="col-sm-2 col-form-label">Website / Project URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="project_url"   value="{{ $row->project_url }}" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Project Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" >
                                            <?php $categories = App\Model\ProjectCategory::where('status','enable')->get(); ?>
                                             <option value=" ">No Category</option>
                                            @foreach($categories as $row1)
                                            
                                            <option value="{{$row1->id}}" @if($row1->id == $row->category_id) selected @endif>{{ $row1->name }}</option>
                                            
                                            @endforeach
                                        </select>
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
                                    <label class="col-sm-2 col-form-label">Image or video</label>
                                    <div class="col-sm-10">
                                        			    
                                         @if (strpos($row->image, '.mp4') !== false) 
                                               	<video width="320" height="240" controls>
                                                  <source src="{{asset('public/images/projects/'.$row->image)}}" type="video/mp4">
                                                  <source src="{{asset('public/images/projects/'.$row->image)}}" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                               	@else
                                               	<img src="{{asset('public/images/projects/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';"  />
                                               	@endif
                                         
                                        <input type="file" class="form-control" name="image" value="{{ $row->image }}" >
                                       <!-- <p>Image resolution must be 570*354 <br> Video file must be .mp4 format</p>-->
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
                                    <label class="col-sm-2 col-form-label">Is Popular ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_popular">
                                            <option @if($row->is_popular == 'no') selected @endif>no</option>
                                            <option @if($row->is_popular == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                     <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Featured ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_featured">
                                            <option @if($row->is_featured == 'no') selected @endif>no</option>
                                            <option @if($row->is_featured == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                    
                          
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Hot ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_hot">
                                            <option @if($row->is_hot == 'no') selected @endif>no</option>
                                            <option @if($row->is_hot == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Best Product?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_best">
                                            <option @if($row->is_best == 'no') selected @endif>no</option>
                                            <option @if($row->is_best == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is New Arraival</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_new_arraival">
                                            <option @if($row->is_new_arraival == 'no') selected @endif>no</option>
                                            <option @if($row->is_new_arraival == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Special Offer  ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_special_offer">
                                            <option @if($row->is_special_offer == 'no') selected @endif>no</option>
                                            <option @if($row->is_special_offer == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Set as Home ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="set_as_home">
                                            <option @if($row->set_as_home == 'no') selected @endif>no</option>
                                            <option @if($row->set_as_home == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Order By</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="order_by" value="{{ $row->order_by  }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Show In</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="show_in">
                                            <option @if($row->show_in == 'portfollio') selected @endif>portfollio</option>
                                            <option @if($row->show_in == 'project') selected @endif>project</option>
                                            <option @if($row->show_in == 'seoranking') selected @endif>seoranking</option>
                                            <option @if($row->show_in == 'mapping') selected @endif>mapping</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
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