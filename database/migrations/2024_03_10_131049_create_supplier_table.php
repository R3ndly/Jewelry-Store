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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name_supplier')->nullable();          //Имя поставщика
            $table->string('Address')->nullable();                //Адресс
            $table->string('delivery_time')->nullable();          //Длительность поставок
            $table->string('supplier_rating')->nullable();        //рейтинг поставщика
            $table->string('supplier_status')->nullable();        //статус поставщика
            $table->string('type_transportation')->nullable();    //тип поставок
            $table->string('unit_price')->nullable();             //цена за единицу
            $table->string('order_number')->nullable();           //Номер заказа
            $table->string('image')->nullable();                  //фото
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
