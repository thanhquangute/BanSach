@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List {{$category->category_name}}</small>
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
                                <th>Category Name Item</th>
                                <th>MetaTitle</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categoryitem as $ct)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ct->id}}</td>
                                <td>{{$ct->category_name_item}}</td>
                                <td>{{$ct->meta_title}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw" style="color: blue;"></i><a href="admin/categoryitem/delete/{{$ct->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil-square-o fa-fw" style="color: blue;"></i> <a href="admin/categoryitem/edit/{{$ct->id}}">Edit</a></td>
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