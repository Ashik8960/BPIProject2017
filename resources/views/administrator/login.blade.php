@extends('layouts.loginlayout')
@section('content')

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="login-area">


                <h1>Log In</h1>


                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session()->get('success')}}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session()->get('error')}}
                    </div>
                @endif

                <form method="post" action="{{url('/handleLogin')}}">
                    {{csrf_field()}}

                    <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-email"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="example@example.com" aria-describedby="sizing-email">

                    </div>
                    <span class="text-danger">{{$errors->first('email')}}</span>

                    <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-password"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="password" aria-describedby="sizing-password">

                    </div>
                    <span class="text-danger">{{$errors->first('password')}}</span>

                    <div class="form-group">
                    <label for="remember">

                        <input id="remember" type="checkbox" name="remember_me">
                        Remember me
                    </label><br>
                        <span class="text-danger">{{$errors->first('remember_me')}}</span>
                    </div>

                    <p><button type="submit" class="btn btn-default btn-lg">Log In</button> <span><a href="{{url('/forgottenPassword')}}">forgotten password?</a></span></p>
                </form>
            </div>
        </div>
    </div>
 @endsection   