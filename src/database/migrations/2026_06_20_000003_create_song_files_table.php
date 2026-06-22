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
        Schema::create('song_files', function (Blueprint $table) {

            $table->id();
            $table->foreignId('song_id')->constrained()->restrictOnDelete();
            $table->foreignId('song_file_format_id')->constrained()->restrictOnDelete();
            $table->foreignId('song_file_type_id')->constrained()->restrictOnDelete();
            $table->string('storage_path');

            $table->timestamps();

            $table->unique([
                'song_id',
                'song_file_format_id',
                'song_file_type_id',
            ]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_files');
    }
};
