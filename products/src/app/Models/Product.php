<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "id",
        "name",
        "description",
        "price",
        "qtd_available",
        "qtd_total"
    ];
}
