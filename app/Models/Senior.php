<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senior extends Model
{
    use HasFactory;

    public function temperature()
    {
        return $this->hasMany(Temperature::class);
    }

    public function heartrate()
    {
        return $this->hasMany(Heartrate::class);
    }
}
