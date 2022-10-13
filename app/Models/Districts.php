<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    public function state()
    {
      return  $this->belongsTo(States::class,'state_id','id' );
    }
}
