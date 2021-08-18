@extends('user.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('user.layouts.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Users List</h4>
                    <a href="{{url('user/billing/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Case Info</th>
                            <th>Bill Info</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Case Info</th>
                            <th>Bill Info</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>



                         @foreach($all as $r)
                        <tr>

                            <td>
                                ID: {{$r->id}}<br>
                                Case Type: {{$r->case_types->name}}<br>
                                Case No: {{$r->case_mains->case_no.'/'.$r->case_mains->case_year}}<br>
                                District: {{$r->districts->name}}<br>
                            </td>
                            <td>
                                Panel Lawyer: {{$r->lawyers->name}}<br>
                                Bill Amount: {{$r->amount}}<br>
                                Date of the Bill: {{$r->bill_date}}<br>
                                Cheque No: {{$r->cheque_no}}<br>
                                Bank Name: {{$r->bank_name}}<br>
                            </td>
                            <td class="text-right">
                                <a href="{{url('user/billing/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                <form action="{{url('user/billing/delete/'.$r->id)}}" method="post">
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
