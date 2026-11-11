@extends('layouts.master')
@section('headers')
<!-- Title -->
<title>{{ $pages_about->meta_title }}</title>
<meta name="description" content="{{ $pages_about->meta_description }}">
<meta name="keywords" content="{{ $pages_about->meta_keywords }}">
@endsection

@section('content')




<section class="hero-wrap" style="background-image: url({{asset('public/images/cmspages/'.$pages_about->header_image)}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                <h1 class="mb-5 bread">Appointment</h1>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section-2 aboutsec">
    <div class="container-fluid">
        <div class="section-2-blocks-wrapper d-flex row no-gutters">
            <div class="img col-md-6 ftco-animate" style="background-image: url('{{asset('public/images/cmspages/'.$pages_about->image)}}');">
            </div>
            <div class="text col-md-6 ftco-animate">
                <div class="text-inner align-self-start">


                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Full Name:</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Full Name" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mobile :</label>
                            <input type="number" class="form-control" id="pwd" placeholder="Enter Mobile" name="pwd" required>
                        </div>
                         <div class="form-group">
                            <label for="pwd">Address :</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter Address" name="pwd" required>
                        </div>
                         <div class="form-group">
                            <label for="pwd">Time :</label>
                            <input type="time" class="form-control" id="pwd"  name="pwd" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Date :</label>
                            <input type="date" class="form-control" id="pwd"  name="pwd" required>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Book Appointment</button>
                    </form>
                    <!--  <ul class="my-4">
	              	<li><span class="ion-ios-checkmark-circle mr-2"></span> </li>
	              	<li><span class="ion-ios-checkmark-circle mr-2"></span> </li>
	              	<li><span class="ion-ios-checkmark-circle mr-2"></span> </li>
	              </ul> -->
             

                    
                       <div class="row">

                        <!-- <div class="col-md-4 d-md-flex align-items-center">
				        <h3 class="watchvideo-heading"><a href="" class="popup-vimeo"><span class="ion-ios-play"></span> </a></h3>
				    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="ftco-section testimony-section img" style="background-image: url();">
	    	<div class="overlay"></div>
	      <div class="container">
	      	<div class="row justify-content-center">
	      		<div class="col-md-7 mb-5 text-center heading-section ftco-animate">
	            <h2 class="mb-4"></h2>
	            <p> </p>
	          </div>
	      	</div>
	        <div class="row d-md-flex justify-content-center">
	        	<div class="col-md-7 ftco-animate">
	            <div class="carousel-testimony owl-carousel">
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url()">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5"></p>
	                    <p class="name"></p>
	                    <span class="position"></span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url()">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5"></p>
	                    <p class="name"></p>
	                    <span class="position"></span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url()">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5"></p>
	                    <p class="name"></p>
	                    <span class="position"></span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url()">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5"></p>
	                    <p class="name"></p>
	                    <span class="position"></span>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section class="ftco-section-2">
	      <div class="container-fluid">
	        <div class="section-2-blocks-wrapper d-flex row no-gutters">
	          <div class="img col-md-6 ftco-animate" style="background-image: url('');">
	          </div>
	          <div class="text col-md-6 ftco-animate">
	            <div class="text-inner align-self-start">
	              
	              <h3 class="heading"></h3>
	              <div class="services d-flex ftco-animate">
	              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quality"></span></div>
	              	<div class="info ml-4">
	              		<h3></h3>
	              		<p></p>
	              	</div>
	              </div>
	              <div class="services d-flex ftco-animate">
	              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-megaphone"></span></div>
	              	<div class="info ml-4">
	              		<h3></h3>
	              		<p></p>
	              	</div>
	              </div>
	              <div class="services d-flex ftco-animate">
	              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-shopping-bag"></span></div>
	              	<div class="info ml-4">
	              		<h3></h3>
	              		<p></p>
	              	</div>
	              </div>
	              <div class="services d-flex ftco-animate">
	              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-photo-camera"></span></div>
	              	<div class="info ml-4">
	              		<h3></h3>
	              		<p></p>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section> -->







</div>

</div>



<!--  <section class="ftco-quote ftco-animate">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-md-9 req-quote py-5 align-items-center img" style="background-image: url(/assets/images/bannermodel.jpg);">
		    			<h3 class="ml-md-3">Wanna be a Model?</h3>
		    			<span class="ml-md-3"><a href="http://esikaworld.com/contact/">Call us now to know how!</a></span>

	    			</div>
	    		</div>
	    	</div>
	    </section> -->



@endsection