<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Beranda extends MY_Controller {

    public function index() {
		$this->view('beranda.index');
	}
}
