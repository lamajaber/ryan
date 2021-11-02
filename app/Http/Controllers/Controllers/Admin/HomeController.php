<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    function index(){
     //   $user = \App\Models\User::find(2);
     //   $user->password=bcrypt('123456');
     //   $user->save();
        //app()->setLocale('en');
        return view("admin.home.index");
    }
    function noPermission(){
        session()->flash('msg','e:نأسف لا تملك صلاحية على الرابط المطلوب');
        return view("admin.home.index");
    }
    function changeLang(){
        $lang = request()->cookie('lang');
        if($lang){
            $toLang = $lang=='ar'?'en':'ar';
            Cookie::queue('lang', $toLang, 60*24*14);
        }
        return back();
    }
}
