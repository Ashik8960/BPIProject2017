@extends('layouts.fontPagelayout')
@section('content')

    <div class="container" id="print">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="font-page-s">
                    <div class="font-page-h">
                        <div class="row">

                            <div class="col-sm-12 ">
                                <div class="logo">
                                    <img src="{{asset('img/bpi-logo.png')}}" alt="">
                                </div>
                                <div class="full-header">
                                    <div class="font-single-h1">
                                        <h3> Bogra Polytechnics Institute,Bogra</h3>

                                    </div>
                                    <div class="font-single-h2">
                                        <h3>All Teacher and Staffs Institutional Information</h3>
                                    </div>
                                    <div class="font-single-h3 offprint">
                                        <a href="http://www.bograpoly.gov.bd">Official Website of Bogra Polytechnics Institute</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 padding-hide">

                         {{--start--}}

                         <div class="staff-detiles staff-print">


                                <div class="result-list">


                                    <ul>
                                        <h4>Bio: {{$searchData->first_name}} {{$searchData->last_name}}</h4> <img class="" src="{{url($searchData->photo)}}" alt="">
                                        <li>Name:<span>{{$searchData->first_name}} {{$searchData->last_name}}</span></li>
                                        <li>Email:<span>{{$searchData->email}}</span></li>
                                        <li>Mobile:<span>{{$searchData->mobile_no}}</span></li>
                                        <li>Home district:<span>{{$searchData->home_district}}</span></li>
                                        <li>Education qualification:<span>{{$searchData->education_qualification}}</span></li>
                                        <li>File no:<span>{{$searchData->file_no}}</span></li>
                                        <li>Department:<span>{{$searchData->department}}</span></li>
                                        <li>Designation:<span>{{$searchData->status .' '. $searchData->designation}}</span></li>
                                        <li>Date of birth:<span>{{$searchData->dateOfBirth}}</span></li>
                                        <li>First join of date:<span>{{$searchData->firstJointOfDate}}</span></li>
                                        <li>Present join of date:<span>{{$searchData->presentJointOfDate}}</span></li>
                                        <li>Date Of return:<span>{{$searchData->dateOfReturn}}</span></li>
                                        <li>Remarks:<span>{{$searchData->remarks}}</span></li>
                                    </ul>

                                </div>
                              </div>

                         {{--end--}}


                    </div>
                            <div class="btn btn-group offprint">
                                <a href="" class="" id="id1" onclick="print();">print me</a> |
                                <a href="{{url('/')}}" class="">Back search</a>
                            </div>
                    <div class="font-page-f offprint">
                        <div class="row">
                            <div class="col-sm-12 font-page-f">
                                <p>&copy;2017-{{date('Y')}} Bogra Polytechnics Institute, All rights reserved. <span>| Develop by Ashik</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection











