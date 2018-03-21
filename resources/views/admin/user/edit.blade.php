@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit User
                            <small>{{$user -> name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <!--Kiem tra loi-->
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        <!-- In thong bao -->
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/user/edit/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$user->email}}" disabled="true" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="pass" value="{{$user->email}}"  type="password"/>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" value="{{$user->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" name="phone" value="{{$user->phone}}" />
                            </div>
                            <div class="form-group">
                                <label>Sex</label>
                                <input class="form-control" name="sex" value="{{$user->sex}}" />
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input class="form-control" name="birthday" value="{{$user->birthday}}"  type="date"/>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" value="{{$user->qddress}}" />
                            </div>
                            <div class="form-group">
                                <label>Provice</label>
                                <input class="form-control" name="provice" value="{{$user->provice}}" />
                            </div>
                            <div class="form-group">
                                <label>Distrist</label>
                                <input class="form-control" name="distrist" value="{{$user->distrist}}"/>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role">
                                    @foreach($role as $rl)
                                        <option 
                                        @if($user->role_id == $rl->id)
                                            {{"selected"}}
                                        @endif
                                        value="{{$rl->id}}">{{$rl->role_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save </button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection