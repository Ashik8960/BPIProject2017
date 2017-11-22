@extends('layouts.masterlayout')
@section('content')

    <div class="row offprint">
        <div class="col-md-6 col-md-offset-3 find-result serial-rules">
            <h3>Staff File number serial rules</h3>
            <hr>

            <ul>
                <li>Principal :<span>20099 1000 to 1999</span></li>
                <li>Vice Principal :<span>20099 2000 to 2999</span></li>
                <li>Chief Instructor :<span>20099 3000 to 3999</span></li>
                <li>Instructor :<span>20099 4000 to 4999</span></li>
                <li>Junior Instructor :<span>20099 5000 to 5999</span></li>
                <li>Craft Instructor :<span>20099 6000 to 6999</span></li>
                <li>Office Staff :<span>20099 7000 to 7999</span></li>


            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <a href="#" class="btn btn-default "  onclick="print();">print me</a>

        </div>
    </div>
    <div class="row" id="print">

        <div class="col-md-10 col-md-offset-1 text-center">


            <div class="panel panel-default">
                <div class="panel-heading">Total Staffs List</div>
                <div class="panel-body">
                    <div class="soft-over">

                    <table class="table table-bordered table-responsive">
                        <tr>
                            <td>SL</td>
                            <td>File no</td>
                            <td>P.M.I.S</td>
                            <td>Name</td>
                            <td>Designation</td>
                            <td>Department</td>



                        </tr>
                        @foreach($softLists as $softList)
                            <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$softList->file_no}}</td>
                                <td>{{$softList->tms_no}}</td>
                                <td>{{$softList->first_name}} {{$softList->last_name}}</td>
                                <td>{{$softList->status}} {{$softList->designation}}</td>
                                <td>{{$softList->department}}</td>




                            </tr>
                        @endforeach
                    </table>

                </div>

                <div class="panel-footer"></div>


            </div>
        </div>
    </div>


</div>



@endsection