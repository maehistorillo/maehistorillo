<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('courses_model','Course');
	}
	
	public function index(){	
		//display course dashboard
	}
	
	public function add_course(){
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 
			//form was submitted
			print_r($_POST);
			//check required fields
			//check for duplicate
			//save the record
			$validate = array (
				array('field'=>'course_id','label'=>'Course','rules'=>'trim|required|min_length[2]'),
				array('field'=>'course_desc','label'=>'Course Description','rules'=>'trim|required|min_length[2]'),

			);
			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'course_id'=>$_POST['courseid'],
								'course_desc'=>$_POST['coursedesc'],
							);
							
				$insert_id = $this->courses->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		}
		else{ //display blank form
				
		}
		
		$header_data['title'] = "Add New Student";

			
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student', $data);
		$this->load->view('include/footer');
			
	}
		}
		
		//just display the form
		$this->load->view('course/add_course',$data);
		
		
	}
	
	public function read_course(){
	}

	public function update_course(){
	
	}
	
	
	public function delete_course(){
	
	}
	

}
