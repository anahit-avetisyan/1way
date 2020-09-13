<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Footer;
use App\Header;
use App\IndexText;
use App\Logo;
use App\Product;
use App\Promo;
use App\Slider;
use App\SubCategory;
use App\Top;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $categoriesArr = [

        ];

        $categories = Category::get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
            $curse = 0;
            $text = IndexText::get();
            $contact= Contact::get();
            $footer = Footer::get();
            $promo = Promo::get();
            $products = Top::get();
            $productsSal = Product::whereNotNull('sale')->get();
            $header = Header::get();
            $logo = Logo::get();
            $sliders = Slider::get();
            //        dd($request);
            return view("AM.profile",
                compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
            }


        public function avatar(Request $request){
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
            $user = Auth::user();
            $user->update($files);
            return redirect()->back();
        }
    public function edit(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->save();
        return redirect()->back();
    }

}
