<?php

namespace App\Http\Resources\Product;

use App\Category;
use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name'          => $this->name,
            'price'         => $this->price,
            'category'      => $this->whenLoaded('category', $this->category->name),
            'category_id'   => $this->category_id,
            'created_at'    => $this->created_at->format('F d, Y'),
            'updated_at'    => $this->updated_at,
        ];
    }
}
