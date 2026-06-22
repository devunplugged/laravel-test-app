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
        Schema::create('user_acquired_files', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->foreignId('song_file_id')->constrained()->restrictOnDelete();

            $table->timestamps();

            $table->unique([
                'user_id',
                'song_file_id',
            ]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_acquired_files');
    }
};
