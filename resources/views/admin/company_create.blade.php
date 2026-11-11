@extends('admin.master')


@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Add Company Details </h3>
      <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:10%"><span class="icon-keyboard_backspace"></span> Back</a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                   
                    <form action="{{ url('admin/companies') }}" class="form-sample" method="post" enctype="multipart/form-data">
                        @csrf
                       
                      
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> Company Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> Owner Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="owner_name" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Enquiry Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="enquiry_email" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mobile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Landline</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="landline" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fax</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="fax" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Office address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="office_address" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_address" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_state" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_city" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Pincode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_pincode" >
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Country</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_country" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact_website" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Catelog Url</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="catelog_url" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Copyright</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="copyright" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Design And Developed</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="design_and_develope" >
                                    </div>
                                </div>
                            </div>
                        
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Design And Developed URL</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="design_and_develope_url" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Skype Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="skype_link" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Facebook Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="facebook_link" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Youtube Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="youtube_link" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Instagram Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="insta_link" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Twitter Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="twitter_link" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Linkdin Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="linkdin_link" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Google Map</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="google_map" >
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