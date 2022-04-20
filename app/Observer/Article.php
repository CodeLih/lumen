<?php
namespace  App\Observer;

use SplObserver;
use SplSubject;
use SplObjectStorage;
class Article implements SplSubject
{
    public $has_update;
    public $has_comments;
    protected $observer = null;
    public function __construct()
    {
        $this->observer = new SplObjectStorage();
    }
    public function has_update($updated = false,$comments = true)
    {
        $this->has_update = $updated;
        $this->has_comments = $comments;
        $this->notify();
    }
    public function attach(SplObserver $observer)
    {
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observer->detach($observer);
    }

    public function notify()
    {
     //   $this->observer->rewind();

        foreach ($this->observer as $observer){
            $observer->update($this);
        }
    }
}
