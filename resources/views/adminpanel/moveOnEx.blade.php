@extends('layouts.masterlayout')
@section('content')


    <div class="row">

        <div class="col-md-8 col-md-offset-1">
            <h3 class="text-center">Now <span class="text-danger">{{$moveOnEx->first_name}} {{$moveOnEx->last_name}}</span> move on ex member?</h3>
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
            <form method="post" action="{{url('/moveOnEx/'.$moveOnEx->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="transtering_institute">Transfering Institute</label>
                    <input type="text" class="form-control" name="transfering_institute" id="transfering_institute" value="{{old('transfering_institute')}}" placeholder="Transfering institute">
                    <span class="text-danger">{{$errors->first('transfering_institute')}}</span>
                </div>
                <div class="form-group">
                    <label for="date_of_transfer">Date of Transfer</label>
                    <input type="date" class="form-control" name="date_of_transfer" id="date_of_transfer" value="{{old('date_of_transfer')}}" placeholder="Date of transfer">
                    <span class="text-danger">{{$errors->first('date_of_transfer')}}</span>
                </div>
                  <div class="form-group">
                    <label for="std">Status</label>
                    <select id="std" name="status" class="form-control">
                        <option value="Ex">Ex</option>
                    </select>
                </div>
                <div class="btn btn-group border">
                    <button type="submit" class="btn btn-success btn-lg">Update Info</button>
                    <a href="{{url('/dashboard')}}" class="btn btn-success btn-lg">Cancel</a>
                </div>

            </form>
        </div>



    </div>







@endsection