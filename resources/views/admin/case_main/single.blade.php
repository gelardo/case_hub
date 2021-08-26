@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="title text-center">{{$entry_to_respond->case_types->name}} Case No: {{ $entry_to_respond->case_no.'/'.$entry_to_respond->case_year}}</h5>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>ID</h6>
                                </td>
                                <td>
                                    <h6> {{ $entry_to_respond->id}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Case No</h6>
                                </td>
                                <td>
                                    <h6> {{ $entry_to_respond->case_no.'/'.$entry_to_respond->case_year}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Case Category</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->case_categories->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Subsequent Case No. / Reference Case No.</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->subsequent_case_no}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Region</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->regions->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Area</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->area}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Branch</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->branch}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Police Station</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->police_stations->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>District</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->districts->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Name of Court</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->courts->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Date of Filing</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->date_of_filing}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Laws Section</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->laws_section}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Allegation</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->allegation}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Amount of Money</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->amount_of_money}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Name of the Complainant</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->complainant_name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Designation of the Complainant</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->complainant_designation}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Phone of the Complainant</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->complainant_contact}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Complainant Email</h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->complainant_email}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Complainant Next Attend </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->complainant_nextattend}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Subsequent Name of the Complainant </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->subsequent_name_of_complainant}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Name of the Accused </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->name_of_accused}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Address of the Accused </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->address_of_accused}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Accused Contact Number </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->phone_of_accused}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Accused Contact Number </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->phone_of_accused}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Status of the Case </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->case_statuses->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Date of Disposed </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->date_of_disposed}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Next Date </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->next_date}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Next Date Fixed For </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->next_date_statuses->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Panel Lawyer Name </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->lawyers->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Panel Lawyer Contact Number </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->lawyers->phone}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Panel Lawyer Contact Number </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->lawyers->phone}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Date of Incident </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->date_of_incident}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Who Identified the Incident First? </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->whoidentified}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Disbursement Date </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->disbursement_date}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Last Date of Cash Receipt </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->last_cash_receipt_date}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Last Order of the Court </h6>
                                </td>
                                <td>
                                    <h6> {{$entry_to_respond->court_orders->name.'/'.$entry_to_respond->additional_court_orders->name}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right text-primary">
                                    <h6>Case Notes </h6>
                                </td>
                                <td>
                                    <h6></h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                   <h5 class="title">Related Document</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <a class="title" target="_blank" href="/{{$entry_to_respond->case_notes}}">{{$entry_to_respond->case_notes}}</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body ">
                    <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                    <ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                                <i class="now-ui-icons objects_umbrella-13"></i>
                                Bills
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                                <i class="now-ui-icons shopping_shop"></i>
                                Issues
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                                <i class="now-ui-icons ui-2_settings-90"></i>
                                Case Logs
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space tab-subcategories">
                        <div class="tab-pane active" id="link7">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-primary">
                                    <th>Bill Date</th>
                                    <th>Bill Amount</th>
                                    <th>Panel Lawyers</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entry_to_respond->billings as $bill)
                                <tr>
                                    <td>
                                        {{$bill->bill_date}}
                                    </td>
                                    <td>
                                        {{$bill->amount}}
                                    </td>
                                    <td>
                                        {{$entry_to_respond->lawyers->name}}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="link8">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-primary">
                                    <th>Date</th>
                                    <th>Issue Log Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entry_to_respond->case_issue_logs as $issue)
                                    <tr>
                                        <td>
                                            {{$issue->date}}
                                        </td>
                                        <td>
                                            {{$issue->issue.'/'}}<a target="_blank" href="/{{$issue->file_name}}">{{$issue->file_name}}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="link9">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-primary">
                                    <th>Date</th>
                                    <th>Case No</th>
                                    <th>Name of Accused</th>
                                    <th>Status of the Case</th>
                                    <th>Next Date</th>
                                    <th>Next Date Fixed For</th>
                                    <th>Participant Requested for Hearing</th>
                                    <th>Participants Confirmed</th>
                                    <th>Case Proceedings</th>
                                    <th>Panel Lawyer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entry_to_respond->case_proceedings as $proceed)
                                    <tr>
                                        <td>
                                            {{$proceed->date}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->case_no.'/'.$entry_to_respond->case_year}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->name_of_accused}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->case_statuses->name}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->next_date}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->next_date_statuses->name}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->lawyers->name.' & '.$entry_to_respond->complainant_name}}
                                        </td>
                                        <td>
                                            {{$proceed->participant_confirmed}}
                                        </td>
                                        <td>
                                            {{$proceed->proceedings}}
                                        </td>
                                        <td>
                                            {{$entry_to_respond->lawyers->name}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
