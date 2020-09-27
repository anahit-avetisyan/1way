<?php

namespace App\Http\Controllers;

use App\Finish;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class FinishController extends Controller
{
    //========================================================================================
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function StoreAM(Request $request,$id) {

     if(Auth::user()!=null){
         $quantity = $request->quantity;
         $id = $id;
         $name = $request->name;
         $surname = $request->surname;
         $phone = $request->phone;
         $color = $request->color;
         $prod = Product::where("id",$id)->first();
         $posters = $prod->posters;
         $nkar = json_encode($posters);
         $code = $prod->code;
         $titleAM = $prod->titleAM;
         $size = $request->size;
         $address = $request->address;
         $city = $request->city;
         $payment = $request->payment;

         if ($prod->sale == null) {
             $finelPriceAM = $prod->priceAM;
             $finelPriceRU = $prod->priceRU;
             $finelPriceEN = $prod->priceEN;
         }else {
             $saleNumber = $prod->sale * $prod->priceAM / 100;
             $finelPriceAM = $prod->priceAM - $saleNumber;
             $saleNumber = $prod->sale * $prod->priceRU / 100;
             $finelPriceRU = $prod->priceRU - $saleNumber;
             $saleNumber = $prod->sale * $prod->priceEN / 100;
             $finelPriceEN = $prod->priceEN - $saleNumber;
         }

         $data = $prod->quantity - $request->quantity;
         $prod->quantity = $data;
         $prod->save();
         Product::find($id)->update((array)$prod);
         $product = new Finish();
         $product->user_id = Auth::user()->id;
         $product->name = $name;
         $product->surname = $surname;
         $product->phone = $phone;
         $product->address = $address;
         $product->city = $city;
         $product->payment = $payment;
         $product->titleAM = $titleAM;
         $product->quantity = $quantity;
         $product->posters = $request->posters;
         $product->priceAM = $finelPriceAM * $quantity;
         $product->priceRU = $finelPriceRU * $quantity;
         $product->priceEN = $finelPriceEN * $quantity;
         $product->color = $color;
         $product->size = $size;
         $product->code = $code;
         $product->posters = $nkar;
         $product->save();
         $curse = 0;
         return response()->json([
             'success' => true

         ], 200); // Status code here
     }else{
         return response()->json([

             'success' => false

         ], 200); // Status code here
     }

    }
    //========================================================================================
    public function StoreRU(Request $request,$id) {


        $quantity = $request->quantity;
        $id = $id;
        $name = $request->name;
        $surname = $request->surname;
        $phone = $request->phone;
        $color = $request->color;
        $prod = Product::where("id",$id)->first();
        $code = $prod->code;
        $titleRU = $prod->titleAM;
        $size = $request->size;
        $address = $request->address;
        $city = $request->city;
        $payment = $request->payment;

        if ($prod->sale == null) {
            $finelPriceAM = $prod->priceAM;
            $finelPriceRU = $prod->priceRU;
            $finelPriceEN = $prod->priceEN;
        }else {
            $saleNumber = $prod->sale * $prod->priceAM / 100;
            $finelPriceAM = $prod->priceAM - $saleNumber;
            $saleNumber = $prod->sale * $prod->priceRU / 100;
            $finelPriceRU = $prod->priceRU - $saleNumber;
            $saleNumber = $prod->sale * $prod->priceEN / 100;
            $finelPriceEN = $prod->priceEN - $saleNumber;
        }


        $product = new Finish();
        $product->name = $name;
        $product->surname = $surname;
        $product->phone = $phone;
        $product->address = $address;
        $product->city = $city;
        $product->payment = $payment;
        $product->titleAM = $titleRU;
        $product->quantity = $quantity;
        $product->posters = $request->posters;
        $product->priceAM = $finelPriceRU * $quantity;
        $product->color = $color;
        $product->size = $size;
        $product->code = $code;
        dd($product);
        $product->save();
        $curse = 1;
        return redirect()->route('RU.index',compact("curse"));

    }
    //========================================================================================
    public function StoreEN(Request $request,$id) {

        $quantity = $request->quantity;
        $id = $id;
        $name = $request->name;
        $code = $request->code;
        $surname = $request->surname;
        $phone = $request->phone;
        $color = $request->color;
        $prod = Product::where("id",$id)->first();
        $titleEN = $prod->titleAM;
        $code = $prod->code;
        $size = $request->size;
        $address = $request->address;
        $city = $request->city;
        $payment = $request->payment;

        if ($prod->sale == null) {
            $finelPriceAM = $prod->priceAM;
            $finelPriceRU = $prod->priceRU;
            $finelPriceEN = $prod->priceEN;
        }else {
            $saleNumber = $prod->sale * $prod->priceAM / 100;
            $finelPriceAM = $prod->priceAM - $saleNumber;
            $saleNumber = $prod->sale * $prod->priceRU / 100;
            $finelPriceRU = $prod->priceRU - $saleNumber;
            $saleNumber = $prod->sale * $prod->priceEN / 100;
            $finelPriceEN = $prod->priceEN - $saleNumber;
        }


        $product = new Finish();
        $product->name = $name;
        $product->surname = $surname;
        $product->phone = $phone;
        $product->address = $address;
        $product->city = $city;
        $product->payment = $payment;
        $product->titleAM = $titleEN;
        $product->quantity = $quantity;
        $product->posters = $request->posters;
        $product->priceAM = $finelPriceEN * $quantity;
        $product->color = $color;
        $product->size = $size;
        $product->code = $code;
        $product->save();
        $curse = 2;
        return redirect()->route('EN.index',compact("curse"));
    }
    //========================================================================================


}
