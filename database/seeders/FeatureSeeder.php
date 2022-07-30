<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = new Feature ;
        $feature->feature_title = "CREATIVE IDEAS" ;
        $feature->feature_desc = "Nulla vitae libero pharetra augue.
        Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor." ;
        $feature ->save();

        $feature = new Feature ;
        $feature->feature_title = "RAPID SOLUTION" ;
        $feature->feature_desc = "Nulla vitae libero pharetra augue.
         Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor." ;
        $feature ->save();

        $feature = new Feature ;
        $feature->feature_title = "MAGIC TOUCH" ;
        $feature->feature_desc = "Nulla vitae libero pharetra augue.
         Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor." ;
        $feature ->save();
    }
}
