<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'contact_show',
        'contact',
        'address',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linkedin_link',
        'whatsapp_link',
        'is_blogs_offers',
        'is_services_offers',
    ];

}
