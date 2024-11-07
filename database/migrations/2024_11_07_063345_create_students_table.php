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
            $table->string('username',length:10)->nullable(false)->unique();
            $table->string('full_name',length:50)->nullable(false);
            $table->string('mobile_no',length:11)->nullable(false)->unique();
            $table->string('email',length:30)->nullable(false)->unique();
            $table->string('password',length:20)->nullable(false);
            //$table->timestamps();
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
