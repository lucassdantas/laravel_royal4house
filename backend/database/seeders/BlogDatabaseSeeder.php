<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuário fictício
        $userId = DB::table('users')->insertGetId([
            'name' => 'Admin Teste',
            'email' => 'admin@example.com2',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categorias
        $categories = collect(['Laravel', 'PHP', 'Front-end'])->map(function ($title) use ($userId) {
            return DB::table('blog_categories')->insertGetId([
                'user_id' => $userId,
                'title' => $title,
                'description' => "Descrição para $title",
                'image_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Tags
        $tags = collect(['backend', 'framework', 'novidade'])->map(function ($title) use ($userId) {
            return DB::table('blog_tags')->insertGetId([
                'user_id' => $userId,
                'title' => $title,
                'description' => "Tag sobre $title",
                'image_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Posts
        $postIds = collect(range(1, 5))->map(function ($i) use ($userId) {
            return DB::table('blog_posts')->insertGetId([
                'user_id' => $userId,
                'title' => "Post Exemplo $i",
                'content' => "Conteúdo longo para o post $i",
                'excerpt' => "Resumo do post $i",
                'image_url' => 'https://via.placeholder.com/600x400',
                'published_at' => Carbon::now()->subDays($i),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Pivot: Post-Categories
        foreach ($postIds as $postId) {
            DB::table('blog_post_categories')->insert([
                'blog_post_id' => $postId,
                'blog_category_id' => $categories->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Pivot: Post-Tags
        foreach ($postIds as $postId) {
            $randomTags = $tags->random(rand(1, 2));
            foreach ($randomTags as $tagId) {
                DB::table('blog_post_tags')->insert([
                    'blog_post_id' => $postId,
                    'blog_tag_id' => $tagId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
