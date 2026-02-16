<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneySafeOpeningBalance extends Model
{
    use HasFactory;
    public $guarded = [];

    public function moneySafes ()
    {
        return $this->hasMany(MoneySafe::class);
    }
}
