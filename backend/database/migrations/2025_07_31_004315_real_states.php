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
       Schema::create('condominiums', function(Blueprint $table){
          $table->id();
          $table->foreignId('user_id')->constrained()->onDelete('cascade');

          $table->string('name');
          $table->text('description');
          $table->string('image_url');
          $table->timestamps();
        });

        Schema::create('neighborhoods', function(Blueprint $table){
          $table->id();
          $table->foreignId('user_id')->constrained()->onDelete('cascade');

          $table->string('name');
          $table->text('description');
          $table->string('image_url');
          $table->timestamps();
        });

        
        Schema::create('real_state_types', function(Blueprint $table){
          $table->id();
          $table->foreignId('user_id')->constrained()->onDelete('cascade');

          $table->string('name');
          $table->text('description');
          $table->string('image_url');
          $table->timestamps();
        });

        Schema::create('amenities', function(Blueprint $table){
          $table->id();
          $table->foreignId('user_id')->constrained()->onDelete('cascade');

          $table->string('name');
          $table->text('description');
          $table->string('image_url');
          $table->timestamps();
        });
        
        Schema::create("real_states", function(Blueprint $table){
          $table->id();
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->foreignId('neighborhood_id')->constrained('neighborhoods')->onDelete('cascade');
          $table->foreignId('condominium_id')->constrained('condominiums')->onDelete('cascade');
          $table->foreignId('type_id')->constrained('real_state_types')->onDelete('cascade');
          $table->string('title');
          $table->longText('content');
          $table->string('image_url');
          $table->string('address');
          $table->integer('rooms');
          $table->integer('suites');
          $table->integer('parking_spaces');
          $table->string('area');
          $table->string('price');
          $table->string('code');
          $table->enum('status', ['disponível', 'vendido'])->default('disponível');
          $table->timestamps();
        });
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('real_states');
      Schema::dropIfExists('condominiums');
      Schema::dropIfExists('neighborhoods');
      Schema::dropIfExists('real_state_types');
      Schema::dropIfExists('amenities');
    }
};
