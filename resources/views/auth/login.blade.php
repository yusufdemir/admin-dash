@extends('layouts.master-guest')

@section('title')

    <title>Login</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

        <!-- Content Header (Page header) -->

        <section class="content-header">



            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/login">Login</a></li>
                <li class="active">Login</li>

            </ol>

        </section>

        <section class="content">

        <div class="login-box">
            <div class="login-logo">
                <a href="/"><b>Admin</b>DASH</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form  method="POST" action="{{ url('/login') }}">

                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="form-group has-feedback">

                            <input id="email"
                                   type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="enter your email..."
                                   required autofocus>

                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="form-group has-feedback">
                            <input id="password"
                                   type="password"
                                   class="form-control"
                                   name="password"
                                   placeholder="Password"
                                   required>

                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                @include('auth.social-sign-in-links')

                <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                <a href="/register" class="text-center">Register a new membership</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        </section>

    </div>

    </div>


@endsection