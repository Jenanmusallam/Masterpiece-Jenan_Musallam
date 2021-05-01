@extends('layouts.admenLayout')

@section('content')
<h2 class="intro-y text-lg font-medium mt-10">
  Booking Manage
</h2>
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row m-t-30">
      <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
          <table class="table table-borderless table-data3" style="background-color: lightblue;margin-top: 3rem;">
            <thead>
              <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Total Price</th>
                <th>Status Payment</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Hall Name</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($Booking as $booking)
              <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->date}}</td>
                <td>{{$booking->from_time}}</td>
                <td>{{$booking->total_price}}</td>
                <td>{{$booking->statusPayment}}</td>
                <td>{{$booking->fullName}}</td>
                <td>{{$booking->phone}}</td>
                <td>{{$booking->name}}</td>
                <td>
                  <select id="{{$booking->id}}" name="statusPayment" class="form-control"
                    onchange="statusChange({{$booking->id}})">
                    <option value="Processing">Processing
                    </option>
                    <option value="Paid" {{$booking->statusPayment == "Paid" ? "selected" : ""}}>Paid
                    </option>
                    <option value="Completed" {{$booking->statusPayment == "Completed" ? "selected" : ""}}>Completed
                    </option>
                  </select>
                </td>
                {{-- <td>{{$booking->customer_id}}</td> --}}
              </tr>

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