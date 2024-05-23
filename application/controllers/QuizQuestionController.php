<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class QuizQuestionController extends RestController {

     public function __construct() {
        parent::__construct();
        $this->load->model('QuizModel');
    }

    public function questions_get($quizId) {
        // Retrieve quiz questions by quiz ID
        $quizQuestions = $this->QuizModel->getQuizQuestions($quizId);
        // Load the view to display the questions
		$this->load->view('header');
        $this->load->view('quiz', ['quizQuestions' => $quizQuestions, 'quizId' => $quizId]);
    }

	 public function evaluate_post(){
        // Retrieve submitted answers from the form
        $submitted_answers = $this->input->post();
		$quizId =$submitted_answers['quizId'];
        // Retrieve correct answers for the specific quiz
        $correct_answers = $this->QuizModel->getCorrectAnswers($quizId);

        // Initialize score
        $score = 0;

        // Loop through submitted answers
        foreach ($submitted_answers as $qid => $submitted_answer) {
            // Check if the submitted answer matches the correct answer
            if (isset($correct_answers[$qid]) && $submitted_answer === $correct_answers[$qid]) {
                $score++;
            }
        }

		  // Calculate percentage score
			$total_questions = count($correct_answers);
			$percentage_score = ($score / $total_questions) * 100;

			// Get username from session
			$username = $this->session->userdata('username');

			// Insert attempt details into the quizattempts table
			$attempt_data = array(
				'username' => $username,
				'quizid' => $quizId,
				'score' => $percentage_score,
				
			);

			// Insert attempt data into the db
			$this->db->insert('quizattempts', $attempt_data);


        //pass to the view
        $data['score'] = $score;
        $data['total_questions'] = count($correct_answers);

        // Load the view to score
		$this->load->view('header');
        $this->load->view('evaluation', $data);
    }

}
