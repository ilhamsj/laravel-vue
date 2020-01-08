<?php

namespace App\Http\Resources\Transaction;

use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'customer'      => $this->customer,
            'total'         => $this->total,
            'pay'           => $this->pay,
            'product'       => $this->product,
            'created_at'    => $this->created_at->format('F d, Y'),
            'updated_at'    => $this->updated_at->format('F d, Y'),
        ];
    }
}
