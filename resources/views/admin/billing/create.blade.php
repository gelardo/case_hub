@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <form id="RegisterValidation" action="{{url('admin/billing/store')}}" method="post">
                @csrf
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New Billing</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-12">
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
                                    <input class="form-control" name="amount" value="{{old('amount')}}"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Bill Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" name="bill_date" value="{{old('bill_date')}}"  type="date" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Cheque No
                                        *
                                    </label>
                                    <input class="form-control" name="cheque_no" value="{{old('cheque_no')}}"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Bank Name
                                        *
                                    </label>
                                    <input class="form-control" value="{{old('bank_name')}}" name="bank_name"  type="text" required="true" />
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
        function loadCases(value) {
            // alert(value);
            $.ajax({
                type: 'get',
                url: '/api/district/show/' + value,
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data[0].case_mains, function (key, value) {
                        $('#case_main_id').append($('<option>', {
                            value: value.id,
                            text: value.case_no+'/'+value.case_year
                        }));
                    }),
                    $.each(data.data[0].lawyers, function (key, value) {
                        $('#lawyer_id').append($('<option>', {
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
                        $('#bill_type_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            }),
            $.ajax({
                type:'get',
                url:'/api/case_type/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        $('#case_type_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            }),
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

