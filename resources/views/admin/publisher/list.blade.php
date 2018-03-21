@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Publisher
                            <small>List publisher</small>
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
                                <th>Publisher Name</th>
                                <th>MetaTitle</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Status</th> 
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($publisher as $pb)
                            <tr class="odd gradeX" align="center">
                                <td>{{$pb->id}}</td>
                                <td>{{$pb->publisher_name}}</td>
                                <td>{{$pb->meta_title}}</td>
                                <td>{{$pb->phone_number}}</td>
                                <td>{{$pb->address}}</td>
                                @if($pb->status == 0)
                                    <td>Show</td>
                                    @else
                                    <td>Hide</td>
                                @endif
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/publisher/edit/{{$pb->id}}">Edit</a></td>
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