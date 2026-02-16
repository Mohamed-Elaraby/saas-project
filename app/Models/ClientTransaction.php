<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTransaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

    public function getTransactionDateAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y');
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function client ()
    {
        return $this->belongsTo(Client::class);
    }

    public function clientPayment ()
    {
        return $this->belongsTo(ClientPayment::class);
    }

    public function clientCollecting ()
    {
        return $this->belongsTo(ClientCollecting::class);
    }
//
//    public function saleOrder ()
//    {
//        return $this->belongsTo(SaleOrder::class);
//    }
//
//    public function saleOrderReturn ()
//    {
//        return $this->belongsTo(SaleOrderReturn::class);
//    }
}
