<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class CreateQuizController extends RestController {
   
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('QuizModel');
	}

    public function index_get()
    {
        $this->load->view('header');
        $this->load->view('createquiz');
    }    

	public function create_quiz_post() {
        // Get quiz details from POST data
        $quiz_data = array(
            'quizname' => $this->post('quizname'),
            'createdby' => $this->session->userdata('username'), 
            'category' => $this->post('category')
        );

        // Insert quiz details into the database
        $quiz_id = $this->QuizModel->add_quiz($quiz_data);

        // Get questions from POST data
        $questions = $this->post('questions');
		if (!empty($questions) && is_array($questions)) {
            $questions_data = array();
            foreach ($questions as $question_data) {
                 $questions_data[] = array(
                'quizid' => $quiz_id,
                'question' => $question_data['question'],
                'option1' => $question_data['option1'],
                'option2' => $question_data['option2'],
                'option3' => $question_data['option3'],
                'option4' => $question_data['option4'],
                'answer' => $question_data['answer']
            );
                
            }

            // Insert questions into the database
            $this->QuizModel->add_questions($questions_data);
        }

        // Return success response
        $this->response(['status' => 'success'], RestController::HTTP_CREATED);
    }
}


