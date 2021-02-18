@extends('master')
@section('contant')

<div class="custom-product">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($productdata as $item)
    <div class="carousel-item {{ $item['id']==1?'active':''}}">
    <a href="/detail/{{$item['id']}}">
       <img src="{{$item['gallery']}}" class=" w-100 h-40" alt="...">
        <div class="carousel-caption slider-caption">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['descripation']}}</p>
        </div>
        </a>
     </div>
     @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="trending-wrapper">
        <h3> Trending Products</h3>
            @foreach($productdata as $item)
            <div class="trending-item">
            <a href="/detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="trending-image" alt="..."></a>
                <div class=" ">
                    <h3>{{$item['name']}}</h3>
                </div>
               </div> 
            @endforeach
                
    </div>
    </div>
</div>



@endsection