<?php 
use App\Http\Controllers\ProductController;
$total=0;
 if(Session::has('user'))
 {
   $total = ProductController::cartItem();
 }
?> 


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">EComm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorder">Orders</a>
      </li>
      
      <li class="nav-item ml-2">
         <form class="form-inline my-2 my-lg-0" action="/search">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" style="width:500px;" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> 
      </li>
      
    </ul>
   <ul class="navbar-nav">
   <li class="nav-item">
        <a class="nav-link" href="/cartlist" >Cart Item({{$total}})</a></li>
      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
      @else
      <li><a href="/login" class="nav-link">Login</a></li>
      @endif
   </ul>
  </div>
</nav>