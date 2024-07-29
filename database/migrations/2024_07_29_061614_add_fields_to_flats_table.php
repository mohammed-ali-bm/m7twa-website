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
        Schema::table('flats', function (Blueprint $table) {
            //
            $table->string('area')->nullable()->after("name");
            $table->integer('price')->nullable()->after("name");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flat', function (Blueprint $table) {
            //
        });
    }
};
