
@extends('layouts.master')
@section('headers')
<title>{{ $pages_gallery->meta_title }}</title>
<meta name="description" content="{{ $pages_gallery->meta_description }}">
<meta name="keywords" content="{{ $pages_gallery->meta_keywords }}">
@endsection

@section('content')
  <main id="content"  style="margin-top:150px; ">
        <section class="py-3 bg-color-3">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"> Gallery </a></li>
                        
                    </ol>
                </nav>
            </div>
        </section>
        <section class="pt-10 pb-11 pb-lg-15">
            <div class="container">
                <h2 class="fs-sm-40 mb-11 text-center">Our Gallery</h2>
                <div class="row">
                     @foreach($images as $row)
                    <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{url('public/images/galleries/'.$row->image)}}" class="hover-shine card-img-top" target="_blank">
                                <img src="{{asset('public/images/galleries/'.$row->image)}}" alt="Under the sun in Cape Town">
                            </a>
                           <!-- <div class="card-body px-0 pt-6 pb-0">
                                <p class="card-text fs-12 mb-2 text-muted lh-12 text-uppercase letter-spacing-05 font-weight-500">
                                    April 24, 2019
                                </p>
                                <h3 class="card-title mb-2 fs-20">
                                    <a href="blog-post-01.html">Under the sun in Cape Town</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">These are beautiful, well made & ortable! I bought them to wear to work & casually.</p>
                                <a href="blog-post-01.html" class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>-->
                        </div>
                    </div>
                    @endforeach
                 </div>
                
            </div>
        </section>
    
    </main>
  
<br><br>
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
