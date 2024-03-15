<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('service_id');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('national_id_number');
            $table->string('home_district');
            $table->string('district_of_residence');
            $table->string('county');
            $table->string('sub_county');
            $table->string('parish');
            $table->string('village');
            $table->string('phone_number');
            $table->string('category');
            $table->string('next_of_kin');
            $table->string('next_of_kin_contact');
            $table->string('next_of_kin_relationship');
            $table->enum('appointment_status',['pending','cancelled','successful','resheduled'])->default('pending');
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
        Schema::dropIfExists('patients');
    }
};
