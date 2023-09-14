<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardEx extends Model
{
   use HasFactory;

    
    protected $table = 'BoardEx';

    protected $fillable = [
        'name', 'content','call'
    ];




    
}
