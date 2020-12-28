<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'total',
        'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
    ];

    /**
     * Returns customer order.
     *
     * @return string
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Returns order products.
     *
     * @return string
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
