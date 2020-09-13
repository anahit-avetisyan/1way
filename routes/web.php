<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//------------------------------------------------------------------------------
Route::get('/',"IndexController@AMppp")->name("AM.ppp")->where('curse', '0');
Route::get('/{curse}',"IndexController@AMindex")->name("AM.index");
//Route::get('/{curse}/ru',"IndexController@RUindex")->name("RU.index")->where('curse', '[0-9]+');
//Route::get('/{curse}/en',"IndexController@ENindex")->name("EN.index")->where('curse', '[0-9]+');
Route::get('/searchIndex/{curse}',"IndexController@searchAM")->name("AM.search");
//Route::get('/ru/searchIndex/{curse}',"IndexController@searchRU")->name("RU.search");
//Route::get('/en/searchIndex/{curse}',"IndexController@searchEN")->name("EN.search");
//------------------------------------------------------------------------------
Route::get('/product/single/{id}/{curse}',"SingleController@AMsingle")->name('AM.single');
//Route::get('/ru/product/single/{id}/{curse}',"SingleController@RUsingle")->name('RU.single');
//Route::get('/en/product/single/{id}/{curse}',"SingleController@ENsingle")->name('EN.single');
//Route::get('/searchSingle/{curse}',"SingleController@searchAM")->name("AM.searchSingle");
//Route::get('/ru/searchSingle/{curse}',"SingleController@searchRU")->name("RU.searchSingle");
//Route::get('/en/searchSingle/{curse}',"SingleController@searchEN")->name("EN.searchSingle");
//------------------------------------------------------------------------------
Route::get('/product/shop/{id}/{curse}',"ShopController@AMsingle")->name('AM.shop-id')->where('curse', '[0-9]+');
Route::get('/product/shop2/{id}/{curse}',"ShopController@AMsingle2")->name('AM.shop-id2')->where('curse', '[0-9]+');
//Route::get('/ru/product/shop/{id}/{curse}',"ShopController@RUsingle")->name('RU.shop-id')->where('curse', '[0-9]+');
//Route::get('/en/product/shop/{id}/{curse}',"ShopController@ENsingle")->name('EN.shop-id')->where('curse', '[0-9]+');
//Route::get('/searchShop/{curse}',"ShopController@searchAM")->name("AM.searchShop");
//Route::get('/ru/searchShop/{curse}',"ShopController@searchRU")->name("RU.searchShop");
//Route::get('/en/searchShop/{curse}',"ShopController@searchEN")->name("EN.searchShop");
////------------------------------------------------------------------------------
Route::get('/checkout-index/{id}15867/{curse}',"ChekoutController@indexAM")->name('AM.checkout-index')->middleware('auth');
//Route::get('/ru/checkout-index/{id}',"ChekoutController@indexRU")->name('RU.checkout-index')->middleware('auth');
//Route::get('/en/checkout-index/{id}',"ChekoutController@indexEN")->name('EN.checkout-index')->middleware('auth');
//Route::get('/searchCheckout-index/{curse}',"ChekoutController@searchCHAM")->name("AM.searchCheckout-index")->middleware('auth','user');
//Route::get('/ru/searchCheckout-index/{curse}',"ChekoutController@searchCHRU")->name("RU.searchCheckout-index")->middleware('auth','user');
//Route::get('/en/searchCheckout-index/{curse}',"ChekoutController@searchCHEN")->name("EN.searchCheckout-index")->middleware('auth','user');
Route::post("/checkout-index/destroy/{id}15867/736482366/576567575", "ChekoutController@destroyCheckoutAM")->name("checkout.destroyAM");
//Route::post("ru/checkout-index/destroy/{id}/736482366/576567575", "ChekoutController@destroyCheckoutRU")->name("checkout.destroyRU");
//Route::post("en/checkout-index/destroy/{id}/736482366/576567575", "ChekoutController@destroyCheckoutEN")->name("checkout.destroyEN");


