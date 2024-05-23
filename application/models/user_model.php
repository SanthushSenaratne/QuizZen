<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
  public function register($data)
    {
        // Insert the user data into the database
        $this->db->insert('users', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function login($username, $password)
    {
        // Query the database to check if the user exists
        $query = $this->db->get_where('users', array('username' => $username));

        if ($query->num_rows() > 0) {
            $user = $query->row();
            // Verify the password
            if (password_verify($password, $user->password)) {
                return $user; // Return the user data if login is successful
            } else {
                return false; // Invalid password
            }
        } else {
            return false; // User does not exist
        }
    }
	
    public function getUserByUsername($username) {
        // Fetch user data from the database based on the username
        $this->db->where('username', $username);
        return $this->db->get('users')->row_array();
    }
   
}
