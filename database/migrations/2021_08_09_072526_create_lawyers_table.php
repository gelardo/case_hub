<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('last_visit');
            $table->date('birth_date');
            $table->date('date_of_enroll');
            $table->string('phone');
            $table->string('nationality');
            $table->string('religion');
            $table->string('name_of_bar');
            $table->string('membership_number');
            $table->string('address_of_chamber');
            $table->string('address_of_residence');
            $table->string('specialize_practice_area');
            $table->string('professional_experience');
            $table->string('case_conducted');
            $table->string('reference');
            $table->string('remarks');
            $table->string('email')->unique();
            $table->foreignId('district_id')->constrained('districts')->cascadeOnDelete();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('lawyer_type');
            $table->string('lawyer_status');
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
        Schema::dropIfExists('lawyers');
    }
}
