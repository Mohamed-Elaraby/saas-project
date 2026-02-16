<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

//    public function products()
//    {
//        return $this->hasMany(Product::class);
//    }
//
//    public function internalTransfers()
//    {
//        return $this->hasMany(InternalTransfer::class);
//    }
}
