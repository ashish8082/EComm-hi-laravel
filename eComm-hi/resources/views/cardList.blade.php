@extends('master')
@section('contant')

<div class="custom-product">
     
     <div class="col-md-10">
     <div class="trending-wrapper">
        <h4> Cart List</h4>
        <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>   
            @foreach($products as $item)
                <div class="row search-item cart-list-devider">
                    <div class="col-md-4">
                     <a href="/detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="trending-image" alt="...">
                     </a>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h6>{{$item->descripation}}</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove from cart</a>
                    </div>
                </div>
            @endforeach
            <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>   
        
        </div>
   
     </div>
 </div>
 </div>
@endsection  