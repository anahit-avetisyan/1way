<?php

namespace App\Http\Controllers;

use App\Category;
use App\Chekout;
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
use App\Top;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class ChekoutController extends Controller
{
    public function indexAM($id,Request $request){
//        dd(1);
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

        $quantity=$request->quantity;
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $check = Chekout::where('user_id',$id)->get();
        $allPriceAM = 0;
        $allPriceRU = 0;
        $allPriceEN = 0;
        foreach ($check as $key =>  $checkoutPrice){
            $allPriceAm[$key] =+ $checkoutPrice->priceAM;
            $allPriceRu[$key] =+ $checkoutPrice->priceRU;
            $allPriceEn[$key] =+ $checkoutPrice->priceEN;

            $allPriceAM = $allPriceAM +  $allPriceAm[$key];
            $allPriceRU = $allPriceRU +  $allPriceRu[$key];
            $allPriceEN = $allPriceEN +  $allPriceEn[$key];

        }
        return view("AM.checkout", compact("curse","quantity",'check','allPriceAM','allPriceRU','allPriceEN',"products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
//------------------------------------------------------------------
    public function indexRU($id,Request $request){
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
        $quantity=$request->quantity;
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $check = Chekout::where('user_id',$id)->get();
        $allPriceAM = 0;
        $allPriceRU = 0;
        $allPriceEN = 0;
        foreach ($check as $key =>  $checkoutPrice){
            $allPriceAm[$key] =+ $checkoutPrice->priceAM;
            $allPriceRu[$key] =+ $checkoutPrice->priceRU;
            $allPriceEn[$key] =+ $checkoutPrice->priceEN;

            $allPriceAM = $allPriceAM +  $allPriceAm[$key];
            $allPriceRU = $allPriceRU +  $allPriceRu[$key];
            $allPriceEN = $allPriceEN +  $allPriceEn[$key];

        }
        return view("RU.checkout", compact("curse","quantity",'check','allPriceAM','allPriceRU','allPriceEN',"products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
//------------------------------------------------------------------
    public function indexEN($id,Request $request){
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
        $quantity=$request->quantity;
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $check = Chekout::where('user_id',$id)->get();
        $allPriceAM = 0;
        $allPriceRU = 0;
        $allPriceEN = 0;
        foreach ($check as $key =>  $checkoutPrice){
            $allPriceAm[$key] =+ $checkoutPrice->priceAM;
            $allPriceRu[$key] =+ $checkoutPrice->priceRU;
            $allPriceEn[$key] =+ $checkoutPrice->priceEN;

            $allPriceAM = $allPriceAM +  $allPriceAm[$key];
            $allPriceRU = $allPriceRU +  $allPriceRu[$key];
            $allPriceEN = $allPriceEN +  $allPriceEn[$key];

        }
        return view("EN.checkout", compact("curse","quantity",'check','allPriceAM','allPriceRU','allPriceEN',"products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
//========================================================================
//========================================================================
    public function StoreAM($id, $user_id,Request $request) {

        $check  = Product::where('id', $id)->get();
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPriceEN = $check[0]->priceEN - $saleNumber;
        } else {
            $productPriceEN = $check[0]->priceEN;
        }

        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceAM / 100;
            $productPriceAM = $check[0]->priceAM - $saleNumber;
        } else {
            $productPriceAM = $check[0]->priceAM;
        }
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceRU / 100;
            $productPriceRU = $check[0]->priceRU - $saleNumber;
        } else {
            $productPriceRU = $check[0]->priceRU;
        }
        $size =$request->size;
        $color =$request->color;
//        $qunatity =$request->qunatity;
//        dd($request);
        $curse = $request->curse;
        $product = new Chekout();
        $product->fill($check[0]->getAttributes());
        $product->user_id = $user_id;
        $product->priceEN = $productPriceEN;

        $product->priceRU = $productPriceRU;
        $product->size = $size;
        $product->color = $color;
//        $product->qunatity = $qunatity;
        // dd($product);
        $product->save();

        return redirect()->route('AM.single',compact('id','curse'))->with(session()->flash('alert-success', 'Ավելացված է Զամբյուղում'));;
    }
//------------------------------------------------------------------------------
    public function StoreRU($id, $user_id) {
        $check  = Product::where('id', $id)->get();
        $id = $id;
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPriceEN = $check[0]->priceEN - $saleNumber;
        } else {
            $productPriceEN = $check[0]->priceEN;
        }

        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceAM / 100;
            $productPriceAM = $check[0]->priceAM - $saleNumber;
        } else {
            $productPriceAM = $check[0]->priceAM;
        }
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceRU / 100;
            $productPriceRU = $check[0]->priceRU - $saleNumber;
        } else {
            $productPriceRU = $check[0]->priceRU;
        }



        $product = new Chekout();
        $product->fill($check[0]->getAttributes());
        $product->user_id = $user_id;
        $product->priceEN = $productPriceEN;
        $product->priceRU = $productPriceRU;
        $product->priceAM = $productPriceAM;
        $product->save();

        return redirect()->route('RU.single',compact('id'));
    }
//-------------------------------------------------------------------------
    public function StoreEN($id, $user_id) {
        $check  = Product::where('id', $id)->get();
        $id = $id;
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPriceEN = $check[0]->priceEN - $saleNumber;
        } else {
            $productPriceEN = $check[0]->priceEN;
        }

        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceAM / 100;
            $productPriceAM = $check[0]->priceAM - $saleNumber;
        } else {
            $productPriceAM = $check[0]->priceAM;
        }
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceRU / 100;
            $productPriceRU = $check[0]->priceRU - $saleNumber;
        } else {
            $productPriceRU = $check[0]->priceRU;
        }



        $product = new Chekout();
        $product->fill($check[0]->getAttributes());
        $product->user_id = $user_id;
        $product->priceEN = $productPriceEN;
        $product->priceRU = $productPriceRU;
        $product->priceAM = $productPriceAM;
        $product->save();

        return redirect()->route('EN.single',compact('id'));
    }
//==========================================================================
//==========================================================================
    public function sttoreAM($id,Request $request) {
//        dd($request);
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
        if ($request->quantity == null){
            $quantity=1;
            $color = $request->color;
            $size = $request->size;
            $curse=$request->curse;
            $text = IndexText::get();
            $contact= Contact::get();
            $footer = Footer::get();
            $promo = Promo::get();
            $products = Product::get();
            $header = Header::get();
            $logo = Logo::get();
            $sliders = Slider::get();
            $check= Product::find($id);
            $salePriceTop = Top::where('product_id',$id)->first();
            $salePrice = Product::where('id',$id)->first();
            if ($salePriceTop != null) {
                if ($salePriceTop->sale == null) {
                    $finelPriceAM = $salePriceTop->priceAM;
                }else {
                    $saleNumber = $salePriceTop->sale * $salePriceTop->priceAM / 100;
                    $finelPriceAM = $salePriceTop->priceAM - $saleNumber;
                }
            } else {
                if ($salePrice->sale == null) {
                    $finelPriceAM = $salePrice->priceAM;
                }else {
                    $saleNumber = $salePrice->sale * $salePrice->priceAM / 100;
                    $finelPriceAM = $salePrice->priceAM - $saleNumber;
                }
            }
            if ($salePriceTop != null) {
                if ($salePriceTop->sale == null) {
                    $finelPriceRU = $salePriceTop->priceRU;
                }else {
                    $saleNumber = $salePriceTop->sale * $salePriceTop->priceRU / 100;
                    $finelPriceRU = $salePriceTop->priceRU - $saleNumber;
                }
            } else {
                if ($salePrice->sale == null) {
                    $finelPriceRU = $salePrice->priceRU;
                }else {
                    $saleNumber = $salePrice->sale * $salePrice->priceRU / 100;
                    $finelPriceRU = $salePrice->priceRU - $saleNumber;
                }
            }
            if ($salePriceTop != null) {
                if ($salePriceTop->sale == null) {
                    $finelPriceEN = $salePriceTop->priceEN;
                }else {
                    $saleNumber = $salePriceTop->sale * $salePriceTop->priceEN / 100;
                    $finelPriceEN = $salePriceTop->priceEN - $saleNumber;

                }
            } else {
                if ($salePrice->sale == null) {
                    $finelPriceEN = $salePrice->priceEN;

                }else {

                    $saleNumber = $salePrice->sale * $salePrice->priceEN / 100;
                    $finelPriceEN = $salePrice->priceEN - $saleNumber;
                }
            }
            return view("AM.cart",
                compact("curse","quantity",'color','size','check',"finelPriceAM","finelPriceRU","finelPriceEN","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));

        }
        else {
        $quantity=$request->quantity;
        $color = $request->color;
        $size = $request->size;
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $check= Product::find($id);
        $salePriceTop = Top::where('product_id',$id)->first();
        $salePrice = Product::where('id',$id)->first();


//        dd($request);
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceAM = $salePriceTop->priceAM;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceAM / 100;
                $finelPriceAM = $salePriceTop->priceAM - $saleNumber;
            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceAM = $salePrice->priceAM;
            }else {
                $saleNumber = $salePrice->sale * $salePrice->priceAM / 100;
                $finelPriceAM = $salePrice->priceAM - $saleNumber;
            }
        }
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceRU = $salePriceTop->priceRU;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceRU / 100;
                $finelPriceRU = $salePriceTop->priceRU - $saleNumber;
            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceRU = $salePrice->priceRU;
            }else {
                $saleNumber = $salePrice->sale * $salePrice->priceRU / 100;
                $finelPriceRU = $salePrice->priceRU - $saleNumber;
            }
        }
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceEN = $salePriceTop->priceEN;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceEN / 100;
                $finelPriceEN = $salePriceTop->priceEN - $saleNumber;

            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceEN = $salePrice->priceEN;

            }else {

                $saleNumber = $salePrice->sale * $salePrice->priceEN / 100;
                $finelPriceEN = $salePrice->priceEN - $saleNumber;
            }
        }
        return view("AM.cart",
        compact("curse","quantity",'color','size','check',"finelPriceAM","finelPriceRU","finelPriceEN","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }}
////========================================================================================
    public function sttoreRU($id,Request $request) {
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
//        dd($request);
        $quantity=$request->quantity;
        $color = $request->color;
        $size = $request->size;
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $check= Product::find($id);
        $salePriceTop = Top::where('product_id',$id)->first();
        $salePrice = Product::where('id',$id)->first();



        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceAM = $salePriceTop->priceAM;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceAM / 100;
                $finelPriceAM = $salePriceTop->priceAM - $saleNumber;
            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceAM = $salePrice->priceAM;
            }else {
                $saleNumber = $salePrice->sale * $salePrice->priceAM / 100;
                $finelPriceAM = $salePrice->priceAM - $saleNumber;
            }
        }
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceRU = $salePriceTop->priceRU;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceRU / 100;
                $finelPriceRU = $salePriceTop->priceRU - $saleNumber;
            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceRU = $salePrice->priceRU;
            }else {
                $saleNumber = $salePrice->sale * $salePrice->priceRU / 100;
                $finelPriceRU = $salePrice->priceRU - $saleNumber;
            }
        }
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceEN = $salePriceTop->priceEN;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceEN / 100;
                $finelPriceEN = $salePriceTop->priceEN - $saleNumber;

            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceEN = $salePrice->priceEN;

            }else {

                $saleNumber = $salePrice->sale * $salePrice->priceEN / 100;
                $finelPriceEN = $salePrice->priceEN - $saleNumber;
            }
        }
        return view("RU.cart",
            compact("curse","quantity",'color','size','check',"finelPriceAM","finelPriceRU","finelPriceEN","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
////========================================================================================
    public function sttoreEN($id,Request $request) {
        $categoriesArr = [

        ];
//        dd($request);
        $categories = Category::get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $quantity=$request->quantity;
        $color = $request->color;
        $size = $request->size;
        $curse=$request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products = Product::get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $check= Product::find($id);
        $salePriceTop = Top::where('product_id',$id)->first();
        $salePrice = Product::where('id',$id)->first();



        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceAM = $salePriceTop->priceAM;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceAM / 100;
                $finelPriceAM = $salePriceTop->priceAM - $saleNumber;
            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceAM = $salePrice->priceAM;
            }else {
                $saleNumber = $salePrice->sale * $salePrice->priceAM / 100;
                $finelPriceAM = $salePrice->priceAM - $saleNumber;
            }
        }
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceRU = $salePriceTop->priceRU;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceRU / 100;
                $finelPriceRU = $salePriceTop->priceRU - $saleNumber;
            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceRU = $salePrice->priceRU;
            }else {
                $saleNumber = $salePrice->sale * $salePrice->priceRU / 100;
                $finelPriceRU = $salePrice->priceRU - $saleNumber;
            }
        }
        if ($salePriceTop != null) {
            if ($salePriceTop->sale == null) {
                $finelPriceEN = $salePriceTop->priceEN;
            }else {
                $saleNumber = $salePriceTop->sale * $salePriceTop->priceEN / 100;
                $finelPriceEN = $salePriceTop->priceEN - $saleNumber;

            }
        } else {
            if ($salePrice->sale == null) {
                $finelPriceEN = $salePrice->priceEN;

            }else {

                $saleNumber = $salePrice->sale * $salePrice->priceEN / 100;
                $finelPriceEN = $salePrice->priceEN - $saleNumber;
            }
        }
        return view("EN.cart",
            compact("curse","quantity",'color','size','check',"finelPriceAM","finelPriceRU","finelPriceEN","products","header","logo","sliders","footer","contact","text","categoriesArr","promo"));
    }
//========================================================================================
//========================================================================================
    public function destroyCheckoutAM($id){
        Chekout::destroy($id);
        $user = Auth::user()->id;
        $curse=0;
        return redirect()->back();
    }
//========================================================================================
    public function destroyCheckoutRU($id){
        Chekout::destroy($id);
        $user = Auth::user()->id;
        return redirect()->route('RU.checkout-index',compact("user"));
    }
//========================================================================================
    public function destroyCheckoutEN($id){
        Chekout::destroy($id);
        $user = Auth::user()->id;
        return redirect()->route('EN.checkout-index',compact("user"));
    }
//========================================================================================
    public function deleteFavorite($id){
        Favorite::destroy($id);
        $user = Auth::user()->id;
        $curse = 0;
        return redirect()->route('AM.favorite',["id"=>$user,"curse"=>$curse]);
    }
//========================================================================================
    public function favoriteAM($id, $user_id) {
        $check  = Product::where('id', $id)->get();
        $id = $id;
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPriceEN = $check[0]->priceEN - $saleNumber;
        } else {
            $productPriceEN = $check[0]->priceEN;
        }

        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceAM / 100;
            $productPriceAM = $check[0]->priceAM - $saleNumber;
        } else {
            $productPriceAM = $check[0]->priceAM;
        }
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceRU / 100;
            $productPriceRU = $check[0]->priceRU - $saleNumber;
        } else {
            $productPriceRU = $check[0]->priceRU;
        }
        $curse = 0;
        $product = new Chekout();
        $product->fill($check[0]->getAttributes());
        $product->user_id = $user_id;
        $product->priceEN = $productPriceEN;
        $product->priceRU = $productPriceRU;
        $product->priceAM = $productPriceAM;
        $product->save();

        return redirect()->back();
    }
