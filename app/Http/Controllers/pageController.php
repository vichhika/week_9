<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class pageController extends Controller
{
    public function page_inner_page()
    {
        return view('page.inner_page');
    }

    public function page_portfolio_details(){
        return view('page.portfolio_details');
    }

    public function page_home_redirect($id){
        $path = url('/') . $id;
        return Redirect::to($path);
    }

    public function page_sumbit_contact(Request $request){
        return "Feature is not avaliable";
    }

}
