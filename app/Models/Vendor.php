<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    function relationToUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
