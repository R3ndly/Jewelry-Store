<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $fillable = ['name_supplier', 'Address', 'delivery_time', 'supplier_rating', 'supplier_status', 'type_transportation', 'unit_price', 'order_number', 'image'];
    public $timestamps = false;
}
