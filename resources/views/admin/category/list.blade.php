@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List category</small>
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
                                <th>Category Name</th>
                                <th>MetaTitle</th>
                                <th>Status</th>
                                <th>Details</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $ct)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ct->id}}</td>
                                <td>{{$ct->category_name}}</td>
                                <td>{{$ct->meta_title}}</td>
                                @if($ct->status == 0)
                                    <td>Show</td>
                                    @else
                                    <td>Hide</td>
                                @endif
                                <td class="center"><i class="fa fa-info-circle  fa-fw" style="color: blue;"></i><a href="admin/categoryitem/list-category-item-by-category/{{$ct->id}}"> Details</a></td>
                                <td class="center"><i class="fa fa-pencil-square-o fa-fw" style="color: blue;"></i> <a href="admin/category/edit/{{$ct->id}}">Edit</a></td>
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