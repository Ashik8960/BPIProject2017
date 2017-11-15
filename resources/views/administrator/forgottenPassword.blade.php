@extends('layouts.loginlayout')
@section('content')

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="login-area">

                <h3>Enter your email</h3>
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

                <form method="post" action="{{url('/passwordResetLink')}}">
                    {{csrf_field()}}

                    <div class="form-group input-group input-group-lg">

                        <span class="input-group-addon" id="sizing-email"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="example@example.com" aria-describedby="sizing-email">

                    </div>
                    <span class="text-danger">{{$errors->first('email')}}</span>
    <p><button type="submit" class="btn btn-info">Reset password</button> <span><a href="{{url('/admin')}}">Log in?</a></span></p>
                </form>
            </div>
        </div>
    </div>
@endsection