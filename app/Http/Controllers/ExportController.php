<?php
namespace App\Http\Controllers;


use App\Observer\LoginUpdateSubscribe;
use App\Observer\LogoutUpdateSubsrcibe;
use App\Observer\User;
use App\service\ExportService;

class ExportController extends Controller
{
    public function index()
    {
        $list = [
            ['name' =>'张三','age' => 23,'sex' => '男'],
            ['name' =>'李四','age' => 24,'sex' => '男'],
            ['name' =>'王五','age' => 25,'sex' => '男'],
        ];
        (new ExportService())->export($list);
        return  'success';
        //        $params = $request->input(['idCard']);
//        $rule = ['idCard' => 'required|card'];
//        $message = [
//            'idCard.required' => 'id必填',
//            'idCard.card'  => 'id必须为1'
//        ];
//         $this->validate($request,$rule,$message);
//        $article_1 = new Article();
//        $article_1->attach(new ContentUpdateSubscribe());
//        $article_1->attach(new CommentsUpdateSubscribe());
//        $article_1->has_update(true,true);
        $user = new User();
        $user->attach(new LoginUpdateSubscribe());
        $user->attach(new LogoutUpdateSubsrcibe());
        $user->has_update(true,false,true);
        //   $user->notify();
    }
}
