@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User Details
                    <small>{{$user->name}}</small>
                </h1>
            </div>
            @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Email</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Sex</th>
                         <th>Phone Number</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Distrist</th>
                        <th>Proviced</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->sex}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->qddress}}</td>
                        <td>{{$user->distrist}}</td>
                        <td>{{$user->provice}}</td>
                        <td>{{$user->role->role_name}}</td>
                    </tr> 
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection