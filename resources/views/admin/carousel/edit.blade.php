@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Carousel
                            <small>{{$carousel->carousel_name}}</small>
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
                        <form action="admin/carousel/edit/{{$carousel->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" enctype="multipart/form-data"/>
                            <div class="form-group">
                                <label>Carousel Name</label>
                                <input class="form-control" name="name" value="{{$carousel->carousel_name}}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Book Name</label>
                                <select class="form-control" name="boo1k">
                                    @foreach($book as $b)
                                        <option 
                                        @if($carousel->book_id == $b->id)
                                            {{"selected"}}
                                        @endif
                                        value="{{$b->id}}">{{$b->book_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp" name="input-file-preview" >
                                        </span>
                                    </span>
                                    <input id='urlname' type="text" class="form-control" readonly>
                                </div>
                                <br>
                                <button id="clear" class="btn btn-default">Clear</button>
                                    <img id='img-upload'/>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection