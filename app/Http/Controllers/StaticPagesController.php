<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Status;
use Auth;

class StaticPagesController extends Controller
{
    public function home(){
        //展示当前用户发布的微博
        $feed_items = [];
        if(Auth::check()){
            $feed_items = Auth::user()->feed()->paginate(20);
        }

    	return view('static_pages/home',compact('feed_items'));
    }

    public function help(){
    	return view('static_pages/help');
    }

    public function about(){
    	return view('static_pages/about');
    }
}
