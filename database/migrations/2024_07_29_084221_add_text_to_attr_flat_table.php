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
        Schema::table('attr_flat', function (Blueprint $table) {
            //
            $table->string('text')->nullable()->after("attr_id");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attr_flat', function (Blueprint $table) {
            //
        });
    }
};
