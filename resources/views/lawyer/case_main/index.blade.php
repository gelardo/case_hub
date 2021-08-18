@extends('lawyer.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('lawyer.layouts.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Cases List</h4>
                    <a href="{{url('lawyer/case_main/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Case No.</th>
                            <th>Case Type</th>
                            <th>Category of Cases</th>
                            <th>Subsequent Case No. / Reference Case No.</th>
{{--                            <th>Program</th>--}}
                            <th>Region</th>
                            <th>Name of Court</th>
                            <th>Area</th>
                            <th>Branch</th>
                            <th>District</th>
                            <th>Name of the Complainant</th>
                            <th>Name of the Accused</th>
                            <th>Next Date</th>
                            <th>Date of Filing</th>
                            <th>Police Station</th>
                            <th>Status of the Case</th>
                            <th>Panel Lawyer Name</th>
{{--                            <th>Issue No</th>--}}
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
                            <th>Subsequent Case No. / Reference Case No.</th>
{{--                            <th>Program</th>--}}
                            <th>Region</th>
                            <th>Name of Court</th>
                            <th>Area</th>
                            <th>Branch</th>
                            <th>District</th>
                            <th>Name of the Complainant</th>
                            <th>Name of the Accused</th>
                            <th>Next Date</th>
                            <th>Date of Filing</th>
                            <th>Police Station</th>
                            <th>Status of the Case</th>
                            <th>Panel Lawyer Name</th>
{{--                            <th>Issue No</th>--}}
                            <th>Upload File</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                         @foreach($all as $r)
                        <tr>

                            <td>{{$r->id}}</td>
                            <td>{{$r->case_no.'/'.$r->case_year.'-'.$r->area}}</td>
                            <td>{{$r->case_types->name}}</td>
                            <td>{{$r->case_categories->name}}</td>
                            <td>{{$r->subsequent_case_no}}</td>
                            <td>{{$r->regions->name}}</td>
                            <td>{{$r->courts->name}}</td>
                            <td>{{$r->area}}</td>
                            <td>{{$r->branch}}</td>
                            <td>{{$r->districts->name    }}</td>
                            <td>{{$r->complainant_name}}</td>
                            <td>{{$r->name_of_accused}}</td>
                            <td>{{$r->next_date}}</td>
                            <td>{{$r->date_of_filing}}</td>
                            <td>{{$r->police_stations->name}}</td>
                            <td>{{$r->case_statuses->name}}</td>
                            <td>{{$r->lawyers->name}}</td>
                            <td>{{($r->case_notes) ? 'yes' : 'no'}}</td>
                            <td class="text-right">
                                <a href="{{url('lawyer/case_main/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                <a href="{{url('lawyer/case_main/show/'.$r->id)}}" class="btn btn-info btn-link ">
                                    View Case
                                </a>
                                <form action="{{url('lawyer/case_main/delete/'.$r->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="lawyer.showSwal('delete')" class="btn btn-danger btn-link btn-icon btn-sm">
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
