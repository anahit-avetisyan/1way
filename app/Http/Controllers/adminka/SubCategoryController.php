<?php

namespace App\Http\Controllers\adminka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\SubCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::get("id");
        $subcategorys = SubCategory::with('category')->orderby('is_sort','ASC')->get();

        return view('admin.subcategory',compact('subcategorys',"categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view("admin.subcategory-add",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "titleAM"=>"required",
            "titleRU"=>"required",
            "titleEN"=>"required"
        ]);
        $subcategory = new SubCategory();
        $subcategoriesOrder = SubCategory::orderby('is_sort','DESC')->first();


        $subcategory->is_sort = $subcategoriesOrder->is_sort + 1;
        $subcategory->category_id=$request["category_id"];
        $subcategory->titleAM = $request["titleAM"];
        $subcategory->titleRU = $request["titleRU"];
        $subcategory->titleEN = $request["titleEN"];
        $letestSlug = SubCategory::whereRaw("slug RLIKE '^{$subcategory->slug}(-[0-9]*)?$^'")->latest("id")->value("slug");
        $subcategory->save();
        return redirect()->route( 'subcategory.index');
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

    public function up($id)
    {

        $category = SubCategory::where('id',$id)->first();
        $categorySort = $category->is_sort ;
        $categoryChanged = SubCategory::where('is_sort',$categorySort+1)->first();

        SubCategory::where('id',$id)->update(['is_sort' => $categorySort +1]);
        if(isset($categoryChanged)){
            SubCategory::where('id',$categoryChanged->id)->update(['is_sort' => $categorySort]);
        }

        $categories = Category::get("id");
        $subcategorys = SubCategory::with('category')->orderby('is_sort','ASC')->get();

        return view('admin.subcategory',compact('subcategorys',"categories"));

    }
    public function down($id)
    {
        $category = SubCategory::where('id',$id)->first();

        $categorySort = $category->is_sort ;
        $categoryChanged = SubCategory::where('is_sort',$categorySort-1)->first();

        SubCategory::where('id',$id)->update(['is_sort' => $categorySort -1]);
        SubCategory::where('id',$categoryChanged->id)->update(['is_sort' => $categorySort]);
        $categories = Category::get("id");
        $subcategorys = SubCategory::with('category')->orderby('is_sort','ASC')->get();

        return view('admin.subcategory',compact('subcategorys',"categories"));
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
        $subcategorys = SubCategory::find($id);
//        dd($category);
        return view('admin.subcategory-edit',compact('category','subcategorys'));
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
        $files = $request->all();
        $prod = SubCategory::find($id);
        $prod->update($files);
        return redirect()->route( 'subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::destroy($id);
        return redirect()->route('subcategory.index');
    }
}
