@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Book
                            <small>Add Book</small>
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
                        <form action="admin/book/add" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Book Name</label>
                                        <input class="form-control" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" name="quantity" />
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" name="price" />
                                    </div>
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input class="form-control" name="weight" />
                                    </div>
                                    <div class="form-group">
                                        <label>Size</label>
                                        <input class="form-control" name="size"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Page Number</label>
                                        <input class="form-control" name="page_number" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Format Cove Book</label>
                                        <input class="form-control" name="format"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Date Release</label>
                                        <input class="form-control" name="date_release" type="date" />
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="0">Còn hàng</option>
                                            <option value="1">Hết hàng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Publisher Name</label>
                                        <select class="form-control" name="publisher">
                                            @foreach($publisher as $pl)
                                                <option value="{{$pl->id}}">{{$pl->publisher_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Item Name</label>
                                        <select class="form-control" name="category">
                                            @foreach($categoryitem as $ct)
                                                <option value="{{$ct->id}}">{{$ct->category_name_item}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection