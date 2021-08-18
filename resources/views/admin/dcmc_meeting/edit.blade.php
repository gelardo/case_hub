@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <form action="{{url('admin/dcmc_meeting/update',$entry_to_respond->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card ">

                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Update Users Information</h4>
                    </div>
                    <div class="card-body ">
                            <div class="form-group has-label">
                                <label>
                                    Title
                                </label>
                                <input class="form-control" name="title"  value="{{$entry_to_respond->title}}" type="text" required="true" />
                            </div>
                            <div class="form-group has-label">
                                <label>
                                    Date
                                    *
                                </label>
                                <input class="form-control datepicker" value="{{$entry_to_respond->date}}"name="date" type="date"  required="true" />
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
                                    Description
                                    *
                                </label>
                                <input class="form-control" name="description"  value="{{$entry_to_respond->title}}" type="text" required="true" />
                            </div>
                            <div class="form-group has-label">
                                <label>
                                    File
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
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var district_id = <?php echo $entry_to_respond->district_id; ?>;
        $(document).ready(
            $.ajax({
                type:'get',
                url:'/api/district/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        var selectedData = (district_id === value.id)
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

