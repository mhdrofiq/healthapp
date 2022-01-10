<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function senior()
    {
        return $this->belongsTo(Senior::class);
    }

    public function sensor_data()
    {
        return $this->hasMany(SensorData::class);
    }
}
