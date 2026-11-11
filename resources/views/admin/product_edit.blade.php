@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Update Product </h3>
         <a href="{{ url('admin/products') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                   
                    @foreach($products as $row)
                  {!! Form::open(array('url' =>'admin/products/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" required  value="{{ $row->name }}" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" >
                                            <option value="" @if($row->id == '') selected @endif>NO CATEGORY</option>
                                            <?php $category = App\Model\Category::where('status','enable')->get() ?>
                                            @foreach($category as $cat)
                                            <option value="{{ $cat->id }}" @if($row->category_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sub Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="subcategory_id" >
                                            <option value="" @if($row->id == '') selected @endif>NO SUBCATEGORY</option>
                                             <?php $subcategory = App\Model\Subcategory::where('status','enable')->get() ?>
                                            @foreach($subcategory as $row1)
                                            <option value="{{ $row1->id }}" @if($row->subcategory_id == $row1->id) selected @endif>{{ $row1->name }}</option>
                                            @endforeach
                                        </select>
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
                                    <label class="col-sm-2 col-form-label">Main Image</label>
                                    <div class="col-sm-10">
                                       
                                       
                                         <img src="{{asset('public/images/products/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;" onerror="this.src='{{asset('public/admin/img/no-image.png')}}';" />
                                       
                                        <input type="file" class="form-control" name="main_image" value="{{ $row->image }}" >
                                        <!-- <p>Image resolution must be 1350*560</p>-->
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Extra Image</label>
                                    <div class="col-sm-10">
                                        <?php $pro_images = App\Model\Image::where('product_id',$row->id)->get();  ?>
                                        @foreach($pro_images as $image)
                                        <img src="{{asset('public/images/services/'.$image->image)}}" alt="image not uploaded" style="height:auto; width:80px;" /><button><a href="{{ url('/admin/delete_image_pro/'.$image->id) }}"> Delete </a></button>
                                        @endforeach
                                        <input type="file" class="form-control" name="image[]" value="{{ $row->image }}" multiple>
                                        <!-- <p>Image resolution must be 1350*560</p>-->
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Additional Info</label>
                                    <div class="col-sm-10">
                                        <textarea name="additional_info" class="form-control">
                                             {{ $row->additional_info }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('additional_info');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Application</label>
                                    <div class="col-sm-10">
                                        <textarea name="application" class="form-control">
                                             {{ $row->application }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('application');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            
                            
                              <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Technical</label>
                                    <div class="col-sm-10">
                                        <textarea name="technical" class="form-control">
                                             {{ $row->technical }}
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('technical');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" value="{{ $row->price }}">
                                    </div>
                                </div>
                            </div>
                           
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minimum Order Amount</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="minimum_order_amount" value="{{ $row->minimum_order_amount }}">
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
                                    <label class="col-sm-2 col-form-label">Stock Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="stock_status">
                                            <option @if($row->page_status == 'in stock') selected @endif>in stock</option>
                                            <option @if($row->page_status == 'out of stock') selected @endif>out of stock</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Product Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_status">
                                            <option @if($row->page_status == 'enable') selected @endif>enable</option>
                                            <option @if($row->page_status == 'disable') selected @endif>disable</option>
                                        </select>
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