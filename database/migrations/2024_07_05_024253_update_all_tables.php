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
        Schema::table('penempatans', function (Blueprint $blueprint) {
            $blueprint->foreign('siswa_id')->references('id')->on('siswas');
            $blueprint->foreign('guru_id')->references('id')->on('gurus');
            $blueprint->foreign('perusahaan_id')->references('id')->on('perusahaans');
            $blueprint->foreign('agenda_id')->references('id')->on('agendas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penempatans', function (Blueprint $blueprint) {
            $blueprint->dropConstrainedForeignId('siswa_id');
            $blueprint->dropConstrainedForeignId('guru_id');
            $blueprint->dropConstrainedForeignId('perusahaan_id');
            $blueprint->dropConstrainedForeignId('agenda_id');
        });
    }
};
