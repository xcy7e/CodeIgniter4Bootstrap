<?php

namespace App\Controllers;

class Pages extends BaseController
{


	public function index()
	{
	    $this->bootstrapTemplate = 'product';
		return $this->view('home');
	}


}
