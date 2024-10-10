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
        Schema::create('_tools', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("Rate_Per_Day");
            $table->string("Rate_Per_Month");
            $table->string("Rate_Per_Year");
            $table->string("Rate_Per_Hour_With_Operator");
            $table->string("Location");
            $table->string("img");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tools');
    }
};
