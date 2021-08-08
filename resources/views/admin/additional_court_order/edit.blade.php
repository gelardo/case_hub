@extends('admin.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" action="{{url('admin/additional_court_order/update',$entry_to_respond->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Update Additional Court Order Information</h4>
                    </div>
                    <div class="card-body ">
                        <div class="form-group has-label">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name"  value="{{$entry_to_respond->name}}" type="text" required="true" />
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Court Orders
                                *
                            </label> <br>
                            <select class="selectpicker" id="court_order_id"  class="form-control" required name="court_order_id"   multiple title="Select Court Order" data-size="7">
                                <option disabled> Select Court Orders</option>

                            </select>
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
        $(document).onload(
            $.ajax({
                type:'get',
                url:'/api/court_order/index',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $.each(data.data,function(key,value){
                        $('#court_order_id').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    })
                }
            })
        );
    </script>

@endsection

