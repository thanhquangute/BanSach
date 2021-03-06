@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Author
                            <small>Add Author</small>
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
                        <form action="admin/author/add" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Author Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Author Name" />
                            </div>
                            <div class="form-group">
                                <label>Biography</label>
                                <input class="form-control" name="biography" placeholder="Please Enter Biography" />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" placeholder="Please Enter Address" />
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" name="phone" placeholder="Please Enter Author Phone Number" />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="0">Show</option>
                                    <option value="1">Hide</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Author </button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection