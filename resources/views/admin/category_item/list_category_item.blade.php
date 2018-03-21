@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category Item
                            <small>List category item</small>
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
                                <th>Category Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categoryitem as $cti)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cti->id}}</td>
                                <td>{{$cti->category_name_item}}</td>
                                <td>{{$cti->meta_title}}</td>
                                <td>{{$cti->category_item->category_name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/categoryitem/delete/{{$cti->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/categoryitem/edit/{{$cti->id}}">Edit</a></td>
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