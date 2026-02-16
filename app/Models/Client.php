<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
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

//    protected static function boot()
//    {
//        parent::boot();
//        Client::observe(ClientObserver::class);
//    }

//    public function checks()
//    {
//        return $this -> hasMany(Check::class);
//    }
//
//    public function cars()
//    {
//        return $this -> hasMany(Car::class);
//    }
//
//    public function carTypes()
//    {
//        return $this->belongsToMany(CarType::class, 'relation_car_type_clients', 'client_id', 'car_type_id');
//    }
//
    public function clientPayments()
    {
        return $this -> hasMany(ClientPayment::class);
    }
//    public function clientCollectings()
//    {
//        return $this -> hasMany(ClientCollecting::class);
//    }
//
//    public function clientTransactions ()
//    {
//        return $this->hasMany(ClientTransaction::class);
//    }
//
//    public function saleOrders ()
//    {
//        return $this->hasMany(SaleOrder::class);
//    }
}