Route::get('/{curse}/about','IndexController@AMabout')->name('AM.about');
Route::get('/{curse}/contactUs','IndexController@AMcontact')->name('AM.contact');
//-------------------------------------------------------------------------------
Route::get('/checkout/{id}/{user_id}/{curse}',"ChekoutController@StoreAM")->name('AM.checkout');
//Route::get('/ru/checkout/{id}/{user_id}',"ChekoutController@StoreRU")->name('RU.checkout');
//Route::get('/en/checkout/{id}/{user_id}',"ChekoutController@StoreEN")->name('EN.checkout');
Route::get('/checkout/favorite/{id}/{user_id}/{curse}',"ChekoutController@favoriteAM")->name('AM.favoriteCheck');
//Route::get('ru/checkout/favorite/{id}/{user_id}/{curse}',"ChekoutController@favoriteRU")->name('RU.favoriteCheck');
//Route::get('en/checkout/favorite/{id}/{user_id}/{curse}',"ChekoutController@favoriteEN")->name('EN.favoriteCheck');
Route::get('/change',"FinishController@changeAM")->name('AM.change');
//------------------------------------------------------------------------------------
Route::get('/success',"IndexController@success")->name('success');
Route::get('/failed',"IndexController@failed")->name('failed');
//------------------------------------------------------------------------------------
Route::get('/cart/{id}/{curse}',"ChekoutController@sttoreAM")->name('AM.cart');
//Route::get('/ru/cart/{id}/{curse}',"ChekoutController@sttoreRU")->name('RU.cart');
//Route::get('/en/cart/{id}/{curse}',"ChekoutController@sttoreEN")->name('EN.cart');
//Route::get('/searchCart/{curse}',"ChekoutController@searchAM")->name("AM.searchCart")->middleware('auth','user');
//Route::get('/ru/searchCart/{curse}',"ChekoutController@searchRU")->name("RU.searchCart")->middleware('auth','user');
//Route::get('/en/searchCart/{curse}',"ChekoutController@searchEN")->name("EN.searchCart")->middleware('auth','user');
//--------------------------------------------------------------------------------------
Route::post('/finish/{id}',"FinishController@StoreAM")->name('AM.finish');
//Route::post('/ru/finish/{id}',"FinishController@StoreRU")->name('RU.finish');
//Route::post('/en/finish/{id}',"FinishController@StoreEN")->name('EN.finish');
//------------------------------------------------------------------------------
Route::get("/shop", function() {return view("home");})->name("shop");
//------------------------------------------------------------------------------
Route::get("/favorite/store/demo/tttt/{id}/{curse}", 'FavoriteController@StoreAMDemo')->name("AM.favorite-store-demo")->middleware('auth');
//Route::get("ru/favorite/store/demo/tttt/{id}/{curse}", 'FavoriteController@StoreRUDemo')->name("RU.favorite-store-demo")->middleware('auth');
//Route::get("en/favorite/store/demo/tttt/{id}/{curse}", 'FavoriteController@StoreENDemo')->name("EN.favorite-store-demo")->middleware('auth');
//---------------------------------------------------------------------------------------------
Route::get("/favorite/store/{id}/{user_id}/{curse}", 'FavoriteController@StoreAM')->name("AM.favorite-store")->middleware('auth');
//Route::get("/ru/favorite/store/{id}/{user_id}/{curse}", 'FavoriteController@StoreRU')->name("RU.favorite-store")->middleware('auth');
//Route::get("/en/favorite/store/{id}/{user_id}/{curse}", 'FavoriteController@StoreEN')->name("EN.favorite-store")->middleware('auth');
//---------------------------------------------------------------------------------------------------------
Route::get("/favorite/{id}/{curse}", 'FavoriteController@indexAM')->name("AM.favorite")->middleware('auth');
//Route::get("RU/favorite/{id}/{curse}", 'FavoriteController@indexRU')->name("RU.favorite")->middleware('auth');
//Route::get("EN/favorite/{id}/{curse}", 'FavoriteController@indexEN')->name("EN.favorite")->middleware('auth');
//Route::get('/searchFavorite/{curse}',"FavoriteController@AMsearch")->name("AM.searchFavorite")->middleware('auth');
//Route::get('/ru/searchFavorite/{curse}',"FavoriteController@RUsearch")->name("RU.searchFavorite")->middleware('auth');
//Route::get('/en/searchFavorite/{curse}',"FavoriteController@ENsearch")->name("EN.searchFavorite")->middleware('auth');
//------------------------------------------------------------------------------------
Auth::routes(["verify"=>true]);
Route::get('{curse}/verify','Auth\RegisterController@verifyUser')->name('verify.user');
//------------------------------------------------------------------------------------
  Route::get('/{curse}/login/login', 'IndexController@Loginindex')->name('login.login');

Route::get('/{curse}/1way.am/shop/cooperate/register/','IndexController@car')->name('login.cooperate');

//  Route::post('/{curse}/login/', 'IndexController@Loginindex')->name('login');
  Route::get('/{curse}/register/login', 'IndexController@Registerindex')->name('register.register');
//  Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");
//  Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');
//=======================================================================================================
Route::get('/login/google','GoogleController@redirectToProvider')->name('google');
Route::get('/login/google/callback','GoogleController@handelProviderCallback')->name('googlecallback');
//=======================================================================================================
Route::get('/login/facebook','FacebookController@redirectToProviderFacebook')->name('facebook');
Route::get('/login/facebook/callback','FacebookController@handelProviderCallback')->name('facebookcallback');
//======================================================================================================

