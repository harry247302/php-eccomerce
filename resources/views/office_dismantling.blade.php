@extends('layouts.master')
@section('headers')
<!-- Title -->
<title>{{ $dismantling->meta_title }}</title>
<meta name="description" content="{{ $dismantling->meta_description }}">
<meta name="keywords" content="{{ $dismantling->meta_keywords }}">
@endsection

@section('content')
  <main id="content"  style="margin-top:150px; ">
    <section class="py-3 bg-color-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Office Dismantling Buyers</li>
                </ol>
            </nav>
        </div>
    </section>
            
     
        <section class=" pt-lg-8">
            <div class="container">
                <div class="row align-items-center no-gutters flex-md-row-reverse">
                    <div class="col-md-12 pl-md-12 pl-lg-12 mb-12 mb-md-0">
                          <h4 class="  text-center text-black">{{ $dismantling->title }}</h4>
                        <p class="mb-6"> 
                             <img src="{{asset('public/images/officedismantling/'.$dismantling->image)}}" alt="" style="float:left; padding:24px; width:450px">
                             {!! $dismantling->description !!}
                            
                           
                        </p>
                        </div>
                    <div class="col-md-6">
                         <a href="{{url('/Contact-Us')}}" class="btn btn-info text-uppercase letter-spacing-05 fadeInUp animated" data-animate="fadeInUp" style="color:black" tabindex="0">Get Quotes Now</a>
                    </div>
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
