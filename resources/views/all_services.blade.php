@extends('layouts.master')


@section('headers')
<!-- Title -->
<title>Services</title>
<meta name="description" content="Services ">
<meta name="keywords" content="Services">
@endsection

 
@section('content')
  <main id="content"  style="margin-top:150px; ">
    <section class="py-3 bg-color-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">All Services</li>
                </ol>
            </nav>
        </div>
    </section><br>
           <section id="section-next" class="pb-11 pb-lg-15">
            <div class="container container-xxl">
                <div class="row mb-6 overflow-hidden">
                    @foreach($services as $row)
                    <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
                          
                       
                            <div 
                                class="  bg-img-cover-center ratio-1-1">
                                <a href="{{ url('service/'.$row->url) }}">  <img src="{{ asset('public/images/services/'.$row->image) }}" > </a>
                            </div>
                          
                       <div ><br>
                                <div class="d-flex flex-column">
                                  <a href="{{ url('service/'.$row->url) }}" class="font-weight-bold mb-1 d-block " style="font-size:25px">{{ $row->name }}</a>
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