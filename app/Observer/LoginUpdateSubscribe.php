<?php
namespace App\Observer;

class LoginUpdateSubscribe implements  Observer
{

    public function update(Subject $subject)
    {
       if ($subject->logout){
           echo "你已登陆，xxx... <br>";
       }
    }
}
