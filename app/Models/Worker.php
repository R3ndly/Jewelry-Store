<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'patronymic', 'position', 'salary', 'gender', 'phone', 'email', 'image'];
    public $timestamps = false;
}
