<?php
namespace App\Observer;

use SplSubject;
use SplObserver;
class ContentUpdateSubscribe implements SplObserver{
    public function update(SplSubject $subject){
        if($subject->has_update){
            echo "您订阅的文章有新动态哦<br/>";

        }

    }

}
