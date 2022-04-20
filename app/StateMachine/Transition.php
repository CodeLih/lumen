<?php


namespace App\StateMachine;


class Transition {
	private $from;
	private $event;
	private $to;
	private $action;
//	private $beforeAdvice;
//	private $afterAdvice;
	public function __construct($from, $event, $to, Action $action = null)
	{
		$this->from  = $from;
		$this->event = $event;
		$this->event = $to;
		$this->action = $action;
	}

	/**
	 * @return mixed
	 */
	public function getFrom()
	{
		return $this->from;
	}

	/**
	 * @return mixed
	 */
	public function getEvent()
	{
		return $this->event;
	}

	/**
	 * @return mixed
	 */
	public function getTo()
	{
		return $this->to;
	}

	/**
	 * @return Action|null
	 */
	public function getAction(): ?Action
	{
		return $this->action;
	}
}