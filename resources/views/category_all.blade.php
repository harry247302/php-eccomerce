@extends('layouts.master')

@section('headers')
<!-- Title -->
<title>{{ $category->meta_title }}</title>
<meta name="description" content="{{ $category->meta_description }}">
<meta name="keywords" content="{{ $category->meta_keywords }}">
<!--<link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>-->
@endsection

@section('content')

<!--================Banner Area =================-->
<section class="banner_area banner_one">
    <div class="container">
        <div class="banner_content">
            <h3>{{ $category->name }}</h3>
        </div>
    </div>
</section>
<div class="banner_link">
    <div class="container">
        <div class="abnner_link_inner">
            <a class="active" href="{{ url('/') }}">Home</a>
            <a href="#">Category</a>
        </div>
    </div>
</div>
<!--================End Banner Area =================-->

<!--================Carrers Area =================-->
<section class="service_page">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-sidebar-widget">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach($categories as $row)
                        <li class="active"><a href="{{ url('/category/'.$row->url) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $row->name }}</a></li>
                        @endforeach

                    </ul>
                    <!--  <div class="download_btn">
                                <a href="#">Download Brochure <img src="img/icon/download-icon.png" alt=""></a>
                            </div>-->
                </div>
            </div>
            <div class="col-md-9">
                <div class="service_content_right_col">
                    <div class="tab-content">
                        <div class="service_content_bx">
                            <div class="row">

                                <div class="col-md-12">

                                    <img src="{{asset('public/images/categories/'.$category->image)}}" alt="" style="width:50%;  float:left; padding:10px;">
                                    <p style="float:right">{!! $category->long_description !!}</p>

                                </div>
                                <span class="quote">
                                    <a href="{{url('Contact-Us')}}"><strong>Enquiry Now</strong></a>
                                </span>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection