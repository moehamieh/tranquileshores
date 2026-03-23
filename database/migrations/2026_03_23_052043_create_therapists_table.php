<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('role');
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('email')->nullable();
            $table->text('bio')->nullable();
            $table->json('education')->nullable(); // JSON array of {label, value}
            $table->string('certification')->nullable();
            $table->string('expertise')->nullable();
            $table->integer('practice_years')->default(0);
            $table->decimal('min_price', 8, 2)->default(0);
            $table->json('social_links')->nullable(); // JSON array of {platform, url, icon}
            $table->json('tags')->nullable(); // JSON array of strings
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('therapists');
    }
};
