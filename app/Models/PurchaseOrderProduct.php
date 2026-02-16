<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function openPurchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class);
    }
}
