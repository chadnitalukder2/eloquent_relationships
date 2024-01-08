<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_hasOne()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function userName_hasOne()
    {
        return $this->belongsTo(User::class, 'u_name', 'name');
    }
}

