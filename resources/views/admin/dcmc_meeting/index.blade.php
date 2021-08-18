@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('admin.layouts.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Cases List</h4>
                    <a href="{{url('admin/dcmc_meeting/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Sl no</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>District</th>
                            <th>File</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sl no</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>District</th>
                            <th>File</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($all as $r)
                            <tr>

                                <td>{{$r->id}}</td>
                                <td>{{$r->title}}</td>
                                <td>{{$r->date}}</td>
                                <td>{{$r->description}}</td>
                                <td>{{$r->districts->name}}</td>
                                <td>{{$r->file_name}}</td>
                                <td class="text-right">
                                    <a href="{{url('admin/dcmc_meeting/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                    <form action="{{url('admin/dcmc_meeting/delete/'.$r->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-link btn-icon btn-sm">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div>

@endsection
