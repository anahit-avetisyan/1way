<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChekoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chekouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('titleAM');
            $table->string('titleRU')->nullable();
            $table->string('titleEN')->nullable();
            $table->string('availability');
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('sale')->nullable();
            $table->string('salePrice')->nullable();
            $table->string('quantity');
            $table->string('descriptionAM');
            $table->string('descriptionRU')->nullable();
            $table->string('descriptionEN')->nullable();
            $table->string('priceAM');
            $table->string('priceRU');
            $table->string('priceEN');
            $table->text('posters');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chekouts');
    }
}
