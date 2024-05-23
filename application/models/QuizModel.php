<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuizModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	//get all the quizzes 
    public function getQuizzes() {
        return $this->db->get('quizzes')->result_array();
    }

	//get the quizzes created by that user
	 public function getQuizzesByUsername($username) {
        $this->db->where('createdby', $username);
        return $this->db->get('quizzes')->result_array();
    }

	//get question of a quiz
	public function getQuizQuestions($quizId) {
        $this->db->where('quizid', $quizId);
        return $this->db->get('quizqna')->result_array();
    }

	//get answers of that quiz
	public function getCorrectAnswers($quizId) {
        // Select qid and answer columns from the quizqna table for the specific quiz
        $this->db->select('qid, answer');
        $this->db->where('quizid', $quizId);
       
        $query = $this->db->get('quizqna')->result_array();
       
        $correct_answers = [];
        // Loop through the query result
        foreach ($query as $row) {
            // Store the correct answer in the $correct_answers array
            $correct_answers[$row['qid']] = $row['answer'];
        }
        // Return the array of correct answers
        return $correct_answers;
    }

	//getting quiz attempts of a specific user
	public function getUserQuizAttempts($username) {
        $this->db->where('username', $username);
        return $this->db->get('quizattempts')->result_array();
    }

	public function add_quiz($data) {
        $this->db->insert('quizzes', $data);
        return $this->db->insert_id();
    }

    public function add_questions($questions) {
        $this->db->insert_batch('quizqnz', $questions);
    }
}
