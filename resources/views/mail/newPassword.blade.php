@extends('layouts.loginlayout')
@section('content')

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="login-area">


                <h3>Password Reset</h3>


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

                <form method="post" action="{{url('/reset/'.$token)}}">
                    {{csrf_field()}}


                    <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-password"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="password" aria-describedby="sizing-password">

                    </div>

                    <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-password"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="repassword" name="password_confirmation" value="{{old('retyape_password')}}" placeholder="re type password" aria-describedby="sizing-password">

                    </div>
                    <span class="text-danger">{{$errors->first('password')}}</span>


                    <p><button type="submit" class="btn btn-info">Password Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection