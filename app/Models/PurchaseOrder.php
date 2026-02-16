<?php

namespace App\Models;

use App\Traits\SettingTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PurchaseOrder extends Model
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
//        PurchaseOrder::observe(PurchaseOrderObserver::class);
//    }

    public function scopeCheckUserRole($query)
    {
        if (Auth::user()->branch_id != null)
        {
            $query -> where('branch_id', Auth::user()->branch_id);
        }
    }

    public function scopeCheckOrderStatus($query)
    {
        if (request() -> has('status')) {
            $status = request('status');
            $query -> where('status', $status);
        }
    }
    protected function getNotesAttribute($value)
    {
        return nl2br($value);
    }

    protected function getDiscountTypeAttribute($value)
    {
        return $value == 1 ? '%' : SettingTrait::getSetting()->currency;
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function purchaseOrderProducts()
    {
        return $this->hasMany(PurchaseOrderProduct::class);
    }

    public function supplierTransactions()
    {
        return $this->hasMany(SupplierTransaction::class);
    }

    public function moneySafes ()
    {
        return $this->hasMany(MoneySafe::class);
    }

    public function banks ()
    {
        return $this->hasMany(Bank::class);
    }

    public function purchaseOrderReturns()
    {
        return $this->hasMany(PurchaseOrderReturn::class);
    }

    public function statements ()
    {
        return $this->hasMany(Statement::class);
    }
}
