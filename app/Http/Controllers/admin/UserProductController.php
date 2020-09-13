<?php

namespace App\Http\Controllers\admin;;

use App\Brend;
use App\Category;
use App\Product;
use App\SubCategory;
use App\Top;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use function Sodium\add;

class UserProductController extends Controller
{
    public function index($id)

    {
        $category = Category::get();
        $top = Top::get();
        $subcategory= SubCategory::get();
        $products= Product::where("user_id",$id)->get();
//        dd($products);
        return view('user.user-products',compact('products',"subcategory","top","category"));
    }
    public function create()
    {
        $category = Category::get();
        $brand = Brend::all();
        $subcategory = SubCategory::get();
        return view('user.user-products-add',compact('subcategory','brand',"category"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fff = [];
        $ggg=Brend::get("user_id");
        for ($i=0;$i<count($ggg);$i++){
            ($ggg[$i]->user_id);
            array_push($fff,$ggg[$i]->user_id);
        }
        $ooo=false;
        for ($i=0;$i<count($fff);$i++){
            if($request->brend_id == $fff[$i]){
                $ooo = true;
                $input= $request->all();
                $input['size'] = serialize($request->size);
                $input['sizeName'] = $request->sizeName;
                $input['brend_id'] = $request->brend_id;
                $input['category_id'] = $request->category_id;
                $input['subcategory_id'] = $request->subcategory_id;
                $input['color'] = serialize($request->color);
                if($request->hasFile('posters')){
                    $files = $request->file('posters');
                    $image = [];
                    foreach ($files as $file ) {
                        $file_name = rand(1,9999).$file->getClientOriginalName();
                        array_push($image,$file_name);
                        $file->move(public_path() . '/images/', $file_name);
                    }
                    $input['posters'] = json_encode($image);
                    $id = $request->user_id;
                }else{
                    $id = $request->user_id;
                    return redirect()->route('user-product',compact('id'))->with(session()->flash('alert-danger', 'Ապրանքը Ավելացված չէ'));
                }
                $product = new Product();
                $product->brend_id = $request->brend_id;
                $product->category_id = $request->category_id;
                $product->subcategory_id = $request->subcategory_id;
                $product->sizeName = $request->sizeName;
                $product->fill($input);
                $product->save();
                $id = $request->user_id;
                return redirect()->route('user-product',compact('id'))->with(session()->flash('alert-success', 'Ապրանքը Ավելացված է'));            }
        }
            return redirect()->back()->with(session()->flash('alert-danger', 'Ձեր Բռենդը Դեռ Գրանցված չէ'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::get();
        $brand = Brend::all();
        $product = Product::find($id);
        $subcategory = SubCategory::all();
        return view('user.user-products-edit',compact('product','subcategory','brand',"category")
        );
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
          $prod = Product::find($id);
          $prod->update($files);
          $id=$request->user_id;
          return redirect()->route('user-product',compact("id"))->with(session()->flash('alert-success', 'Ապրանքը Թարմացվաժ է'));;
      }


      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id,$user_id)
      {
          Product::destroy($id);
          return redirect()->back()->with(session()->flash('alert-success', 'Ապրանքը Ջնջված է'));;
      }
    public function ajax($id){
        $sub = SubCategory::where("category_id",$id)->pluck('titleAM','id');
        return json_encode($sub);

    }
    public function way($id){
        $sub = SubCategory::where("category_id",$id)->pluck('titleAM','id');
        return json_encode($sub);

    }
}
