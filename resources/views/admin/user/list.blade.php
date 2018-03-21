@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List User
                    <small>List User</small>
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
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Details</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $au)
                    <tr class="odd gradeX" align="center">
                        <td>{{$au->id}}</td>
                        <td>{{$au->email}}</td>
                        <td>{{$au->name}}</td>
                        <td>{{$au->password}}</td>
                        <td>{{$au->role->role_name}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/user-details/{{$au->id}}">Details</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$au->id}}">Edit</a></td>
                    </tr>
                 @endforeach  
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection