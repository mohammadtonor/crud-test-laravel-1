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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number', 20)->unique();
            $table->string('email',100)->unique();
            $table->string('bank_account_number')->nullable();
            $table->timestamps();

            $table->unique(['first_name', 'last_name', 'date_of_birth']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
