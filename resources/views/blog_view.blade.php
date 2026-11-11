@extends('layouts.master')
@section('headers')
<!-- Title -->
<title>{{ $blog['meta_title'] }}</title>
<meta name="description" content="{{ $blog['meta_description'] }}">
<meta name="keywords" content="{{ $blog['meta_keywords'] }}">
@endsection

@section('content')
 
  <main id="content"  style="margin-top:150px; ">
         <section class="py-3 bg-color-3">
        <div class="container">
            <nav aria-label="breadcrumb"> 
                <ol class="breadcrumb py-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ $blog->name }}</li>
                </ol> 
            </nav>
        </div>
    </section>
            <div class="d-flex flex-column h-100 align-items-center justify-content-center justify-content-xxl-start pt-xxl-13">
                <div class="container">
                  
                 
                </div>
            </div>
     
        <section class="pt-11 pt-lg-14">
            <div class="container">
                <div class="row align-items-center no-gutters flex-md-row-reverse">
                    <div class="col-md-12 pl-md-12 pl-lg-12 mb-12 mb-md-0">
                           <h4 class=" text-center text-black">{{ $blog->name }}</h4>
                       <!-- <h2 class="fs-30 fs-md-60 mb-2">
                            About Delhi Furniture
                        </h2>-->
                        <p class="mb-6"> 
                             <img src="{{asset('public/images/blogs/'.$blog->image)}}" alt="" style="float:left; padding:24px; width:450px">
                             {!! $blog->long_description !!}
                            
                            <a href="{{url('/Contact-Us')}}" class="btn btn-info text-uppercase letter-spacing-05 fadeInUp animated" data-animate="fadeInUp" style="color:black" tabindex="0">Get Quotes Now</a>
                        </p>
                      
                        
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div>
            </div>
        </section>
      
       <?php  $comments = App\Model\Comment::where('comment_on_id',$blog->id)->where('comment_on','blog')->get(); ?>
  <section class="pb-11 pb-lg-15">
            <div class="container">
                <h2 class="mb-9 fs-40 text-center">
                    {{$comments->count()}} Comments
                </h2>
                <div class="row no-gutters">
                    <div class="col-lg-9 mx-auto">
                        <?php  $comments = App\Model\Comment::where('comment_on_id',$blog->id)->where('comment_on','blog')->get(); ?>
                        @foreach($comments as $comment)
                        <div class="media border-bottom pb-6 mb-6 ">
                            <div class="w-70px d-block mr-6">
                                <img src="{{asset('public/images/tes_01.png')}}" alt="Office dismantling">
                            </div>
                            <div class="media-body">
                                <p class="d-flex mb-1 align-items-center">
                                    <span class="font-weight-600 text-primary d-block mr-2">{{ $comment->user_name }}</span>
                                    <span class="fs-12 text-primary">{{ $comment->created_at}}</span>
                                </p>
                                <p class="text-gray-01 lh-175 mb-2">{{$comment->comment}}</p>
                            </div>
                        </div>
                        @endforeach
                  
                    </div>
                </div>
            </div>
        </section>
        
       <section class="pb-11 pb-lg-15">
            <div class="container">
                <h2 class="mb-1 fs-34 text-center">
                    Leave a Comment
                </h2>
                <p class="mb-9 text-center">Your email address will not be published.</p>
                <div class="row no-gutters">
                    <div class="col-lg-9 mx-auto">
                        <form action="{{ url('/submit-blog-comment') }}" method="post">
                            @csrf
                            <div class="form-group mb-6">
                                <textarea class="form-control" rows="6" name="comment">Comment</textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-12">
                                    <input type="text" class="form-control" name="user_name" placeholder="Your Name*" required>
                                </div>
                                <input type="hidden" class="form-control" name="blog_id" value="{{ $blog->id }}" required>
                               <!-- <div class="col-sm-6 mb-6">
                                    <input type="email" class="form-control" name="user_email" placeholder="Your Email*" required>
                                    
                                </div>-->
                              
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">submit now</button>
                            </div>
                        </form>
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
