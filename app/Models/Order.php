<?php

namespace App\Models;

use App\Mail\OrderMail;
// use App\Notifications\NewOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class Order extends Model
{

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'name',
        "email",
        'phone',
        'country',
        "paper_topic",
        'paper_type',
        "deadline",
        "reference_style",
        "language",
        "no_of_references",
        "academic_level",
        "number_of_pages",
        'subject',
        "detail",
        "academic_level_id",
        "deadline_id",
        "cost_per_page",
        "total_price",
        "status_id",
        "user_id",
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }


    public function orderService()
    {
        return $this->belongsTo(OrderService::class,'order_service','id');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function academic_level()
    {
        return $this->belongsTo(AcademicLevel::class,'academic_level_id', 'id');
    }

    public function deadline()
    {
        return $this->belongsTo(Deadline::class,'deadline_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id', 'id');
    }


}
