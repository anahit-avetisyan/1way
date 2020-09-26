<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Footer;
use App\Govazd;
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

class IndexController extends Controller
{

    public function AMppp(){
        $curse = 0;
        return redirect()->route("AM.index",$curse);
    }
    public function AMindex(Request $request)
    {
        $categoriesArr = [

        ];

        $categories = Category::orderby('is_sort','ASC')->get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::orderby('is_sort','ASC')->get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $curse = $request->curse;
        $govazd = Govazd::get();
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $productTop = Top::inRandomOrder()->paginate(30);
        $productsSal = Product::whereNotNull('sale')->inRandomOrder()->paginate(50);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
//        dd($request);
        return view("AM.index",
        compact("productTop","govazd","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }

    public function searchAM(Request $request)
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
        $products = Top::get();
        $products2 = Product::whereNotNull('sale')->get();
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $search = $request->search;
//        if ($search == '') {
//            return redirect()->back();
//        } else {
            $products2 = Product::where
            ('titleAM', 'LIKE', '%' . $search . '%')->orWhere
            ('code', 'LIKE', '%' . $search . '%')->orWhere
            ('titleRU', 'LIKE', '%' . $search . '%')->orWhere
                ('titleEN', 'LIKE', '%' . $search . '%')->inRandomOrder()->paginate(30);


//        }
        return view('AM.search', compact("curse",'products2', "products", "header", "logo", "sliders", "footer", "contact", "text", "categoriesArr", "promo"));


    }

    public function Loginindex(Request $request) {
        $categoriesArr = [
        ];
        $categories = Category::paginate(13);
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $curse = $request->curse;
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("auth.login",
            compact("header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function Registerindex(Request $request) {
        $categoriesArr = [
        ];
        $categories = Category::paginate(13);
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $curse = $request->curse;
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("auth.register",
            compact("header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function Resetindex(Request $request) {
        $categoriesArr = [
        ];
        $categories = Category::paginate(13);
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $curse = $request->curse;
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("auth.passwords.reset",
            compact("header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function failed(Request $request)
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
        return view("AM.failed",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function success(Request $request)
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
        return view("AM.success",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function AMtops(Request $request)
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
        $products = Top::inRandomOrder()->paginate(30);
        $productsSal = Product::whereNotNull('sale')->inRandomOrder()->paginate(30);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.top",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function AMsale(Request $request)
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
        $products = Top::inRandomOrder()->paginate(30);
        $productsSal = Product::whereNotNull('sale')->inRandomOrder()->paginate(30);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.sale",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function AMabout(Request $request)
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
        $products = Top::inRandomOrder()->paginate(25);
        $productsSal = Product::whereNotNull('sale')->inRandomOrder()->paginate(25);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.about",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function AMcontact(Request $request)
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
        $products = Top::inRandomOrder()->paginate(25);
        $productsSal = Product::whereNotNull('sale')->inRandomOrder()->paginate(25);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.contact",
            compact("products","productsSal","header","logo","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
    public function car(Request $request) {
        $categoriesArr = [
        ];
        $categories = Category::paginate(13);
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }

        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $curse = $request->curse;
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        $nnn = "xanut";
        return view("auth.1way",
            compact("header","logo","nnn","sliders","footer","contact","text","categoriesArr","promo",'curse'));
    }
}
