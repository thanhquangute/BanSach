@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Book
                            <small>{{$book->book_name}}</small>
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
                        <form action="admin/book/edit/{{$book->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" enctype="multipart/form-data"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Book Name</label>
                                        <input class="form-control" name="name" value="{{$book->book_name}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" name="quantity" value="{{$book->quantity}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" name="price" value="{{$book->price}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input class="form-control" name="weight" value="{{$book->weight}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Size</label>
                                        <input class="form-control" name="size" value="{{$book->size}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Page Number</label>
                                        <input class="form-control" name="page_number" value="{{$book->page_number}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Format Cove Book</label>
                                        <input class="form-control" name="format" value="{{$book->format_cove_book}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Date Release</label>
                                        <input class="form-control" name="date_release" value="{{$book->date_release}}" type="date" />
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="0">Show</option>
                                            <option value="1">Hide</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Publisher Name</label>
                                        <select class="form-control" name="publisher">
                                            @foreach($publisher as $pl)
                                                <option 
                                                @if($book->publisher_id == $pl->id)
                                                    {{"selected"}}
                                                @endif
                                                value="{{$pl->id}}">{{$pl->publisher_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Item Name</label>
                                        <select class="form-control" name="category">
                                            @foreach($categoryitem as $ct)
                                                <option 
                                                @if($book->category_item_id == $ct->id)
                                                    {{"selected"}}
                                                @endif
                                                value="{{$ct->id}}">{{$ct->category_name_item}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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