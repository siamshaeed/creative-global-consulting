<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use Illuminate\Support\Facades\Auth;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('phone', 11);
            $table->string('nid')->nullable();
            $table->string('birth')->nullable();
            $table->string('gender')->nullable();


            $table->string('graduation_level')->nullable();
            $table->string('name_of_exam')->nullable();
            $table->string('institute')->nullable();
            $table->string('gpa')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('group')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('passport')->nullable();
            $table->string('passport_num')->nullable();
            $table->tinyInteger('ielts')->nullable();
            $table->float('ielts_score')->nullable();
            $table->tinyInteger('douling')->nullable();
            $table->float('douling_score')->nullable();
            $table->string('blood')->nullable();
            $table->string('religion')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('reference')->nullable();
            $table->string('facebook')->nullable();
            $table->string('runiversity')->nullable();
            $table->string('expsubject')->nullable();
            $table->string('gurdian_phone')->nullable();
            $table->string('paddress')->nullable();
            $table->string('peraddress')->nullable();
            $table->string('ielts_publication')->nullable();
            $table->tinyInteger('toefl')->nullable();
            $table->float('toefl_score')->nullable();
            $table->string('toefl_publication')->nullable();
            $table->string('douling_publication')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
