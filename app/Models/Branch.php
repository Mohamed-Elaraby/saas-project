<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

//    public function checks()
//    {
//        return $this -> hasMany(Check::class);
//    }

    public function users()
    {
        return $this -> hasMany(User::class);
    }

//    public function technicals()
//    {
//        return $this -> hasMany(Technical::class);
//    }
//    public function engineers()
//    {
//        return $this -> hasMany(Engineer::class);
//    }

//    public function products()
//    {
//        return $this -> hasMany(Product::class);
//    }
//
//    public function purchaseOrders()
//    {
//        return $this -> hasMany(PurchaseOrder::class);
//    }

//    public function supplierPayments()
//    {
//        return $this -> hasMany(SupplierPayment::class);
//    }
//    public function supplierCollectings()
//    {
//        return $this -> hasMany(SupplierCollecting::class);
//    }

    public function clientPayments()
    {
        return $this -> hasMany(ClientPayment::class);
    }

//    public function clientCollectings()
//    {
//        return $this -> hasMany(ClientCollecting::class);
//    }

//    public function saleOrders ()
//    {
//        return $this->hasMany(SaleOrder::class);
//    }

    public function moneySafes ()
    {
        return $this->hasMany(MoneySafe::class);
    }

    public function banks ()
    {
        return $this->hasMany(Bank::class);
    }

//    public function expenses ()
//    {
//        return $this->hasMany(Expenses::class);
//    }
//
//
//    public function openPurchaseOrders ()
//    {
//        return $this->hasMany(OpenPurchaseOrder::class);
//    }
//
//    public function saleOrderReturns ()
//    {
//        return $this->hasMany(SaleOrderReturn::class);
//    }
//
//    public function purchaseOrderReturns ()
//    {
//        return $this->hasMany(PurchaseOrderReturn::class);
//    }
//
//    public function priceLists()
//    {
//        return $this -> hasMany(PriceList::class);
//    }
//
//    public function internalTransfer()
//    {
//        return $this -> hasMany(InternalTransfer::class);
//    }
//
    public function statements ()
    {
        return $this->hasMany(Statement::class);
    }
}
