<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
    	//$products = product::all();
    	$products = DB::table('products')->simplePaginate(4);

    	//return $products;

    	return view('index',compact('products'));

    }
}
