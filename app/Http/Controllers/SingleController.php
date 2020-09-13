<?php

namespace App\Http\Controllers;

use App\Brend;
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
use App\Top;
use App\SubCategory;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function AMsingle($id,Request $request)
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

        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $check = Chekout::get();
        $salePriceTop = Top::where('id',$id)->first();
        $salePrice = Product::where('id',$id)->first();
        $brands = Brend::where("user_id",$salePrice->brend_id)->first();
        $categ = Category::where("id",$salePrice->category_id)->first();
        $subcateg = SubCategory::where("id",$salePrice->subcategory_id)->first();
//        dd($subcateg);
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
        $curse = $request->curse;

        $products = Top::get();
        $idProduct = Product::get();
        $product = Product::find($id);
        $rrr = $product->category_id;
        $like = Product::where('category_id',$rrr)->paginate(10);
//        dd($like);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("AM.single-product",
            compact("products","header","categ","subcateg","brands",'finelPriceRU',"curse","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","finelPriceAM","finelPriceEN","check","like"));
    }
    public function RUsingle($id,Request $request)
    {
        $categoriesArr = [

        ];

        $categories = Category::get();
        foreach ($categories as $category)
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
//        dd($curse);
            $text = IndexText::get();
            $contact= Contact::get();
            $footer = Footer::get();
            $promo = Promo::get();
            $check = Chekout::get();
            $salePriceTop = Top::where('id',$id)->first();
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
            $curse = $request->curse;
            $like = Product::where('category_id',$id)->get();
            $products = Top::get();
            $idProduct = Product::get();
            $product = Product::find($id);
            $header = Header::get();
            $logo = Logo::get();
            $sliders = Slider::get();
        return view("RU.single-product",
            compact("products","curse","header","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","finelPriceAM","finelPriceRU","finelPriceEN","check","like"));
    }
    }
    public function ENsingle($id,$curse,Request $request)
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
//        dd($curse);
        $text = IndexText::get();
        $contact= Contact::get();
        $footer = Footer::get();
        $promo = Promo::get();
        $check = Chekout::get();
        $salePriceTop = Top::where('id',$id)->first();
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
        $curse = $request->curse;
        $like = Product::where('category_id',$id)->get();
        $products = Top::get();
        $idProduct = Product::get();
        $product = Product::find($id);
        $header = Header::get();
        $logo = Logo::get();
        $sliders = Slider::get();
        return view("EN.single-product",
            compact("products","header","curse","idProduct","logo","sliders","footer","contact","text","categoriesArr","promo","product","finelPriceAM","finelPriceRU","finelPriceEN","check","like"));
    }}
