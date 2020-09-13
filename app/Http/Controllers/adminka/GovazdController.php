<?php

namespace App\Http\Controllers\adminka;;

use App\Category;
use App\Govazd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class GovazdController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo= Govazd::get();
        return view('admin.govazd',compact("promo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.govazd-add');
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
            return redirect()->route('govazd.create');
        }
//        dd();
        $product = new Govazd();
        $product->fill($input);
        $product->save();
        return redirect()->route('govazd.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Govazd  $govazd
     * @return \Illuminate\Http\Response
     */
    public function show(Govazd $govazd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Govazd  $govazd
     * @return \Illuminate\Http\Response
     */
    public function edit(Govazd $govazd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Govazd  $govazd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Govazd $govazd)
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
        Govazd::destroy($id);
        return redirect()->route('govazd.index');
    }
}
