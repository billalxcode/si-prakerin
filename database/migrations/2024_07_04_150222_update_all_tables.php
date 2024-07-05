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
        Schema::table('kelas', function (Blueprint $blueprint) {
            $blueprint->foreign('guru_id')->references('id')->on('gurus');
            $blueprint->foreign('jurusan_id')->references('id')->on('jurusans');
        });
        Schema::table('siswas', function (Blueprint $blueprint) {
            $blueprint->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->dropConstrainedForeignId('kelas_id');
        });
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropConstrainedForeignId('guru_id');
            $table->dropConstrainedForeignId('jurusan_id');
        });
    }
};
