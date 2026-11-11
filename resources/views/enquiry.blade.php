@extends('layouts.master')
@section('headers')
    <!-- Title -->
    <title>{{ $pages_enquiry->meta_title }}</title>
    <meta name="description" content="{{ $pages_enquiry->meta_description }}">
    <meta name="keywords" content="{{ $pages_enquiry->meta_keywords }}">
@endsection

@section('content')
 
   <div class="sub-banner"></div>



<div class="contact-box">
<div class="contact-sub">
<div class="contact-us-box">
<div class="small-heading">{{ $company->name }}</div>
<p><strong><i class="fa fa-phone"></i>Mobile No	:</strong>	+91{{ $company->name }}</p>
<p><strong><i class="fa fa-map-marker"></i>Address	:</strong> {{ $company->office_address }}</p>
<p><strong><i class="fa fa-map-marker"></i>Showroom Address	:</strong> {{ $company->contact_address }}</p>
<p><strong><i class="fa fa-envelope"></i>Email-id	:</strong>	{{ $company->email }} </p>



 
</div>
<div class="send-col">
<div class="small-heading">Get In Touch !</div>
<form action="https://displayrack.in/send.php" method="post" name="form1" id="form1" onSubmit="return validateForm()">

<input name="user_name" type="text" id="name" size="25" placeholder="Name:" required="required">

<input name="user_email" type="text" id="email" size="25" placeholder="Email:" required="required">

<input name="user_mobile" type="text" id="mobile"  size="25" maxlength="15" placeholder="Mobile:" required="required">

<input name="user_address" type="text" id="address" size="75" maxlength="15" placeholder="Address:" required="required">

<textarea name="user_requirement" cols="20" rows="3" id="requirement" placeholder="Message:" required="required"></textarea>

<input type="submit" name="contact_submit" value="Send Message" class="submit-btn"> 
</form>
                
              
                                                            
</div>

</div>

</div> 

    
@endsection