<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

    public function setBalanceAttribute($value)
    {
        return $this->attributes['balance'] = number_format($value, 2, '.', '');

    }

    public function getBalanceAttribute($value)
    {
        return number_format($value, 2, '.', '');
    }

    public function purchaseOrders ()
    {
        return $this->hasMany(PurchaseOrder::class);
    }

//    public function supplierPayments ()
//    {
//        return $this->hasMany(SupplierPayment::class);
//    }

    public function supplierCollectings ()
    {
        return $this->hasMany(SupplierCollecting::class);
    }

    public function supplierTransactions ()
    {
        return $this->hasMany(SupplierTransaction::class);
    }

//    public function openPurchaseOrders ()
//    {
//        return $this->hasMany(OpenPurchaseOrder::class);
//    }
}
