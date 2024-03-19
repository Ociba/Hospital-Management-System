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
        Schema::create('treatments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('patient_id');
            $table->uuid('ward_id');
            $table->uuid('drug_id');
            $table->text('prescription');
            $table->enum('pharmacy_status',['pending','successful','failed'])->default('pending');
            $table->enum('status',['outpatient','admitted','discharged','referred','died'])->default('outpatient');
            $table->enum('ward_status',['pending','successful','failed'])->default('pending');
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
        Schema::dropIfExists('treatments');
    }
};
