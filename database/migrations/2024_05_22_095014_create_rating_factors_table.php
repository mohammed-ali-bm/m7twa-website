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
        Schema::create('rating_factors', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("type")->default("rating")->comment("rating , text");
            $table->string("status")->default("active")->comment("active , inactive");
            $table->boolean("required")->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_factors');
    }
};
