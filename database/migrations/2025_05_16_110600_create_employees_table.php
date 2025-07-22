<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('employees')) {
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->string('name_uz');
                $table->string('name_ru');
                $table->string('email');
                $table->string('phone')->nullable();
                $table->string('img')->nullable();
                $table->string('work_time')->nullable();
                $table->unsignedBigInteger('emp_category_id');
                $table->unsignedBigInteger('position_id');
                $table->timestamps();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
