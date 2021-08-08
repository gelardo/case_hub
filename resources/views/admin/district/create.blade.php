@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" action="{{url('admin/district/store')}}" method="post">
                @csrf
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New district</h4>
                    </div>
                    <div class="card-body ">
                        <div class="form-group has-label">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name" placeholder="Enter district Name" type="text" required="true" />
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

