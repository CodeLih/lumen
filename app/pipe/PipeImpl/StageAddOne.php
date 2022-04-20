<?php
namespace App\Pipe\PipeImpl;

use App\Pipe\StageInterface;

class StageAddOne implements StageInterface {

    public function handle($payload)
    {
        return $payload + 1;
    }
}
