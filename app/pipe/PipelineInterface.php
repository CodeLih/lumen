<?php
namespace App\Pipe;

interface PipelineInterface {
    public function __construct($payload);
    public function pipe(StageInterface $stage);
    public function process();
}

