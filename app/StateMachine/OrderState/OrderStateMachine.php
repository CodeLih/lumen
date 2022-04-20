<?php


namespace App\StateMachine\OrderState;


use App\StateMachine\OrderState\Action\CustomerCancel;
use App\StateMachine\StateMachine;
use App\StateMachine\Transition;

class OrderStateMachine extends StateMachine
{
	public function __construct()
	{
		$allowState = [
			OrderStateConfig::WAIT_PAY	=> '待支付',
			OrderStateConfig::CANCELED	=> '已取消',
			];
		$events = [
			OrderStateConfig::EVENT_CUSTOMER_CANCEL,
		];
		$transitions = [
			new Transition(OrderStateConfig::WAIT_PAY, OrderStateConfig::EVENT_CUSTOMER_CANCEL, OrderStateConfig::CANCELED, new CustomerCancel())
		];
		$this->createMachine($allowState, OrderStateConfig::START, OrderStateConfig::ALL_REFUND, $events, $transitions );
	}


	public function onEnter($event, $data)
	{

	}
}