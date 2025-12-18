<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
      protected $fillable = [
        'name',
        "email",
        'phone',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'email_verified_at',
        'password',
        'provider_id',
        'provider_name',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        if ($value) {
            $this->attributes['email_verified_at'] = Carbon::parse($value)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['email_verified_at'] = null;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRoleId($role_id)
    {
        return $this->roles->contains($role_id);
    }

    public function stripe()
    {
        return $this->hasOne(UserStripe::class, 'user_id', 'id');
    }
}
