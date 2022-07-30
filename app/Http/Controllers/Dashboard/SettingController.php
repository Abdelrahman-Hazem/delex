<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    public function edit(Setting $setting)
    {
       
 return view("dashboard.settings.setting", compact("setting"));
   
}
   
public function validateRequest()
{
   return(request()->validate([
       'site_title' => 'required' , 
       'desc_title' => 'required' , 
       'site_desc' => 'required' , 
       'streat_address' => 'required' , 
       'city_address' => 'required' , 
       'whatsapp_link' => 'required' , 
       'facebook_link' => 'required' , 
       'twitter_link' => 'required' , 
       'phone_number' => 'required' , 
   ]));}

    public function update(Setting $setting)
    {
        $setting->update($this->validateRequest());
       return redirect('adminHome');

    }

}
