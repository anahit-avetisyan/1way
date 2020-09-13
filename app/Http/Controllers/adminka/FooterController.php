<?php

namespace App\Http\Controllers\adminka;;

use App\Category;
use App\Footer;
use App\Icon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icon = Icon::get();
        $footer = Footer::get();
        return view("admin.footer",compact("footer","icon"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icon = Icon::get();
        return view('admin.footer-add',compact("icon"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        {{dd($request);}}
        $data = $request->except("_token");
        $footer= new Footer();
        $footer->fill ($data);
        $footer->save();
        return redirect()->route('footer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
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
        $icon = Icon::get();
        $footer= Footer::find($id);
        return view('admin.footer-edit',compact('footer',"icon"));
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
        $data =$request->except('_token','_method');
        Footer::find($id)->update($data);
        return redirect()->route( 'footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Footer::destroy($id);
        return redirect()->route('footer.index');
    }
}
