<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("ViberLink");
            $table->string("ViberName")->nullable();
            $table->string("WhatsAppLink");
            $table->string("WhatsAppName")->nullable();
            $table->string("fbLink");
            $table->string("fbName")->nullable();
            $table->string("instagramLink");
            $table->string("instagramName")->nullable();
            $table->string("icon_id");
            $table->string("copyright");
            $table->string("contactNameAM");
            $table->string("contactNameRU")->nullable();
            $table->string("contactNameEN")->nullable();
            $table->string("footerTextAM");
            $table->string("footerTextRU")->nullable();
            $table->string("footerTextEN")->nullable();
            $table->string("linkName");
            $table->string("link");
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
        Schema::dropIfExists('footers');
    }
}
