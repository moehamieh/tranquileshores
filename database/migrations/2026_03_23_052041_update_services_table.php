<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('services', function (Blueprint $table) {
            if (!Schema::hasColumn('services', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
            if (!Schema::hasColumn('services', 'subtitle')) {
                $table->string('subtitle')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('services', 'icon')) {
                $table->string('icon')->nullable()->after('image');
            }
            if (!Schema::hasColumn('services', 'category_id')) {
                $table->unsignedBigInteger('category_id')->nullable()->after('icon');
            }
            if (!Schema::hasColumn('services', 'order')) {
                $table->integer('order')->default(0)->after('status');
            }
            if (!Schema::hasColumn('services', 'bg_color')) {
                $table->string('bg_color')->default('#FBF7F4')->after('order');
            }
        });
    }

    public function down(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['slug', 'subtitle', 'icon', 'category_id', 'order', 'bg_color']);
        });
    }
};
