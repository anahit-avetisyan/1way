<?php

namespace App\Http\Controllers\adminka;;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys= Category::orderby('is_sort','ASC')->get();
        return view('admin.category',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category-add');
    }

    public function up($id)
    {

        $category = Category::where('id',$id)->first();
        $categorySort = $category->is_sort ;
        $categoryChanged = Category::where('is_sort',$categorySort+1)->first();

        Category::where('id',$id)->update(['is_sort' => $categorySort +1]);
        Category::where('id',$categoryChanged->id)->update(['is_sort' => $categorySort]);
        $categorys= Category::orderby('is_sort','ASC')->get();
        return view('admin.category',compact('categorys'));

    }
    public function down($id)
    {
        $category = Category::where('id',$id)->first();
        $categorySort = $category->is_sort ;
        $categoryChanged = Category::where('is_sort',$categorySort-1)->first();

        Category::where('id',$id)->update(['is_sort' => $categorySort -1]);
        Category::where('id',$categoryChanged->id)->update(['is_sort' => $categorySort]);
        $categorys= Category::orderby('is_sort','ASC')->get();
        return view('admin.category',compact('categorys'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->except('_token');

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
            return redirect()->back();
        }

        $product = new Category();
        $categories = Category::orderby('is_sort','DESC')->first();


        $product->fill($input);
        $product->is_sort = $categories->is_sort + 1;
        $product->save();
        return redirect()->route('category.index');
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
        $category= Category::find($id);
        return view('admin.category-edit',compact('category'));

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
        $category = Category::where('id',$id)->first();
        if(isset($files['posters'])){
            $img =  json_decode($category->posters, true);
            foreach ($files['posters'] as $file){
                $imgName = rand(1,20). $file->getClientOriginalName();
                array_push($img,$imgName);
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('images/' .$imgName));

            }
            $files['posters']= json_encode($img);
        }
        $prod = Category::find($id);
        $prod->update($files);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category.index');
    }
}
