<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('patient_id');
            $table->string('ward_name');
            $table->string('ward_type');
            $table->uuid('drug_id');
            $table->string('ward_no');
            $table->string('bed_no');
            $table->string('admitted_on');
            $table->string('ended_on');
            $table->string('care_taker_name');
            $table->string('care_taker_contact')->nullable();
            $table->enum('status',['admitted','discharged','referred','died','escaped','taken']);
            $table->uuid('created_by');
            $table->uuid('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wards');
    }
};
