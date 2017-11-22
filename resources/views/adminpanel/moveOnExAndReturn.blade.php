@extends('layouts.masterlayout')
@section('content')


    <div class="row">

        <div class="col-md-8 col-md-offset-1">
            <h3><span class="text-danger">{{$moveOnExAndReturn->designation}} {{$moveOnExAndReturn->first_name}} {{$moveOnExAndReturn->last_name}}</span> is going to retirement</h3>
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
            <form method="post" action="{{url('/moveOnExAndReturn/'.$moveOnExAndReturn->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                 <div class="form-group">
                    <label for="std">Status</label>
                    <select id="std" name="status" class="form-control">
                         <option value="Ex">Ex</option>
                    </select>
                </div>
                   <div class="form-group">
                    <label for="dateOfReturn">Date Of retirement</label>
                    <input type="date" name="dateOfReturn" value="{{$moveOnExAndReturn->dateOfReturn}}" class="form-control" id="dateOfReturn" >
                    <span class="text-danger">{{$errors->first('dateOfReturn')}}</span>
                </div>
                <div class="btn btn-group border">
                    <button type="submit" class="btn btn-success btn-lg">Update Info</button>
                    <a href="{{url('/dashboard')}}" class="btn btn-success btn-lg">Cancel</a>
                </div>

            </form>
        </div>



    </div>







@endsection