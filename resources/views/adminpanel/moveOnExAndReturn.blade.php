@extends('layouts.masterlayout')
@section('content')


    <div class="row">

        <div class="col-md-8 col-md-offset-1">
            <h3><span class="text-danger">{{$moveOnExAndReturn->designation}} {{$moveOnExAndReturn->first_name}} {{$moveOnExAndReturn->last_name}}</span> is going to Returnments</h3>
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
                         <option value="ex">Ex</option>
                    </select>
                </div>
                   <div class="form-group">
                    <label for="dateOfReturn">Date Of return</label>
                    <input type="date" name="dateOfReturn" value="{{$moveOnExAndReturn->dateOfReturn}}" class="form-control" id="dateOfReturn" >
                    <span class="text-danger">{{$errors->first('dateOfReturn')}}</span>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Add Info</button>
            </form>
        </div>



    </div>







@endsection