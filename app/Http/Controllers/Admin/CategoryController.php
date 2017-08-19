<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{
  public function listCategory(){

  	$title='Category-list';
  	$parent=Category::all();
    $categories=Category::all();
   
  	return view('admin/categories/list',compact('title','parent','categories'));
  }

  public function getAddCategory(){

  	return view('admin/categories/add');

  }

  public function postAddCategory(Request $request){

  	$rules=[
  	'parent_cate'=>'required',
  	'name_cate'=>'required|unique:categories,name_cate'
  	];

  	$messages=[
  	'parent_cate.required'=>'Vui lòng chọn Category',
  	'name_cate.required'=>'Vui lòng nhập Name Category',
  	'name_cate.unique'=>'Name Category exists'

  	];
  	$validator=Validator::make($request->all(),$rules,$messages);
  	if($validator->passes()){

  		$categories=new Category;
  		$categories->name_cate=$request->name_cate;
  		$categories->slug=changeTitle($request->name_cate);
  		$categories->parent_cat=$request->parent_cate;
  		$categories->save();
      return redirect()->route('category-list')->with('messages','Add Success');
  	}
  	else
  	{

  		return redirect()->back()->withErrors($validator);
  	}

  
  }
  public function getEditCategory($id){
    $title="Category-edit";
      $categories=Category::find($id);
      
      $parent=Category::all();
      return view('admin/categories/edit',compact('categories','parent','title'));
    }

    public function postEditCategory(Request $request){

      $rules=[
    'parent_cate'=>'required',
    'name_cate'=>'required'
    ];

    $messages=[
    'parent_cate.required'=>'Vui lòng chọn Category',
    'name_cate.required'=>'Vui lòng nhập Name Category',
    

    ];
    $validator=Validator::make($request->all(),$rules,$messages);
    if($validator->passes()){

      $categories=Category::where('id',$request->cate_id)->first();
      $categories->name_cate=$request->name_cate;
      $categories->slug=changeTitle($request->name_cate);
      $categories->parent_cat=$request->parent_cate;
      $categories->save();
      return redirect()->route('category-list')->with('messages','Update Success');
    }
    else
    {

      return redirect()->back()->withErrors($validator);
    }

  
    }



   public function deleteCategory($id){

    $parent=Category::where('parent_cat',$id)->count();
    if($parent ==0){
      $cate=Category::find($id);
      $cate->delete($id);
      return redirect()->route('category-list')->with('messages','Delete Success');

    }
    else{
      return redirect()->back()->with('warning','You Can Not Delete Category ');
    }
   } 
}
