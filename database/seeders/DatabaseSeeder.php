<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use \App\Models\User;
use \App\Models\Berita;
use \App\Models\Category;
use \App\Models\data_penduduk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
        // \App\Models\User::factory(10)->create();
        User::factory(1)->create();
        // Berita::factory(10)->create();
        // Category::factory(5)->create();
        // data_penduduk::factory(5)->create();
        
        

    }
}