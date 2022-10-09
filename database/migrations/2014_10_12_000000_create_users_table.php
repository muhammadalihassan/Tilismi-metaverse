<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('profile_pic')->nullable();
            $table->string('resume_doc')->nullable();
            $table->string('cnic_doc')->nullable();
            $table->string('education_doc')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('cnic')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            
            $table->integer('emp_id');
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            
            $table->date('join_date');
            $table->string('reporting_line')->nullable();
            $table->string('v_model_name')->nullable();
            $table->string('v_model_year')->nullable();
            $table->string('v_number_plate')->nullable();
            $table->string('bank_account_number')->nullable();

            $table->date('shift_in')->nullable();
            $table->date('shift_out')->nullable();

            $table->tinyInteger('is_active')->default('1');
            $table->tinyInteger('is_deleted')->default('0');

            $table->timestamps();
            $table->softDeletes();

            $table->rememberToken();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
