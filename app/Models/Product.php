<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new ProductScope());
//    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

//    public function saleOrderProducts()
//    {
//        return $this->hasMany(SaleOrderProducts::class);
//    }

}
