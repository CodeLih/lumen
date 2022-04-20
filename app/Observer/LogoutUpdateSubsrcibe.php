<?php
namespace App\Observer;

class LogoutUpdateSubsrcibe implements Observer
{

    public function update(Subject $subject)
    {
       if ($subject->login){
           echo "你已登陆，xxx...";
       }
    }
}
