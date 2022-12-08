<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();

        // Cgy::create(['subject'=>'分類1', 'enabled'=>true]);
        for($i=1; $i<=100; $i++){   //新增100筆資料
            Cgy::create(['subject'=>"分類$i", 'enabled'=>true, 'desc'=>"描述 $i"]);
        }
    }
}
