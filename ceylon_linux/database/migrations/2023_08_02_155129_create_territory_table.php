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
        Schema::create('territory', function (Blueprint $table) {
            $table->id('territory_code');
            $table->string('territory_name');
            $table->integer('zone_code_pk');
            $table->integer('region_code_pk');
            $table->foreign('zone_code_pk')
                ->references('zone_code')
                ->on('zones')
                ->onDelete('cascade')
                ->name('territories_zone_code_fk');
            $table->foreign('region_code_pk')
                ->references('region_code')
                ->on('region')
                ->onDelete('cascade')
                ->name('territories_region_code_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('territory');
    }
};
