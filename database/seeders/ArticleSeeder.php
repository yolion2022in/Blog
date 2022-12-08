<?php

namespace Database\Seeders;

use App\Models\Article; //記得 import Article Model
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        // Article::create(['subject'=>'分類1', 'enabled'=>true]);
        for($i=1; $i<=100; $i++){   //新增100筆資料
            Article::create(['subject'=>"分類$i", 
                'enabled'=>true, 
                'content'=>"內容 $i",
                'cgy_id'=>$i,
                'pic'=>"public/storage/pic/$i.jpg"
            ]);
        }
    }
}
