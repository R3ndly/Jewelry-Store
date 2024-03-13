<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['order_number', 'order_date', 'order_status', 'customer_name', 'delivery_address', 'customer_phone_number', 'payment_method', 'shipping_cost', 'image'];
    //Номер заказа, Дата заказа, Статус заказа, Имя клиента, Адрес доставки, Телефон клиента, Способ оплаты, Стоимость доставки 
    public $timestamps = false;
}
