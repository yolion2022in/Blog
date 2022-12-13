<?php

namespace App\Models;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $dates = ['enabled_at'];

    public function cgy(){
        return $this->belognsTo(Cgy::class);    //外來鍵關係設定
    }
}
