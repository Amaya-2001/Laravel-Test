<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('region', function (Blueprint $table) {
            $table->id('region_code');
            $table->string('region_name');
            $table->integer('zone_code_pk');
            $table->foreign('zone_code_pk')
                ->references('zone_code')
                ->on('zones')
                ->onDelete('cascade')
                ->name('region_zone_code_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region');
    }
};
