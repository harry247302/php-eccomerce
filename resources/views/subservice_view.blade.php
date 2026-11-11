@extends('layouts.master')


@section('headers')
<!-- Title -->
<title>{{ $subservice['meta_title'] }}</title>
<meta name="description" content="{{ $subservice['meta_description'] }}">
<meta name="keywords" content="{{ $subservice['meta_keywords'] }}">
@endsection



@section('content')


<!-- Inner Banner Area -->
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>{{ $subservice->name }}</h3>
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li>
                    <a href="#">Subservices</a>
                </li>
                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li>{{ $subservice->name }}</li>
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

        <div class="inner-banner-dots-2">
            <img src="{{asset('public/img/shape/dots-shape.png')}}" alt="Images">
        </div>
    </div>
</div>
<!-- Inner Banner Area End -->

<!-- Service Details Area -->
<div class="service-details-area pt-50 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-left">
                    <div class="service-content">

                        <h2>{{ $subservice->name }}</h2>

                        <img src="{{asset('public/images/services/'.$subservice->image)}}" alt="Images">
                        <style>
                            img:hover {
                                transform: scale(1.5);
                            }

                            p {
                                color: #000000;
                            }
                        </style>
                       
                        <a href="{{ url('Contact-Us') }}" class="top-btn" style="width:200px; border-radius:10px;"> Enquiry Now </a>
                    </div>
                    <div class="row" style="margin-top:40px;">
                        @foreach($other_subservices as $row)
                        <div class="col-lg-3 col-sm-3"> 
                            <div class="service-content-card">
                                <a href="{{ url('/subservice/'.$row->url) }}"> <img src="{{asset('public/images/services/'.$row->image)}}" style="transition: transform .2s;">
                                    <h3>{{ $row->name }}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach

                        <!--       <div class="col-lg-6 col-sm-6">
                                    <div class="service-content-card">
                                        <h3>Scalable Keyword Growth</h3>
                                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="service-content-card">
                                        <h3>ROI Obsessed Keywords</h3>
                                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="service-content-card">
                                        <h3>Total Keyword Growth Visibility</h3>
                                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
                                    </div>
                                </div>-->
                    </div>


                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-widget-right">
                    <div class="widget-category">
                        <h3><b>Services</b></h3>
                        <ul>

                            @foreach($services as $row)
                            <li><a href="{{url('service/'.$row->url)}}">{{ $row->name }}</a></li>
                            @endforeach


                        </ul>
                    </div>


                    <div class="widget-category">
                        <h3><b>Other Sub-Services</b></h3>
                        <ul>


                            @foreach($other_subservices as $row)
                            <li><a href="{{url('subservice/'.$row->url)}}">{{ $row->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="contact-widget">
                        <h2>Contact Info</h2>
                        <ul>
                            <li>
                                <i class="flaticon-telephone"></i>
                                <div class="content">
                                    <h3>Phone: </h3>
                                    <span><a href="tel:+91{{ $company->mobile }}">+91 {{ $company->mobile }}</a></span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email-1"></i>
                                <div class="content">
                                    <h3>Email:</h3>
                                    <span><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-planet-earth"></i>
                                <div class="content">
                                    <h3>Location:</h3>
                                    <span>{{ $company->office_address }}, {{ $company->contact_city }}, {{ $company->contact_state }}, {{ $company->contact_pincode }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!--                            <div class="service-widget-two">
                                <h2>Brochures</h2>
                                <ul>
                                    <li>
                                        <i class="flaticon-pdf-file"></i>
                                        <div class="content">
                                            <h3>01:</h3>
                                            <span><a href="#">PDF Download</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="flaticon-pdf-file"></i>
                                        <div class="content">
                                            <h3>02:</h3>
                                            <span><a href="#">Services Details.txt</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Details Area End -->

@endsection