<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements LaratrustUser
{
    use HasRolesAndPermissions;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'branch_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }


//    public function check()
//    {
//        return $this -> hasMany(Check::class);
//    }
//    public function purchaseOrders()
//    {
//        return $this -> hasMany(PurchaseOrder::class);
//    }
//
//    public function supplierTransactions()
//    {
//        return $this -> hasMany(SupplierTransaction::class);
//    }
//
    public function supplierPayments()
    {
        return $this -> hasMany(SupplierPayment::class);
    }
//
//    public function supplierCollectings()
//    {
//        return $this -> hasMany(SupplierCollecting::class);
//    }
//
    public function clientPayments()
    {
        return $this -> hasMany(ClientPayment::class);
    }
//
//    public function clientCollectings()
//    {
//        return $this -> hasMany(ClientCollecting::class);
//    }

    public function clientTransactions()
    {
        return $this -> hasMany(ClientTransaction::class);
    }

    public function branch()
    {
        return $this -> belongsTo(Branch::class);
    }
//
//    public function jobTitle()
//    {
//        return $this -> belongsTo(JobTitle::class);
//    }
//
//    public function saleOrders ()
//    {
//        return $this->hasMany(SaleOrder::class);
//    }
//
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
//    public function moneySafe()
//    {
//        return $this -> hasMany(MoneySafe::class);
//    }
//
//    public function bank()
//    {
//        return $this -> hasMany(Bank::class);
//    }
//
//    public function internalTransfer()
//    {
//        return $this -> hasMany(InternalTransfer::class);
//    }

}
