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
        Schema::table('dept_manager', function (Blueprint $table) {
            $table->foreign(['emp_no'], 'dept_manager_ibfk_1')->references(['emp_no'])->on('employees')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['dept_no'], 'dept_manager_ibfk_2')->references(['dept_no'])->on('departments')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dept_manager', function (Blueprint $table) {
            $table->dropForeign('dept_manager_ibfk_1');
            $table->dropForeign('dept_manager_ibfk_2');
        });
    }
};
