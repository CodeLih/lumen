<?php


namespace App\StateMachine;


abstract class StateMachine
{
	protected $states = [];
	protected $start = [];
	protected $end = [];
	protected $event =[];
	protected $transitions = [];
	protected $eventDesc = '';
	protected $obj;


	public function createMachine($allowState,$start,$end,$event,$transitions) {
		$this->setStates($allowState);
		$this->setStart($start);
		$this->setEnd($end);
		$this->setEvent($event);
		foreach ($transitions as $transition) {
			$this->addTransition($transition);
		}

	}
	private function addTransition(Transition $transition) {
	$this->$transition[$transition->getFrom()][$transition->getEvent()] = [
		'to' 		=> $transition->getTo(),
		'action'	=> $transition->getAction(),
	];
	}
	public function run($data) {

	}
	public abstract function onEnter($event, $data);
	/**
	 * @return array
	 */
	public function getStates(): array
	{
		return $this->states;
	}

	/**
	 * @param array $states
	 */
	public function setStates(array $states): void
	{
		$this->states = $states;
	}

	/**
	 * @return array
	 */
	public function getEnd(): array
	{
		return $this->end;
	}

	/**
	 * @param array $end
	 */
	public function setEnd(array $end): void
	{
		$this->end = $end;
	}

	/**
	 * @return array
	 */
	public function getStart(): array
	{
		return $this->start;
	}

	/**
	 * @param array $start
	 */
	public function setStart(array $start): void
	{
		$this->start = $start;
	}

	/**
	 * @return array
	 */
	public function getEvent(): array
	{
		return $this->event;
	}

	/**
	 * @param array $event
	 */
	public function setEvent(array $event): void
	{
		$this->event = $event;
	}

	/**
	 * @return string
	 */
	public function getEventDesc(): string
	{
		return $this->eventDesc;
	}

	/**
	 * @param string $eventDesc
	 */
	public function setEventDesc(string $eventDesc): void
	{
		$this->eventDesc = $eventDesc;
	}





}