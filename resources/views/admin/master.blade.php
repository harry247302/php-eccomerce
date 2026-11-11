<?php  
  // Program to display URL of current page. 

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
      
// Print the link 

?>


<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 20:44:17 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('public/admin/img/fav.png')}}" />

    <!-- Title -->
    <title>Dashboard - Admin Panel</title>



    <!-- *************
			************ Common Css Files *************
			************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/admin/fonts/style.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('public/admin/css/main.css')}}">


    <!-- *************
			************ Vendor Css Files *************
			************ -->
    <!-- Datepickers css -->
    <link rel="stylesheet" href="{{asset('public/admin/vendor/daterange/daterange.css')}}" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- Loading starts -->
    <!--<div id="loading-wrapper">
			<div class="spinner-border text-apex-yellow" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>-->
    <!-- Loading ends -->

    <div class="container">


        <!-- *************
				************ Header section start *************
				************* -->


        <!-- Header start -->
        <header class="header">
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                    <a href="{{ URL('/') }}" class="logo">GO TO WEBSITE</a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6">
                    <!-- Header actions start -->
                    <ul class="header-actions">

                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                <span class="user-name">{{ Auth::user()->first_name }}</span>
                                <span class="avatar">A<span class="status online"></span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                                <div class="header-profile-actions">


                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="icon-log-out1"></i> Sign Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Header actions end -->
                </div>
            </div>
            <!-- Row end -->
        </header>
        <!-- Header end -->



        <!-- Navigation start -->
        <nav class="navbar navbar-expand-lg custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#retailAdminNavbar" aria-controls="retailAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="retailAdminNavbar">

                <ul class="navbar-nav m-auto">

                    <div class="row">


                        <div class="col-md-1" align="center">
                            <li class="nav-item">
                                <a class="nav-link @if($link == url('admin/dashboard')) active-page @endif" href="{{url('admin/dashboard')}}">
                                    <i class="icon-devices_other nav-icon"></i>
                                    Dashboard
                                </a>
                            </li>
                        </div>

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/admins')) active-page @endif" href="{{url('admin/admins')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-local_library nav-icon"></i>
                                    Admins
                                </a>
                            </li>
                        </div>

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('/admin/companies')) active-page @endif" href="{{url('/admin/companies')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-globe nav-icon"></i>
                                    Company
                                </a>
                            </li>
                        </div>

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('/admin/cmspages')) active-page @endif" href="{{url('/admin/cmspages')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-format_list_bulleted nav-icon"></i>
                                    Menus
                                </a>
                            </li>
                        </div>

                       <!-- <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-package nav-icon"></i>
                                    Products
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/categories')}}">Main Categories (L1)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/subcategories')}}">Sub Categories (L2)</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/products')}}">Products (L3)</a>
                                    </li>

                                </ul>
                            </li>
                        </div>-->

                        <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-retweet nav-icon"></i>
                                    Services
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/services')}}">Main Services (L1)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/subservices')}}">Sub Services (L2)</a>
                                    </li>

                                </ul>
                            </li>
                        </div>


          <!--              <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-rocket nav-icon"></i>
                                    Projects/ <br>Portfollio
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/ProjectCategories')}}">Catgeory of Projects</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('admin/all_projects')}}">Projects</a>
                                    </li>

                                </ul>
                            </li>
                        </div>






                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/packages')) active-page @endif" href="{{url('admin/packages')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-attach_money nav-icon"></i>
                                    Packages
                                </a>
                            </li>
                        </div>-->

                        <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-edit nav-icon"></i>
                                    Blogs
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/blogs')}}">Blogs</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/blog-comments')}}">Blogs Comments</a>
                                    </li>

                                </ul>
                            </li>
                        </div>

                      <!--  <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/offers')) active-page @endif" href="{{url('admin/offers')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-local_offer nav-icon"></i>
                                    Offers
                                </a>
                            </li>
                        </div> -->

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/testimonials')) active-page @endif" href="{{url('admin/testimonials')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-question_answer nav-icon"></i>
                                    Testimonials
                                </a>
                            </li>
                        </div>

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/clients')) active-page @endif" href="{{url('admin/clients')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-wc nav-icon"></i>
                                    Clients
                                </a>
                            </li>

                        </div>

                       
                    <!--    <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/teams')) active-page @endif" href="{{url('admin/teams')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-group_add nav-icon"></i>
                                    Teams
                                </a>
                            </li>

                        </div>
                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/stories')) active-page @endif" href="{{url('admin/stories')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-filter_frames nav-icon"></i>
                                    Success Stories
                                </a>
                            </li>

                        </div>-->

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-photo nav-icon"></i>
                                    Gallery
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="appsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/gcategories')}}">Image Category</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('/admin/galleries')}}">Images</a>
                                    </li>

                                </ul>
                            </li>
                        </div>

                        <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/logos')) active-page @endif" href="{{url('admin/logos')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-pets nav-icon"></i>
                                    Logos
                                </a>
                            </li>

                        </div>


                        <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/banners')) active-page @endif" href="{{url('admin/banners')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-compare nav-icon"></i>
                                    Sliders/ Banner
                                </a>
                            </li>

                        </div>


                        <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/icons')) active-page @endif" href="{{url('admin/icons')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-terrain nav-icon"></i>
                                    Icons/ Favicon
                                </a>
                            </li>

                        </div>
                        
                        
                        
                         <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('/admin/office_dismantling')) active-page @endif" href="{{url('/admin/office_dismantling')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-globe nav-icon"></i>
                                    Office Dismantling 
                                </a>
                            </li>
                        </div>
                        
                        
                      <!--  <div class="col-md-1" align="center" >

                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/seorankings')) active-page @endif" href="{{url('admin/seorankings')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-google"></i>
                                    Seo Ranking
                                </a>
                            </li>

                        </div>
                    <div class="col-md-1" align="center">

                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/hows')) active-page @endif" href="{{url('admin/hows')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-git-pull-request nav-icon"></i>
                                    How We Work
                                </a>
                            </li>

                        </div>

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/whys')) active-page @endif" href="{{url('admin/whys')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-touch_app nav-icon"></i>
                                    Why Choose Us
                                </a>
                            </li>

                        </div>
                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/videos')) active-page @endif" href="{{url('admin/videos')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-videocam nav-icon"></i>
                                   Youtube Videos
                                </a>
                            </li>
                        </div>

                      <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/countries')) active-page @endif" href="{{url('admin/countries')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-language nav-icon"></i>
                                    Countries
                                </a>
                            </li>
                        </div>
                        
                        
                         <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/measurements')) active-page @endif" href="{{url('admin/measurements')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-scissors" aria-hidden="true"></i>
                                    User Measurement
                                </a>
                            </li>
                        </div>

                        <div class="col-md-1" align="center">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if($link == url('admin/users')) active-page @endif" href="{{url('admin/users')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-users nav-icon"></i>
                                    Users
                                </a>
                            </li>
                        </div>
-->

                    </div>


                </ul>

            </div>
        </nav>
        <!-- Navigation end -->



        <!-- Search bar start -->
        <!--<div class="search-container">
				
				<div class="row justify-content-center">
					<div class="col-xl-5 col-lg-6 col-md-7 col-sm-8 col-12">
						
						<div class="search-box">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>

					</div>
				</div>
				
			</div>-->
        <!-- Search bar end -->


        <!-- *************
				************ Header section end *************
				************* -->









        @yield('content')








    </div>

    <!-- *************
				************ Required JavaScript Files *************
			************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/admin/js/nav.min.js')}}"></script>
    <script src="{{asset('public/admin/js/moment.js')}}"></script>


    <!-- *************
				************ Vendor Js Files *************
			************* -->
    <!-- Daterange -->
    <script src="{{asset('public/admin/vendor/daterange/daterange.js')}}"></script>

    <!-- Apex Charts -->
    <script src="{{asset('public/admin/vendor/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/admin/vendor/apex/custom/apexLineChartGradient.js')}}"></script>
    <script src="{{asset('public/admin/vendor/apex/custom/apexColumnBasic.js')}}"></script>
    <script src="{{asset('public/admin/vendor/apex/custom/apexAllCustomGraphs.js')}}"></script>

    <!-- Main Js Required -->
    <script src="{{asset('public/admin/js/main.js')}}"></script>


    <script type="text/javascript">
        $('.selectall').click(function() {
            $('.selectbox').prop('checked', $(this).prop('checked'));
            $('.selectall2').prop('checked', $(this).prop('checked'));
        })
        $('.selectall2').click(function() {
            $('.selectbox').prop('checked', $(this).prop('checked'));
            $('.selectall').prop('checked', $(this).prop('checked'));
        })
        $('.selectbox').change(function() {
            var total = $('.selectbox').length;
            var number = $('.selectbox:checked').length;
            if (total == number) {
                $('.selectall').prop('checked', true);
                $('.selectall2').prop('checked', true);
            } else {
                $('.selectall').prop('checked', false);
                $('.selectall2').prop('checked', false);
            }
        })
    </script>
</body>

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 20:45:31 GMT -->

</html>