<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CgySeeder; //記得 import CgySeeder
use Illuminate\Database\Seeder;
use Database\Seeders\ArticleSeeder; //記得 import ArticleSeeder
use Illuminate\Support\Facades\DB;  //記得 import DB Facades class

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');  //關閉外來鍵檢查
        $this->call(CgySeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(PostSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');  //開啟外來鍵檢查
    }
}
