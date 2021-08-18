@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('admin.layouts.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Users List</h4>
                    <a href="{{url('admin/lawyer/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Lawer Info</th>
                            <th>District</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Lawyer Info</th>
                            <th>District</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>



                         @foreach($all as $r)
                        <tr>

                            <td>
                                Name: {{$r->name}}<br>
                                Address of Chamber: {{$r->address_of_chamber}}<br>
                                Date of Enrollment: {{$r->date_of_enroll}}<br>
                                Name of Bar: {{$r->name_of_bar}}<br>
                                <a href="tel:{{$r->phone}}">{{$r->phone}}</a><br>
                                <a href="mailto:{{$r->email}}">{{$r->email}}</a>
                            </td>
                            <td>{{$r->districts->name}}</td>
                            <td class="text-right">
                                <a href="{{url('admin/lawyer/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                <form action="{{url('admin/lawyer/delete/'.$r->id)}}" method="post">
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
