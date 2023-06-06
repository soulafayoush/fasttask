<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{  
  
    protected $fillable=['name'];
    use HasFactory;





    public function Family()
    {
        return $this->hasMany(Family::class);
    }
}



