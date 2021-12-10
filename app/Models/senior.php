<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senior extends Model
{
    use HasFactory;

    protected $with = ['user'];

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
}
