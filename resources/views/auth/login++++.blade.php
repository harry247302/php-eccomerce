@extends('layouts.master')

@section('content')
<!-- BEGIN content -->
<div id="content">
    <!-- begin post -->
    <div class="single">
        <h2>ADMIN LOGIN PAGE</h2>
        <p>Admin have access to view, edit and delete website data. </p>
    </div>
    <!-- end post -->
    <!-- begin comments -->
    <div id="comments">
        <div id="respond">
            <form method="post" action="{{ route('login') }}" id="commentform">
                @csrf
                <p>
                    @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong  style="color:#ff0000;">{{ $message }}</strong>
                                </span><br>
                                @enderror
                    <label for="email"><small>E-Mail &nbsp; &nbsp; : </small></label>
                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" />
                    
                </p>
                <p>
                      @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:#ff0000;">{{ $message }}</strong>
                                </span><br>
                                @enderror
                    <label for="email"><small>Password :</small></label>
                    <input type="password" name="password" id="email" value="" size="22" tabindex="2" />
                    
                </p>
                <p>  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a></p>
                
                <p>
                    <button name="submit" type="submit" id="submit">Login to Account</button>
                </p>
            </form>
        </div>
    </div>
    <!-- end comments -->
</div>
<!-- END content -->
@include('inc/sidebar')

@endsection