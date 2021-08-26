@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-briefcase-24 text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Total Cases</p>
                                <p class="card-title">{{$total_cases}}<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-circle-10 text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Total Lawyer</p>
                                <p class="card-title">{{$total_lawyers}}<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-box-2 text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Today's Cases</p>
                                <p class="card-title">{{$todays_cases}}<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-box text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Tomorrow's cases</p>
                                <p class="card-title">{{$tomorrows_cases}}<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #dateFilterForm label{font-size: 20px;}
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Cause List</h4>
                    <form action="{{route('customSearchCases')}}" id="dateFilterForm" class="form-inline">

                        <div class="form-group">
                            <label for="" class="font-weight-bold">From Date &nbsp;&nbsp;&nbsp;</label>
                            <input type="date" class="datepicker form-control" name="fromDate">
                        </div>
                        <div style="width: 100px;"></div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">To Date &nbsp;&nbsp;&nbsp;</label>
                            <input type="date" class="datepicker form-control" name="toDate">
                        </div>
                        <div style="width: 100px;"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </form>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Case No.</th>
                                        <th>Case Type</th>
                                        <th>Category of Cases</th>
                                        <th>Name of Court</th>
                                        <th>District</th>
                                        <th>Name of the Complainant</th>
                                        <th>Name of the Opposition</th>
                                        <th>Next Date</th>
                                        <th>Date of Filing</th>
                                        <th>Police Station</th>
                                        <th>Status of the Case</th>
                                        <th>Panel Lawyer Name</th>
                                        <th>Upload File</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Case No.</th>
                                        <th>Case Type</th>
                                        <th>Category of Cases</th>
                                        <th>Name of Court</th>
                                        <th>District</th>
                                        <th>Name of the Complainant</th>
                                        <th>Name of the Accused</th>
                                        <th>Next Date</th>
                                        <th>Date of Filing</th>
                                        <th>Police Station</th>
                                        <th>Status of the Case</th>
                                        <th>Panel Lawyer Name</th>
                                        <th>Upload File</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($todays_cases_total as $r)
                                        <tr>

                                            <td>{{$r->id}}</td>
                                            <td style="width: 100px !important;">
                                                {{$r->case_no.'/'.$r->case_year}}</td>
                                            <td>{{$r->case_types->name}}</td>
                                            <td>{{($r->case_categories) ? $r->case_categories->name : 'No Input'}}</td>
                                            <td>{{$r->courts->name}}</td>
                                            <td>{{($r->districts) ? $r->districts->name : 'No Input'    }}</td>
                                            <td>{{$r->complainant_name}}</td>
                                            <td>{{$r->name_of_accused}}</td>
                                            <td>{{$r->next_date}}</td>
                                            <td>{{$r->date_of_filing}}</td>
                                            <td>{{($r->police_stations) ? $r->police_stations->name : 'No Input'}}</td>
                                            <td>{{$r->case_statuses->name}}</td>
                                            <td>{{$r->lawyers->name}}</td>
                                            <td>{{($r->case_notes) ? 'yes' : 'no'}}</td>
                                            <td class="text-right">
                                                <a href="{{url('admin/case_main/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                                <a href="{{url('admin/case_main/show/'.$r->id)}}" class="btn btn-info btn-link ">
                                                    View Case
                                                </a>
                                                <form action="{{url('admin/case_main/delete/'.$r->id)}}" method="post">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('admin-dashboard-push')
    columns: [ 1, 2, 4, 8, 9,11,12]
@endpush
@endsection
