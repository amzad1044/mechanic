@extends('front.master')

@section('body')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Authentication</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
</div>
<!-- Uren's Breadcrumb Area End Here -->

<!-- Begin Uren's Login Register Area -->
<div class="uren-login-register_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xs-12">
                
            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }} text-center">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div>
                <!-- Login Form s-->
                <form action="{{route('login_cust')}}" method="post">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Email Address*</label>
                                <input type="email" name="email" placeholder="Email Address">
                                 <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password">
                                 <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ' '}}</span>
                            </div>
                            <div class="col-md-8">
                                <div class="forgotton-password_info">
                                    <a href="{{route('customer_register')}}"> Create a new one</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="forgotton-password_info">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="uren-login_btn">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 col-xs-12">

            </div>
        </div>
    </div>
</div>
<!-- Uren's Login Register Area  End Here -->
@endsection