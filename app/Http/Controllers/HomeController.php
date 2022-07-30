<?php

namespace App\Http\Controllers;
use App\Models\Feature;
use App\Models\Service;
use App\Models\Setting;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();
        $features = Feature::all();
        $settings = Setting::all();
        return view('frontend/home',compact('services','features','settings'));
    }
}
