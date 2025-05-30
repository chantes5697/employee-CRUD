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
        Schema::create('dept_emp', function (Blueprint $table) {
            $table->integer('emp_no');
            $table->char('dept_no', 4)->index('dept_no');
            $table->date('from_date');
            $table->date('to_date');

            $table->primary(['emp_no', 'dept_no']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dept_emp');
    }
};
