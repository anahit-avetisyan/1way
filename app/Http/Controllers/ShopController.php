<?php

namespace App\Http\Controllers;

use App\Category;
use App\Chekout;
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

class ShopController extends Controller
{
    public function AMsingle($id,$curse,Request $request)
    {
        $categoriesArr = [ ];
        $categories = Category::get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $salePrice = Product::where('id',$id)->first();
        $like = Product::where('subcategory_id',$id)->get();
        $curse = $request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $check = Chekout::get();
        $products = Product::where('subcategory_id',$id)->paginate(30);
        $category = SubCategory::where('id',$id)->get();
        $categ1 = $category[0]->id;
        $idProduct = Product::get();
        $product = Product::find($id);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.shop-id",
            compact("products","category","curse","categ1","header","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","check"));
    }
    public function AMsingle2($id,$curse,Request $request)
    {
        $categoriesArr = [ ];
        $categories = Category::get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $salePrice = Product::where('id',$id)->first();
        $like = Product::where('category_id',$id)->get();
        $curse = $request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $check = Chekout::get();
        $name = Category::where("id",$id)->get();
        $ggg = Product::where("category_id",$id)->paginate(30);
        $category = SubCategory::where('id',$id)->get();
        $idProduct = Product::get();
        $product = Product::find($id);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.shop-id2",
            compact("ggg","name","category","curse","header","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","check"));
    }
    public function RUsingle($id,Request $request)
    {
        $categoriesArr = [ ];
        $categories = Category::get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $salePrice = Product::where('id',$id)->first();
        $like = Product::where('category_id',$id)->get();
        $curse = $request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $check = Chekout::get();
        $products = Product::where('category_id',$id)->paginate(25);
        $category = SubCategory::where('id',$id)->get();
        $categ1 = $category[0]->id;
        $idProduct = Product::get();
        $product = Product::find($id);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("RU.shop-id",
            compact("products","category","curse","categ1","header","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","check"));
    }
    public function ENsingle($id,Request $request)
    {
        $categoriesArr = [ ];
        $categories = Category::get();
        foreach ($categories as $category)
        {
            $categoryArr = [
                'category' => $category,
                'subcategory' => SubCategory::get()->where('category_id', $category->id),
            ];
            array_push($categoriesArr,$categoryArr);
        }
        $salePrice = Product::where('id',$id)->first();
        $like = Product::where('category_id',$id)->get();
        $curse = $request->curse;
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $check = Chekout::get();
        $products = Product::where('category_id',$id)->paginate(25);
        $category = SubCategory::where('id',$id)->get();
        $categ1 = $category[0]->id;
        $idProduct = Product::get();
        $product = Product::find($id);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("EN.shop-id",
            compact("products","category","curse","categ1","header","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","check"));
    }

}
