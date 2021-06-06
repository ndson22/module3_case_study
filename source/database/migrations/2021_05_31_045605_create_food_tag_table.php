<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_tag', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->integer('food_id');
            $table->timestamps();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('food_id')->references('id')->on('foods');
            $table->primary(['tag_id', 'food_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods_tags');
    }
}
