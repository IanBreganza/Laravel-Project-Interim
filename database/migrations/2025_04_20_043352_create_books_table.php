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
            $table->id(); 
            $table->timestamps();
            $table->string('Title')->comment('Title of the book');
            $table->string('Author')->comment('Author of the book');
            $table->year('PublishedYear')->comment('Year the book was published');
            $table->string('Image')->comment('Path to the image file');
            $table->text('Summary')->comment('Brief summary of the book');
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
