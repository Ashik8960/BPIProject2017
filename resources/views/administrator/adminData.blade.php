
@extends('layouts.masterlayout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 ">

        <h3 class="text-center text-info">All Admin Data</h3>
        <hr>
        <div class="admin-scroll">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>SL</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>

                <th>Photo</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$admin->first_name}}</td>
                    <td>{{$admin->last_name}}</td>
                    <td>{{$admin->email}}</td>

                    <td><img style="height: 50px;width: 50px;" src="{{url('admin_photo/'.$admin->photo)}}" alt=""></td>

                    <td>
                        <div class="btn btn-group">
                            <a href="{{url('/adminEdit/'.$admin->id)}}" class="btn btn-success">Edit</a>
                            {{--<a href="{{url('/adminDelete/'.$admin->id)}}" class="btn btn-danger">Delete</a>--}}
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
            {{$admins->links()}}
        </table>




        </div>
    </div>
</div>



@endsection