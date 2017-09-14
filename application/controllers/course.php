<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('courses_model','Course');
	}
	
	public function index(){	
		//display course dashboard
	}
	
	public function create_course(){
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 
			//form was submitted
			print_r($_POST);
			//check required fields
			//check for duplicate
			//save the record
		}
		
		//just display the form
		$this->load->view('students/create_student',$data);
		
		
	}
	
	public function read_course(){
	}

	public function update_course(){
	
	}
	
	
	public function delete_course(){
	
	}
	

}
