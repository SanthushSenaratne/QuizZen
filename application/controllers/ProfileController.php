<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class ProfileController extends RestController {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
		$this->load->model('QuizModel');
    }

    public function index_get() {
        // Check if user is logged in
        if ($this->session->userdata('username')) {
            // Retrieve user data from the user_model
            $username = $this->session->userdata('username');
            $user = $this->user_model->getUserByUsername($username);
            
            // Pass user data to the profile view
            $data['user'] = $user;

			// Retrieve quizzes created by the user
			$data['quizzes'] = $this->QuizModel->getQuizzesByUsername($username);

			// Retrieve quiz attempts of the user
			$data['quiz_attempts'] = $this->QuizModel->getUserQuizAttempts($username);

			$this->load->view('header');
            $this->load->view('profile', $data);
        } else {
            // If user is not logged in, redirect to login page
            redirect('login');
        }
    }

}
