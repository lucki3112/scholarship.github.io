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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('password');
            $table->string('image');
            $table->string('bank_account_number')->nullable();
            $table->string('bank_ifsc_code')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('university')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('stream')->nullable();
            $table->string('semester')->nullable();
            $table->string('marks')->nullable();
            $table->string('institute_verification')->nullable();
            $table->string('state_verification')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('payment_status')->nullable();
            $table->biginteger('scholarship_id')->unsigned()->nullable();
            $table->foreign('scholarship_id')->references('id')->on('scholarship')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
