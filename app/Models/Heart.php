<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(Human::class, 'humanID', 'human_id');
    }
}

