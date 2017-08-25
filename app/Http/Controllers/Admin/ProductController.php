<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\CateProduct;
use App\Models\SizeProduct;
use App\Models\ProductImage;
use Validator;
use Carbon\Carbon;
use Input;

class ProductController extends Controller
{
    public function getListProduct(){
    	$title="Product - List";
    	$products=Product::all();
    	
    	return view('admin/products/list',compact('title','products'));
    }

    public function getAddProduct(){
		$title="Product - Add";
    	$cates=Category::all();
    	$sizes=Size::all();
    	return view('admin/products/add',compact('title','cates','sizes'));
    }
    public function postAddProduct(Request $request){

    	$rules=[
    		'name_product'=>'required|unique:products,name_product',
    		'title'=>'required',
    		'price'=>'required',
    		'release_date'=>'required',
    		'release_style'=>'required',
    		'style_code'=>'required',
    		'description'=>'required',
    		'content'=>'required',
    	
    	];
    	$messages=[
    		'name_product.required'=>'Vui lòng nhập tên sản phẩm',
    		'title.required'=>'Vui lòng nhập tiêu đề sản phẩm',
    		'price.required'=>'Vui lòng nhập giá sản phẩm',
    		'release_date.required'=>'Vui lòng nhập ngày phát hành',
    		'release_style.required'=>'Vui lòng nhập kiểu phát hành',
    		'style_code.required'=>'Vui lòng nhập mã code',
    		'description.required'=>'Vui lòng nhập mô tả',
    		'content.required'=>'Vui lòng nhập nội dung',
    		
    	];
    	$validator=Validator::make($request->all(),$rules,$messages);

    	if($validator->passes()){
            $file_img=$request->file('image')->getClientOriginalName();
    		$products=new Product;
    		$products->name_product=$request->name_product;
            $products->slug=changeTitle($request->name_product);
    		$products->title=$request->title;
    		$products->price=$request->price;
    		$products->release_date=Carbon::parse($request->release_date)->format('y/m/d');
    		$products->release_style=$request->release_style;
    		$products->style_code=$request->style_code;
    		$products->description=$request->description;
    		$products->content=$request->content;
    		$products->image=$file_img;
            $request->file('image')->move('public/images/products/',$file_img);
    		$products->save();
            foreach($request->cate as $cate_id){
            $products->categories()->attach($cate_id);
            }
            foreach($request->size as $size_id){
            $products->sizes()->attach($size_id);
            }
            $product_id=$products->id;
            if(Input::hasFile('productimage')){
             
                foreach($request->productimage as $file){
                    if(isset($file)){
                    $product_images=new ProductImage;
                    $product_images->image=$file->getClientOriginalName();
                    $product_images->product_id=$product_id;
                    $file->move('public/images/productDetail/',$file->getClientOriginalName());
                    $product_images->save();

                    }
                }
            }
    		

            return redirect()->route('product-list')->with('messages','Add Success');
    	
    	}
    	else{

    		return redirect()->back()->withErrors($validator);
    	}
    }
}
