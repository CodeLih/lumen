<?php


namespace App\Http\Controllers;


use Firebase\JWT\JWT;

class TestTokenController extends Controller
{

	public function index()
	{
		$key = "admin";
		$token = [
			'iss' => '', //签发者可以为空
			'aud' => '', //面向的用户，可以为空
			'iat' => time(), //签发时间
			'nef' => time() + 60, //生效时间
			'exp' => time() + 7200 ,//过期时间
			'uid' => 123, //用户id，有用户其他信息也可以添加
		];
		echo 1111;
		$jwt = JWT::encode($token, $key, 'HS256');
		return $jwt;

	}

	public function parseToken() {
		$key = "admin";
		$jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE2NTM0NzEzNjgsIm5lZiI6MTY1MzQ3MTQyOCwiZXhwIjoxNjUzNDc4NTY4LCJ1aWQiOjEyM30.wMsQV262pFmkrKMzNsuYpjHEdUrji-b0qavuuvUZVeM';
		$json =  JWT::decode(json_encode($jwt),$key,['HS256']);
		return json_encode($json);
	}


}