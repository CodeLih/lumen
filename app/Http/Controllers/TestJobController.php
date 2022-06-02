<?php


namespace App\Http\Controllers;


use App\Events\ExampleEvent;
use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Event;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

class TestJobController extends Controller
{
	public function index() {
	//	$this->dispatch(new ExampleJob());

	//	event(new ExampleEvent());
		Event::dispatch(new ExampleEvent());
	}

}