Route::get('/myprofile/5411818949{user_id}18444dfsdf5478489','ProfileController@index')->name('profile')->middleware('auth');;
Route::post('/myprofile/avatar/{user_id}','ProfileController@avatar')->name('profile.avatar')->middleware('auth');;
Route::post('/myprofile/edit/{user_id}','ProfileController@edit')->name('edit.profile')->middleware('auth');;


Route::get('/tops/product/{curse}','IndexController@AMtops')->name('AM.top');
//Route::get('ru/tops/product/{curse}','IndexController@RUtops')->name('RU.top');
//Route::get('en/tops/product/{curse}','IndexController@ENtops')->name('EN.top');
//=======================================================================================================
Route::get('/sale/product/{curse}','IndexController@AMsale')->name('AM.sale');
//Route::get('ru/sale/product/{curse}','IndexController@RUsale')->name('RU.sale');
//Route::get('en/sale/product/{curse}','IndexController@ENsale')->name('EN.sale');
//========================================================================================
Route::get('/brand/product/{curse}/{brend_id}','BrandController@AMbrand')->name('AM.brand');
//Route::get('ru/brand/product/{curse}/{brend_id}','BrandController@RUbrand')->name('RU.brand');
//Route::get('en/brand/product/{curse}/{brend_id}','BrandController@ENbrand')->name('EN.brand');
//========================================================================================
Route::post('favorite/{id}/destroy',"ChekoutController@deleteFavorite")->name('destroyFavorite');
//------------------------------------------------------------------------------------
Route::get("{curse}/admin.index", function() {
    $products = DB::table("products")->get();
    $finish = DB::table("finishes")->get();
    $user = DB::table("users")->get();
    return view("admin.index",compact("products","user","finish"));})->name("admin.index")->where("curse",0);
//------------------------------------------------------------------------------------
Route::group(['middleware' => ['auth','admin'],'namespace' => 'adminka'],function(){
    Route::resource('0//slider','SliderController');
    Route::resource('0/category','CategoryController');
    Route::resource('0/product','ProductController');
    Route::get('product-data/{id}','ProductController@productData');
   // Route::get('product-serch-with-brend/{id}','ProductController@searchWithBrand');
    Route::post('0/product/top/{id}','ProductController@top')->name("product.top");
    Route::get('0/product/top/777/111','ProductController@indexTop')->name("product.indexTop");
    Route::post("0/product/destroy/53672543672/736482366/576567575/{id}", "ProductController@destroyTop")->name("product.destroyTop");
    Route::resource('0/user','UserController');
    Route::resource('0/logo','LogoController');
    Route::resource('0/contact','ContactController');
    Route::resource('0/header','HeaderController');
    Route::resource('0/footer','FooterController');
    Route::resource('0/finish','FinishController');
    Route::resource('/icon','IconController');
    Route::get('ajax/{category_id}','ProductController@ajax');
    Route::resource('0/indexText','IndexTextController');
    Route::resource('0/subcategory','SubCategoryController');
    Route::resource('0/promo','PromoController');
    Route::resource('0/govazd','GovazdController');
    Route::resource('0/brand','BrendController');
    Route::get('0/product/single/{id}','ProductController@single')->name("product.single");
    Route::get('0/brand/index/{id}/','BrendController@brand')->name("brandIndex");
});
//------------------------------------------------------------------------------------
Route::get('0/user.userindex',  function() {return view("user.userindex");})->name('user.userindex')->middleware('auth','user');
//------------------------------------------------------------------------------------
Route::group(['middleware' => ['auth','user'],'namespace' => 'admin'],function(){
    Route::get("0/user-product/1way/03{id}78", "UserProductController@index")->name("user-product");
    Route::get('0/user-product/create/1way/{category_id}','UserProductController@ajax');
    Route::get("0/user-product/create/1way", "UserProductController@create")->name("user-product-create");
    Route::get('z/{category_id}','UserProductController@ajax');
    Route::get("0/user_product/edit/{id}/z/", "UserProductController@edit")->name("user-product-edit");
    Route::post("0/user-product/update/1way/{id}/736482366", "UserProductController@update")->name("user-product-update");
    Route::post("0/user-product/store/1way/736482366/576567575", "UserProductController@store")->name("user-product-store");
    Route::post("0/user-product/destroy/1way/{id}/{user_id}/delete", "UserProductController@destroy")->name("user-product-destroy");
});
Route::get('/home', 'HomeController@index')->name('home');
