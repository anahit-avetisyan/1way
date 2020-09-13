<?php

namespace App\Http\Controllers\adminka;;

use App\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo= Promo::get();
        return view('admin.promo',compact("promo"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.promo-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->except('_token');
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
            return redirect()->route('promo.create');
        }
//        dd();
        $product = new Promo();
        $product->fill($input);
        $product->save();
        return redirect()->route('promo.index');
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
        Promo::destroy($id);
        return redirect()->route('promo.index');
    }
}
