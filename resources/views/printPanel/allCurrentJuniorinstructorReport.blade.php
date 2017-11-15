@extends('layouts.printlayout')
@section('content')
    <div class="container" id="offprint" >
        <div class="row">
            <div class="col-md-2">
                <div class="btn-group">
                    <a href="#" id="id1" onclick=" print();"  class="btn btn-default">print me</a>
                    <a class="btn btn-default" href="{{url('/currentJuniorinstructor')}}">Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="print">
  <div class="row" >
        <div class="col-md-12">

        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>File</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Birth</th>
                        <th>First join</th>
                        <th>Present join</th>
                        <th>return</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($allStraff as $staffDetiles)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td >{{$staffDetiles->first_name.$staffDetiles->last_name}}</td>
                        <td> {{$staffDetiles->email}}</td>
                        <td>{{$staffDetiles->mobile_no}}</td>
                        <td>{{$staffDetiles->file_no}}</td>
                        <td>{{$staffDetiles->department}}</td>
                        <td>{{$staffDetiles->designation}}</td>
                        <td>{{$staffDetiles->status}}</td>
                        <td>{{$staffDetiles->dateOfBirth}}</td>
                        <td>{{$staffDetiles->firstJointOfDate}}</td>
                        <td>{{$staffDetiles->presentJointOfDate}}</td>
                        <td>{{$staffDetiles->dateOfReturn}}</td>
                        <td>{{$staffDetiles->remarks}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>

</div>


@endsection