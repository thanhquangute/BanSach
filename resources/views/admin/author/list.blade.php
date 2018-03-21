@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Author
                    <small>List Author</small>
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
                        <th>Author Name</th>
                        <th>MetaTitle</th>
                        <th>Biography Author</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>List Book</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($author as $au)
                    <tr class="odd gradeX" align="center">
                        <td>{{$au->id}}</td>
                        <td>{{$au->author_name}}</td>
                        <td>{{$au->meta_title}}</td>
                        <td>{{$au->biography_author}}</td>
                        <td>{{$au->phone_number}}</td>
                        <td>{{$au->address}}</td>
                        @if($au->status == 0)
                            <td>Show</td>
                            @else
                            <td>Hide</td>
                        @endif
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/author/list-book/{{$au->id}}">List</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/author/edit/{{$au->id}}">Edit</a></td>
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