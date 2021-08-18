<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseProceedingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_proceedings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_main_id')->constrained('case_mains')->cascadeOnDelete();
            $table->string('participant_confirmed')->nullable();
            $table->string('date')->nullable();
            $table->string('proceedings')->nullable();
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
        Schema::dropIfExists('case_proceedings');
    }
}
