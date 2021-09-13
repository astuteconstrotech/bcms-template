<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('type',20)->default(NULL)->nullable();
            $table->string('desc',300)->default(NULL)->nullable();
            $table->string('number',200)->default(NULL)->nullable();
            $table->enum('is_verified',[0,1,2,3])->default(1)->comment('0 = true/yes/accepted, 1=  false/no/pending, 2 = rejected/failed, 3 = reupload');
            $table->unsignedBigInteger('file_id')->unsigned();
            $table->foreign('file_id')->references('id')->on('files');
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
        Schema::dropIfExists('documents');
    }
}
