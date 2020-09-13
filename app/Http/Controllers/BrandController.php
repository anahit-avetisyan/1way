<?php

namespace App\Http\Controllers;

use App\Brend;
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
use App\Http\Controllers\Controller;
use Validator;

class BrandController extends Controller
{
    public function AMbrand(Request $request,$curse,$brend_id)
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
        $curse = $curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();

        $product = $brend_id;
        $ttt  =Brend::where("user_id",$brend_id)->get();
        $products1 = Product::where("brend_id",$brend_id)->paginate(30);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.brend",
            compact("products1","product","ttt","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
}
