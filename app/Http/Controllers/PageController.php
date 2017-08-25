<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use DB;
use Input,Cart,Validator;
use App\User;
use Illuminate\Support\MessageBag;
use Auth;

class PageController extends Controller
{
    public function home(){

        $products=Product::all();
    	return view('pages/trangchu',compact('products'));
    }

    public function about(){

    	return view('pages/about');
    }

    public function upcoming(){

        $products=Product::all();
    	return view('pages/upcoming',compact('products'));
    }

    public function recent(){
         $products=Product::all();
        return view('pages/recent',compact('products'));
    }
    public function view_product($id,$name){

        $products=Product::find($id);
        $image_detail=Product::find($id)->productimage;
     
        $cate=Product::with('categories')->where('id',$id)->get();
        
        $product_cat=Product::all();

    	return view('pages/view-product',compact('products','image_detail','product_cat','cate','cate_product'));
    }
    public function search_result(Request $request){


        $newest_item=DB::table('products')->orderBy('created_at','DESC')->get();
     
        return view('pages/search-result',compact('newest_item'));
    }

    
    public function newest(){

        return view('pages/newest');
    }
    public function product($id,$slug){

        $products=Product::find($id);
        $size_product=Product::with('sizes')->where('id',$id)->get();
         $image_detail=Product::find($id)->productimage;
        return view('pages/product/product',compact('products','image_detail','size_product'));
    }
    public function buyer(){

        return view('pages/buyer');
    }

    public function faq(){

        return view('pages/faq');
    }
    public function privacy(){

        return view('pages/privacy');
    }
    public function contact(){

        return view('pages/contact');
    }
    public function terms_user(){

        return view('pages/terms-user');
    }

    public function reviews(){

        return view('pages/reviews');
    }

    public function sell(){

        return view('pages/sell');
    }

    public function login_signup(){

        return view('pages/login-signup');
    }

    public function addToCard( Request $request,$id){

        $product_buy=Product::find($id);
        $rules=[
        'size'=>'required'  
        ];
        $messages=[
        'size.required'=>'Please choise size'
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->passes()){
        Cart::add(['id'=>$id,'name'=>$product_buy->name_product,'qty'=>1,'price'=>$product_buy->price,'options'=>['img'=>$product_buy->image,'size'=>$request->size]]);
        $content=Cart::content();
        
        return redirect()->route('cart');
        }
        else
        {
            return redirect()->back()->withErrors($validator);
        }
    }

    public function cart(){
        
        $content=Cart::content();
        // dd($content);
        $total=Cart::subtotal();
        
        return view('pages/cart',compact('content','total','products'));
    }

    public function delete_cart($id){
        Cart::remove($id);
        return redirect()->route('cart');
    }

    public function update_cart(){
      if(Request::ajax()){
        echo "oke";
      }
    }

    public function postRegister( Request $request){

        $rules=[
        'name'=>'required',
        'username'=>'required|unique:users,username',
        'password'=>'required',
        'email'=>'required|email|unique:users,email',
        're_password'=>'required|same:password',
        ];
        $messages=[
        'name.required'=>'Please enter your name',
        'username.required'=>'Please enter your username',
        'username.unique'=>'username exists',
        'password.required'=>'Please enter your password ',
        're_password.required'=>'Please enter your re_password',
        're_password.same'=>'Password not same',
        'email.required'=>'Please enter your email',
        'email.email'=>'Email is not correct',
        'email.unique'=>'Email eixsts'
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->passes()){

            $users=new User;
            $users->name=$request->name;
            $users->email=$request->email;
            $users->username=$request->username;
            $users->avatar="";
            $users->password=bcrypt($request->password);
            $users->save();
            return redirect()->route('login-register');

        }
        else{

            return redirect()->back()->withErrors($validator);
        }
    }

    public function postLogin(Request $request){

        $rules=[
            'email'=>'required|email',
            'password'=>'required'
        ];
        $messages=[
            'email.required'=>'Please enter your email',
            'email.email'=>'Email is not correct',
            'password.required'=>'Please enter your password'
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->passes()){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

                return redirect()->route('trangchu');
            }
            else{
                  $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }

        else{

            return redirect()->back()->withErrors($validator);
        }


    }
    public function logout(){
        Auth::logout();
        return redirect()->route('trangchu');
    }
}
