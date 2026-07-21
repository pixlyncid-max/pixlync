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
        Schema::create('about_settings', function (Blueprint $table) {
            $table->id();
            // Hero section
            $table->string('hero_badge')->default('EST. 2018');
            $table->string('hero_heading_line1')->default('Crafting Digital');
            $table->string('hero_heading_line2')->default('Artefacts');
            $table->string('hero_heading_suffix')->default('with Purpose.');
            $table->text('hero_description')->nullable();
            $table->string('hero_image')->nullable();
            // Global / stats section
            $table->string('global_heading1')->default('A Borderless');
            $table->string('global_heading2')->default('Collective');
            $table->text('global_description')->nullable();
            $table->string('stat1_value')->default('240+');
            $table->string('stat1_label')->default('Projects Delivered');
            $table->string('stat2_value')->default('18');
            $table->string('stat2_label')->default('Global Partners');
            $table->string('stat3_value')->default('04');
            $table->string('stat3_label')->default('Design Awards');
            $table->string('offices')->default('OSLO,TOKYO,NY,SINGAPORE'); // comma-separated
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};
