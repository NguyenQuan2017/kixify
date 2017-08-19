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

Route::get('/',['as'=>'trangchu','uses'=>'PageController@home']);
Route::get('/about',['as'=>'about','uses'=>'PageController@about']);
Route::get('/release',['as'=>'release','uses'=>'PageController@release']);
Route::get('/view-product',['as'=>'view-product','uses'=>'PageController@view_product']);
Route::get('/search',['as'=>'search','uses'=>'PageController@search_result']);
Route::get('/newest',['as'=>'newest','uses'=>'PageController@newest']);
Route::get('/product',['as'=>'product','uses'=>'PageController@product']);
Route::get('/buyer',['as'=>'buyer','uses'=>'PageController@buyer']);
Route::get('/faq',['as'=>'faq','uses'=>'PageController@faq']);
Route::get('/privacy',['as'=>'privacy','uses'=>'PageController@privacy']);
Route::get('/contact',['as'=>'contact','uses'=>'PageController@contact']);
Route::get('/terms-user',['as'=>'terms-user','uses'=>'PageController@terms_user']);
Route::get('/reviews',['as'=>'reviews','uses'=>'PageController@reviews']);
Route::get('/sell',['as'=>'sell','uses'=>'PageController@sell']);
Route::get('/user/register',['as'=>'login-register','uses'=>'PageController@login_signup']);




Route::get('/login',['as'=>'login','uses'=>'Admin\LoginController@getlogin']);
Route::post('/login',['as'=>'postLogin','uses'=>'Admin\LoginController@postLogin']);

Route::group(['prefix'=>'admin'],function(){
	Route::get('/dashboard',['as'=>'dashboard','uses'=>'Admin\AdminController@dashboard']);
	Route::group(['prefix'=>'category'],function(){

		Route::get('/list',['as'=>'category-list','uses'=>'Admin\CategoryController@listCategory']);
		Route::get('/add',['as'=>'category-add','uses'=>'Admin\CategoryController@getAddCategory']);
		Route::post('/add',['as'=>'category-add-post','uses'=>'Admin\CategoryController@postAddCategory']);
		Route::get('/edit/{id}',['as'=>'category-edit','uses'=>'Admin\CategoryController@getEditCategory']);
		Route::post('/edit',['as'=>'post-category-edit','uses'=>'Admin\CategoryController@postEditCategory']);
		Route::get('/delete-category/{id}',['as'=>'delete-category','uses'=>'Admin\CategoryController@deleteCategory']);

	});	
		
		//Product
	Route::group(['prefix'=>'product'],function(){
		
		Route::get('/list',['as'=>'product-list','uses'=>'Admin\ProductController@getListProduct']);
		Route::get('/add',['as'=>'product-add','uses'=>'Admin\ProductController@getAddProduct']);
		Route::post('/add',['as'=>'post-product-add','uses'=>'Admin\ProductController@postAddProduct']);

	});

});

