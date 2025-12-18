<?php

namespace App\Models;

use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use App\Notifications\NewVisit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'phone',
        'detail',
        'country',
    ];
    
}
