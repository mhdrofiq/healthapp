<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senior extends Model
{
    use HasFactory;

    protected $with = ['user'];
    protected $fillable = [
        'user_id',
        'senior_name',
        'senior_birthdate',
        'senior_phone',
        'senior_address',
        'senior_gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function temperature()
    {
        return $this->hasMany(Temperature::class);
    }

    public function heartrate()
    {
        return $this->hasMany(Heartrate::class);
    }

    public function device()
    {
        return $this->hasOne(Device::class);
    }
}
