<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $setting = new Setting ;
       $setting->site_title = "Delex";

       $setting->desc_title = "Start your own project";

       $setting->site_desc = "Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies.";
       $setting->streat_address = "464 Newesta St";
       $setting->city_address = "Othervilla AB 6007, Other";

       $setting->whatsapp_link = "https://www.whatsapp.com/";
       $setting->facebook_link = "https://www.facebook.com/";
       $setting->twitter_link = "https://twitter.com/";
       $setting->phone_number = "+0 123-456-7890";
       $setting ->save();
    }
}
