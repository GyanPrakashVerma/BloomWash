<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Product;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function comming(){
        return view('frontend.comming');
    }
    public function home()
        {
            $feedback=Feedback::where('delete_status',0)->get();
            $setting = Setting::where('delete_status', 0)->first();
        $gallery = Gallery::where('delete_status', 0)->where('status',1)->get()->take(7);
        return view('frontend.index',compact('setting','feedback','gallery'));
    }

    public function about(){
        $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0)->first();
        return view('frontend.about',compact('setting','feedback'));
    }
    public function service(){
        $setting = Setting::where('delete_status', 0)->first();
       
        return view('frontend.service',compact('setting'));
    }
    public function pricing(){
        $setting = Setting::where('delete_status', 0)->first();
        $product = Product::where('delete_status', 0)->get();
       
        return view('frontend.pricing',compact('setting','product'));
    }
    public function gallery(){
        $setting = Setting::where('delete_status', 0)->first();
        $gallery = Gallery::where('delete_status', 0)->where('status',1)->get();
       
        return view('frontend.gallery',compact('setting','gallery'));
    }
  
    public function contact(){
        $setting = Setting::where('delete_status', 0)->first();
       
        return view('frontend.contact',compact('setting'));
    }
  


   
}
