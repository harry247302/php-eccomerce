<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('public/admin/img/fav.png')}}" />

    <!-- Title -->
    <title>Admin Panel - Login</title>

    <!-- *************
			************ Common Css Files *************
			************ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="{{asset('public/admin/css/main.css')}}" />

</head>

<body class="authentication">

    <!-- Container start -->
    <div class="container">
        <!--
        <form action="http://bootstrap.gallery/retail-admin-templates/designs/design2/index.html">-->
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <span class="text-danger">L</span><span class="text-warning">O</span><span class="text-success">G</span><span class="text-info">I</span><span class="text-royal-orange">N</span><span class="text-jungle-green">***</span>
                        </a>
                        <h5>Welcome back,<br />Please Login to your Account.</h5>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" class="form-control p_input @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}" required />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:#ff0000;">{{ $message }}</strong>
                                </span><br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control p_input @error('password') is-invalid @enderror" placeholder="Password" name="password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:#ff0000;">{{ $message }}</strong>
                                </span><br>
                                @enderror
                            </div>
                            <div class="actions">
                                <a href="#">Recover password</a>
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </form>
                        <div class="m-0">
                             <!--<span class="additional-link">No account?<a href="signup.html">Signup Now</a></span>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--</form>
-->
    </div>
    <!-- Container end -->

</body>

<!-- Mirrored from bootstrap.gallery/retail-admin-templates/designs/design2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 20:46:19 GMT -->

</html>
