<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

    	return view('pages/trangchu');
    }

    public function about(){

    	return view('pages/about');
    }

    public function release(){

    	return view('pages/release');
    }
    public function view_product(){
    	return view('pages/view-product');
    }
    public function search_result(){

        return view('pages/search_result');
    }
    public function newest(){

        return view('pages/newest');
    }
    public function product(){

        return view('pages/product/product');
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
}
