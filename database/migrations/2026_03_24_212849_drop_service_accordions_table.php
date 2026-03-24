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
        Schema::dropIfExists('service_accordions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('service_accordions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('content');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }
};
