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
        Schema::create('song_contributors', function (Blueprint $table) {

            $table->foreignId('artist_id')->constrained()->restrictOnDelete();
            $table->foreignId('song_id')->constrained()->restrictOnDelete();
            $table->foreignId('artist_role_id')->constrained();

            $table->primary(['artist_id', 'song_id', 'artist_role_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_contributors');
    }
};
