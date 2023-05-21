<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    use HasFactory;
    protected $primaryKey = 'human_id';
    
    public function heart(){
        return $this->hasOne(Heart::class, 'humanID', 'human_id');
    }
}


