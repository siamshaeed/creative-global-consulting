<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('pathway_provider')->nullable();

            $table->string('ug_ac_req_education')->nullable();
            $table->decimal('ug_ac_req_gpa', 8,2)->nullable();
            $table->string('ug_ac_req_group')->nullable();
            $table->enum('ug_is_active', ['active', 'inactive'])->default('active');
            $table->decimal('ug_ielts_start', 8,2)->nullable();
            $table->decimal('ug_ielts_end', 8,2)->nullable();

            $table->string('pg_ac_req_education')->nullable();
            $table->decimal('pg_ac_req_cgpa', 8,2)->nullable();
            $table->string('pg_ac_req_group')->nullable();
            $table->enum('pg_is_active', ['active', 'inactive'])->default('active');
            $table->decimal('pg_ielts_start', 8,2)->nullable();
            $table->decimal('pg_ielts_end', 8,2)->nullable();
            
            $table->string('oietc')->nullable();
            $table->string('internal_test')->nullable();
            $table->string('moi')->nullable();
            $table->enum('duolingo_is_active', ['active', 'inactive'])->default('active');
            $table->integer('duolingo_start')->nullable();
            $table->integer('duolingo_end')->nullable();

            $table->string('pg_study_gap')->nullable();
            $table->string('tution_fees')->nullable();
            $table->string('scholarships')->nullable();
            $table->longText('remarks')->nullable();

            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('universities');
    }
}
