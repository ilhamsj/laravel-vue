<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    protected $fillable = [
        'product_id',
        'transaction_id',
        'quantities',
        'notes',
    ];
}
