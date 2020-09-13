<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('textAM');
            $table->string('textRU');
            $table->string('textEN');
            $table->string('text1AM');
            $table->string('text2RU');
            $table->string('text3EN');
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
        Schema::dropIfExists('index_texts');
    }
}