//========================================================================================
    public function favoriteRU($id, $user_id) {
        $check  = Product::where('id', $id)->get();
        $id = $id;
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPriceEN = $check[0]->priceEN - $saleNumber;
        } else {
            $productPriceEN = $check[0]->priceEN;
        }

        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceAM / 100;
            $productPriceAM = $check[0]->priceAM - $saleNumber;
        } else {
            $productPriceAM = $check[0]->priceAM;
        }
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceRU / 100;
            $productPriceRU = $check[0]->priceRU - $saleNumber;
        } else {
            $productPriceRU = $check[0]->priceRU;
        }



        $product = new Chekout();
        $product->fill($check[0]->getAttributes());
        $product->user_id = $user_id;
        $product->priceEN = $productPriceEN;
        $product->priceRU = $productPriceRU;
        $product->priceAM = $productPriceAM;
        $product->save();

        return redirect()->route('RU.single',compact('id'));
    }
//========================================================================================
    public function favoriteEN($id, $user_id) {
        $check  = Product::where('id', $id)->get();
        $id = $id;
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPriceEN = $check[0]->priceEN - $saleNumber;
        } else {
            $productPriceEN = $check[0]->priceEN;
        }

        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceAM / 100;
            $productPriceAM = $check[0]->priceAM - $saleNumber;
        } else {
            $productPriceAM = $check[0]->priceAM;
        }
        if (isset($check[0]->sale)){
            $saleNumber = $check[0]->sale * $check[0]->priceRU / 100;
            $productPriceRU = $check[0]->priceRU - $saleNumber;
        } else {
            $productPriceRU = $check[0]->priceRU;
        }



        $product = new Chekout();
        $product->fill($check[0]->getAttributes());
        $product->user_id = $user_id;
        $product->priceEN = $productPriceEN;
        $product->priceRU = $productPriceRU;
        $product->priceAM = $productPriceAM;
        $product->save();

        return redirect()->route('EN.single',compact('id'));
    }
}
