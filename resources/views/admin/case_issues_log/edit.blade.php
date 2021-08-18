@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" action="{{url('admin/case_issues_log/update',$entry_to_respond->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Update Case Issues</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-6">
                                <div class="form-group has-label">
                                    <label>
                                        Case No
                                        *
                                    </label> <br>
                                    <select class="form-control selectpicker" id="case_main_id"  class="form-control" required
                                            name="case_main_id" title="Select Case No" data-size="7"  data-live-search="true">
                                        <option disabled> Select Cases</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Issue
                                        *
                                    </label>
                                    <input class="form-control" name="issue" value="{{$entry_to_respond->issue}}"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" name="date" value="{{$entry_to_respond->date}}"   type="date" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        File Name
                                        *
                                    </label>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select File</span>
                                      <input type="file" name="file_name">
                                    </span>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                           data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>

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

        var case_main_id = <?php echo $entry_to_respond->case_main_id; ?>;

        $(document).ready(
            $.ajax({
                type:'get',
                url:'/api/case_main/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        var selectedData = (case_main_id === value.id);
                        $('#case_main_id').append($('<option>', {
                            selected: selectedData,
                            value: value.id,
                            text: value.case_no+'/'+value.case_year+'/'+value.districts.name
                        }));
                    })
                    $(".selectpicker").selectpicker("refresh")
                }
            })

        );
    </script>

@endsection

