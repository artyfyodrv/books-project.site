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
            $table->string('title')->nullable(false);;
            $table->string('isbn', 30)->nullable();
            $table->bigInteger('pageCount')->nullable()->default(0);
            $table->text('thumbnailUrl')->nullable();
            $table->text('shortDescription')->nullable();
            $table->text('longDescription')->nullable();
            $table->string('status')->nullable();
            $table->date('publishedDate')->nullable();
            $table->string('isDeleted')->default(0);
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
