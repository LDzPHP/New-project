<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('merch', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('price');
            $table->string('class');
            $table->string('subclass');
            $table->string('size');
            $table->date('added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('merch');
    }
};
