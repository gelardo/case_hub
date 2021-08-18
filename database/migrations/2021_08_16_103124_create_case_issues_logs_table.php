<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseIssuesLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_issues_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_main_id')->constrained('case_mains')->cascadeOnDelete();
            $table->string('issue')->nullable();
            $table->string('date')->nullable();
            $table->string('file_name')->nullable();
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
        Schema::dropIfExists('case_issues_logs');
    }
}
