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
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('isbn', length: 13)->unique()->nullable();
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->string('title', length: 200);
            $table->string('publisher', length: 200)->nullable();
            $table->integer('page_count')->nullable();
            $table->string('cover_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
