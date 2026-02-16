<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeCheckUserRole($query)
    {
        if (!auth()->user()->hasRole(['superAdministrator', 'administrator']))
        {
            $query -> where('created_at', Carbon::today());
        }
    }

    public function setAmountPaidAttribute($value)
    {
        return $this -> attributes['amount_paid'] = number_format((float)$value, 2, '.', '');
    }

    public function setFinalAmountAttribute($value)
    {
        return $this -> attributes['final_amount'] = number_format((float)$value, 2, '.', '');
    }

//    public function saleOrder()
//    {
//        return $this->belongsTo(SaleOrder::class);
//    }
//
//    public function purchaseOrder()
//    {
//        return $this->belongsTo(PurchaseOrder::class);
//    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function expenses()
//    {
//        return $this->belongsTo(Expenses::class);
//    }

    public function clientPayment()
    {
        return $this->belongsTo(ClientPayment::class);
    }

//    public function clientCollecting()
//    {
//        return $this->belongsTo(ClientCollecting::class);
//    }
//
//    public function supplierPayment()
//    {
//        return $this->belongsTo(SupplierPayment::class);
//    }
//
//    public function SupplierCollecting()
//    {
//        return $this->belongsTo(SupplierCollecting::class);
//    }
//
//    public function saleOrderReturn()
//    {
//        return $this->belongsTo(SaleOrderReturn::class);
//    }
//
//    public function purchaseOrderReturn()
//    {
//        return $this->belongsTo(PurchaseOrderReturn::class);
//    }
//
//    public function advance()
//    {
//        return $this->belongsTo(Advance::class);
//    }
//
//    public function reward()
//    {
//        return $this->belongsTo(Reward::class);
//    }
//
//    public function discount()
//    {
//        return $this->belongsTo(Discount::class);
//    }
//
//    public function employeeSalaryLog()
//    {
//        return $this->belongsTo(EmployeeSalaryLog::class);
//    }
//
    public function statements ()
    {
        return $this->hasMany(Statement::class);
    }
}
