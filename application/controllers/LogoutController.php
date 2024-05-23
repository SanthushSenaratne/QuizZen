<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class LogoutController extends RestController {
   
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function logout_post()
{
    // Destroy session data
    $this->destroy_session();

    // Return success message
    //$this->response(['message' => 'Logout successful'], RestController::HTTP_OK);
	redirect('');
}

private function destroy_session()
{
    // Unset 'username' session variable and destroy session
    $this->session->unset_userdata('username');
    $this->session->sess_destroy();
} 	
	
}
