@extends('layouts.fontPagelayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="straff-info">
                <h3>Bogra Polytechnics Institute's all staff's Information here available...</h3>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="font-page-min  bog-bg">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">


<div class="fontpagewrapper">
            @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error')}}
                </div>
            @endif
            <form method="get" action="{{url('/fontPageDataSearch')}}">
                 <div class="form-group">
                    <label for="file_no"><h3>Find your data here:</h3></label>
                    <input type="text" class="form-control search-text" id="file_no" name="search" required  placeholder="Enter your file or mobile or email no">
                     <span class="text-danger">{{$errors->first('search')}}</span>
                </div>


                <button  type="submit" class="btn-srs">Search</button>
            </form>
        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="font-page-footer">
                <p>&copy; 2017-{{date('Y')}} CopyRight Bogra Polytechnics Institute <span>Development by Ashik</span></p>

            </div>
        </div>
    </div>
</div>
@endsection