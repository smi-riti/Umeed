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
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');

            $table->string('qualification')->nullable();
            $table->text('professional_bio')->nullable();
            $table->string('membership')->nullable();
            $table->json('social_media_link')->nullable();
            $table->string('special_interest')->nullable();
            $table->text('achievements')->nullable();
            $table->string('language_spoken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_profiles');
    }
};
