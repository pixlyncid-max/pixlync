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
        Schema::create('service_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_overline')->default('Our Capabilities');
            $table->string('hero_heading_line1')->default('Digital');
            $table->string('hero_heading_line2')->default('Artefacts');
            $table->string('hero_heading_line3')->default('That Scale.');
            $table->text('hero_description')->nullable();
            $table->string('process_heading')->default('The Protocol');
            $table->text('process_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_settings');
    }
};
