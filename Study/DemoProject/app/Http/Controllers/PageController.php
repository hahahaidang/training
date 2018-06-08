<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
    	//$products = product::all();
    	$products = DB::table('products')->paginate(8);

    	//return $products;

    	return view('index',compact('products'));

    }

    public function data(){
    	$data = [
    		'name' => 'Akira',
    		'age' => '5'
    	];
    	return response()->json(
    		$data
    	);
    }
}
