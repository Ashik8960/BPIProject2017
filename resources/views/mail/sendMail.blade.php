@extends('layouts.masterlayout')
@section('content')


    <div class="row">
        <div class="col-sm-6">
            <div class="login-area">


                <h4>Please check your mail address and then Mail Send?</h4>
                <span>Or it's send unknown person</span>
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

                <form method="post" action="{{url('/mailSend/'.$s->id)}}">
                    {{csrf_field()}}
                   <div class="form-group">

                        <input type="email" class="form-control" id="email" name="email" value="{{$s->email}}" placeholder="Enter Staff email..">

                    </div>
                    <span class="text-danger">{{$errors->first('email')}}</span><br>

           <div class="btn btn-group custom-mail">
               <a href="{{url('/dashboard')}}" class="btn btn-default">Back</a>
               <button type="submit" class="btn btn-info">Send mail</button>

           </div>
                </form>
            </div>
        </div>
 </div>




@endsection