<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('image');
            $table->text('description')->nullable();
            $table->float('price');
            $table->float('sale_price');
            $table->float('fee');
            $table->text('explain_fee');
            $table->string('type_of_fee')->nullable();
            $table->float('prepare_food');
            $table->bigInteger('view')->default(0);
            $table->bigInteger('order')->default(0);
            $table->boolean('nominated')->nullable(); // mon an duoc de cu
            $table->integer('category_id');
            $table->boolean('promotion_food')->nullable(); // mon an uu dai 
            $table->timestamps();
            $table->integer('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
