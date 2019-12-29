<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'customer',
        'total',
        'pay',
    ];

    public function Product()
    {
        return $this->belongsToMany('App\Product', 'transaction_products');
    }
}
