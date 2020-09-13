<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titleAM');
            $table->string('titleRU')->nullable();
            $table->string('titleEN')->nullable();
            $table->string('availabilityAM');
            $table->string('availabilityRU')->nullable();
            $table->string('availabilityEN')->nullable();
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
            $table->string('curse');
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
        Schema::dropIfExists('favorites');
    }
}
