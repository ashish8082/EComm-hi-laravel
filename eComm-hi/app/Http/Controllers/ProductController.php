<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::All();
        return view("product",["productdata"=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view("detail",["productlist"=>$data]);
    }
}
