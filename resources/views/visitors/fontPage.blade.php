@extends('layouts.fontPagelayout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="font-page-s">
                    <div class="font-page-h">
                        <div class="row">
                            <div class="col-sm-3 text-center">
                                <img src="{{asset('img/bpi-logo.png')}}" alt="">
                            </div>
                        <div class="col-sm-9">
                            <div class="font-single-h1">
                                <h3>Bogra Polytechnic Institute,Bogra</h3>

                            </div>
                            <div class="font-single-h2">
                                <h3>Teacher and Staff's Institutional Information</h3>
                            </div>
                            <div class="font-single-h3">
                                <a href="http://www.bograpoly.gov.bd">Official Website of Bogra Polytechnics Institute <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>

                        </div>
                    </div>

                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="font-page-b">
                                @if(session()->has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{session()->get('error')}}
                                    </div>
                                @endif
                            <form method="get" action="{{url('/fontPageDataSearch')}}">
                                <div class="form-group-custom">
                                    <label for="file_no">Find your data here:</label>
                                    <input type="text" class="" id="file_no" name="search" required  placeholder="Please enter your file/P.I.M.S no">
                                    <span class="text-danger">{{$errors->first('search')}}</span>
                                </div>


                                <button  type="submit" class="btn-bog">Search</button>
                            </form>
                        </div>

                    </div>

                    <div class="font-page-f">
                        <div class="row">
                        <div class="col-sm-12 font-page-f">
                        <p>&copy; 2017-{{date('Y')}} Bogra Polytechnic Institute, All rights reserved. <span> | Developed  by Ashik khan</span></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection