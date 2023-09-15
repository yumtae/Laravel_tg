<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardHistory extends Model
{
    use HasFactory;

    //created_ad , updated_at 넣어주는 기능 제거
    public $timestamps  = false;

    public $fillable =[
        'type','content','created_at'

    ];


    public static function boot(){
        parent::boot();
        //created_at 기능 자동 추가
        static::creating(function ($model){
            $model->created_at = $model->freshTimestamp();

        });

    }



}
