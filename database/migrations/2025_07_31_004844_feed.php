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
        Schema::create('feed', function(Blueprint $table){
          $table->id();
          $table->string('title');
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->string('image_url');
          $table->text('description');
          $table->string("redirectTo");
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed');
    }
};
