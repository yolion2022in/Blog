<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cgy extends Model
{
    use HasFactory;

    protected $dates = ['enabled_at'];

    protected $fillable = ['subject', 'desc', 'enabled'];   //設定白名單 (允許的欄位)

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
