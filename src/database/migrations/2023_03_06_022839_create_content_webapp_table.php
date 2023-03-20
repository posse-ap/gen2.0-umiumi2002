<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentWebappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_webapp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('webapp_id');
            $table->integer('content_id');
            $table->integer('divided_time');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_webapp');
    }
}
