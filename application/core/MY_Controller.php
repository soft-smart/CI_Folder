<?php

class MY_Controller extends CI_Controller {

	private $authenticate_status = false;


// this block only authenticate custom login
	protected function loginAuthenticate(){

		
	}

// this block only authenticate gmail login

	protected function gmailAuthenticate(){

		
	}

// this block only authenticate facebook login

	protected function facebookAuthenticate(){

		
	}


/* this block return status of authentication 
	return type : boolean
	
*/

	protected function authenticateStatus(){

		return $this->$authenticate_status;
	}

}


?>