@extends('layouts.masterlayout')
@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-1">


            <h3>Admin data Update</h3>
            <hr>

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

            <form method="post" action="{{url('/adminUpdate/'.$admin->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="first_name">First Name</label>

                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$admin->first_name}}" placeholder="Enter First Name..">
                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$admin->last_name}}" placeholder="Enter Last Name..">
                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$admin->email}}" placeholder="Enter Email Address..">
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"  placeholder="password...">
                    <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="form-group">
                    <label for="password">Re-type Password</label>
                    <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="retype password...">
                    <span class="text-danger">{{$errors->first('retype_password')}}</span>
                </div>
                <div class="form-group">
                    <label for="image">Photo (*Optional & Maximum size 2MB)</label>
                    <input type="file" id="image" name="image"><br>
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
                <div class="btn btn-group border">
                    <button type="submit" class="btn btn-success btn-lg" name="signup">Update</button>
                    <a href="{{url('/adminData')}}" class="btn btn-success btn-lg">Cancel</a>
                </div>
            </form>
        </div>
    </div>


@endsection