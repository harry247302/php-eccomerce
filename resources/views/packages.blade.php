@extends('layouts.master')

@section('headers')
<!-- Title -->
<title>{{ $pages_package->meta_title }}</title>
<meta name="description" content="{{ $pages_package->meta_description }}">
<meta name="keywords" content="{{ $pages_package->meta_keywords }}">
@endsection

@section('content')

       <!-- Inner Banner Area -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Pricing Plan</h3>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Packages</li>
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

        <!-- Pricing Area -->
        <div class="pricing-area pt-50 pb-100">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <span class="sp-after">Pricing Plan</span>
                    <h2 class="h2-color">Price & Plans <b>Packages</b></h2>
                </div>

                <div class="price-width">
                    <div class="row">
                        <?php  $i=1; ?>
                @foreach($packages as $row)
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card">
                        <div class="pricing-card-into color-bg{{$i}}">
                            
                            <img src="{{asset('public/images/packages/'.$row->image)}}" style="border-radius:50%; Width:35%; margin-top:-40px; padding:8px;">
                            <h3 class="color-1">{{ $row->name }}</h3>
                            <div class="price-rate">
                                <h2 class="color-1">₹ {{ $row->price }}</h2>
                                <span class="color-1">{{ $row->duration }}</span>
                            </div>
                            <p>{!! $row->description !!}</p>
                            <!--<ul>
                                        <li><i class='bx bx-check'></i> Social Media Marketing</li>
                                        <li><i class='bx bx-check'></i> 2.100 Keywords</li>
                                        <li><i class='bx bx-check'></i> One Way Link Building</li>
                                        <li><del>5 Free Optimization</del></li>
                                        <li><del>3 Press Releases</del></li>
                                    </ul>-->
                            <a href="#" class="purchase-btn button-bg1">
                                PURCHASE NOW
                            </a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                @endforeach
                    </div>
                </div> 
            </div>

            <div class="pricing-shape">
                <div class="shape1">
                    <img src="{{asset('public/img/shape/shape7.png')}}" alt="Images">
                </div>
                <div class="shape2">
                    <img src="{{asset('public/img/shape/shape4.png')}}" alt="Images">
                </div>
                <div class="shape3">
                    <img src="{{asset('public/img/shape/shape5.png')}}" alt="Images">
                </div>
                <div class="shape4">
                    <img src="{{asset('public/img/shape/shape6.png')}}" alt="Images">
                </div>
                <div class="shape5">
                    <img src="{{asset('public/img/shape/shape4.png')}}" alt="Images">
                </div>
                <div class="shape6">
                    <img src="{{asset('public/img/shape/shape8.png')}}" alt="Images">
                </div>
            </div>
        </div>
        <!-- Pricing Area End -->

@endsection