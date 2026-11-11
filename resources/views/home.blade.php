@extends('layouts.master')

@section('headers')

<title>{{ $home->meta_title }}</title>
<meta name="description" content="{{ $home->meta_description }}" />
<meta name="keywords" content="{{ $home->meta_keywords }}" />
<style>
    .zoom {
        transition: transform .6s;
    }

    .zoom:hover {
        transform: scale(1.1);
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection


@section('content')


<main id="content" style="margin-top:110px; ">
 
   
    <section class="overflow-hidden">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <?php $i=0; ?>
            <ol class="carousel-indicators">
                @foreach($banner as $row)
                <li data-target="#myCarousel" data-slide-to="{{ $i }}" @if($i==0) class="active" @endif></li>
                <?php $i++; ?>
               @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $j=0; ?>
                @foreach($banner as $row)
                <div class="item @if($j==0) active @endif">
                    <img src="{{asset('public/images/banners/'.$row->image)}}" alt="Los Angeles" style="width:100%;">
                   
                        <div class="container container-xxl hidden-sm hidden-xs" style="margin-top:-300px; position:absolute">
                            <p class="text-white font-weight-bold fs-18 mb-4" data-animate="fadeInUp" style="color:black">{{ $row->description }}
                            </p>
                            <h1 class="mb-6 fs-60 fs-xxl-100 lh-1 text-white" data-animate="fadeInUp" style="color:black">{{ $row->name }}
                            </h1>
                            <a href="{{ url('Contact-Us') }}" class="btn btn-white text-uppercase letter-spacing-05" data-animate="fadeInUp" style="color:black">Get Quotes Now</a>
                        </div>
                   
                </div>
                 <?php $j++; ?>
                @endforeach
               
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        
    </div>

     
    </section>




  

    <section class="py-12 py-lg-15">
        <div class="container">
           
            <div class="mxw-924 mx-auto" data-animate="fadeInUp">
                <h2 class="fs-30 fs-md-40 lh-14 mb-5 text-center">Our Popular Services </h2>
               
                <div class="text-center">
                    <a href="#section-next" class="go-down d-inline-flex align-items-center justify-content-center w-50px h-50px rounded-circle border"><i class="far fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </section>




    <section id="section-next" class="pb-11 pb-lg-15">
        <div class="container container-xxl">
            <div class="row mb-6 overflow-hidden">
                @foreach($popular_services as $row)
                <div class="col-sm-6 col-lg-3 mb-6 " data-animate="fadeInUp">


                    <div class="zoom  bg-img-cover-center ratio-1-1">
                        <a href="{{ url('service/'.$row->url) }}"> <img src="{{ asset('public/images/services/'.$row->image) }}"> </a>
                    </div>

                    <div><br>
                        <div class="d-flex flex-column">
                            <a href="{{ url('service/'.$row->url) }}" class="font-weight-bold mb-1 d-block " style="font-size:25px">{{ $row->name }}</a>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>

        </div>
    </section>





    <section class="pb-10 pb-lg-15 overflow-hidden">
        <div class="container container-xxl">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-3 mb-6 mb-lg-0 pr-xxl-8" data-animate="fadeInLeft">
                    <h2 class="fs-15 fs-md-56 mb-5">Used Office Furniture Buyer</h2>
                    <p class="mb-0 font-weight-500">Office dismantling is a common affair today. We at star furniture focus on quality services. Our reliable products, 24/7 client services, and affordable pricing attract clients from various countries. Star furniture helps you to sell any old, used damaged electronics, furniture, and equipment at great prices. We are the best office dismantling buyer in Delhi NCR.</p>
                    <div class="pt-8 pt-lg-11 d-flex custom-arrow">
                        <a href="#" class="arrow slick-prev"><i class="far fa-arrow-left"></i></a>
                        <a href="#" class="arrow slick-next"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="category-slider pl-xxl-9 pr-lg-6" data-animate="fadeInRight">
                    <div class="slick-slider custom-nav custom-slider-01" data-slick-options='{"slidesToShow": 2,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
                        @foreach($services as $row)
                        <div class="box">
                            <div class="card border-0">
                                <img src="{{ asset('public/images/services/'.$row->image) }}" alt="Chairs" class="card-img">
                                <div class="card-img-overlay d-inline-flex flex-column px-7 pt-6 pb-7">
                                    <h3 class="card-title fs-20 fs-md-40">{{ $row->name }}</h3>
                             
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="pb-12 pb-lg-15">
        <div class="container container-xxl">
            <div class="row no-gutters">
                <div class="col-lg-5 order-2 order-lg-1" data-animate="fadeInLeft">
                    <div class="slick-slider dots-inner-center" data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":true,"arrows":false}'>

                        <img src="{{asset('public/images/cmspages/'.$about->image)}}" alt="">


                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 pl-lg-15 mb-8 mb-lg-0" data-animate="fadeInRight">
                    <div class="d-flex flex-column justify-content-center h-100  pl-lg-2">
                        <h2 class="fs-30 fs-md-56 mb-3">Welcome To {{ $company->name  }}</h2>
                        <p class="mb-7 font-weight-500">{!! $about->short_description !!}</p>
                        <div>
                            <a href="{{ url('/About-Us') }}" class="btn btn-outline-primary text-uppercase letter-spacing-05">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="pb-12 pb-lg-15 pt-2">
        <div class="container">
            <h2 class="fs-30 fs-md-40 mb-10 text-center">Happy Clients</h2>
            <div class="slick-slider custom-arrow-1" data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>

                @foreach($testimonials as $row)
                <div class="box">
                    <div class="card border-0">
                        <div class="card-body px-3 py-0 text-center">
                            <div class="mxw-84px mb-6 mx-auto">
                                <img src="{{asset('public/images/testimonials/'.$row->image)}}" alt="Sampson Totton" style="border-radius:50%">
                            </div>
                           
                            <p class="card-text mb-4 font-weight-500">
                                {!! $row->content !!}
                            </p>
                            <p class="card-text text-primary font-weight-bold mb-1 fs-15">- {{ $row->title }}</p>
                          
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>








    <section class="py-12 pt-lg-15">
        <div class="container">
            <h2 class="mb-9 text-center fs-30 fs-md-40">Our Blogs</h2>
            <div class="slick-slider" data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 576,"settings": {"slidesToShow":1}}]}'>
                @foreach($blogs as $row)
                <div class="box">
                    <div class="card border-0">
                        <a href="{{ url('/blog/'.$row->url) }}" class="hover-shine card-img-top">
                            <img src="{{asset('public/images/blogs/'.$row->image)}}" alt="Under the sun in Cape Town">
                        </a>
                        <div class="card-body px-0 pt-6">
                           
                            <h3 class="card-title mb-3 fs-20">
                                <a href="{{ url('/blog/'.$row->url) }}">{{ $row->name }}</a>
                            </h3>
                            <p class="card-text mb-4 font-weight-500">{!! \Illuminate\Support\Str::limit($row->short_description, 230, $end='...') !!}</p>
                            <a href="{{ url('/blog/'.$row->url) }}" class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>






    <section class="py-8 border-bottom">
        <div class="container container-xxl">
            <div class="slick-slider" data-slick-options='{"slidesToShow": 7,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1367,"settings": {"slidesToShow":5}},{"breakpoint": 992,"settings": {"slidesToShow":5}},{"breakpoint": 768,"settings": {"slidesToShow": 4}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>

                @foreach($clients as $row)
                <div class="box">
                    <a href="#" class="d-block px-3 px-xl-7">
                        <img src="{{asset('public/images/clients/'.$row->image)}}" alt="Client Logo 01" class="opacity-5 opacity-hover-10">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


         <section class="py-12 pb-lg-15" style="background: url({{asset('public/images/1.jpg')}})no-repeat center top; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="col-lg-auto ml-lg-auto text-center">
                            <div class="d-flex flex-column align-items-center">
                             
                                <h1 class="fs-20 fs-md-30 mb-4 text-center" style="color:white">WE ARE OFFICE DISMANTLING SERVICE VENDORS, OFFICE OR SHOWROOM FURNITURE REMOVAL, DISMANTLING, UN-INSTALLATION ETC SERVICE PROVIDER</h1>
                                
                                 <h3 class=" mb-4 text-center" style="color:#dddddd">"and sell it to us in good rates. Sell your used furniture to us"</h3>
                                
                                <p class="mb-6 font-weight-500" style="color:white">Star Furniture is now giving services of furniture uninstallation, un-fixing and removing without damaging your beautiful interiors. We remove, dismantle, unfix or uninstall furniture, workstation, ac, ups, ups panel, false ceiling, partitions, electric panels and buy it in very good price.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</main>



@endsection