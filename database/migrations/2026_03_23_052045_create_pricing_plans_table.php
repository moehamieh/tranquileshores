<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string('unit')->default('per 50 minute session');
            $table->text('description')->nullable();
            $table->json('features')->nullable(); // array of strings
            $table->string('icon')->default('bi-laptop');
            $table->integer('order')->default(0);
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('pricing_plans');
    }
};
