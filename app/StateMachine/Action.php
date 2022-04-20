<?php


namespace App\StateMachine;


interface Action
{
	public function handle($from, $event, $to, $data, $stateObj, $eventDesc);

}