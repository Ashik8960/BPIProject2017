@extends('layouts.masterlayout')
@section('content')

    <div class="row">


            <div class="col-md-6">
                @if(session()->has('success'))

                    <div class="alert alert-success" role="alert">
                        <a href="{{url('/dashboard')}}" class="btn btn-info btn-infos">back home</a>
                        {{session()->get('success')}}

                    </div>
                @endif
                <div class="overlay">

                    <h3>{{$s->file_no}}</h3>

                    <img class="img-thumbnail" style="height: 180px" src="{{url($s->photo)}}" alt="">
                    <ul>
                        <li><strong>Name: </strong>{{$s->first_name}} {{$s->last_name}}</li>
                        <li><strong>Email: </strong>{{$s->email}}</li>
                        <li><strong>Mobile: </strong>{{$s->mobile_no}}</li>
                        <li><strong>Department: </strong>{{$s->department}}</li>
                        <li><strong>Designation: </strong>{{$s->status}} {{$s->designation}}</li>
                    </ul>
                    <div class="changling-step">
                        <div class="btn-group">
                            <a href="{{url('/staffDetiles/'.$s->id)}}" class="btn btn-default">Detiles</a>
                            <a href="{{url('/staffDataEdit/'.$s->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{url('/staffDataDelete/'.$s->id)}}" onclick="return checkDelete();"  class="btn btn-danger">Delete</a>
                            <a href="{{url('/moveOnEx/'.$s->id)}}" class="btn btn-warning">Transfer</a>
                            <a href="{{url('/moveOnExAndReturn/'.$s->id)}}" class="btn btn-primary">Return</a>
                            <a href="{{url('/moveOnCurrent/'.$s->id)}}" class="btn btn-success">Move again</a>
                            <a href="{{url('/mailSend/'.$s->id)}}" class="btn btn-default">Mail send</a>

                        </div>
                    </div>



                </div>

            </div>


    </div>





    <script>
        function checkDelete() {
            var check = confirm('Are you sure delete this?');
            if(check){
                return true;
            } else {
                return false;
            }
        }
    </script>



@endsection