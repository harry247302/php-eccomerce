@extends('layouts.master')
@section('headers')
<!-- Title -->
<title>{{ $page_pay_now->meta_title }}</title>
<meta name="description" content="{{ $page_pay_now->meta_description }}">
<meta name="keywords" content="{{ $page_pay_now->meta_keywords }}">
@endsection

@section('content')
     
        <!-- Inner Banner Area -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Pay Now</h3>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Pay Now</li>
                    </ul>
                </div>
            </div>

            <div class="inner-banner-shape">
                <div class="shape-one">
                    <img src="{{asset('public/img/inner-banner/banner-shape1.png')}}" alt="Images">
                </div>
                
                <div class="shape-two">
                    <img src="{{asset('public/img/inner-banner/banner-shape2.png')}}" alt="Images">
                </div>

                <div class="shape-three">
                    <img src="{{asset('public/img/inner-banner/banner-shape3.png')}}" alt="Images">
                </div>

                <div class="inner-banner-dots">
                    <img src="{{asset('public/img/shape/dots-shape.png')}}" alt="Images">
                </div>
            </div>
        </div>
        <!-- Inner Banner Area End -->
 <!-- Contact Section -->
        <div class="contact-section  pb-70"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-img" align="center">
                           <img src="{{asset('public/images/cmspages/'.$page_pay_now ->header_image)}}" alt="Images">
                            <img src="{{asset('public/images/cmspages/'.$page_pay_now ->image)}}" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-wrap">
                            <div class="contact-form">
                                <div class="section-title">
                                   <!-- <span class="sp-before sp-after">Secure Payment Option</span>-->
                                    <h2>Pay Now</h2>
                                </div>
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <lable><b>Enter Amount* </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="text" name="amount" id="name" class="form-control" required data-error="Please enter amount" placeholder="Enter Amount*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                       <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <lable><b>Enter Full Name* </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Enter Full Name*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <lable><b>Enter Email Address* </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="email" name="email" id="name" class="form-control" required data-error="Please enter your email" placeholder="Enter Email ID*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
        
                                       <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <lable><b>Enter Mobile* </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="text" name="mobile" id="name" class="form-control" required data-error="Please enter your mobile number" placeholder="Enter Mobile Number*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                         <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <lable><b>City* </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="text" name="city" id="name" class="form-control" required data-error="Please enter your city" placeholder="Enter city name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                         <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <lable><b>Area ZIP / PIN CODE* </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="text" name="pin_code" id="name" class="form-control" required data-error="Please enter your area pincode" placeholder="Enter 6 digit PIN*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                             
                                         <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <lable><b>Payment for [Write Invoice/Order number] * </b></lable>
                                              <!--  <i class='bx bx-user'></i>-->
                                                <input type="text" name="pin_code" id="name" class="form-control" required data-error="Please enter your invoice/order number" placeholder="Enter  your invoice/order number*">
                                                <span>[Please must write Invoice/Order number ]
</span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        
        
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn border-radius">
                                              Pay
                                                <i class='bx bx-plus'></i>
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

       
@endsection