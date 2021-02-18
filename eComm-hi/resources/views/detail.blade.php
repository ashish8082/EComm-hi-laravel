@extends('master')
@section('contant')

<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img  class="detail-img"src="{{$productlist['gallery']}}" alt="image dettails" >
            </div>
            <div class="col-sm-6">
           <a href="/">Go Back</a>
           <h2>{{$productlist['name']}}</h2>
           <h3>price :{{$productlist['price']}}</h3>
           <p>Details: {{$productlist['descripation']}}</p>
           
           <button class="btn btn-primary mb-2">Add To cart</button>
           <br>
           <button class="btn btn-success mb-5">Buy Now</button>
            </div>

        </div>

  <div>

@endsection