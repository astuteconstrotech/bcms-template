<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('company_name',200)->default(NULL)->nullable();
            $table->string('position',50)->default(NULL)->nullable();
            $table->string('found_year',10)->default(NULL)->nullable();
            $table->string('pan_no',50)->default(NULL)->nullable();
            $table->string('Networth',50)->default(NULL)->nullable();
            $table->string('company_services',100)->default(NULL)->nullable();
            $table->string('gst_no',400)->default(NULL)->nullable();
            $table->string('work_grade',100)->default(NULL)->nullable();
            $table->string('Location',50)->default(NULL)->nullable();
            $table->string('working_area',100)->default(NULL)->nullable();
            $table->enum('user_type',[1,2,3,4])->default(null)->nullable()->comment('user role 1- Builder, 2 - contractor, 3 - Developer, 4 - consultant, 5- Other');
            $table->text('desc',300)->default(NULL)->nullable();
            // $table->integer('permission')->unsigned();
            // $table->foreign('permission')->references('id')->on('user_permission');
            $table->string('street_address',250)->default(NULL)->nullable();
            $table->string('city',50)->default(NULL)->nullable();
            $table->string('state',50)->default(NULL)->nullable();
            $table->string('country',50)->default(NULL)->nullable();
            $table->string('zip_code',50)->default(NULL)->nullable();
            $table->string('mobile_no',20)->default(NULL)->nullable();
            $table->string('alt_contact_no',20)->default(NULL)->nullable();
            $table->string('profile',20)->default(NULL)->nullable();
            $table->string('ref_code',20)->default(NULL)->nullable()->comment('reference code');
            $table->enum('role',[1,2,3,4])->default(2)->nullable()->comment('user role 1- super admin, 2 - company, 3 - staff, 4 - client, 5- worker');
            $table->enum('verification',[0,1])->default(1)->nullable()->comment('company verification 0-true, 1-false');
            $table->enum('agree_terms',[0,1])->default(1)->comment('terms and cond. agrees 0-true, 1-false');
            $table->enum('status',[0,1])->default(1)->comment('terms and cond. agrees 0-true, 1-false');;
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
        Schema::dropIfExists('user_meta');
    }
}
