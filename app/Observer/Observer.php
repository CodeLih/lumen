<?php
namespace App\Observer;

interface Observer
{
    public function update(Subject $subject);

}
