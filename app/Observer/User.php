<?php
namespace  App\Observer;

class User implements  Subject
{
    public $login;
    public $logout;
    public $re_password;
    protected $observers = [];
    public function __construct()
    {

    }
    public function has_update($login = false,$logout =false,$re_password = false)
    {
        $this->login = $login;
        $this->logout = $logout;
        $this->re_password = $re_password;
        $this->notify();

    }
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
    }

    public function notify()
    {
       foreach ($this->observers as $observer){
           $observer->update($this);
       }
    }
}
