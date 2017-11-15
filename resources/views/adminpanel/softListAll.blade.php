@extends('layouts.masterlayout')
@section('content')
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

                <table class="table table-bordered table-responsive">
                    <tr>
                        <td>SL</td>
                        <td>File no</td>
                        <td>Designation</td>
                        <td>Department</td>
                        <td>Name</td>


                    </tr>
                    @foreach($softLists as $softList)
                    <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>{{$softList->file_no}}</td>
                            <td>{{$softList->status}} {{$softList->designation}}</td>
                            <td>{{$softList->department}}</td>
                            <td>{{$softList->first_name}} {{$softList->last_name}}</td>



                    </tr>
                    @endforeach
                </table>

            </div>

            <div class="panel-footer"></div>


        </div>
    </div>


</div>



@endsection