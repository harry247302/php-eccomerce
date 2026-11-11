@extends('layouts.master')
@section('headers')
<!-- Title -->
<title>{{ $pages_contact->meta_title }}</title>
<meta name="description" content="{{ $pages_contact->meta_description }}">
<meta name="keywords" content="{{ $pages_contact->meta_keywords }}">
@endsection

@section('content')
<main id="content"  style="margin-top:150px; ">
    <section class="py-3 bg-color-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>
    @if(session()->has('flash_message'))
    <div class="alert alert-success">
        {{ session()->get('flash_message') }}
    </div>
    @endif
    <section class="pt-10 pb-10">
        <div class="container">
            <h2 class="fs-sm-40 mb-10 text-center">Contact Us</h2>
            <div ></div>
        </div>
    </section>
    <div class="pb-14">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 mb-8 mb-md-0">
                    <h2 class="fs-24 mb-2">
                        We would love to hear from you.
                    </h2>
                   <form action="{{ url('send-mail') }}" method="post">
                        @csrf
                        <div class="row mb-6">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Your Name*" name="name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Your Email*" required name="email">
                            </div>
                        </div>
                        
                          <div class="row mb-6">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Your Mobile Number*" name="mobile" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Your Address*" required name="address">
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <textarea class="form-control" rows="6" name="comment">Comment</textarea>
                        </div> 
                        
                        <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">submit now</button>
                    </form>
                </div>
                <div class="col-md-4 pl-xl-13 pl-md-6">
                    <p class="font-weight-bold text-primary mb-3">Address</p>
                    <address class="mb-6">
                       {{ $company->contact_address }}
                       {{ $company->contact_city }} 
                       {{ $company->contact_state }}
                       {{ $company->contact_pincode }}
                    </address>
                    <p class="font-weight-bold text-primary mb-2">Infomation</p>
                    <p class="mb-0">+91 {{ $company->mobile }}</p>
                    <p class="mb-7">{{ $company->enquiry_email }}</p>
                </div>
               
            </div>
             <div style="margin-top:10px;">
                  <iframe src="{{ $company->google_map }}" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
                </div>
        </div>
    </div>
</main>


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