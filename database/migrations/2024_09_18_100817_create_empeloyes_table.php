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
        Schema::create('empeloyes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['L', 'P']);
            $table->date('date_of_birth');
            $table->text('residence_address');
            $table->string('phone');
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->text('image_profile')->nullable();
            $table->foreignId('dapertemens_id');
            $table->boolean('is_active');
            $table->timestamps();


            $table->foreign('dapertemens_id')->references('id')
                ->on('dapertemens')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empeloyes');
    }
};
