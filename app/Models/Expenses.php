<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

    protected function getNotesAttribute($value)
    {
        return nl2br($value);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function branch ()
    {
        return $this->belongsTo(Branch::class);
    }

    public function expensesType ()
    {
        return $this->belongsTo(ExpensesType::class);
    }

    public function moneySafes()
    {
        return $this->hasMany(MoneySafe::class);
    }

    public function banks()
    {
        return $this->hasMany(Bank::class);
    }

    public function statements ()
    {
        return $this->hasMany(Statement::class);
    }
}
