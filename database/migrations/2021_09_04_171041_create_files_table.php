<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->string('type_id',50)->default(NULL)->nullable()->comment('ref docs id');
            // $table->string('category',50)->default(NULL)->nullable();
            // $table->string('type',50)->default(NULL)->nullable();
            // $table->string('title',50)->default(NULL)->nullable();
            // $table->string('description',500)->default(NULL)->nullable();
            $table->string('Type',50)->default(NULL)->nullable();
            $table->string('file_name')->default(NULL)->nullable();
            $table->enum('status',[0,1])->default(1)->nullable()->comment('0-true, 1-false');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
