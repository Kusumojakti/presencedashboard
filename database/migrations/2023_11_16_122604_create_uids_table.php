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
        Schema::create('uids', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('nisn');
            $table->timestamps();

            $table->foreign('nisn')->references('nisn')->on('murids')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uids');
    }
};
