@extends('front.master')

@section('body')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Authentication</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Customer</li>
            </ul>
        </div>
    </div>
</div>
<!-- Uren's Breadcrumb Area End Here -->


<!-- Begin Uren's Login Register Area -->
<div class="uren-login-register_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xs-12">

            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-8 col-xs-12">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }} text-center">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div>
                <form action="{{'new_customer'}}" method="POST">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb--20">
                                <label>First Name</label>
                                <input type="text" name="fname" placeholder="First Name">
                                <span class="text-danger">
                                    {{$errors->has('fname') ? $errors->first('fname') : ' '}}
                                </span>
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Last Name">
                                <span class="text-danger">
                                    {{$errors->has('lname') ? $errors->first('lname') : ' '}}
                                </span>
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <label>phone</label>
                                <input type="text" name="phone" placeholder="Last Name">
                                <span class="text-danger">
                                    {{$errors->has('phone') ? $errors->first('phone') : ' '}}
                                </span>
                            </div>
                            <div class="col-md-12">
                                <label>Email Address*</label>
                                <input type="email" name="email" placeholder="Email Address">
                                <span class="text-danger">
                                    {{$errors->has('email') ? $errors->first('email') : ' '}}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror">
                                <span class="text-danger">
                                    {{$errors->has('password') ? $errors->first('password') : ' '}}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                            <div class="col-12">
                                <button class="uren-register_btn">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xs-12">

            </div>
        </div>
    </div>
</div>
<!-- Uren's Login Register Area  End Here -->


@endsection