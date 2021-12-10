<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heartrate extends Model
{
    use HasFactory;

    protected $with = ['user'];

    public function senior()
    {
        return $this->belongsTo(Senior::class);
    }
}
