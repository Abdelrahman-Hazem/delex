<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['site_title', 'desc_title' , 'site_desc' ,'streat_address' ,'city_address' , 'whatsapp_link' , 'facebook_link'  , 'twitter_link' ,  'phone_number' , 
     ];
}
