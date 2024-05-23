<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class LoginController extends RestController {
   
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
	}

    public function index_get()
    {
		//$this->load->database();
		$this->load->view('header');
        $this->load->view('login');		
    }    

	public function submit_post()
    {
        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Run validation
        if ($this->form_validation->run() === FALSE) {
            // Validation failed now it will return validation errors
            $this->load->view('header');
			$this->load->view('login');
        } else {
            // Validation passed
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Load the user model
            $this->load->model('user_model');

            // Attempt to login the user
            $user = $this->user_model->login($username, $password);

            if ($user) {
                // User login successful
				 $this->session->set_userdata('username', $user->username);
                redirect('');
            } else {
                // Invalid username or password
				redirect('login');
               /* $this->response([
                    'status' => 'error',
                    'message' => 'Invalid username or password'
                ], RestController::HTTP_UNAUTHORIZED);*/
            }
        }
    }	
}
