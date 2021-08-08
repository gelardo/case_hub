@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" action="{{url('admin/user/store')}}" method="post">
                @csrf
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New User</h4>
                    </div>
                    <div class="card-body ">
                        <div class="form-group has-label">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name" placeholder="Enter User  Name" type="text" required="true" />
                        </div>

                        <div class="form-group has-label">
                            <label>
                                Email
                            </label>
                            <input class="form-control" type="email" name="email" placeholder="Enter Email...."  required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Phone
                            </label>
                            <input class="form-control" type="number" name="phone" placeholder="Enter Contact Number...."  required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Password
                            </label>
                            <input class="form-control" type="text" name="password" placeholder="Enter  New Password"  required="true" />
                        </div>

                    </div>

                    <div class="card-footer text-right">

                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

