<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_mains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_category_id')->nullable()->constrained('case_categories')->cascadeOnDelete();
            $table->foreignId('case_nature_id')->nullable()->constrained('case_natures')->cascadeOnDelete();
            $table->foreignId('case_type_id')->nullable()->constrained('case_types')->cascadeOnDelete();
            $table->string('case_no')->nullable();
            $table->string('case_year')->nullable();
            $table->string('subsequent_case_no')->nullable();
            $table->foreignId('program_id')->nullable()->constrained('programs')->cascadeOnDelete();
            $table->foreignId('region_id')->nullable()->constrained('regions')->cascadeOnDelete();
            $table->string('area')->nullable();
            $table->string('branch')->nullable();
            $table->foreignId('district_id')->nullable()->constrained('districts')->cascadeOnDelete();
            $table->foreignId('police_station_id')->nullable()->constrained('police_stations')->cascadeOnDelete();
            $table->string('date_of_incident')->nullable();
            $table->string('whoidentified')->nullable();
            $table->foreignId('court_id')->constrained('courts')->cascadeOnDelete();
            $table->string('date_of_filing')->nullable();
            $table->string('laws_section')->nullable();
            $table->string('allegation')->nullable();
            $table->string('amount_of_money')->nullable();
            $table->string('complainant_name')->nullable();
            $table->string('complainant_designation')->nullable();
            $table->string('complainant_contact')->nullable();
            $table->string('complainant_email')->nullable();
            $table->string('complainant_nextattend')->nullable();
            $table->string('subsequent_name_of_complainant')->nullable();
            $table->string('brac_pin')->nullable();
            $table->string('name_of_accused')->nullable();
            $table->string('phone_of_accused')->nullable();
            $table->string('address_of_accused')->nullable();
            $table->string('disbursement_date')->nullable();
            $table->string('last_cash_receipt_date')->nullable();
            $table->foreignId('case_status_id')->constrained('case_statuses')->cascadeOnDelete();
            $table->foreignId('court_order_id')->constrained('court_orders')->cascadeOnDelete();
            $table->foreignId('additional_court_order_id')->constrained('additional_court_orders')->cascadeOnDelete();
            $table->string('next_date')->nullable();
            $table->foreignId('next_date_status')->constrained('case_statuses')->cascadeOnDelete();
            $table->foreignId('lawyer_id')->constrained('lawyers')->cascadeOnDelete();
            $table->string('next_date_lawyerattend')->nullable();
            $table->text('witness')->nullable();
            $table->string('case_notes')->nullable();
            $table->string('date_of_disposed')->nullable();
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
        Schema::dropIfExists('case_mains');
    }
}
