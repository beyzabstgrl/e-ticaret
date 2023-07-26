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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('short_text')->nullable();
            $table->double('price',8,2)->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('qty')->nullable();
            $table->boolean('status')->default('0');
            $table->longText('content')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
