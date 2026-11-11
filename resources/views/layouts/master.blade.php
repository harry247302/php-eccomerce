<?php $logo = App\Model\Logo::where('status','enable')->first();  ?>
<?php $icon = App\Model\Icon::where('status','enable')->first();  ?>
<?php $company = App\Model\Company::where('status','enable')->first();  ?>
<?php $total_visitor = App\Model\Visitor::count();  ?>
<?php $date = date('Y-m-d');  
      $today_visitor = App\Model\Visitor::where('created_at', 'like', '%' . $date . '%')->count();  ?>


<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    @yield('headers')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll">
    <!-- <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/fontawesome-pro-5/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/mapbox-gl/mapbox-gl.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/themes.css')}}">

    <link rel="icon" href="{{asset('public/assets/images/favicon.html')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .dropdown-menu>li>a {
                font-size:18px;
            }
        </style>
</head>

<body>
    <header class="main-header navbar-dark header-sticky header-sticky-smart position-absolute fixed-top">
        <div class="sticky-area">
           
            <div class="container container-xxl">
                 
                <div class="d-none d-xl-block">
                    
                    <nav class="navbar navbar-expand-xl px-0  py-xl-0 row no-gutters">
                         <div class="col-xl-3"><a class="navbar-brand mr-0"  href="{{url('/')}}">
                                <img src="{{asset('public/images/logos/'.$logo->image)}}" alt="Furnitor" class="normal-logo" style="margin-top:-10px;">
                                <img src="{{asset('public/images/logos/'.$logo->image)}}" alt="Furnitor" class="sticky-logo">
                            </a></div>
                         <div class="mx-auto col-xl-9 d-flex justify-content-center position-static" style="margin-top:20px;" >
                            <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                                
                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url('/')}}"  style="color:black">
                                        Home
                                    </a>
                                 </li>
                                
                                
                                
                                <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(1)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                
                                  <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(4)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-pages dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0" href="{{url($page->url)}}"   style="color:black">
                                        {{ $page->name }}
                                        <!--<span class="caret"></span>-->
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                       
                                          <?php $services = App\Model\Service::where('status','enable')->get();  ?>
                                        @foreach($services as $row)
                                        <li class="dropdown-item">
                                            <a class="dropdown-link" href="{{ url('service/'.$row->url) }}">
                                                {{ $row->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                
                                
                                 <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(3)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                 <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(5)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(2)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}"  style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(6)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                 <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url('/sitemap.xml')}}"  style="color:black">
                                        Sitemap
                                    </a>
                                 </li>
                                
                                
                                
                        
                            </ul>
                        </div>
                

                       
                    </nav>
                </div>
                 <div class="d-block d-xl-none" >
                    <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 w-100 align-items-center">
                        <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button" data-canvas="true"
                            data-canvas-options='{"width":"250px","container":".sidenav"}' style="color:black">
                            <span class="fs-24 toggle-icon"></span>
                        </button>
                        <a class="navbar-brand d-inline-block mx-auto" href="index.html">
                             <img src="{{asset('public/images/logos/'.$logo->image)}}" alt="Furnitor" class="normal-logo">
                                <img src="{{asset('public/images/logos/'.$logo->image)}}" alt="Furnitor" class="sticky-logo">
                        </a>
                       
                    </nav>
                </div>
            </div>
        </div>
    </header>


    @yield('content')




    <footer class="pt-12 pb-5 footer bg-primary">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <img src="{{asset('public/images/logos/'.$logo->image)}}" alt="Star Furniture" width="150px"><br>
                    <h4 class="text-white" style="margin-top:13px;"> <span style="Color:blue; font-size:20px">Email : </span> {{ $company->email }}</h4>
                    <h4 class="text-white" style="margin-top:13px;"> <span style="Color:blue; font-size:20px">Mobile / Whatsapp : </span>  +91 {{ $company->mobile }}</h4>
                    <span style="Color:blue; font-size:20px">Total Visitors - </span><span>{{ $total_visitor }}</span><br>
                    <span style="Color:blue; font-size:20px">Today Visitors - </span><span>{{ $today_visitor }}</span>
                </div>
                <div class="col-sm-6 col-lg mb-6 mb-lg-0">
                    <h3 class="fs-14 mb-3 text-uppercase text-white letter-spacing-05">menu</h3>
                    <ul class="list-unstyled mb-0">
                        <?php $pages = App\Model\Cmspage::where('page_status','enable')->get();  ?>
                        @foreach($pages as $page)
                        <li class="py-0"><a href="{{ url($page->url) }}" class="text-gray hover-white lh-2 font-weight-500">{{ $page->name }}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-sm-6 col-lg mb-6 mb-lg-0">
                    <h3 class="fs-14 mb-3 text-uppercase text-white letter-spacing-05">Services</h3>
                    <ul class="list-unstyled mb-0">
                        <?php $services = App\Model\Service::where('status','enable')->skip(0)->take(4)->get();  ?>
                        @foreach($services as $row)
                        <li class="py-0"><a href="{{ url('service/'.$row->url) }}" class="text-gray hover-white lh-2 font-weight-500">{{ $row->name }}</a>
                        </li>
                        @endforeach



                    </ul>
                </div>
                <div class="col-sm-6 col-lg mb-6 mb-lg-0">
                    <h3 class="fs-14 mb-3 text-uppercase text-white letter-spacing-05">Location</h3>
                    <ul class="list-unstyled mb-0">
                        <iframe src="{{ $company->google_map }}" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </ul>
                </div>

            </div>
            <div class="mt-2 mt-md-7 row align-items-center">

                <p class="col-md-auto mb-4 mb-md-0 text-white-darker lh-1 fs-14 font-weight-500">Copyright @ 2020 {{ $company->name }}. Design & Developed by <a class="text-white" href="{{ $company->design_and_develope_url }}" target="_blank"> {{ $company->design_and_develope }}</a></p>


            </div>
        </div>
    </footer>

<div class="sidenav canvas-sidebar bg-white">
        <div class="canvas-overlay">
        </div>
        <div class="pt-5 pb-7 card border-0 h-100">
            <div class="d-flex align-items-center card-header border-0 py-0 pl-8 pr-7 mb-9 bg-transparent">
                <a href="{{ url('/') }}">
                    <img src="{{asset('public/images/logos/'.$logo->image)}}" alt="Furnitor">
                </a>
                <span class="canvas-close d-inline-block text-right fs-24 ml-auto lh-1 text-primary"><i
                        class="fal fa-times"></i></span>
            </div>
            <div class="overflow-y-auto pb-6 pl-8 pr-7 card-body pt-0">
                <ul class="navbar-nav main-menu px-0 ">
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                         <a class="nav-link  p-0" href="{{url('/')}}"  style="color:black">
                                        Home
                                    </a>
                    </li>
                    
                
                    
                      <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(1)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                    
                    
                       <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(4)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                    
                       
                               
                                 <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(3)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        All Services
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                 <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(5)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(2)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}"  style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                <?php $pages = App\Model\Cmspage::where('page_status','enable')->skip(6)->take(1)->get();  ?>
                                 @foreach($pages as $page)
                                   <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url($page->url)}}" style="color:black">
                                        {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach
                                
                                
                                 <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0" href="{{url('/sitemap.xml')}}"  style="color:black">
                                        Sitemap
                                    </a>
                                 </li>      
                
                </ul>
            </div>
            
        </div>
    </div>





    <div class="call-btn vert-move">
        <a href="tel:+{{ $company->call_number }}" target="_blank">
            <div class="circle-btn">
                <i class="fa fa-phone" aria-hidden="true" style="font-size:40px; margin-left:8px; margin-top:11px; color:#ffffff"></i>
            </div>
        </a>
    </div>
    <div class="call-btn-2 vert-move">
        <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_number }}&amp;text=Hi! " target="_blank">
            <div class="circle-btn">
                <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:40px; margin-left:8px; margin-top:9px; color:#ffffff"></i>
            </div>
        </a>
    </div>
    <style>
        .vert-move {
            -webkit-animation: MoveUpDown 0.5s linear infinite;
            animation: MoveUpDown 0.5s linear infinite;
        }

        .call-btn {
            bottom: 40px;
            left: 15px;
        }

        .call-btn,
        .call-btn-2 {
            cursor: pointer;
            position: fixed;
            width: 55px;
            height: 55px;
            background: #32CD32;
            border-radius: 50%;
            z-index: 999992;
        }

        .call-btn-2 {
            bottom: 40px;
            right: 15px;
        }
    </style>


    <style>
        .dropdown ul li ul li ul {
            display: none;
        }

        .dropdown ul li ul li:hover>ul {
            display: block;
            margin-left: 20px;
            margin-right: 20px;
            position: absolute;
            margin-left: 220px;
            margin-top: -43px;
            width: 200px;

        }
    </style>






    <script src="{{asset('public/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('public/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/counter/countUp.js')}}"></script>
    <script src="{{asset('public/assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/hc-sticky/hc-sticky.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/jparallax/TweenMax.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/mapbox-gl/mapbox-gl.js')}}"></script>

    <script src="{{asset('public/assets/js/theme.js')}}"></script>


</body>


</html>