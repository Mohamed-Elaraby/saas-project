<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierTransaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

//    public function purchaseOrder()
//    {
//        return $this->belongsTo(PurchaseOrder::class);
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function supplierPayment()
    {
        return $this -> belongsTo(SupplierPayment::class);
    }

    public function supplierCollecting()
    {
        return $this -> belongsTo(SupplierCollecting::class);
    }

//    public function purchaseOrderReturn ()
//    {
//        return $this->belongsTo(PurchaseOrderReturn::class);
//    }
}
