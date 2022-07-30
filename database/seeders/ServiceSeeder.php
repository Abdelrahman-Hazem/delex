<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service ;
        $service->service_title = "CREATIVE IDEAS" ;
        $service->service_desc = "Nulla vitae libero pharetra augue.
         Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor." ;
        $service ->save();

        $service = new Service ;
        $service->service_title = "RAPID SOLUTION" ;
        $service->service_desc = "Nulla vitae libero pharetra augue.
         Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor." ;
        $service ->save();

        $service = new Service ;
        $service->service_title = "MAGIC TOUCH" ;
        $service->service_desc = "Nulla vitae libero pharetra augue.
         Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor." ;
        $service ->save();
    }
}
