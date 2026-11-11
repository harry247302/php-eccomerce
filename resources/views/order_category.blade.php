@extends('layouts.master')

@section('headers')
    <!-- Title -->
    <title>Order Product | Tapnhave.com</title>
    <meta name="description" content="Order Product | Tapnhave.com">
    <meta name="keywords" content="Order Product | Tapnhave.com">
@endsection

@section('content')
 
		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Order {{ $cat_details->name }}</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li>Product</li>

						<li class="active">Order</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="section-title">
									<h2>Enter Your Details To Checkout </h2>
								</div>
								
								<form id="contactForm">
								    @csrf
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										
										
											<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="address"  required  class="form-control" placeholder="Your full address">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										
			                            <div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="product_name" id="name" class="form-control" required data-error="Please enter your name" Value="{{$cat_details->name}}" readonly>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										
										
			
									
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn page-btn">
												Submit
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="quick-contact">
							<h3>Quick Contact </h3>

							<ul>
								<li>
									<i class="bx bx-location-plus"></i>
									Location:
									<span>{{ $company->office_address }}</span>
								</li>

								<li>
									<i class="bx bx-phone-call"></i>
									Call Us:
									<a href="tel:+91 {{ $company->mobile }}">+91 {{ $company->mobile }}</a>
								</li>

								<li>
									<i class="bx bx-envelope"></i>
									Email Us:
									<a href="mailto:hello@contlib.com"> 
									{{ $company->enquiry_email }} 
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		
	
		

@endsection