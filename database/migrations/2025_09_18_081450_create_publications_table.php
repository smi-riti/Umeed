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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
             $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->string('title'); 
            $table->string('authors')->nullable(); 
            $table->string('journal')->nullable(); 
            $table->year('publication_year')->nullable(); 
            $table->string('link')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
