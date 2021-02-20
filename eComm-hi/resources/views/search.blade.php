@extends('master')
@section('contant')

<div class="custom-product">
    <div class="row">
     <div class="col-md-4">
         <a href="#">Filter</a>
     </div>
     <div class="col-md-4">
     <div class="trending-wrapper">
        <h4> Result for Products</h4>
            @foreach($products as $item)
            <div class="searched-item">
                <a href="/detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="trending-image" alt="...">
                    <div class="">
                        <h2>{{$item['name']}}</h2>
                        <h5>{{$item['descripation']}}</h5>
                    </div>
                </a>
            </div> 
            @endforeach
        </div>
   
     </div>
 </div>
 </div>
@endsection