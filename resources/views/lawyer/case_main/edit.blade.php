@extends('lawyer.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form id="RegisterValidation" action="{{url('lawyer/case_main/update',$entry_to_respond->id)}}"
                  method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card ">
                    @include('lawyer.layouts.message')

                    <div class="card-header ">
                        <h4 class="card-title">Update Case Information</h4>
                    </div>
                    <style>
                        .has-label label {
                            color: #000000;
                            font-size: 1rem;
                        }
                    </style>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-12 col-md-3">
                                <div class="form-group has-label">
                                    <label>
                                        Case Type
                                        *
                                    </label><br>
                                    <select class="form-control " id="case_type_id" class="form-control"
                                            required name="case_type_id" title="Select Case Type" data-size="7">
                                        <option disabled> Select Case Type</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case Category

                                    </label> <br>
                                    <select class=" form-control" id="case_category_id"
                                            name="case_category_id" title="Select Case Category" data-size="7">
                                        <option value="0"> Select Case Category</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case Nature

                                    </label> <br>
                                    <select class=" form-control" id="case_nature_id"
                                            name="case_nature_id" title="Select Case Nature" data-size="7">
                                        <option value="0"> Select Case Nature</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case Number
                                        *
                                    </label>
                                    <input class="form-control" name="case_no"
                                           value="{{$entry_to_respond->case_no}}" type="text"
                                           required="true"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case Year
                                        *
                                    </label>

                                    <select id="year" class=" form-control" name="case_year">
                                        <option value="{{$entry_to_respond->case_year}}"
                                                selected>{{$entry_to_respond->case_year}}</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Subsequent Case No

                                    </label>
                                    <input class="form-control" name="subsequent_case_no"
                                           value="{{$entry_to_respond->subsequent_case_no }}"
                                           type="text" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Region

                                    </label> <br>
                                    <select class=" form-control" id="region_id"  name="region_id"
                                            title="Select Region" data-size="7">
                                        <option value="0"> Select Region</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Area

                                    </label>
                                    <input class="form-control" name="area"
                                           value="{{$entry_to_respond->area}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Branch

                                    </label>
                                    <input class="form-control " name="branch"
                                           value="{{$entry_to_respond->branch}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        District

                                    </label> <br>
                                    <select class="form-control " id="district_id"
                                            onchange="loadPoliceStations(this.value)" class="form-control"
                                            name="district_id" title="Select District" data-size="7">
                                        <option value="0"> Select District</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group has-label">
                                    <label>
                                        Police Station

                                    </label> <br>
                                    <select class="form-control " id="police_station_id"
                                            class="form-control"  name="police_station_id"
                                            title="Select Police Station" data-size="7">
                                        <option value="0"> Select District First</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date of Incident

                                    </label>
                                    <input class="form-control datepicker" name="date_of_incident" value="{{$entry_to_respond->date_of_incident}}" type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Who identified

                                    </label>
                                    <input class="form-control"
                                           value="{{$entry_to_respond->whoidentified}}"
                                           name="whoidentified" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Court
                                        *
                                    </label><br>
                                    <select class="form-control " id="court_id" class="form-control"
                                            required name="court_id" title="Select Court" data-size="7">
                                        <option disabled> Select Court</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date of Filing
                                        *
                                    </label>
                                    <input class="form-control datepicker" required name="date_of_filing"
                                           value="{{$entry_to_respond->date_of_filing}}"
                                           type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Laws Section

                                    </label>
                                    <input class="form-control" name="laws_section"
                                           value="{{$entry_to_respond->laws_section}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Allegation

                                    </label>
                                    <input class="form-control" name="allegation"
                                           value="{{$entry_to_respond->allegation}}" type="text"/>
                                </div>


                                <div class="form-group has-label">
                                    <label>
                                        Amount of Money

                                    </label>
                                    <input class="form-control" name="amount_of_money"
                                           value="{{$entry_to_respond->amount_of_money}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Name

                                    </label>
                                    <input class="form-control" name="complainant_name"
                                           value="{{$entry_to_respond->complainant_name}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Designation

                                    </label>
                                    <input class="form-control" name="complainant_designation"
                                           value="{{$entry_to_respond->complainant_designation}}"
                                           type="text"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Contact

                                    </label>
                                    <input class="form-control" name="complainant_contact"
                                           value="{{$entry_to_respond->complainant_contact}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Email

                                    </label>
                                    <input class="form-control" name="complainant_email"
                                           value="{{$entry_to_respond->complainant_email}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant to Attend Next hearing

                                    </label><br>
                                    <div class="form-check-inline">
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="complainant_nextattend" id="complainant_nextattend"
                                                       value="yes" {{ ($entry_to_respond->complainant_nextattend == "yes") ? 'checked' : '' }} >
                                                Yes
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div> &nbsp;
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="complainant_next_attend" id="complainant_next_attend1"
                                                       value="no" {{ ($entry_to_respond->complainant_nextattend == "no") ? 'checked' : '' }}>
                                                No
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Subsequent Name of Complainant

                                    </label>
                                    <input class="form-control" name="subsequent_name_of_complainant"
                                           value="{{$entry_to_respond->subsequent_name_of_complainant}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Pin Number

                                    </label>
                                    <input class="form-control" name="brac_pin"
                                           value="{{$entry_to_respond->brac_pin}}" type="text"
                                    />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Name of Opposition Party

                                    </label>
                                    <input class="form-control" name="name_of_accused"
                                           value="{{$entry_to_respond->name_of_accused}}" type="text"
                                    />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Phone of Opposition Party

                                    </label>
                                    <input class="form-control" name="phone_of_accused"
                                           value="{{$entry_to_respond->phone_of_accused}}" type="text"
                                    />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Address of Opposition Party

                                    </label>
                                    <textarea class="form-control" name="address_of_accused">
                                                      {{$entry_to_respond->address_of_accused}}
                                    </textarea>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Disbursement Date

                                    </label>
                                    <input class="form-control datepicker" name="disbursement_date" value="{{$entry_to_respond->disbursement_date}}" type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Last Cash Receipt Date

                                    </label>
                                    <input class="form-control datepicker"
                                           value="{{$entry_to_respond->last_cash_receipt_date}}"
                                           name="last_cash_receipt_date" type="date"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group has-label">
                                    <label>
                                        Case Status
                                        *
                                    </label><br>
                                    <select class="form-control " id="case_status_id" class="form-control"
                                            required name="case_status_id" title="Select Case Status" data-size="7">
                                        <option disabled> Select Case Status</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Court Order
                                        *
                                    </label><br>
                                    <select class="form-control " id="court_order_id"
                                            onchange="loadAdditionalCourtOrders(this.value)" class="form-control"
                                            required name="court_order_id" title="Select Court Order" data-size="7">
                                        <option disabled> Select Court Order</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Additional Court Order
                                        *
                                    </label> <br>
                                    <select class="form-control " id="additional_court_order_id"
                                            class="form-control" required name="additional_court_order_id"
                                            title="Select Additional Court Order" data-size="7">
                                        <option disabled> Select Court Order First</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Next Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" name="next_date"
                                           value="{{$entry_to_respond->next_date}}" type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Next Date Fixed for
                                        *
                                    </label><br>
                                    <select class="form-control " id="next_date_status_id"
                                            class="form-control" required name="next_date_status"
                                            title="Select Next Date Fixed FOr" data-size="7">
                                        <option disabled> Select Next Date fixed for</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Panel Lawyer
                                        *
                                    </label><br>
                                    <select class="form-control " id="lawyer_id" class="form-control"
                                            required name="lawyer_id" title="Select Lawyer" data-size="7">
                                        <option disabled> Select Lawyer</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Panel Lawyer to Attend Next hearing
                                        *
                                    </label><br>
                                    <div class="form-check-inline">
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="next_date_lawyerattend" id="next_date_lawyerattend"
                                                       value="yes" {{ ($entry_to_respond->next_date_lawyerattend == "yes") ? 'checked' : '' }} >
                                                Yes
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div> &nbsp;
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="next_date_lawyerattend" id="next_date_lawyerattend1"
                                                       value="no"  {{ ($entry_to_respond->next_date_lawyerattend == "no") ? 'checked' : '' }} >
                                                No
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-label">
                                    <label>
                                        Case Notes

                                    </label>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select File</span>
                                      <input type="file" name="case_notes">
                                    </span>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                           data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>

                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date of disposed

                                    </label>
                                    <input class="form-control"
                                           value="{{$entry_to_respond->date_of_disposed}}"
                                           name="date_of_disposed" id="date_of_disposed"
                                           type="text"/>
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
        var case_cat_id = <?php echo $entry_to_respond->case_category_id; ?>;
        var case_type_id = <?php echo $entry_to_respond->case_type_id; ?>;
        var case_nature_id = <?php echo $entry_to_respond->case_nature_id; ?>;
        var case_year = <?php echo $entry_to_respond->case_year; ?>;
        var region_id = <?php echo $entry_to_respond->region_id; ?>;
        var police_station_id = <?php echo $entry_to_respond->police_station_id; ?>;
        var court_id = <?php echo $entry_to_respond->court_id; ?>;
        var case_status_id = <?php echo $entry_to_respond->case_status_id; ?>;
        var court_order_id = <?php echo $entry_to_respond->court_order_id; ?>;
        var additional_court_order_id = <?php echo $entry_to_respond->additional_court_order_id; ?>;
        var next_date_status = <?php echo $entry_to_respond->next_date_status; ?>;
        var lawyer_id = <?php echo $entry_to_respond->lawyer_id; ?>;
        var district_id = <?php echo $entry_to_respond->district_id; ?>;

        function removeWitnessform(elem) {
            $(elem).parent('div').remove();
        }

        function submitForm(e) {
            e.preventDefault()
            // let myForm = $('#witness input');
            // let witData = myForm.val();
            // console.log(witData)
            var witness = [];
            var inputValues = {};
            var newWit = $('#witness .newDataWitness').map(function (value, index) {
                var mainData = {}
                $(this).find('input[type=text]').each(function () {
                    mainData[$(this).attr('name')] = this.value;
                })
                return mainData;
            }).get();
            //     var arrayData = newWit.map(function(index,value){
            //     var newArrayData = value.map(function (index,val){
            //         var i = 0;
            //         for(i=0;i<3;i++){
            //             return val
            //         }
            //     })
            //     return newArrayData;
            // })
            var something = JSON.stringify(newWit)
            $("#mainWitData").val(something)
            console.log(something);

            $("#CaseMainInsert").submit()
        }

        var witnessCount = 1;

        function showWitnessForm(e) {

            e.preventDefault()
            let witnessData = $("#witness-data").html()
            ++witnessCount;
            $("#witness-data #witness-number-cout").html(witnessCount)
            $("#witness").append(witnessData)
            console.log(witnessCount)
        }

        function loadPoliceStations(value) {
            $("#police_station_id").html("");
            $.ajax({
                type: 'get',
                url: '/api/district/show/' + value,
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {

                    $.each(data.data[0].police_stations, function (key, value) {
                        var selectedData = (police_station_id === value.id);
                        $('#police_station_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            })


        }

        function loadAdditionalCourtOrders(value) {
            // alert(value);
            $("#additional_court_order_id").html("");
            $.ajax({
                type: 'get',
                url: '/api/court_order/show/' + value,
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data[0].additional_court_orders, function (key, value) {
                        var selectedData = (court_order_id === value.id);
                        $('#additional_court_order_id').append($('<option>', {
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
            $(".witness").css('display', 'none'),
            $.ajax({
                type: 'get',
                url: '/api/lawyer/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData = (lawyer_id === value.id);
                        $('#lawyer_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/case_type/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
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
                type: 'get',
                url: '/api/court_order/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData;
                        if (court_order_id === value.id) {
                            selectedData = true
                            loadAdditionalCourtOrders(court_order_id)
                        } else {
                            selectedData = false
                        }
                        $('#court_order_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/case_status/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData = (case_status_id === value.id);
                        var selectedData2 = (next_date_status === value.id);
                        $('#case_status_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                        $('#next_date_status_id').append($('<option>', {
                            selected: selectedData2,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/region/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData = (region_id === value.id);
                        $('#region_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/court/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData = (court_id === value.id);
                        $('#court_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/case_category/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData = (case_cat_id === value.id);
                        $('#case_category_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/district/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData;
                        if (district_id === value.id) {
                            selectedData = true;
                            loadPoliceStations(district_id);
                        } else {
                            selectedData = false
                        };
                        $('#district_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")

                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/case_nature/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        var selectedData = (case_nature_id === value.id);
                        $('#case_nature_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            })
        );
    </script>
    @push('case-main-push')
        <script>
            $(document).ready(function () {
                $("#datepicker-year").datetimepicker({
                    viewMode: 'years',
                    format: 'YYYY'
                })
            });
        </script>
    @endpush

@endsection

