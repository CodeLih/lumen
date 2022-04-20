<?php
namespace App\Observer;

use SplSubject;
use SplObserver;
//class CommentsUpdateSubscribe implements SplObserver
//{
//
//    public function update(SplSubject $subject)
//    {
//        if ($subject->has_comments){
//            echo "你有新的评论!!! <br>";
//        }
//    }
//}
class CommentsUpdateSubscribe implements SplObserver{
    public function update(SplSubject $subject){
        if($subject->has_comments){
            echo "您关注的文章有新评论哦<br/>";

        }

    }

}
