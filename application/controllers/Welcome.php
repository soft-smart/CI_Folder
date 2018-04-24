<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		//loginAuthenticate();
		echo 'first page ';
		//$this->load->view('welcome_message');
	}

	public function name(){
		echo 'name rohi sharma';
	}
}
