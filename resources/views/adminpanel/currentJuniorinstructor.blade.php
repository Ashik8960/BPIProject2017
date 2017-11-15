
@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <h3 class="text-center text-info">Current Junior Instructor Data <a class="btn btn-default" href="{{url('/allCurrentJuniorinstructorReport')}}">Print all Info</a></h3>
        <hr>
        @foreach(array_chunk($currentJuniorinstructor->all(),3) as $row)
            <div class="row">

                @foreach($row as $s)
                    <div class="col-md-4">
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
                                    <a href="#" onclick="return checkDelete('{{url('/staffDataDelete/'.$s->id)}};')"  class="btn btn-danger">Delete</a>
                                    <a href="{{url('/moveOnEx/'.$s->id)}}" class="btn btn-warning">Transfer</a>
                                    <a href="{{url('/moveOnExAndReturn/'.$s->id)}}" class="btn btn-primary">Return</a>
                                    <a href="{{url('/moveOnCurrent/'.$s->id)}}" class="btn btn-success">Move again</a>
                                    <a href="{{url('/mailSend/'.$s->id)}}" class="btn btn-default">Send mail</a>

                                </div>
                            </div>



                        </div>

                    </div>
                @endforeach
            </div>
        @endforeach

    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            {{$currentJuniorinstructor->links()}}
        </div>
    </div>


@endsection


