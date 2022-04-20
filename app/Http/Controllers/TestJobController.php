<?php


namespace App\Http\Controllers;


use App\Jobs\ExampleJob;

class TestJobController extends Controller
{
	public function index() {
		$this->dispatch(new ExampleJob());
	}

}