@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Book Details
                            <small>{{$book->book_name}}</small>
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
                                <th>MetaTitle</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Price Promotion</th>
                                <th>Weight</th>
                                <th>Size</th>
                                <th>Page Number</th>
                                <th>Format Cove Book</th>
                                <th>Date update</th>
                                <th>Date release</th>
                                <th>Status</th>
                                <th>Publisher</th>
                                <th>Category Item</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="odd gradeX" align="center">
                                <th>{{$book->id}}</th>
                                <th>{{$book->image}}</th>
                                <th>{{$book->book_name}}</th>
                                <th>{{$book->meta_title}}</th>
                                <th>{{$book->quantity}}</th>
                                <th>{{$book->price}}</th>
                                <th>{{$book->price_promotion}}</th>
                                <th>{{$book->weight}}</th>
                                <th>{{$book->size}}</th><br>
                                <th>{{$book->page_number}}</th>
                                <th>{{$book->format_cove_book}}</th>
                                <th>{{$book->date_update}}</th>
                                <th>{{$book->date_release}}</th>
                                <th>{{$book->status_book}}</th>
                                <th>{{$book->book_publisher->publisher_name}}</th>
                                <th>{{$book->book_category_item->category_name_item}}</th>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/book/edit/{{$book->id}}">Edit</a></td>
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection