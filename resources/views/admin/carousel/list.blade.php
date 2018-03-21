@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Carouser
                            <small>List Carouser</small>
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
                                <th>Carouse Name</th>
                                <th>MetaTitle</th>
                                <th>Image</th>
                                <th>Date Update</th>
                                <th>Book Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($carousel as $ca)
                            <tr class="odd gradeX" align="center">
                                <th>{{$ca->id}}</th>
                                <th>{{$ca->carousel_name}}</th>
                                <th>{{$ca->meta_title}}</th>
                                <th><img src="image/banner/{{$ca->image_carouser}}" style="width: 90%;height: 20%"/></th>
                                <th>{{$ca->date_update}}</th>
                                <th>{{$ca->carousel->book_name}}</th>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/carousel/delete/{{$ca->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/carousel/edit/{{$ca->id}}">Edit</a></td>
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