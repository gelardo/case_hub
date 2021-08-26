    @extends('lawyer.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form id="CaseMainInsert" action="{{url('lawyer/case_main/store')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    @include('lawyer.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New Case</h4>
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
                                        <option value="0"> Select Case Type</option>

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
                                        Case Number *
                                    </label>
                                    <input class="form-control" name="case_no" value="{{old('case_no')}}" type="text"
                                           required="true"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Case Year
                                        *
                                    </label>

                                    <select id="year" class=" form-control" required name="case_year">
                                        <option value="0">year</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Subsequent Case No

                                    </label>
                                    <input class="form-control" name="subsequent_case_no"
                                           value="{{old('subsequent_case_no')}}" type="text" />
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
                                    <input class="form-control" name="area" value="{{old('area')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Branch

                                    </label>
                                    <input class="form-control " name="branch" value="{{old('branch')}}" type="text"/>
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
                                    <input class="form-control datepicker" name="date_of_incident"
                                           value="{{old('date_of_incident')}}" type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Who identified

                                    </label>
                                    <input class="form-control" name="whoidentified"
                                           value="{{old('whoidentified')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Court
                                        *
                                    </label><br>
                                    <select class="form-control " id="court_id" class="form-control"
                                            required name="court_id" title="Select Court" data-size="7">
                                        <option > Select Court</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date of Filing
                                        *
                                    </label>
                                    <input class="form-control datepicker" required name="date_of_filing"
                                           value="{{old('date_of_filing')}}" type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Laws Section

                                    </label>
                                    <input class="form-control" name="laws_section" value="{{old('laws_section')}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Allegation

                                    </label>
                                    <input class="form-control" name="allegation" value="{{old('allegation')}}"
                                           type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Amount of Money

                                    </label>
                                    <input class="form-control" name="amount_of_money"
                                           value="{{old('amount_of_money')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Name

                                    </label>
                                    <input class="form-control" name="complainant_name"
                                           value="{{old('complainant_name')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Designation

                                    </label>
                                    <input class="form-control" name="complainant_designation"
                                           value="{{old('complainant_designation')}}" type="text"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Contact

                                    </label>
                                    <input class="form-control" name="complainant_contact"
                                           value="{{old('complainant_contact')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant Email

                                    </label>
                                    <input class="form-control" name="complainant_email"
                                           value="{{old('complainant_email')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Complainant to Attend Next hearing

                                    </label><br>
                                    <div class="form-check-inline">
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="complainant_nextattend" id="complainant_next_attend"
                                                       value="yes" >
                                                Yes
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div> &nbsp;
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="complainant_nextattend" id="complainant_next_attend1"
                                                       value="no" checked>
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
                                           value="{{old('subsequent_name_of_complainant')}}" type="text"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Name of Opposition Party

                                    </label>
                                    <input class="form-control" name="name_of_accused"
                                           value="{{old('name_of_accused')}}" type="text" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Phone of Opposition Party

                                    </label>
                                    <input class="form-control" name="phone_of_accused"
                                           value="{{old('phone_of_accused')}}" type="text" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Address of Opposition Party

                                    </label>
                                    <textarea class="form-control" name="address_of_accused">
                                           {{old('address_of_accused')}}
                                    </textarea>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Disbursement Date

                                    </label>
                                    <input class="form-control datepicker" name="disbursement_date"
                                           value="{{old('disbursement_date')}}" type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Last Cash Receipt Date

                                    </label>
                                    <input class="form-control datepicker" name="last_cash_receipt_date"
                                           value="{{old('last_cash_receipt_date')}}" type="date"/>
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
                                        <option > Select Case Status</option>
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
                                        <option > Select Court Order</option>
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
                                        <option > Select Court Order First</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Next Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" required name="next_date" value="{{old('next_date')}}"
                                           type="date"/>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Next Date Fixed for
                                        *
                                    </label><br>

                                    <select class="form-control " id="next_date_status_id"
                                            class="form-control" required name="next_date_status"
                                            title="Select Next Date Fixed FOr" data-size="7">
                                        <option > Select Next Date fixed for</option>
                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Panel Lawyer
                                        *
                                    </label><br>
                                    <select class="form-control " id="lawyer_id" class="form-control"
                                            required name="lawyer_id" title="Select Lawyer" data-size="7">
                                        <option > Select Lawyer</option>
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
                                                       name="next_date_lawyerattend" id="next_date_lawyer_attend"
                                                       value="yes" checked>
                                                Yes
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div> &nbsp;
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                       name="next_date_lawyerattend" id="next_date_lawyer_attend1"
                                                       value="no">
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
                                    <input class="form-control" name="date_of_disposed" id="date_of_disposed"
                                           value="{{old('date_of_disposed')}}" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" onclick="submitForm(event)">Create New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var lawyer_id = <?php echo  auth('lawyer')->user()->id?>;
        function removeWitnessform(elem) {
            $(elem).parent('div').remove();
        }

        function submitForm(e) {
            e.preventDefault()
            var witness = [];
            var inputValues = {};
            var newWit = $('#witness .newDataWitness').map(function (value, index) {
                var mainData = {}
                $(this).find('input[type=text]').each(function () {
                    mainData[$(this).attr('name')] = this.value;
                })
                return mainData;
            }).get();
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
            // alert(value);
            $.ajax({
                type: 'get',
                url: '/api/district/show/' + value,
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data[0].police_stations, function (key, value) {
                        $('#police_station_id').append($('<option>', {
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
            $.ajax({
                type: 'get',
                url: '/api/court_order/show/' + value,
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data[0].additional_court_orders, function (key, value) {
                        $('#additional_court_order_id').append($('<option>', {
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
                url: '/api/case_type/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        $('#case_type_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/lawyer/show/'+lawyer_id,
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
                url: '/api/court_order/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        $('#court_order_id').append($('<option>', {
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
                        $('#case_status_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                        $('#next_date_status_id').append($('<option>', {
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
                        $('#region_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/court/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        $('#court_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/case_category/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        $('#case_category_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/district/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        $('#district_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            }),
            $.ajax({
                type: 'get',
                url: '/api/case_nature/index',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        $('#case_nature_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
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

