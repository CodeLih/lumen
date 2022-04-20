<?php
namespace App\Pipe;

interface StageInterface {
    public function handle($payload);
}
