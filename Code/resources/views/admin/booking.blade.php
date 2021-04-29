@extends('layouts.admenLayout')

@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row m-t-30">
      <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
          <table class="table table-borderless table-data3">
            <thead>
              <tr>
                <th>ID</th>
                <th>Address</th>
                <th>Total Price</th>
                <th>Total Quantity</th>
                <th>Status</th>
                <th>Customer ID</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($Booking as $booking)
              <tr>
                <td>{{$booking["booking"]->id}}</td>
                <td>{{$booking["booking"]->address}}</td>
                <td>{{$booking["booking"]->total_price}}</td>
                <td>{{$booking["booking"]->total_quantity}}</td>
                <td>
                  <select id="{{$booking["booking"]->id}}" name="status" class="form-control"
                    onchange="statusChange({{$booking["booking"]->id}})">
                    <option value="Processing">Processing
                    </option>
                    <option value="Shiping" {{$booking["booking"]->status == "Shiping" ? "selected" : ""}}>Shiping
                    </option>
                    <option value="Completed" {{$booking["booking"]->status == "Completed" ? "selected" : ""}}>Completed
                    </option>
                  </select>
                </td>
                <td>{{$booking["booking"]->customer_id}}</td>
              </tr>
              <tr>
                <td colspan="6">

                  <table class="table table-borderless table-data3">
                    <tr>
                      <th>Product ID</th>
                      <th>Quantity</th>
                    </tr>
                    @foreach ($booking["booking_products"] as $booking_products)
                    <tr>
                      <td>{{$booking_products->product_id}}</td>
                      <td>{{$booking_products->quantity}}</td>
                    </tr>
                    @endforeach
                  </table>
                </td>
                </t>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- END DATA TABLE-->
      </div>
    </div>
  </div>
</div>
<script>
  function statusChange (id){
    var e = document.getElementById(id);
    var status = e.value;
    alert(status)
    document.location.href = `/admin/booking/${id}/${status}`;
  }
  //   $('#status').on('change', function() {
//   alert( this.value );
// });
</script>
@endsection