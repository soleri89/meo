<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('pronouns')->nullable();
            $table->string('identity')->nullable();
            $table->string('sexuality')->nullable();
            $table->string('romantic_orientation')->nullable();
            $table->text('personality')->nullable();
            $table->json('likes')->nullable();
            $table->json('dislikes')->nullable();
            $table->json('skills')->nullable();
            $table->json('lore')->nullable();
            $table->string('image_path')->nullable();
            $table->string('status')->default('ONLINE');
            $table->string('mood')->default('HAPPY');
            $table->string('energy')->default('HIGH');
            $table->string('dream_state')->default('ACTIVE');
            $table->string('signal')->default('STABLE');
            $table->string('nickname')->default('MING');
            $table->string('title')->default('DREAMER');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
