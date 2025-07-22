<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->string('teacher_firstname_ru')->nullable()->after('teacher_firstname_uz');
            $table->string('teacher_lastname_ru')->nullable()->after('teacher_lastname_uz');

        });
    }

    public function down(): void
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->dropColumn(['teacher_firstname_ru', 'teacher_lastname_ru']);
        });
    }
};


