@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Service </h3>
        <a href="{{ url('admin/services') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                   
                    
                  {!! Form::open(array('url' =>'admin/services/'.$service->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" required  value="{{ $service->name }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description" class="form-control">
                                            {{ $service->short_description }}
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
                                             {{ $service->long_description }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('long_description');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Image</label>
                                    <div class="col-sm-10">
                                         <img src="{{asset('public/images/services/'.$service->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';" />
                                        <input type="file" class="form-control" name="main_image" value="{{ $service->image }}" >
                                      <!-- <p>Image resolution must be 570*354</p>-->
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Extra Image</label>
                                    <div class="col-sm-10">
                                        <?php $pro_images = App\Model\Image::where('product_id',$service->id)->get();  ?>
                                        @foreach($pro_images as $image)
                                        <img src="{{asset('public/images/services/'.$image->image)}}" alt="image not uploaded" style="height:auto; width:80px;" /><button><a href="{{ url('/admin/delete_image_pro/'.$image->id) }}"> Delete </a></button>
                                        @endforeach
                                        <input type="file" class="form-control" name="image[]" value="{{ $service->image }}" multiple>
                                        <!-- <p>Image resolution must be 1350*560</p>-->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title" value="{{ $service->meta_title }}" > 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_description" value="{{ $service->meta_description }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_keywords" value="{{ $service->meta_keywords }}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Popular ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_popular">
                                            <option @if($service->is_popular == 'no') selected @endif>no</option>
                                            <option @if($service->is_popular == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                     <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Featured ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_featured">
                                            <option @if($service->is_featured == 'no') selected @endif>no</option>
                                            <option @if($service->is_featured == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                    
                          
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Hot ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_hot">
                                            <option @if($service->is_hot == 'no') selected @endif>no</option>
                                            <option @if($service->is_hot == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Best Product?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_best">
                                            <option @if($service->is_best == 'no') selected @endif>no</option>
                                            <option @if($service->is_best == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is New Arraival</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_new_arraival">
                                            <option @if($service->is_new_arraival == 'no') selected @endif>no</option>
                                            <option @if($service->is_new_arraival == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Is Special Offer  ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="is_special_offer">
                                            <option @if($service->is_special_offer == 'no') selected @endif>no</option>
                                            <option @if($service->is_special_offer == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Set as Home ?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="set_as_home">
                                            <option @if($service->set_as_home == 'no') selected @endif>no</option>
                                            <option @if($service->set_as_home == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option @if($service->status == 'enable') selected @endif>enable</option>
                                            <option @if($service->status == 'disable') selected @endif>disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                        </div>



                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection