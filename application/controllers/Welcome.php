<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends MY_Controller {

    public function index()
	{
//	    $data['data'] = Sample::all();
		$this->view('welcome_message');
	}
}
