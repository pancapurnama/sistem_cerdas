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
        Schema::table('yes_rules', function (Blueprint $table) {
            $table->renameColumn('first_id', 'gejala_1_id');
            $table->renameColumn('second_id', 'gejala_2_id');
            $table->renameColumn('third_id', 'penyakit_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('yes_rules', function (Blueprint $table) {
            $table->renameColumn('gejala_1_id', 'first_id');
            $table->renameColumn('gejala_2_id', 'second_id');
            $table->renameColumn('penyakit_id', 'third_id');
        });
    }
};
