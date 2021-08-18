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
                                User Name
                            </label>
                            <input class="form-control" name="username"  type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                First Name
                                *
                            </label>
                            <input class="form-control" name="first_name"   type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Last Name
                                *
                            </label>
                            <input class="form-control" name="last_name" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Registration Date
                                *
                            </label>
                            <input class="form-control datepicker" name="registration_date" type="date"  required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Date of Birth
                                *
                            </label>
                            <input class="form-control datepicker" name="birth_date" type="date"  required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                District
                                *
                            </label> <br>
                            <select class="selectpicker" id="district_id"  class="form-control" required name="district_id"   title="Select District" data-size="7">
                                <option disabled> Select District</option>

                            </select>
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Current Status
                                *
                            </label> <br>
                            <select class="form-control" id="status"  class="form-control" required name="status"   title="Select Status" data-size="2">
                                <option disabled> Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>

                            </select>
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Phone
                                *
                            </label>
                            <input class="form-control" name="phone"  type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Email
                                *
                            </label>
                            <input class="form-control" name="email"  type="email" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Password
                                *
                            </label>
                            <input class="form-control" name="password" id="registerPassword"  type="text"/>
                        </div>

                    </div>

                    <div class="card-footer text-right">

                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).onload(
            $.ajax({
                type:'get',
                url:'/api/district/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        $('#district_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            })
        );
    </script>

@endsection

