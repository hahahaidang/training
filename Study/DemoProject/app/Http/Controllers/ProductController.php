<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\catelogy;
use App\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::paginate(8);
        return view('admin.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catelogies = catelogy::all();
        return view('admin.addproduct',compact('catelogies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'description' => 'required',
            'photo' => 'image|max:1024'
        ]);
        $name = $request->input('name');
        $price = $request->input('price');
        $discount = $request->input('discount');
        $description = $request->input('description');
        $id_catelogy = $request->input('catelogy');

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = str_random(15)."_".$file->getClientOriginalName();
            while(file_exists("img/".$filename)){
                $filename = str_random(15)."_".$file->getClientOriginalName();
            }
            $file->move("img",$filename);
            $filename = "img/".$filename;
            //echo $filename;
            //dd('-----');
        }
        $url = $filename;

        $product = new product;
        $product->name = $name;
        $product->price = $price;
        $product->discount = $discount;
        $product->description = $description;
        $product->id_catelogy = $id_catelogy;
        $product->url = $url;
        //return $request;
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::find($id);
        //return $product;
        return view('detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
