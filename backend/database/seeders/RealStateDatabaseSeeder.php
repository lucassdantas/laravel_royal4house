<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RealStateDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuário exemplo (assumindo que a tabela users existe)
        $userId = DB::table('users')->insertGetId([
            'name' => 'Admin Imobiliária',
            'email' => 'admin@imobiliaria.com2',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Condomínios
        $condominiums = collect([
            ['name' => 'Condomínio Verde', 'description' => 'Condomínio com área verde e segurança 24h', 'image_url' => 'https://via.placeholder.com/300x200'],
            ['name' => 'Condomínio Azul', 'description' => 'Condomínio com lazer completo e piscina', 'image_url' => 'https://via.placeholder.com/300x200'],
        ])->map(function ($condo) use ($userId) {
            return DB::table('condominiums')->insertGetId([
                'user_id' => $userId,
                'name' => $condo['name'],
                'description' => $condo['description'],
                'image_url' => $condo['image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Bairros
        $neighborhoods = collect([
            ['name' => 'Centro', 'description' => 'Área central da cidade, com muitos comércios', 'image_url' => 'https://via.placeholder.com/300x200'],
            ['name' => 'Jardim das Flores', 'description' => 'Bairro residencial com muitas áreas verdes', 'image_url' => 'https://via.placeholder.com/300x200'],
        ])->map(function ($bairro) use ($userId) {
            return DB::table('neighborhoods')->insertGetId([
                'user_id' => $userId,
                'name' => $bairro['name'],
                'description' => $bairro['description'],
                'image_url' => $bairro['image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Tipos de imóveis
        $types = collect([
            ['name' => 'Apartamento', 'description' => 'Imóveis em prédios com várias unidades', 'image_url' => 'https://via.placeholder.com/150'],
            ['name' => 'Casa', 'description' => 'Imóveis independentes com terreno', 'image_url' => 'https://via.placeholder.com/150'],
        ])->map(function ($type) use ($userId) {
            return DB::table('real_state_types')->insertGetId([
                'user_id' => $userId,
                'name' => $type['name'],
                'description' => $type['description'],
                'image_url' => $type['image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Amenidades
        $amenities = collect([
            ['name' => 'Piscina', 'description' => 'Piscina para adultos e crianças', 'image_url' => 'https://via.placeholder.com/100'],
            ['name' => 'Academia', 'description' => 'Academia equipada', 'image_url' => 'https://via.placeholder.com/100'],
            ['name' => 'Playground', 'description' => 'Área para crianças brincarem', 'image_url' => 'https://via.placeholder.com/100'],
        ])->map(function ($amenity) use ($userId) {
            return DB::table('amenities')->insertGetId([
                'user_id' => $userId,
                'name' => $amenity['name'],
                'description' => $amenity['description'],
                'image_url' => $amenity['image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        // Imóveis
        // Para simplificar, vamos usar os primeiros itens das coleções anteriores
        DB::table('real_states')->insert([
            'user_id' => $userId,
            'neighborhood_id' => $neighborhoods->first(),
            'condominium_id' => $condominiums->first(),
            'type_id' => $types->first(),
            'title' => 'Apartamento Moderno no Centro',
            'content' => 'Apartamento espaçoso com 3 quartos, suíte e varanda.',
            'image_url' => 'https://via.placeholder.com/600x400',
            'address' => 'Rua das Flores, 123',
            'rooms' => 3,
            'suites' => 1,
            'parking_spaces' => 2,
            'area' => '120', // poderia ser integer
            'price' => '350000', // poderia ser decimal
            'code' => 'APT12345',
            'status' => 'disponível',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('real_states')->insert([
            'user_id' => $userId,
            'neighborhood_id' => $neighborhoods->last(),
            'condominium_id' => $condominiums->last(),
            'type_id' => $types->last(),
            'title' => 'Casa com Jardim no Jardim das Flores',
            'content' => 'Casa confortável com 4 quartos, piscina e garagem.',
            'image_url' => 'https://via.placeholder.com/600x400',
            'address' => 'Av. das Palmeiras, 456',
            'rooms' => 4,
            'suites' => 2,
            'parking_spaces' => 3,
            'area' => '250',
            'price' => '550000',
            'code' => 'CASA54321',
            'status' => 'disponível',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
