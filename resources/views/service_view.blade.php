@extends('layouts.master')
@section('headers')
<!-- Title -->
<title>{{ $service->meta_title }}</title>
<meta name="description" content="{{ $service->meta_description }}">
<meta name="keywords" content="{{ $service->meta_keywords }}">
@endsection

@section('content')
  <main id="content"   style="margin-top:150px; ">
        <section class="d-flex flex-column bg-img-cover-center vh-100 custom-height-sm pt-xxl-13" style="background-image: url('{{asset('public/images/cmspages/'.$pages_ser->header_image)}}');">
            <div class="d-flex flex-column h-100 align-items-center justify-content-center justify-content-xxl-start pt-xxl-13">
                <div class="container">
                   <!-- <p class="text-center text-white fs-20 font-weight-bold mb-4">Furnitor Story</p>-->
                    <h1 class="fs-60 fs-lg-90 lh-1 text-center text-white">{{ $service->name }}</h1>
                </div>
            </div>
        </section>
        <section class="pt-11 pt-lg-14">
            <div class="container">
                <div class="row align-items-center no-gutters flex-md-row-reverse">
                    <div class="col-md-12 pl-md-12 pl-lg-12 mb-12 mb-md-0">
                        <p class="mb-6"> 
                             <img src="{{asset('public/images/services/'.$service->image)}}" alt="" style="float:left; padding:24px; width:450px">
                             {!! $service->long_description !!} <br>
                            <div class="row">
                            <?php $pro_images = App\Model\Image::where('product_id',$service->id)->get();  ?>
                                        @foreach($pro_images as $image)
                            <div class="col-md-4" >
                                        <img src="{{asset('public/images/services/'.$image->image)}}" alt="image not uploaded"  >
                            </div>
                                        @endforeach 
                           </div>
                         <div style="padding:20px;" align="center">
                           <a href="{{url('/Contact-Us')}}" class="btn btn-info text-uppercase letter-spacing-05 fadeInUp animated" data-animate="fadeInUp" style="color:black" tabindex="0">Get Quotes Now</a>
                        </div>
                         
                        </p>
                       
                    </div>
                    <div class="col-md-6">
                        
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
