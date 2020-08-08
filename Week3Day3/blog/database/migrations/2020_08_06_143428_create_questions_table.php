<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 45);
            $table->string('isi', 255);
            $table->unsignedBigInteger('profiles_id')->nullable();
            $table->foreign('profiles_id')->references('id')->on('profiles');
            $table->timestamp('tanggal_dibuat')->useCurrent();
            $table->timestamp('tanggal_diperbaharui')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
