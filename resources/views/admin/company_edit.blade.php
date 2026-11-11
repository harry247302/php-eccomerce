@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Edit Company Details </h3>
          <a href="{{ url('admin/companies') }}" class="btn btn-secondary" style="width:20%"><span class="icon-keyboard_backspace"></span> Back to list</a>
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
                    
                     @foreach($companies as $row)
                  {!! Form::open(array('url' =>'admin/companies/'.$row->id, 'method'=>"PUT"  , 'files' => true)) !!}
                        @csrf
                       
                        <div class="row">
                          <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" required value="{{ $row->name }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Owner Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="owner_name" required value="{{ $row->owner_name }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email" required value="{{ $row->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Enquiry Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="enquiry_email"  value="{{$row->enquiry_email}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mobile" required  value="{{$row->mobile}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Landline</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="landline"  value="{{$row->landline}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fax</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="fax"  value="{{$row->fax}}" >
                                    </div>
                                </div>
                            </div>
                            
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Whatsapp no with Phonecode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="whatsapp_number" value="{{ $row->whatsapp_number }}" >
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Call no. with Phonecode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="call_number" value="{{ $row->call_number }}" >
                                    </div>
                                </div>
                            </div>
                            
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fax</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="fax"  value="{{$row->fax}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Office address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="office_address"  value="{{$row->office_address}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_address"  value="{{$row->contact_address}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_state"  value="{{$row->contact_state}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_city"  value="{{$row->contact_city}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Pincode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_pincode"  value="{{$row->contact_pincode}}" >
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Country</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_country"  value="{{$row->contact_country}}" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_website"  value="{{$row->contact_website}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Catelog Url</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="catelog_url"  value="{{$row->catelog_url}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Copyright</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="copyright"  value="{{$row->copyright}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Design And Developed</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="design_and_develope"  value="{{$row->design_and_develope}}" >
                                    </div>
                                </div>
                            </div>
                            
                            
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Design And Developed URL</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="design_and_develope_url"  value="{{$row->design_and_develope_url}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Skype Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="skype_link"  value="{{$row->skype_link}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Facebook Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="facebook_link"  value="{{$row->facebook_link}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Youtube Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="youtube_link"  value="{{$row->youtube_link}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Instagram Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="insta_link"  value="{{$row->insta_link}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Twitter Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="twitter_link"  value="{{$row->twitter_link}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Linkdin Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="linkdin_link"  value="{{$row->linkdin_link}}" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Google Map</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="google_map"  value="{{$row->google_map}}" >
                                    </div>
                                </div>
                            </div>
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