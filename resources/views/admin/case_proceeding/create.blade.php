@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <form id="RegisterValidation" action="{{url('admin/case_proceeding/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    @include('admin.layouts.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add Case Proceedings</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-12">

                                <div class="form-group has-label">
                                    <label>
                                        Case No
                                        *
                                    </label> <br>
                                    <select class="form-control selectpicker" id="case_main_id"  class="form-control" required
                                            name="case_main_id" title="Select Cases" data-size="7"  data-live-search="true">
                                        <option disabled> Select Cases</option>

                                    </select>
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Proceedings
                                        *
                                    </label>
                                    <input class="form-control" name="proceedings" value="{{old('proceedings')}}"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Date
                                        *
                                    </label>
                                    <input class="form-control datepicker" name="date" value="{{old('date')}}"  type="date" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Participant Confirmed
                                        *
                                    </label>
                                    <input class="form-control " name="participant_confirmed" value="{{old('participant_confirmed')}}"  type="text" required="true" />
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

        $(document).ready(

            $.ajax({
                type:'get',
                url:'/api/case_main/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        $('#case_main_id').append($('<option>', {
                            value: value.id,
                            text: value.case_no+'/'+value.case_year+'/'+value.districts.name
                        }));
                    })
                }
            })
        );
    </script>

@endsection

