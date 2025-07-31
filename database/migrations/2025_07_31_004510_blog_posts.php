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
        Schema::create('blog_posts', function(Blueprint $table){
          $table->id();
          
          $table->string('image_url');
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->string('title');
          $table->longText('content');
          $table->text('excerpt');
          $table->timestamp('published_at');
          $table->timestamps();
        });
        


        Schema::create('blog_categories', function(Blueprint $table){
          $table->id();
          
          $table->string('image_url');
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->string('title');
          $table->string('description');
          $table->timestamps();
          
        });
        
        Schema::create('blog_tags', function(Blueprint $table){
          $table->id();
          
          $table->string('image_url');
          $table->foreignId('user_id')->constrained()->onDelete('cascade');
          $table->string('title');
          $table->string('description');
          $table->timestamps();
        });

        Schema::create('blog_post_categories', function(Blueprint $table){
          $table->foreignId('blog_post_id')->constrained('blog_posts')->onDelete('cascade');
          $table->foreignId('blog_category_id')->constrained('blog_categories')->onDelete('cascade');
          $table->primary(['blog_post_id', 'blog_category_id']);
          $table->timestamps();
        });
        

        Schema::create('blog_post_tags', function(Blueprint $table){
          $table->foreignId('blog_post_id')->constrained('blog_posts')->onDelete('cascade');
          $table->foreignId('blog_tag_id')->constrained('blog_tags')->onDelete('cascade');
          $table->primary(['blog_post_id', "blog_tag_id"]);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('blog_post_tags');
      Schema::dropIfExists('blog_post_categories');
      Schema::dropIfExists('blog_tags');
      Schema::dropIfExists('blog_categories');
      Schema::dropIfExists('blog_posts');
    }
};
