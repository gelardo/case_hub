@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" action="{{url('admin/user/update',$entry_to_respond->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Update Users Information</h4>
                    </div>
                    <div class="card-body ">
                        <div class="form-group has-label">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name"  value="{{$entry_to_respond->name}}" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Phone
                                *
                            </label>
                            <input class="form-control" name="phone"  value="{{$entry_to_respond->phone}}" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Email
                                *
                            </label>
                            <input class="form-control" name="email"  value="{{$entry_to_respond->email}}" type="email" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Password
                                *
                            </label>
                            <input class="form-control" name="password" id="registerPassword" value="{{$entry_to_respond->password}}" type="text"/>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

