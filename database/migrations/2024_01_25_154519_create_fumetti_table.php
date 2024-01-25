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
        Schema::create('fumetti', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string("thumb");
            $table->decimal("price");
            $table->string("series");
            $table->decimal("sale_date");
            $table->string("type");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fumetti');
    }
};
