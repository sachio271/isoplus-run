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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('familyId');
            $table->string('ektp');
            $table->string('relation')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthDate')->nullable();
            $table->string('birthPlace')->nullable();
            $table->string('relationEktp')->nullable();
            $table->string('education')->nullable();
            $table->string('job')->nullable();
            $table->string('insurance')->nullable();
            $table->string('information')->nullable();
            $table->string('createdBy')->nullable();
            $table->string('createdDate')->nullable();
            $table->string('changeBy')->nullable();
            $table->string('changeDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
