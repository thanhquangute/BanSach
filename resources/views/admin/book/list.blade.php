@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Book
                            <small>List Book</small>
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
                                <th>Image</th>
                                <th>Book Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Details</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($book as $b)
                            <tr class="odd gradeX" align="center">
                                <td>{{$b->id}}</td>
                                <td><image src="image/sach/{{$b->image}}" style="width: 80px;height: 80px"></td>
                                <td>{{$b->book_name}}</td>
                                <td>{{$b->quantity}}</td>
                                <td>{{$b->price}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/book/book-details/{{$b->id}}">Details</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/book/edit/{{$b->id}}">Edit</a></td>
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