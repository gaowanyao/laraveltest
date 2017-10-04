<?php

namespace App\Http\Controllers;
class SiteController extends Controller{
    public function home(){
//        return "home";
            $name = "gcan";
    return view('welcome')->with("name",$name);
    }
}