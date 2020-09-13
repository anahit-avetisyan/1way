<?php

namespace App\Http\Controllers\adminka;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $valid = Validator::make($request->all(),[
             'images'=>'required',
             'images*'=>'image|mimes:jpeg,jpg,png,gif|max:2048'
         ]);
         if($valid ->fails()){
             return redirect()->route('slider.create')->withErrors($valid);
         }

         if($request->hasfile('posters')){
             foreach ($request->file('posters')as $image){
                 $name = time().'-'.$image->getClientOriginalName();

                 $image->move(public_path(). '/images/',$name);
                 $slider['posters'] = json_encode($image);
                 $slider = new Slider();
                 $slider->posters = $name;
                 $slider->save();

             }
         }*/

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
            return redirect()->route('slider.create');
        }
//        dd();
        $slider = new Slider();
        $slider->fill($input);
        $slider->save();
        return redirect()->route('slider.index');

//        $input= $request->except('_token');
//        if($request->hasFile('posters')){
//            $files = $request->file('posters');
//            $image = [];
//            foreach ($files as $file ) {
//                $file_name = rand(1,9999).$file->getClientOriginalName();
//                array_push($image,$file_name);
//                $file->move(public_path() . '/images/', $file_name);
//            }
//            $input['posters'] = json_encode($image);
//        }else{
//            return redirect()->route('product.create');
//        }
////        dd();
//        $product = new Product();
//        $product->fill($input);
//        $product->save();
//        return redirect()->route('product.index');

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
        Slider::destroy($id);
        return redirect()->route('slider.index');
    }

}
