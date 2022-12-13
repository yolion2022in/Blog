<?php

namespace Database\Seeders;

use Faker\Factory;  //記得 user use Faker\Factory ，不要 use 錯 (Carbon\Factory)
use App\Models\Cgy;
use Illuminate\Database\Seeder;
use Carbon\Carbon;  //記得 use Carbon\Carbon
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
        Cgy::truncate();    //清空資料表，並重置主鍵

        $faker = Factory::create('zh_TW');  //CgySeeder工廠 設定的語系

        Cgy::factory()->times(100)->create();   //呼叫 Factory (路徑 database\factories\CgyFactory.php)

        // Cgy::create(['subject'=>'分類1', 'enabled'=>true]);
        
        // for($i=1; $i<=100; $i++){   //新增100筆資料
            // Cgy::create(['subject'=>"分類$i", 'enabled'=>true, 'desc'=>"描述 $i"]);
            /*
            Cgy::create(['subject'=>"分類". rand(1,1000), 
                'enabled'=>true, 
                'desc'=>"描述 $i",
                'enabled_at'=> Carbon::now()->addDays(rand(0,10))
            ]);
            */
            /*
            Cgy::create(['subject'=>$faker->realText(15), 
                // 'subject'=>$faker->sentence, 
                'enabled'=>$faker->randomElement([true,false]), 
                'desc'=>"描述 $i",
                'enabled_at'=> Carbon::createFromFormat('Y-m-d',$faker->date)
            ]);
            */
        // }
    }
}
