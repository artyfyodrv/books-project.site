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
            $table->string('title')->default('null');;
            $table->string('isbn', 30)->default('0');
            $table->bigInteger('pageCount')->default('0');
            $table->text('thumbnailUrl')->nullable()->default('null');;
            $table->text('shortDescription')->default('null');
            $table->text('longDescription')->default('null');
            $table->string('status')->default('null');
            $table->unsignedBigInteger('author_id')->default('0');
            $table->unsignedBigInteger('category_id')->default('0');
            $table->date('publishedDate')->nullable();
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
