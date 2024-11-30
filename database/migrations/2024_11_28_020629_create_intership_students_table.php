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
        Schema::create('intership_students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('mentor_id');
            $table->string('work_unit_id');
            $table->date('start_at');
            $table->date('end_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intership_students');
    }
};
