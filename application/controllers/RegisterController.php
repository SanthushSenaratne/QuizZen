<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class RegisterController extends RestController {
   
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
	}

    public function index_get()
    {
        $this->load->view('header');
        $this->load->view('register');
    }    

	public function submit_post() {
        // Form validation
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // If validation fails, reload the register view with validation errors
            $this->load->view('header');
			$this->load->view('register');
        } else {
			$this->load->model('user_model');

            // If validation passes, create user data array
            $data = array(
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );
            
            // Insert user data into the database
           $this->user_model->register($data);

            // Redirect to login page or any other page after successful registration
            redirect('');
        }
    }

}
