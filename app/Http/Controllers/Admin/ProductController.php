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
    		'image'=>'image|mimes:jpg,png',
    		'cate'=>'required',
    		'size'=>'required'
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
    		'image.image'=>'Vui lòng chọn hình ảnh',
    		'image.mimes'=>'Hình ảnh không đúng định dạng',
    		'cate'=>'Vui lòng chọn danh mục',
    		'size.required'=>'Vui lòng chọn kích thước'

    	];
    	$validator=Validator::make($request->all(),$rules,$messages);

    	if($validator->passes()){

    		$products=new Product;
    		$products->name_product=$request->name_product;
    		$products->title=$request->title;
    		$products->price=$request->price;
    		$products->release_date=$request->release_date;
    		$products->release_style=$request->release_style;
    		$products->style_code=$request->style_code;
    		$products->description=$request->description;
    		$products->content=$request->content;
    		$products->image=$request->image;
    		// $products->save();

    		$product_id=$products->id;
    		$product_images=new ProductImage;
    		$product_images->image=$request->fproductimage;
    		$product_id=$product_id;
    		// $product_images->save();
    		// $product=Product:find($id);
      //       $cate_id=products->categories()->attach($id);
      //       dd($cate_id);
    		// $cateproducts= new CateProduct;
    		// $product
    	}
    	else{

    		return redirect()->back()->withErrors($validator);
    	}
    }
}
