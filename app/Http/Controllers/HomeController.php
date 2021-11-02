<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;

class HomeController extends Controller
{
    public function countryCities($id){
        $cities = \DB::table('cities')->where('country_id',$id)->select('id','name')->get();
        return $cities;
    }
    public function countryCityAjaxExample(){
        $countries = \DB::table('countries2')->get();
        return view('home.country-city-ajax-example',compact('countries'));
    }
    public function index()
    {
        /*->get();//collection (Array)
        ->all();//collection (Array)
        ->find();//single object or null
        ->first();//first object or null*/
        $homeSliders = Slider::where('active','1')->orderBy('id','desc')->take(4)->get();
        $homeServices = Service::where('active','1')->orderBy('id','desc')->take(3)->get();
        $products=product::where('active',1)->get();
        return view('home.index',compact('homeSliders','homeServices','products'));
    }
    public function services()
    {
        $services = Service::where('active','1')->orderBy('id','desc')->paginate(12);
        return view('home.services',compact('services'));
    }


}
