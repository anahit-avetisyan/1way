<?php

namespace App\Http\Controllers\adminka;;

use App\Brend;
use App\Category;
use App\Product;
use App\SubCategory;
use App\Top;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use function Sodium\add;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    public function index()
//    {   $category = Category::all()->pluck('titleAM','id');
//        $top = Top::get();
//        $subcategory= SubCategory::get();
//        $products= Product::get();
//        return view('admin.products',compact('products',"subcategory","top","category"));
//    }
    public function index(Request $request)
    {

        $category = Category::get();
        $top = Top::get();
        $subcategory= SubCategory::get();
        if(!is_null($request->search)){
            $products= Product::where('brend_id',$request->search)->get();
        }else{
            $products= Product::get();
        }

        $dgf=Category::get();
        $brends = Brend::get();

        return view('admin.products',compact('products',"subcategory","brends","top","category","dgf"));
    }

    public function productData(Request $request,$id)
    {
        $product = Product::with('getSubCategory','category','brend')->where('id',$id)->first()->toArray();

        if(!is_null($product['size'])){
            $product['size'] =  unserialize($product['size']);
        }
        if(!is_null($product['color'])){
            $product['color'] =  unserialize($product['color']);
        }
        return response()->json([
            'product' => $product,
            'success' => true
        ]);
    }
    public function searchWithBrand(Request $request,$id)
    {
        $category = Category::get();
        $top = Top::get();
        $subcategory= SubCategory::get();
        $products = Product::where('brend_id',$id)->get();
        $dgf=Category::get();
        $brends = Brend::get();
        return view('admin.products',compact('products',"subcategory","brends","top","category","dgf"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        $brand = Brend::all();
        $subcategory = SubCategory::get();

        return view('admin.product-add',compact('subcategory','brand',"category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();

        if(!isset($input['availability'])||!isset($input['category_id'])||!isset($input['subcategory_id'])||!isset($input['titleAM'])||!isset($input['quantity'])||!isset($input['sizeName'])||!isset($input['descriptionAM'])||!isset($input['priceAM'])||!isset($input['priceRU'])||!isset($input['priceEN'])){
            $category = Category::get();
            $brand = Brend::all();
            $subcategory = SubCategory::get();

            return redirect()->route('product.index')->with(session()->flash('alert-danger', 'Ապրանքը Ավելացված չէ,ոչ բոլոր պարտադիր դաշտերն են լրացված'));
        }

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
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('images/' .$file_name));
            }
            $input['posters'] = json_encode($image);

        }else{
            return redirect()->route('product.index')->with(session()->flash('alert-danger', 'Ապրանքը Ավելացված չէ'));
        }
        $product = new Product();
        $product->brend_id = $request->brend_id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->sizeName = $request->sizeName;
        $product->fill($input);
        $product->save();
        return redirect()->route('product.index')->with(session()->flash('alert-success', 'Ապրանքը Ավելացված է'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $subcategory = SubCategory::all();
        $product = Product::with('getSubCategory','category','brend')->where('id',$id)->first();

        if(!is_null($product->size)){
            $product->size =  unserialize($product->size);
        }
        if(!is_null($product->color)){
            $product->color =  unserialize($product->color);
        }
        return view('admin.product-edit',compact('product','subcategory','brand',"category")
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
        $product = Product::where('id',$id)->first();

        if(isset($files['posters'])){
            $img =  json_decode($product->posters, true);
            foreach ($files['posters'] as $file){
                $imgName = rand(1,20). $file->getClientOriginalName();
                array_push($img,$imgName);
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('images/' .$imgName));


            }
            $files['posters']= json_encode($img);
        }

        if(isset($files['size']) && count($files['size'])>0){
            $files['size'] =  serialize($files['size']);
        }
        if(isset($files['color']) && count($files['color'])>0){
            $files['color'] =  serialize($files['color']);
        }
        $prod = Product::find($id);
        $prod->update($files);
        return redirect()->route('product.index')->with(session()->flash('alert-success', 'Ապրանքը Թարմացվաժ է'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.index')->with(session()->flash('alert-success', 'Ապրանքը Ջնջված է'));;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function top($id,Request $request) {
        $check  = Product::where('id', $id)->get();
        if ($check[0]->sale != null){
            $saleNumber = $check[0]->sale * $check[0]->priceEN / 100;
            $productPrice = $check[0]->priceEN - $saleNumber;
        } else {
            $productPrice = $check[0]->priceEN;
        }
        $product = new Top();
        $product->fill($check[0]->getAttributes());
        $product->product_id = $id;
        $product->finalPrice = $productPrice;
        $product->save();
        return redirect()->route('product.indexTop')->with(session()->flash('alert-success', 'Ապրանքը Ավելացված է ԹՈՓ-ում'));
    }
    public function indexTop()
    {
        $subcategory= SubCategory::get();
        $products= Top::get();
        return view('admin.productsTop',compact('products',"subcategory"));
    }

    public function destroyTop($id)
    {
        Top::destroy($id);
        return redirect()->route('product.indexTop');
    }
    public function ajax($id){
        $sub = SubCategory::where("category_id",$id)->pluck('titleAM','id');
        return json_encode($sub);

    }
    public function single($id){

        $product = Product::where('id',$id)->first();
        if ($product != null) {
            if ($product->sale == null) {
                $finelPriceAM = $product->priceAM;
            }else {
                $saleNumber = $product->sale * $product->priceAM / 100;
                $finelPriceAM = $product->priceAM - $saleNumber;
            }
        } else {
            if ($product->sale == null) {
                $finelPriceAM = $product->priceAM;
            }else {
                $saleNumber = $product->sale * $product->priceAM / 100;
                $finelPriceAM = $product->priceAM - $saleNumber;
            }
        }

        if ($product != null) {
            if ($product->sale == null) {
                $finelPriceRU = $product->priceRU;
            }else {
                $saleNumber = $product->sale * $product->priceRU / 100;
                $finelPriceRU = $product->priceRU - $saleNumber;
            }
        } else {
            if ($product->sale == null) {
                $finelPriceRU = $product->priceRU;
            }else {
                $saleNumber = $product->sale * $product->priceRU / 100;
                $finelPriceRU = $product->priceRU - $saleNumber;
            }
        }

        if ($product != null) {
            if ($product->sale == null) {
                $finelPriceEN = $product->priceEN;
            }else {
                $saleNumber = $product->sale * $product->priceEN / 100;
                $finelPriceEN = $product->priceEN - $saleNumber;

            }
        } else {
            if ($product->sale == null) {
                $finelPriceEN = $product->priceEN;

            }else {

                $saleNumber = $product->sale * $product->priceEN / 100;
                $finelPriceEN = $product->priceEN - $saleNumber;
            }
        }
        return view('admin.single',compact('product',"finelPriceAM"));
    }
}
