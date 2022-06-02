<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Laravel\Lumen\Routing\Controller as BaseController;

class LoginController extends BaseController
{
	public function login(Request $request)
	{
		$id = $request->only(['id']);
		$token = Crypt::encrypt([
			'time'	=> time(),
			'id' 	=> $id,
		]);
		return $token;

	}

}