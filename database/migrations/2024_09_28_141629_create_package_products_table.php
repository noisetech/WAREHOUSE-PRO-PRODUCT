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
        Schema::create('package_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id');
            $table->foreignId('products_id');
            $table->integer('qty_product_in_bundle_products');
            $table->boolean('is_active');
            $table->boolean('is_deleted');
            $table->timestamps();


            $table->foreign('package_id')->references('id')
                ->on('packages')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('products_id')->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_products');
    }
};
