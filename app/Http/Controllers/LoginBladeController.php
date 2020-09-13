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
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LoginBladeController extends Controller
{
    public function AMindex(Request $request)
    {
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
        $curse = $request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products1 = Top::get();
        $products = array_dot($products1);
        $products =  Arr::shuffle($products);

        $products2 = Product::whereNotNull('sale')->get();
        $productsSal = array_dot($products2);
        $productsSal =  Arr::shuffle($productsSal);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
//        dd($request);
        return view("layouts.app",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function RUindex(Request $request)
    {
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
        $curse = $request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products1 = Top::get();
        $products = array_dot($products1);
        $products =  Arr::shuffle($products);

        $products2 = Product::whereNotNull('sale')->get();
        $productsSal = array_dot($products2);
        $productsSal =  Arr::shuffle($productsSal);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
//        dd($request);
        return view("RU.index",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function ENindex(Request $request)
    {
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
        $curse = $request->curse;
//        dd($curse);
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $products1 = Top::get();
        $products = array_dot($products1);
        $products =  Arr::shuffle($products);

        $products2 = Product::whereNotNull('sale')->get();
        $productsSal = array_dot($products2);
        $productsSal =  Arr::shuffle($productsSal);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("EN.index",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
}
