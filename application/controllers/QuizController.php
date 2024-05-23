<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class QuizController extends RestController {

    public function __construct() {
        parent::__construct();
        $this->load->model('QuizModel');
    }

    public function index_get() {
		$this->load->view('header');
         $data['quizzes'] = $this->QuizModel->getQuizzes();
        //$this->response($quizzes, RestController::HTTP_OK);	
        $this->load->view('quizlist', $data);
    }
}
