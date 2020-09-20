<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Favorite;
use App\Footer;
use App\Header;
use App\IndexText;
use App\Logo;
use App\Product;
use App\Promo;
use App\Slider;
use App\SubCategory;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function StoreAMDemo($id) {
        $favorite  = Product::where('id', $id)->get();
        $id = $id;

        return redirect()->route('AM.single',compact('id',"favorite"));
    }
    //========================================================================================
    public function StoreRUDemo($id) {
        $favorite  = Product::where('id', $id)->get();
        $id = $id;
        return redirect()->route('RU.single',compact('id',"favorite"));
    }
    //========================================================================================
    public function StoreENDemo($id) {
        $favorite  = Product::where('id', $id)->get();
        $id = $id;
        return redirect()->route('EN.single',compact('id',"favorite"));
    }
    //========================================================================================
    public function StoreAM($id,$user_id,$curse,Request $request) {

        $favorite  = Product::where('id', $id)->get();
        $id = $id;

        if (isset($check[0]->sale)){
            $saleNumber = $favorite[0]->sale * $favorite[0]->priceAM / 100;
            $productPrice = $favorite[0]->priceAM - $saleNumber;
        } else {
            $productPrice = $favorite[0]->priceAM;
        }
        $product = new Favorite();
        $product->fill($favorite[0]->getAttributes());
        $product->user_id = $user_id;
        $product->finalPrice = $productPrice;
        $product->product_id = $id;
        $product->save();
        return response()->json([
            'success' => true
        ]);
        return redirect()->route('AM.single',compact('id','curse'))->with(session()->flash('alert-success', 'Ավելացված է'));;

    }
    //========================================================================================
    public function StoreRU($id,$user_id,Request $request) {
        $favorite  = Product::where('id', $id)->get();
        $id = $id;
        $curse = $request->curse;
        if (isset($check[0]->sale)){
            $saleNumber = $favorite[0]->sale * $favorite[0]->priceAM / 100;
            $productPrice = $favorite[0]->priceAM - $saleNumber;
        } else {
            $productPrice = $favorite[0]->priceAM;
        }
        $product = new Favorite();
        $product->fill($favorite[0]->getAttributes());
        $product->user_id = $user_id;
        $product->finalPrice = $productPrice;
        $product->product_id = $id;
        $product->save();
        return redirect()->route('RU.single',compact('id','curse'));
    }
    //========================================================================================
    public function StoreEN($id,$user_id,Request $request) {
        $favorite  = Product::where('id', $id)->get();
        $id = $id;
        $curse = $request->curse;
        if (isset($check[0]->sale)){
            $saleNumber = $favorite[0]->sale * $favorite[0]->priceAM / 100;
            $productPrice = $favorite[0]->priceAM - $saleNumber;
        } else {
            $productPrice = $favorite[0]->priceAM;
        }
        $product = new Favorite();
        $product->fill($favorite[0]->getAttributes());
        $product->user_id = $user_id;
        $product->finalPrice = $productPrice;
        $product->product_id = $id;
        $product->save();
        return redirect()->route('EN.single',compact('id','curse'));
    }
    //========================================================================================
    public function indexAM($id,Request $request) {
        $favorite  = Favorite::where('user_id', $id)->get();
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
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.favorite", compact('favorite',"curse","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
    //========================================================================================
    public function indexRU($id,Request $request) {
        $favorite  = Favorite::where('user_id', $id)->get();
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
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("RU.favorite", compact('favorite',"curse","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
    //========================================================================================
    public function indexEN($id,Request $request) {
        $favorite  = Favorite::where('user_id', $id)->get();
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
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("EN.favorite", compact('favorite',"curse","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
}
