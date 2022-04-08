<?php
defined('BASEPATH') OR exit('No direct script access allowed');
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); หน้า network
class Home extends CI_Controller {
	public function __construct() {
	parent::__construct();
		$this->load->model('Home_model', 'mhome');
	}  
	public function index(){
		$data['academics'] = 
		$this->mhome->select_academics();
		$this->load->view('home',$data);
	}
	public function page1(){
		$data['academics'] = $this->mhome->select_data();
		$this->load->view('tem/page1'); 
	}
	public function academics(){
		$data['academics'] = $this->mhome->select_academics();
		$this->load->view('tem/academics',$data); 
	}
	public function add_academics(){
		$data = $this->mhome->add_academics($_POST);
		echo json_encode($data);
	} 
	public function edit_academics(){
		$data = $this->mhome->edit_academics($_POST);
		echo json_encode($data);
	} 
   	public function delete_academics(){
   		 $data = $this->mhome->delete_academics($_POST);
    	echo json_encode($data);
  	}
///		activity_categories
 	public function activity_categories(){
    	$data['activity_categories'] = $this->mhome->select_activity_categories();
    	$this->load->view('tem/activity_categories',$data);
 	}
  	public function add_activity_categories(){
		$data = $this->mhome->add_activity_categories($_POST);
		echo json_encode($data);
	}
	public function edit_activity_categories(){
		$data = $this->mhome->edit_activity_categories($_POST);
		echo json_encode($data);
	} 
	public function delete_activity_categories(){
   		$data = $this->mhome->delete_activity_categories($_POST);
    	echo json_encode($data);
  	}
///  	activity_types
	public function activity_types(){
		$data['activity_types'] = $this->mhome->select_activity_types();
		$this->load->view('tem/activity_types',$data); 
	}
	public function add_activity_types(){
		$data = $this->mhome->add_activity_types($_POST);
		echo json_encode($data);
	}
	public function edit_activity_types(){
		$data = $this->mhome->edit_activity_types($_POST);
		echo json_encode($data);
	} 
	public function delete_activity_types(){
   		$data = $this->mhome->delete_activity_types($_POST);
    	echo json_encode($data);
  	}
///	leave_types
	public function leave_types(){
		$data['leave_types'] = $this->mhome->select_leave_types();
		$this->load->view('tem/leave_types',$data); 
	}
	public function add_leave_types(){
		$data = $this->mhome->add_leave_types($_POST);
		echo json_encode($data);
	}
	public function edit_leave_types(){
		$data = $this->mhome->edit_leave_types($_POST);
		echo json_encode($data);
	} 	
	public function delete_leave_types(){
		$data = $this->mhome->delete_leave_types($_POST);
		echo json_encode($data);
	}
///	managements
	public function managements(){
		$data['managements'] = $this->mhome->select_managements();
		$this->load->view('tem/managements',$data); 
	}
	public function add_managements(){
		$data = $this->mhome->add_managements($_POST);
		echo json_encode($data);
	}
	public function edit_managements(){
		$data = $this->mhome->edit_managements($_POST);
		echo json_encode($data);
	} 
	public function delete_managements(){
		$data = $this->mhome->delete_managements($_POST);
		echo json_encode($data);
	}
/// management_positions
	public function management_positions(){	
		$data = $this->mhome->select_management_positions();
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		$this->load->view('tem/management_positions',$data); 
	} 
	public function add_management_positions(){
		$data = $this->mhome->add_management_positions($_POST);
		echo json_encode($data);	 
	}	
	public function edit_management_positions(){
		$data = $this->mhome->edit_management_positions($_POST);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		echo json_encode($data);
	}
	public function delete_management_positions(){
		$data = $this->mhome->delete_management_positions($_POST);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		echo json_encode($data);
	}
///	personnel_categories
	public function personnel_categories(){
		$data['personnel_categories'] = $this->mhome->select_personnel_categories();
		$this->load->view('tem/personnel_categories',$data); 
	}
	public function add_personnel_categories(){
		$data = $this->mhome->add_personnel_categories($_POST);
		echo json_encode($data);
	} 
	public function edit_personnel_categories(){
		$data = $this->mhome->edit_personnel_categories($_POST);
		echo json_encode($data);
	} 
	public function delete_personnel_categories(){
		$data = $this->mhome->delete_personnel_categories($_POST);
		echo json_encode($data);
	}
///	personnel_statuses
	public function personnel_statuses(){
		$data['personnel_statuses'] = $this->mhome->select_personnel_statuses();
		$this->load->view('tem/personnel_statuses',$data); 
	}
	public function add_personnel_statuses(){
		$data = $this->mhome->add_personnel_statuses($_POST);
		echo json_encode($data);
	} 
	public function edit_personnel_statuses(){
		$data = $this->mhome->edit_personnel_statuses($_POST);
		echo json_encode($data);
	}
	public function delete_personnel_statuses(){
   		$data = $this->mhome->delete_personnel_statuses($_POST);
    	echo json_encode($data);
  	}
///	personnel_types
	public function personnel_types(){
		$data['personnel_types'] = $this->mhome->select_personnel_types();
		$this->load->view('tem/personnel_types',$data); 
	}
	public function add_personnel_types(){
		$data = $this->mhome->add_personnel_types($_POST);
		echo json_encode($data);
	} 
	public function edit_personnel_types(){
		$data = $this->mhome->edit_personnel_types($_POST);
		echo json_encode($data);
	}
	public function delete_personnel_types(){
		$data = $this->mhome->delete_personnel_types($_POST);
		 echo json_encode($data);
	}
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit();
///	faculties
	public function faculties(){
    	$data['faculties'] = $this->mhome->select_faculties();
    	// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
    	$this->load->view('tem/faculties',$data); 
 	}
  	public function add_faculties(){
		$data = $this->mhome->add_faculties($_POST);
		echo json_encode($data);
	}
  	public function edit_faculties(){
		$data = $this->mhome->edit_faculties($_POST);
		echo json_encode($data);
	} 
	public function delete_faculties(){
		$data = $this->mhome->delete_faculties($_POST);
		echo json_encode($data);
	}
///	departments
 	public function departments(){
		$data = $this->mhome->select_departments();
    	// echo "<pre>";
		// print_r($data['faculties']);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/departments',$data); 
	}
  	public function add_departments(){
		$data = $this->mhome->add_departments($_POST);
		echo json_encode($data);
	}
  	public function edit_departments(){
    	$data = $this->mhome->edit_departments($_POST);
		echo json_encode($data);
 	}
	public function delete_departments(){
		$data = $this->mhome->delete_departments($_POST);
		echo json_encode($data);
	}
///	academic_positions
	public function academic_positions(){
		$data = $this->mhome->select_academic_positions();
		$this->load->view('tem/academic_positions',$data); 
	} 	
	public function add_academic_positions(){
		$data = $this->mhome->add_academic_positions($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function edit_academic_positions(){
		$data = $this->mhome->edit_academic_positions($_POST);
		// 	echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		echo json_encode($data);
	}
	public function delete_academic_positions(){
		$data = $this->mhome->delete_academic_positions($_POST);
		echo json_encode($data);
	}
///	personnel
	public function personnels(){
		$data = $this->mhome->select_personnels();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/personnels',$data); 
	} 
	public function add_personnels(){
		$data = $this->mhome->add_personnels($_POST);
		echo json_encode($data);
	}
	public function edit_personnels(){
		$data = $this->mhome->edit_personnels($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_personnels(){
		$data = $this->mhome->delete_personnels($_POST);
		echo json_encode($data);
	}
		

}	


