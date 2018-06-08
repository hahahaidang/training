<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catelogy;
use App\product;
use Illuminate\Support\Facades\DB;

class CatelogyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $catelogies = DB::table('catelogies')->paginate(8);
        //return $catelogies;
        return view('admin.catelogy',compact('catelogies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createcatelogy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        //return $request->all();
        $name = $request->input('name');
        $description = $request->input('description');
        //return $description;
        $catelogy = new catelogy;
        $catelogy->name = $name;
        $catelogy->description = $description;
        $catelogy->save();
        return redirect('catelogy/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catelogy = catelogy::find($id);
        //return $catelogy;
        //dd($catelogy);
        return view('admin.editcatelogy',compact('catelogy'));
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
        //return $request;
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $catelogy = new catelogy;
        $catelogy = catelogy::find($id);
        $catelogy->name = $name;
        $catelogy->description = $description;
        $catelogy->save();
        return redirect('/catelogy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catelogy = catelogy::find($id);
        $product = product::where('id_catelogy',$id)->get();
        //dd(count($product));
        if(count($product)>0){
            //dd($product);
            session()->flash('message','Key exist');
            return redirect('/catelogy');
        }
        $catelogy->delete();
        session()->flash('message','Delete successfully');
        return redirect('/catelogy');
        
    }
}
