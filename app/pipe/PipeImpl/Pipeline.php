<?php
namespace App\Pipe\PipeImpl;

use App\Pipe\PipelineInterface;
use App\Pipe\StageInterface;

class Pipeline implements PipelineInterface {

    private $pipes;
    private $payload;
    private $arr;

    public function __construct($payload)
    {
        $this->payload = $payload;

    }

    public function pipe(StageInterface $stage)
    {
        $this->pipes[] = $stage;
        return $this;

    }

    public function process()
    {
       foreach($this->pipes as $pipe){
           $this->payload = call_user_func([$pipe,'handle'],$this->payload);
       }
       return $this->payload;
    }
}
