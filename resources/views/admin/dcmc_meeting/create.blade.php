@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <form id="" action="{{url('admin/dcmc_meeting/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New DCMC Meeting</h4>
                    </div>
                    <style>
                        .has-label label {
                            color: #000000;
                            font-size: 1rem;
                        }
                    </style>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-12 col-md-12">
                                <div class="form-group has-label">
                                    <label>
                                        Title
                                    </label>
                                    <input class="form-control" name="title"  value="{{old('title')}}" type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" value="{{old('date')}}" name="date" type="date"  required="true" />
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
                                    <input class="form-control" name="description"  value="{{old('description')}}" type="text" required="true" />
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

