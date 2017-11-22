@extends('layouts.masterlayout')
@section('content')


    <div class="row">
  <div class="col-md-6 find-area">
            <div class="find-bg">
            @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error')}}
                </div>
            @endif

            <form method="get" action="{{url('/information')}}">


                <div class="form-group">
                    <label for="file_no"><h2 class="text-danger text_c ">Find Your Information</h2></label>
                    <input type="text" required class="form-control search-text" id="file_no" name="search"  placeholder="Please enter your file/P.I.M.S no">
                    <span class="text-danger">{{$errors->first('file_no')}}</span>
                </div>


                <button  type="submit" class="btn btn-info btn-lg search-btn">Searching</button>
            </form>
        </div>

        </div>
        <div class="col-md-6 find-result">

           <div class="row">
               <div class="col-md-6">
                   <h3>Current Staff</h3>

                   <ul>
                       <li>Principal :<span>{{$cP}}</span></li>
                       <li>Vice Principal :<span>{{$cVP}}</span></li>
                       <li>Chief Instructor :<span>{{$cCI}}</span></li>
                       <li>Instructor :<span>{{$cI}}</span></li>
                       <li>Junior Instructor :<span>{{$cJI}}</span></li>
                       <li>Craft Instructor :<span>{{$cCCI}}</span></li>
                       <li>Office Staff :<span>{{$cOS}}</span></li>
                       <hr>
                       <li>Total Current Staff :<span>{{$cTL}}</span></li>

                   </ul>
               </div>
               <div class="col-md-6">
                   <h3>Ex Staff</h3>

                   <ul>
                       <li>Principal :<span>{{$eP}}</span></li>
                       <li>Vice Principal :<span>{{$eVP}}</span></li>
                       <li>Chief Instructor :<span>{{$eCI}}</span></li>
                       <li>Instructor :<span>{{$eI}}</span></li>
                       <li>Junior Instructor :<span>{{$eJI}}</span></li>
                       <li>Craft Instructor :<span>{{$eCCI}}</span></li>
                       <li>Office Staff :<span>{{$eOS}}</span></li>
                       <hr>
                       <li>Total Ex Staff :<span>{{$eTL}}</span></li>

                   </ul>
               </div>
           </div>
        </div>

    </div>
    <div class="row">
        @foreach(array_chunk($singledata->all(),3) as $row)
            <div class="row">
        @foreach($row as $s)
        <div class="col-md-4">
            <div class="overlay">
               <h3>{{$s->file_no}}</h3>

                <img class="img-thumbnail" style="height: 180px" src="{{url('upload/'.$s->photo)}}" alt="">
                <ul>
                    <li><strong>Name: </strong>{{$s->first_name}} {{$s->last_name}}</li>
                    <li><strong>Email: </strong>{{$s->email}}</li>
                    <li><strong>Mobile: </strong>{{$s->mobile_no}}</li>
                    <li><strong>P.I.M.S: </strong>{{$s->tms_no}}</li>
                    <li><strong>Department/Section: </strong>{{$s->department}}</li>
                    <li><strong>Designation: </strong>{{$s->status}} {{$s->designation}} {{$s->helper_post}}</li>
                </ul>
                <div class="changling-step">
                    <div class="btn-group">
                        <a href="{{url('/staffDetiles/'.$s->id)}}" class="btn btn-default">Detiles</a>
                        <a href="{{url('/staffDataEdit/'.$s->id)}}" class="btn btn-info">Edit</a>
                        <a href="#" onclick="return checkDelete('{{url('/staffDataDelete/'.$s->id)}};')"  class="btn btn-danger">Delete</a>
                        <a href="{{url('/moveOnEx/'.$s->id)}}" class="btn btn-warning">Transfer</a>
                        <a href="{{url('/moveOnExAndReturn/'.$s->id)}}" class="btn btn-primary">Retirement</a>
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
            {{$singledata->links()}}
        </div>
    </div>








@endsection