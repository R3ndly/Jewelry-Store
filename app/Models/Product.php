<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'material', 'price', 'weight', 'brand', 'collection', 'telephone', 'engraving', 'image'];
    public $timestamps = false;
}
