<?php
namespace App\Http\Controllers;
use App\Model\User;
use App\Model\Person;
class UserController extends Controller
{
    public function index()
    {
        $user = User::query()
            ->select(['id'])
            ->where('id',1)
            ->first();
        dd($user);
         $person = new Person();
         $person->p2();
         $person::p1();
         Person::p1();
         Person::p2();
    }
    public function revertData()
    {


    }
}
