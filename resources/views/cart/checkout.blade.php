@extends('layouts.app')


@section('content')
<h2>Checkout</h2>


<h3>Shipping Information</h3>


<form action="{{ route('order.store')}}" method="POST">
    @csrf


    <div class="form-group">
        <label for="Full Name">Full Name</label>
        <input type="text" class="form-control" id="title" name="shipping_fullname" >

      </div>


      <div class="form-group">
        <label for="State">State</label>
        <input type="text" class="form-control" id="title" name="shipping_state" >

      </div>


      <div class="form-group">
        <label for="State">City</label>
        <input type="text" class="form-control" id="title" name="shipping_city" >

      </div>

      <div class="form-group">
        <label for="State">Zip</label>
        <input type="text" class="form-control" id="title" name="shipping_zipcode" >

      </div>

      <div class="form-group">
        <label for="State">Full Address</label>
        <input type="text" class="form-control" id="title" name="shipping_address" >

      </div>

      <div class="form-group">
        <label for="State">Mobile</label>
        <input type="text" class="form-control" id="title" name="shipping_phone" >

      </div>


      <h4>Payment Option</h4>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="payment_method" id="" value="checkedValue" checked>
          Cash on delivery
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="payment_method" id="" value="checkedValue" checked>
          Paypal
        </label>
      </div>



      <button type="submit" class="btn btn-primary mt-3">Place Order</button>



</form>


<!--<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="container">
    <form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >

  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>


@endsection


