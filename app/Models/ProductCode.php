<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCode extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value) -> format('d/m/Y h:i:s a');
    }

    public function getCodeAttribute($value)
    {
        $value =  str_replace(' ', '_', $value);
        return preg_replace('/[^a-zA-Z0-9_]/', '', $value);
    }

    public function setCodeAttribute($value)
    {
        $value = str_replace(' ', '_', $value); // Replaces all spaces with hyphens.
        $this->attributes['code'] = preg_replace('/[^a-zA-Z0-9_]/', '', $value);
    }
}
