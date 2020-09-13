<?php

namespace App\Http\Controllers\adminka;

use App\Brend;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $brand= Brend::get();
        return view('admin.brand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where("xanut","xanut")->get();
        $brand = Brend::all();
        return view('admin.brand-add',compact('brand',"user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
//        dd($request);
        $input= $request->all();
        if($request->hasFile('posters')){
            $files = $request->file('posters');
            $image = [];
            foreach ($files as $file ) {
                $file_name = rand(1,9999).$file->getClientOriginalName();
                array_push($image,$file_name);
                $file->move(public_path() . '/images/', $file_name);
            }
            $input['posters'] = json_encode($image);

        }else{
            return redirect()->back();
        }
        $product = new Brend();
        $product->fill($input);
        $product->save();
        return redirect()->route('brand.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function show(Brend $brend)
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
        $brand = Brend::find($id);
        return view('admin.brand-edit',compact('brand'));
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

        $files = $request->except('_token','_method');
        $img = [];
        if(isset($files['posters'])){
            foreach ($files['posters'] as $file){
                $imgName = rand(1,20). $file->getClientOriginalName();
                array_push($img,$imgName);
                $file->move(public_path() . '/images/',$imgName);
            }
            $files['posters']= json_encode($img);
        }
//        $request->title = fill()
        $prod = Brend::find($id);
        $prod->update($files);
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brend::destroy($id);
        return redirect()->back();
    }
    public function brand($id){

       $products= Product::where("brend_id","=",$id)->get();
        return view('admin.brandIndex',compact('products'));
    }
}
