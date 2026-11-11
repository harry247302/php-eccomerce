@extends('layouts.master')


@section('headers')
<!-- Title -->
<title>{{ $product['meta_title'] }}</title>
<meta name="description" content="{{ $product['meta_description'] }}">
<meta name="keywords" content="{{ $product['meta_keywords'] }}">
@endsection



@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image: url({{asset('public/images/cmspages/'.$pages_prod->header_image)}});">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box clearfix">
                        <div class="title pull-left">
                            <h1>{{ $product->name }}</h1>
                        </div>
                        <ul class="bread-crumb pull-right clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Products</li>
                              <li>{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- blog-details -->
    <section class="blog-details sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-three">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('public/images/products/'.$product->image)}}" alt=""></figure>
                                <div class="lower-content">
                                    
                                    <h3>{{ $product->name}}</h3>
                                    <div class="text">
                                        <p>{!! $product->long_description !!}</p>
                                    </div>
                                    <br>
                                <div class="btn-box"><a href="{{ url('/Contact-Us') }}" class="theme-btn style-one">Get a Quotes</a></div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar blog-sidebar">
                         <div class="sidebar-widget sidebar-categories">
                            <div class="widget-title">
                                <h3>Products</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">
                                      <?php  $products = App\Model\Product::where('product_status','enable')->get(); ?>
                                                    @foreach($products as $row2)
                                    <li><a href="{{ url('product/'.$row2->url) }}">{{ $row2->name }}</a></li>
                                                    @endforeach
                                    
                                    
                                </ul>
                            </div>
                        </div>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details end -->
 
@endsection