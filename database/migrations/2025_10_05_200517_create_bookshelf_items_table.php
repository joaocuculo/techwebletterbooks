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
        Schema::create('bookshelf_items', function (Blueprint $table) {
            $table->foreignUuid('bookshelf_id')->constrained('bookshelves')->onDelete('cascade');
            $table->foreignUuid('book_id')->constrained('books')->onDelete('cascade');

            $table->enum('status', ['lido', 'nao_lido', 'quero_ler', 'favorito'])->default('nao_lido');
            $table->timestamp('added_at')->useCurrent();
            $table->date('reading_goal')->nullable();

            $table->primary(['bookshelf_id', 'book_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookshelf_items');
    }
};
