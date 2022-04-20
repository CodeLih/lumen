<?php


namespace App\StateMachine\OrderState\Action;


use App\StateMachine\Action;

class CustomerCancel implements Action
{

	public function handle($from, $event, $to, $data, $stateObj, $eventDesc)
	{
		echo "用户订单取消......";
	}
}