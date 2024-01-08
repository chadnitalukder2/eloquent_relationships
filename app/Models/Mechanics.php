<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanics extends Model
{
    use HasFactory;
    public function carOwner(){
        return $this->hasOneThrough(Owners::class, Cars::class); #1st->c 2nd->B = A and C related
    }
    
    public function car(){
        return $this->hasOne( Cars::class);
    }
}
