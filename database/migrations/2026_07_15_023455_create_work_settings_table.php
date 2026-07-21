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
        Schema::create('work_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_heading_line1')->default('SELECTED');
            $table->string('hero_heading_badge')->default('ARTEFACTS');
            $table->text('hero_description')->nullable();
            $table->string('cta_heading')->default('READY TO BUILD <br/> THE NEXT ARTEFACT?');
            $table->text('cta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_settings');
    }
};
