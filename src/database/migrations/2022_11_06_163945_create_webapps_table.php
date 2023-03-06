<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webapps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('study_date');
            $table->integer('study_time');
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('language_name');
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('content_name');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webapps');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('contents');
    }
}
