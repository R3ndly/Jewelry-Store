<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();          //Номер заказа
            $table->string('order_date')->nullable();            //Дата заказа
            $table->string('order_status')->nullable();          //Статус заказа
            $table->string('customer_name')->nullable();         //Имя клиента
            $table->string('delivery_address')->nullable();      //Адрес доставки
            $table->string('customer_phone_number')->nullable(); //Телефон клиента
            $table->string('payment_method')->nullable();        //Способ оплаты
            $table->string('shipping_cost')->nullable();         //Стоимость доставки 
            $table->string('image')->nullable();                 //Фото
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
