@extends('master')
@section('contant')

<div class="custom-product col-md-6 offset-md-3 mt-5">
    
<table class="table table-bordered">
  
    <tbody>
    <tr>
      <td>Price</td>
      <td>{{$total}} Rs </td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>0 Rs</td>
    </tr>
    <tr>
      <td>Delivary</td>
      <td>100 Rs</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>{{$total+100}} Rs</td>
    </tr>
  </tbody>
</table>   
    <form action="/orderplace" method="POST">
        @csrf
    <div class="form-group">
        <textarea class="form-control"placeholder="Enter Your address" name="address"></textarea>
    </div>
    <div class="form-group">
         <p> <input type="radio" name="payment" class="ml-5" value="cash"> <span> Online Payment </span></p>
         <p> <input type="radio" name="payment" class="ml-5" value="cash"> <span> EMI Payment </span></p>
         <p> <input type="radio" name="payment" class="ml-5"value="cash"> <span> Payment On  Delivery</span></p>
  </div>
    <button type="submit" class="btn btn-primary ml-5 mb-5">Order Now</button>
</form>
     
 </div>
@endsection  