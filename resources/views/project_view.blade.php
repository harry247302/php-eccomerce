@extends('layouts.master')


@section('headers')
<!-- Title -->
<title>{{ $pages_project['meta_title']}}</title>
<meta name="description" content="{{ $pages_project['meta_description'] }}">
<meta name="keywords" content="{{ $pages_project['meta_keywords'] }}">
@endsection


@section('content')
<!-- header END -->
        <div class="page-content bg-white" id="lightgallery">
			<!-- Main Slider -->
			<div class="dlab-bnr-inr">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1>{{ $project->title }}</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="las fa-home mr-2"></i>Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Project</li>
							</ul>
						</nav>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- Info Img -->
			<div class="section-full content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
				<div class="container-fluid">
					<div class="project-carousel owl-btn-center-lr owl-carousel mfp-gallery">
						
						
						
						 @if (strpos($project->image, '.mp4') !== false)
      
              <div class="item">
							<div class="dlab-box gallery-box-2">
								<div class="dlab-media dlab-img-effect"> 
									   <video width="100%" height="300" controls>
                            <source src="{{asset('public/images/projects/'.$project->image)}}" type="video/mp4">
                            <source src="{{asset('public/images/projects/'.$project->image)}}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>							</div>
							</div>
						</div>

            @else
            <div class="item">
							<div class="dlab-box gallery-box-2">
								<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="#"> <img src="{{asset('public/images/projects/'.$project->image)}}" alt=""> </a>
									<div class="overlay-bx">
										<span data-exthumbimage="{{asset('public/images/projects/'.$project->image)}}" data-src="{{asset('public/images/projects/'.$project->image)}}" class="lightimg" title="Title Come Here"> <i class="ti-zoom-in icon-bx-xs"></i> </span>
									</div>
								</div>
							</div>
						</div>
            @endif
            
            
						
					
					</div>
				</div>
			</div>
			<!-- Info End -->
			<!-- Project Info -->
			<section class="section-full content-inner">
				<div class="container">
					<div class="section-head">
						<!--<span>YEAR 2018</span>-->
						<h4 class="title">{{ $project->title }}</h4>
					</div>
					<p>{!! $project->content !!}</p>
                    <a href="{{ url('Contact-Us') }}" class="btn btn-primary btnhover13">Enquiry Now</a>
				</div>
			</section>
			<!-- Project Info End -->
		</div>
   
@endsection