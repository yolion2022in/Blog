<?php

namespace Database\Seeders;

use Carbon\Carbon;  //記得 use
use Illuminate\Database\Seeder;
use App\Models\Article; //記得 use Article Model
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;  //記得 user use Faker\Factory ，不要 use 錯 (Carbon\Factory)

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();    //清空資料表，並重置主鍵

        $faker = Factory::create('zh_TW');  //ArticleSeeder工廠 設定的語系

        Article::factory()->times(100)->create(); //呼叫 Factory (路徑 database\factories\ArticleFactory.php)

        // Article::create(['subject'=>'分類1', 'enabled'=>true]);
        /*
        for($i=1; $i<=100; $i++){   //新增100筆資料
            Article::create(['subject'=>"分類$i", 
                'enabled'=>true, 
                'content'=>"內容 $i",
                'cgy_id'=>$i,
                'pic'=>"public/storage/pic/$i.jpg"
            ]);
        }
        */

        /*
        for($i=1; $i<=10; $i++){   //新增100筆資料
            Article::create([
                'subject'=>$faker->name, 
                'content'=>$faker->realText(15),
                'cgy_id'=>rand(1,10),
                'enabled_at'=>Carbon::createFromFormat('Y-m-d', $faker->date)->now()->addDays(rand(0,20)),
                'sort'=>$faker->numberBetween(0,20),
                'pic'=>$faker->imageUrl(1024,768,'picture'),
                'enabled'=>$faker->randomElement([true,false]), 
            ]);
        }
        */

    }
}
