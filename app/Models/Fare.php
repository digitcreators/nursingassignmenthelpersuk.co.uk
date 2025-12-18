<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{

    public $timestamps = false;

    public $table = 'fares';

    protected $fillable = [
        'academic_level_id',
        'deadline_id',
        'per_page_price',
        'per_slide_price',
        'per_poster_price',
    ];

    public function academiclevel()
    {
        return $this->belongsTo(AcademicLevel::class, 'academic_level_id');
    }

    public function deadline()
    {
        return $this->belongsTo(Deadline::class, "deadline_id");
    }

}
