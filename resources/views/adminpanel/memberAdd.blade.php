@extends('layouts.masterlayout')
@section('content')


        <div class="row">

            <div class="col-md-8 col-md-offset-1">
                <h3 class="text-center">Add member Informations</h3>
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
                <form method="post" action="{{url('/addInfo')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="first_name">First Name</label>

                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="Enter First Name..">
                            <span class="text-danger">{{$errors->first('first_name')}}</span>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="last_name">Last Name (*optional)</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter Last Name..">
                            <span class="text-danger">{{$errors->first('last_name')}}</span>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="home_district">Home District (*optional)</label>
                            <input type="text" class="form-control" id="home_district" name="home_district" value="{{old('home_district')}}" placeholder="Enter Home District..">
                            <span class="text-danger">{{$errors->first('home_district')}}</span>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="education_qualification">Education Qualification (*optional)</label>
                            <input type="text" class="form-control" id="home_district" name="education_qualification" value="{{old('education_qualification')}}" placeholder="Enter Education Qualification..">
                            <span class="text-danger">{{$errors->first('education_qualification')}}</span>
                        </div>

                    <div class="form-group col-sm-6">
                        <label for="email">Email Address (*unique & Optional)</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email Address..">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="mobile_no">Mobile No (*unique & Optional)</label>
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Mobile No...">
                        <span class="text-danger">{{$errors->first('mobile_no')}}</span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="file_no">File No (*unique & Optional)</label>
                        <input type="text" class="form-control" id="file_no" name="file_no" value="{{old('file_no')}}" placeholder="file No...">
                        <span class="text-danger">{{$errors->first('file_no')}}</span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department" value="{{old('department')}}" placeholder="Department">
                        <span class="text-danger">{{$errors->first('department')}}</span>
                    </div>


                    <div class="form-group col-sm-6">
                        <label for="designation">Designation</label>
                        <select id="designation" name="designation" class="form-control">


                            <option value="principle">Principle</option>
                            <option value="viceprinciple">Vice principle</option>
                            <option value="chiefinstructor">Chief Instructor</option>
                            <option value="craftinstructor">Craft Instructor</option>
                            <option value="instructor">Instructor </option>
                            <option value="juniorinstructor">junior Instructor </option>
                            <option value="officestaff">office staff </option>



                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="std">Status</label>
                        <select id="std" name="status" class="form-control">
                            <option value="current">Current</option>
                            <option value="ex">Ex</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="dateOfBirth">Date of birth day (*optional)</label>
                        <input type="date" name="dateOfBirth" value="{{old('dateOfBirth')}}" class="form-control" id="dateOfBirth" >
                        <span class="text-danger">{{$errors->first('dateOfBirth')}}</span>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="firstJointOfDate">First join of date (*optional)</label>
                        <input type="date" name="firstJointOfDate" value="{{old('firstJointOfDate')}}" class="form-control" id="firstJointOfDate" >
                        <span class="text-danger">{{$errors->first('firstJointOfDate')}}</span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="presentJointOfDate">Present join of date (*optional)</label>
                        <input type="date" name="presentJointOfDate" value="{{old('presentJointOfDate')}}" class="form-control" id="presentJointOfDate" >
                        <span class="text-danger">{{$errors->first('presentJointOfDate')}}</span>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="dateOfReturn">Date Of return (*optional)</label>
                        <input type="date" name="dateOfReturn" value="{{old('dateOfReturn')}}" class="form-control" id="dateOfReturn" >
                        <span class="text-danger">{{$errors->first('dateOfReturn')}}</span>
                    </div>
                    </div>
                    <div class="form-group ">
                        <label for="remarks">Remarks (*optional)</label>
                        <textarea id="remarks" rows="4"  class="form-control"  name="remarks">{{old('remarks')}}</textarea>
                        <span class="text-danger">{{$errors->first('remarks')}}</span>
                    </div>

                    <div class="form-group">
                        <label for="image">Photo (Maximum size 2MB)</label>
                        <input type="file" id="image" name="image"><br>
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg">Add Info</button>
                </form>
            </div>



        </div>







@endsection