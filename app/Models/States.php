<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    public function district()
    {
       return  $this->hasMany(States::class,'state_id','id');
    }
}
