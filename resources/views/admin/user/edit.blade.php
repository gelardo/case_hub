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
                                User Name
                            </label>
                            <input class="form-control" name="username"  value="{{$entry_to_respond->username}}" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                First Name
                                *
                            </label>
                            <input class="form-control" name="first_name"  value="{{$entry_to_respond->first_name}}" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Last Name
                                *
                            </label>
                            <input class="form-control" name="last_name"  value="{{$entry_to_respond->last_name}}" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Registration Date
                                *
                            </label>
                            <input class="form-control datepicker" name="registration_date"  value="{{$entry_to_respond->registration_date}}" type="date"  required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Date of Birth
                                *
                            </label>
                            <input class="form-control datepicker" name="birth_date"  value="{{$entry_to_respond->birth_date}}" type="date"  required="true" />
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
                            <select class="form-control" id="status"  class="form-control" required name="status"   title="Select Statusr" data-size="2">
                                <option disabled> Select Status</option>
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>

                            </select>
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

