<?php

namespace App\Observers;

use App\Models\BoardEx;
use App\Models\BoardHistory;

class BoardObserver
{
    
    private $boardHistory;

    public function __construct(BoardHistory $boardHistory){
        $this->boardHistory=$boardHistory;

    }

    public function created(BoardEx $boardEx)
    {
      
        $this->boardHistory->create([
            'type'=>'created',
            'content'=> json_encode($boardEx)
        ]);
    }

 
    public function updated(BoardEx $boardEx)
    {
        $this->boardHistory->create([
            'type'=>'updated',
            'content'=> json_encode($boardEx)
        ]);
    }




    public function deleted(BoardEx $boardEx)
    {
        $this->boardHistory->create([
            'type'=>'deleted',
            'content'=> json_encode($boardEx)
        ]);
    }

}
