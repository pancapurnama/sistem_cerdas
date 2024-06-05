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
        Schema::create('no_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_id')->required();
            $table->foreign('first_id')->references('id')->on('symptoms')->onDelete('restrict');

            $table->unsignedBigInteger('second_id')->required();
            $table->foreign('second_id')->references('id')->on('symptoms')->onDelete('restrict');

            $table->unsignedBigInteger('third_id')->required();
            $table->foreign('third_id')->references('id')->on('diseases')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('no_rules');
    }
};
