@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Change Image</h3>
         <a href="{{ url('admin/galleries') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                    <h4 class="card-title"> </h4>
                     @foreach($image as $row)
                  {!! Form::open(array('url' =>'admin/galleries/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                        <div class="row">
                         
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category" required>
                                            <?php $gallery = App\Model\GalleryCategory::get()  ?>
                                            <option value=" ">No Category</option>
                                           @foreach($gallery as $row1)
                                            <option @if($row->category == $row1->id) selected @endif  value="{{ $row1->id }}">{{ $row1->name }}</option>
                                            @endforeach
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
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{asset('public/images/galleries/'.$row->image)}}" alt="image not uploaded" style="height:auto; width:80px;"  onerror="this.src='{{asset('public/admin/img/no-image.png')}}';" />
                                         <input type="file" class="form-control"  name="image"  value="{{ $row->photo }}">
                                      <!--<p>Image resolution must be 1262 × 799</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alt Tag</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="alternative_text" value="{{ $row->alternative_text }}" required>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Set as Home ?</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="set_as_home">
                                            <option @if($row->set_as_home == 'no') selected @endif>no</option>
                                            <option @if($row->set_as_home == 'yes') selected @endif>yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                            
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


                        <button type="submit" class="btn btn-primary mr-2 form-control" style="background-color:#005cb7;">Submit</button>
@endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection