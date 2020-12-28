<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'total' => $this->total,
            'status' => $this->status,
            'customer' => $this->customer->name,
            'products' => ProductResource::collection($this->products),
            'date' => $this->created_at->format('d/m/Y'),
        ];
    }
}
