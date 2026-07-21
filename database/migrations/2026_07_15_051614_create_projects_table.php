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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('filter');
            $table->string('title');
            $table->text('description');
            $table->text('image')->nullable();
            $table->string('cta_label')->default('VIEW PROJECT');
            $table->boolean('featured')->default(false);
            $table->string('layout')->default('small');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
