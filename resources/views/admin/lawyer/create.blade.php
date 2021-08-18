@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <form id="RegisterValidation" action="{{url('admin/lawyer/store')}}" method="post">
                @csrf
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New Lawyer</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-6 col-md-6">
                                <div class="form-group has-label">
                                    <label>
                                        Name
                                    </label>
                                    <input class="form-control" name="name"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Father Name
                                        *
                                    </label>
                                    <input class="form-control" name="father_name"   type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Mother Name
                                        *
                                    </label>
                                    <input class="form-control" name="mother_name" type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date of Enroll
                                        *
                                    </label>
                                    <input class="form-control datepicker" name="date_of_enroll" type="date"  required="true" />
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
                                        Phone
                                        *
                                    </label>
                                    <input class="form-control" name="phone"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Nationality
                                        *
                                    </label>
                                    <input class="form-control" name="nationality"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Religion
                                        *
                                    </label>
                                    <input class="form-control" name="religion"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Name of Bar
                                        *
                                    </label>
                                    <input class="form-control" name="name_of_bar"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Membership Number
                                        *
                                    </label>
                                    <input class="form-control" name="membership_number"  type="text" required="true" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group has-label">
                                    <label>
                                        Address of Chamber
                                        *
                                    </label>
                                    <input class="form-control" name="address_of_chamber"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Address of Residence
                                        *
                                    </label>
                                    <input class="form-control" name="address_of_residence"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Specialized Practice Area
                                        *
                                    </label>
                                    <input class="form-control" name="specialize_practice_area"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Professional Experience
                                        *
                                    </label>
                                    <input class="form-control" name="professional_experience"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case Conducted
                                        *
                                    </label>
                                    <input class="form-control" name="case_conducted"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Reference
                                        *
                                    </label>
                                    <input class="form-control" name="reference"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Remarks
                                        *
                                    </label>
                                    <input class="form-control" name="remarks"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Lawyer Type
                                        *
                                    </label> <br>
                                    <select class="form-control" id="lawyer_type"  class="form-control" required name="lawyer_type"   title="Select Type" data-size="2">
                                        <option disabled> Select Lawyer Type</option>
                                        <option value="engage">Engage</option>
                                        <option value="panel">Panel</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Lawyer status
                                        *
                                    </label> <br>
                                    <select class="form-control" id="lawyer_status"  class="form-control" required name="lawyer_status"   title="Select Status" data-size="2">
                                        <option disabled> Select Lawyer Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>

                                    </select>
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

