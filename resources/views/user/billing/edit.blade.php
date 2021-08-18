@extends('user.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" action="{{url('user/billing/update',$entry_to_respond->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    @include('user.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Update Users Information</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-6">
                                <div class="form-group has-label">
                                    <label>
                                        Bill Type
                                        *
                                    </label> <br>
                                    <select class="selectpicker" id="bill_type_id"  class="form-control" required name="bill_type_id"   title="Select Case Type" data-size="7">
                                        <option disabled> Select Bill Type</option>

                                    </select>
                                </div>

                                <div class="form-group has-label">
                                    <label>
                                        Case Type
                                        *
                                    </label> <br>
                                    <select class="selectpicker" id="case_type_id"  class="form-control" required name="case_type_id"   title="Select Case Type" data-size="7">
                                        <option disabled> Select Case Type</option>

                                    </select>
                                </div>

                                <div class="form-group has-label">
                                    <label>
                                        District
                                        *
                                    </label> <br>
                                    <select class="form-control selectpicker" id="district_id"
                                            onchange="loadCases(this.value)" class="form-control" required
                                            name="district_id" title="Select District" data-size="7">
                                        <option disabled> Select District</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case No
                                        *
                                    </label> <br>
                                    <select class="form-control selectpicker" id="case_main_id"  class="form-control" required
                                            name="case_main_id" title="Select District" data-size="7">
                                        <option disabled> Select District First</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Lawyers
                                        *
                                    </label> <br>
                                    <select class="form-control selectpicker" id="lawyer_id"  class="form-control" required
                                            name="lawyer_id" title="Select District" data-size="7">
                                        <option disabled> Select District First</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Amount
                                        *
                                    </label>
                                    <input class="form-control" name="amount"  value="{{$entry_to_respond->amount}}"   type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Bill Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" name="bill_date"  value="{{$entry_to_respond->bill_date}}"   type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Cheque No
                                        *
                                    </label>
                                    <input class="form-control" name="cheque_no"  value="{{$entry_to_respond->cheque_no}}"   type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Bank Name
                                        *
                                    </label>
                                    <input class="form-control"  value="{{$entry_to_respond->bank_name}}"  name="bank_name"  type="text" required="true" />
                                </div>
                            </div>

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
        var lawyer_id = <?php echo $entry_to_respond->lawyer_id; ?>;
        var district_id = <?php echo $entry_to_respond->district_id; ?>;
        var bill_type_id = <?php echo $entry_to_respond->bill_type_id; ?>;
        var case_type_id = <?php echo $entry_to_respond->case_type_id; ?>;
        var case_main_id = <?php echo $entry_to_respond->case_main_id; ?>;
        function loadCases(value) {
            // alert(value);
            $("#case_main_id").html("");
            $("#lawyer_id").html("");
            $.ajax({
                type: 'get',
                url: '/api/district/show/' + value,
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data[0].case_mains, function (key, value) {
                        var selectedData = (case_main_id === value.id);
                        $('#case_main_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.case_no+'/'+value.case_year
                        }));
                    }),
                        $.each(data.data[0].lawyers, function (key, value) {
                            var selectedData = (lawyer_id === value.id);
                            $('#lawyer_id').append($('<option>', {
                                selected: selectedData,
                                value: value.id,
                                text: value.name
                            }));
                        })
                    $(".selectpicker").selectpicker("refresh")
                }
            })

        }
        $(document).ready(
            $.ajax({
                type:'get',
                url:'/api/bill_type/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        var selectedData = (bill_type_id === value.id);
                        $('#bill_type_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type:'get',
                url:'/api/case_type/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        var selectedData = (case_type_id === value.id);
                        $('#case_type_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type:'get',
                url:'/api/district/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        var selectedData;
                        if (district_id === value.id) {
                            selectedData = true
                            loadCases(district_id)
                        } else {
                            selectedData = false
                        }
                        $('#district_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            })
        );
    </script>

@endsection

