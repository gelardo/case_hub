@extends('user.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('user.layouts.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Case Issue Logs</h4>
                    <a href="{{url('user/case_issues_log/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Case Info</th>
                            <th>Issue</th>
                            <th>File Name</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Case Info</th>
                            <th>Issue</th>
                            <th>File Name</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>



                         @foreach($all as $r)
                        <tr>

                            <td>
                                ID: {{$r->id}}<br>
                                Case No: {{$r->case_mains->case_no.'/'.$r->case_mains->case_year}}<br>
                            </td>
                            <td>
                                {{$r->issue}}
                            </td>
                            <td>{{$r->file_name}}</td>
                            <td class="text-right">
                                <a href="{{url('user/case_issues_log/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                <form action="{{url('user/case_issues_log/delete/'.$r->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="user.showSwal('delete')" class="btn btn-danger btn-link btn-icon btn-sm">
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
