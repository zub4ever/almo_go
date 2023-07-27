<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NovaLeituraEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $produto;

    public function __construct($produto)
    {

        $this->produto = [
            'id' => $produto->id,
            'tag_rfid' => $produto->tag_rfid,

        ];
        //dd($produto);
    }
}
