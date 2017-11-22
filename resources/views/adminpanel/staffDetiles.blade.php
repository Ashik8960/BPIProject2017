@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-md-1 col-md-offset-2">
            <a href="" class="btn btn-default" onclick="print();">print me</a>
        </div>
    </div>
<div class="row" id="print">
    <div class="col-md-8 col-md-offset-2 detiles-padding">
        <div class="panel panel-default">
            <div class="panel-heading"><h4 class="">Bio:</h4></div>
            <div class="panel-body">
                <div class="result-list del-padd">
                    <img class="" src="{{url('upload/'.$staffDetiles->photo)}}" alt="">

                    <ul>
                        <li>Name:<span>{{$staffDetiles->first_name}} {{$staffDetiles->last_name}}</span></li>
                        <li>Sex:<span>{{$staffDetiles->sex}}</span></li>
                        <li>Email:<span>{{$staffDetiles->email}}</span></li>
                        <li>Mobile:<span>{{$staffDetiles->mobile_no}}</span></li>
                        <li>National id no:<span>{{$staffDetiles->voter_id}}</span></li>
                        <li>Home district:<span>{{$staffDetiles->home_district}}</span></li>
                        <li>Education qualification:<span>{{$staffDetiles->education_qualification}}</span></li>
                        <li>File no:<span>{{$staffDetiles->file_no}}</span></li>
                        <li>P.M.I.S no:<span>{{$staffDetiles->tms_no}}</span></li>
                        <li>Department:<span>{{$staffDetiles->department}}</span></li>
                        <li>Designation:<span>{{$staffDetiles->designation}} {{$staffDetiles->helper_post}}</span></li>
                        <li>Status:<span>{{$staffDetiles->status}}</span></li>
                        <li>Date of birth:<span>{{$staffDetiles->dateOfBirth}}</span></li>
                        <li>First join of date:<span>{{$staffDetiles->firstJointOfDate}}</span></li>
                        <li>Present join of date:<span>{{$staffDetiles->presentJointOfDate}}</span></li>
                        <li>Date Of Transfer:<span>{{$staffDetiles->date_of_transfer}}</span></li>
                        <li>Date Of retirement:<span>{{$staffDetiles->dateOfReturn}}</span></li>
                        <li>Remarks:<span>{{$staffDetiles->remarks}}</span></li>
                    </ul>

                </div>
            </div>
            <div class="panel-footer">{{date('h:i A')}}</div>
        </div>





        </div>
    </div>

@endsection