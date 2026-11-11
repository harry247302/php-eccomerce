@extends('layouts.master')


@section('headers')
<!-- Title -->
<title>Blogs</title>
<meta name="description" content="Blogs ">
<meta name="keywords" content="Blogs">
@endsection

 
@section('content')
  
        <section class="py-12 pt-lg-15"  style="margin-top:150px; ">
            <div class="container">
                <h2 class="mb-9 text-center fs-30 fs-md-40">Our Blogs</h2>
                <div class="slick-slider"
                    data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 576,"settings": {"slidesToShow":1}}]}'>
                    @foreach($blogs as $row)
                    <div class="box">
                        <div class="card border-0">
                            <a href="{{ url('/blog/'.$row->url) }}" class="hover-shine card-img-top">
                                <img src="{{asset('public/images/blogs/'.$row->image)}}" alt="Under the sun in Cape Town">
                            </a>
                            <div class="card-body px-0 pt-6">
                                <!--<p
                                    class="card-text fs-12 mb-2 text-muted lh-12 text-uppercase letter-spacing-05 font-weight-500">
                                    April 24, 2019
                                </p>-->
                                <h3 class="card-title mb-3 fs-20">
                                    <a href="{{ url('/blog/'.$row->url) }}">{{ $row->name }}</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">{!! \Illuminate\Support\Str::limit($row->short_description, 230, $end='...') !!}</p>
                                <a href="{{ url('/blog/'.$row->url) }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </section>

<style>
    .main-header .navbar .nav-link {
    display: inline-block;
    font-size: 1.1rem;
    line-height: 26px;
    font-weight: 600
}
    .text-gray{
      font-size: 20px;   
    }
    </style>
@endsection