<?php

namespace App\Http\Controllers;
use App\Common\Validators\Validator;
use App\Jobs\ExampleJob;
use App\Model\Father;
use App\Model\Son;
use App\Model\User;
use App\Pipe\PipeImpl\Pipeline;
use App\Pipe\PipeImpl\StageAddOne;
use App\Pipe\PipeImpl\StageAddTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Filter\TestFilter;

class TestController extends BaseController
{
    public $pipe;

	/***
	 * @param Request $request
	 * @throws \Exception
	 */
    public function index(Request $request)
    {
//        $params = $request->all();
//        $rule = [
//            'name' => 'required',
//            'email' => 'required|email|unique:users'
//        ];
//        $message = [
//            'name.required' => 'name必填',
//            'email.required'=> 'email必填'
//        ];
//        //使用validate方法进行验证
//        $this->validate($request,$rule,$message);
//
//        //使用validator实例验证
//        $validator = Validator::make($params,$rule,$message);
//        //验证失败返回结果
//        if ($validator->fails()) {
//            return redirect('') //重定向的url
//                ->withErrors($validator) //把错误消息闪存到session然后进行重定向
//                ->withInput();
//        }
        //处理错误消息
     //   $error_msg = $validator->errors();
//        $a = true;
//        if ($a) {
//            echo 123;
//            echo true;
//        }else label:{
//            echo 456;
//            echo false;
//    }
//        $user = User::query()
//            ->selectRaw('id')
//            ->where('id','>',61)
//            ->first();
//       // dd($user);
//        if (!empty($user))
//        {
//            $user->name = "haha11";
//            $user->save();
//            echo "over 111";
////        }
//        $son = new Son();
//        $son->test();
//        $son->ceshi();
//        $son1 = new Father();
//        $son1->test();
//        $f = function($name) {
//            echo $name;
//        };
     //   (new TestFilter())->handle("hello",$f);
//        $payload = 10;
//        $one = new StageAddOne();
//        $two = new StageAddTwo();
//        $pipe = new Pipeline($payload);
//        $res = $pipe->pipe($one)->pipe($two)->process();
//        var_dump($res);
//	//	$this->validate($request,['age' => 'sometimes|between:2,5'],['age.between' => 'age不能为空']);
//			$data = [
//				'name' => 'zhangsna',
//				'age' => 23,
//			];
//			if (empty($data['sex'])) {
//				echo 111;die;
//			}else {
//				echo 222;die;
//			}
//		$arr = config('open.api');

		//$this->dispatch(new ExampleJob());
		User::query()->insert([
			'age' => 1
		]);

		echo 666;die;

    }

}
