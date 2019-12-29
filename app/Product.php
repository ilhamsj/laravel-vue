<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'price',
    ];

    public function Transaction()
    {
        return $this->belongsToMany('App\Transaction', 'transaction_products');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
