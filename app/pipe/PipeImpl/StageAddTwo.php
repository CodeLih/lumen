<?php
namespace App\Pipe\PipeImpl;

use App\Pipe\StageInterface;

class StageAddTwo implements StageInterface {

    public function handle($payload)
    {
       return $payload + 2;
    }
}
