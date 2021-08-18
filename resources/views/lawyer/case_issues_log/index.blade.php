@extends('lawyer.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('lawyer.layouts.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Case Issue Logs</h4>
                    <a href="{{url('lawyer/case_issues_log/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Case Info</th>
                            <th>Issue</th>
                            <th>File Name</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>Case Info</th>
                            <th>Issue</th>
                            <th>File Name</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>



                         @foreach($all as $r)
                             @foreach($r->case_issue_logs as $issue)
                        <tr>
                            <td>{{$issue->date}}</td>
                            <td>
                                ID: {{$issue->id}}<br>
                                Case No: {{$r->case_no.'/'.$r->case_year}}<br>
                            </td>
                            <td>
                                {{$issue->issue}}
                            </td>
                            <td>{{$issue->file_name}}</td>
                            <td class="text-right">
                                <a href="{{url('lawyer/case_issues_log/edit',$issue->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                <form action="{{url('lawyer/case_issues_log/delete/'.$issue->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="lawyer.showSwal('delete')" class="btn btn-danger btn-link btn-icon btn-sm">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                             @endforeach
                         @endforeach

                        </tbody>
                    </table>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div>
@endsection
