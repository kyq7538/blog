@extends('layouts.app')

@section('content')
<div class="widewrapper main">
    <div class="container">
        <div class="row" style="margin:100px;">
            <div class="col-md-10 col-md-offset-1 clean-superblock" id="contact">
                <h2>Login</h2>
                <!-- {{ var_dump($errors) }} -->
                <form action="{{ route('login') }}" method="POST" accept-charset="utf-8" class="contact-form form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label" style="margin-top:16px;font-size:18px;">Cell phone number</label>

                        <div class="col-md-6">
                            <input id="phone" type="phone" class="form-control input-lg" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autofocus>
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" style="margin-top:16px;font-size:18px;" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6" style="border:0px solid red;margin-bottom:-50px">
                            <input id="password" type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <a class="btn btn-link" style="border:0px solid red;position:relative;bottom:53px;left:280px;" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label style="position:relative;top:8px;margin-bottom:20px;">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            
                            <button type="submit" class="btn btn-primary" >
                                Login
                            </button>
                            
                        </div>
                    </div>
                    <!-- <input type="text" name="name" id="contact-name" placeholder="Name" class="form-control input-lg"> -->
                    <!-- <input type="email" name="email" id="contact-email" placeholder="Email" class="form-control input-lg"> -->
                    <div class="col-md-6 col-md-offset-4 buttons clearfix">
                        <!-- <button type="submit" class="btn btn-xlarge btn-clean-one">Login</button> -->
                    </div>                    
                </form>
                <!-- <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">Cell phone number</label>

                        <div class="col-md-6">
                            <input id="phone" type="phone" class="form-control" placeholder="请输入手机号" name="phone" value="{{ old('phone') }}" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" placeholder="请输入密码" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form> -->
            </div>
        </div>        
    </div>
</div>
@endsection
@section('js')
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
@endsection
