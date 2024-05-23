<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class HomepageController extends RestController {
   
    public function index_get()
    {
		$this->load->view('header');
        $this->load->view('homepage');
    }  

}
