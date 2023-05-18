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
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->decimal('product_price');
            $table->enum('stock_status', ['instock', 'outofstock']);
            $table->boolean('featured')->default(1);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('image')->nullable();
            $table->string('SKU')->nullable();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->restrictOnDelete();
            $table->string('size');
            $table->string('color');
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
