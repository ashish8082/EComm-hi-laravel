@extends('master')
@section('contant')

<div class="custom-product">
     
     <div class="col-md-10">
     <div class="trending-wrapper">
        <h4> Order List</h4>
            @foreach($orders as $item)
                <div class="row search-item cart-list-devider">
                    <div class="col-md-4">
                     <a href="/detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="trending-image" alt="...">
                     </a>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h6>Delivary Status: {{$item->status}}</h6>
                            <h6>Payment Status: {{$item->payment_status}}</h6>
                            <h6>Payment Metthod: {{$item->payment_method}}</h6>
                            <h6>Delivary Address: {{$item->address}}</h6>
                            <h6>Price : {{$item->price}} Rs</h6>
                        </div>
                    </div>
                    
                </div>
            @endforeach
           
        </div>
   
     </div>
 </div>
 </div>
@endsection  