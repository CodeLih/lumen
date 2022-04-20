<?php
namespace App\StateMachine\OrderState;

class OrderStateConfig {
	//订单状态
	const START = 0;
	const WAIT_PAY = 20;
	const CANCELED = 21;
	const ALL_REFUND = 30;

	//订单事件
	const EVENT_CREATE_ORDER = 'create_order';
	const EVENT_WX_PAY_FAIL  = 'wx_pay_fail';
	const EVENT_CUSTOMER_CANCEL = "customer_cancel";
}