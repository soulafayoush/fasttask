<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['full_name', 'phone','init','id_address'];
    use HasFactory;

    public function address()
    {
        return $this->belongsTo(Adress::class);
    }
}
