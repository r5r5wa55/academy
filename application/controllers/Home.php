<?php
defined('BASEPATH') OR exit('No direct script access allowed');
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); หน้า network
class Home extends CI_Controller {
	public function __construct() {
	parent::__construct();
		$this->load->library('session');
		$this->load->model('Home_model','mhome');
		$this->load->library('upload');
		
	}  
	public function check_login_session(){
	
		$ADMIN_USER_check = isset( $_SESSION['ADMIN_USER_check'])? $_SESSION['ADMIN_USER_check']:"";
		$ADMIN_PASS_check = isset( $_SESSION['ADMIN_PASS_check'])? $_SESSION['ADMIN_PASS_check']:"";
		if($ADMIN_USER_check == "" && $ADMIN_PASS_check == ""){
			$data = $this->mhome->select_personnels();
			
			$this->load->helper('url');
			redirect('Home/index', 'refresh');
			
		
			exit();
		}
	}
	public function index(){
		$ADMIN_USER_check = isset( $_SESSION['ADMIN_USER_check'])? $_SESSION['ADMIN_USER_check']:"";
		$ADMIN_PASS_check = isset( $_SESSION['ADMIN_PASS_check'])? $_SESSION['ADMIN_PASS_check']:"";
		if($ADMIN_USER_check == "" && $ADMIN_PASS_check == ""){
			$this->load->view('tem/home');
		}else{
			$this->personnels();
			// $this->load->view('tem/profile');
		}
	
	
	}

	public function logout(){
		unset($_SESSION['ADMIN_USER_check']);
		unset($_SESSION['ADMIN_PASS_check']);
			
		$this->load->helper('url');
		redirect('Home/index', 'refresh');
		
	}
	//

	///
	public function page1(){

		$data['academics'] = $this->mhome->select_data();
		$this->load->view('tem/page1'); 
	}
	public function academics(){
		$this->check_login_session();
		$data['academics'] = $this->mhome->select_academics();
		// $data = $this->mhome->select_academics();


		// echo '<pre>';
    // print_r ($data);
    // echo '</pre>';
    // exit;
		$this->load->view('tem/academics',$data); 
	
	}
	public function add_academics(){
		$this->check_login_session();
		$data = $this->mhome->add_academics($_POST);
		echo json_encode($data);
	} 
	public function edit_academics(){
		$this->check_login_session();
		$data = $this->mhome->edit_academics($_POST);
		echo json_encode($data);
	} 
  public function delete_academics(){
		$this->check_login_session();
   	$data = $this->mhome->delete_academics($_POST);
    echo json_encode($data);
  }
	//		activity_categories
 	public function activity_categories(){
		$this->check_login_session();
    $data['activity_categories'] = $this->mhome->select_activity_categories();
    $this->load->view('tem/activity_categories',$data);
 	}
  public function add_activity_categories(){
		$this->check_login_session();
		$data = $this->mhome->add_activity_categories($_POST);
		echo json_encode($data);
	}
	public function edit_activity_categories(){
		$this->check_login_session();
		$data = $this->mhome->edit_activity_categories($_POST);
		echo json_encode($data);
	} 
	public function delete_activity_categories(){
		$this->check_login_session();
   	$data = $this->mhome->delete_activity_categories($_POST);
    echo json_encode($data);
  }
	//  	activity_types
	public function activity_types(){
		$this->check_login_session();
		$data['activity_types'] = $this->mhome->select_activity_types();
		$this->load->view('tem/activity_types',$data); 
	}
	public function add_activity_types(){
		$this->check_login_session();
		$data = $this->mhome->add_activity_types($_POST);
		echo json_encode($data);
	}
	public function edit_activity_types(){
		$this->check_login_session();
		$data = $this->mhome->edit_activity_types($_POST);
		echo json_encode($data);
	} 
	public function delete_activity_types(){
		$this->check_login_session();
   		$data = $this->mhome->delete_activity_types($_POST);
    	echo json_encode($data);
  	}
	//	leave_types
	public function leave_types(){
		$this->check_login_session();
		$data['leave_types'] = $this->mhome->select_leave_types();
		$this->load->view('tem/leave_types',$data); 
	}
	public function add_leave_types(){
		$this->check_login_session();
		$data = $this->mhome->add_leave_types($_POST);
		echo json_encode($data);
	}
	public function edit_leave_types(){
		$this->check_login_session();
		$data = $this->mhome->edit_leave_types($_POST);
		echo json_encode($data);
	} 	
	public function delete_leave_types(){
		$this->check_login_session();
		$data = $this->mhome->delete_leave_types($_POST);
		echo json_encode($data);
	}
	//	managements
	public function managements(){
		$this->check_login_session();
		$data['managements'] = $this->mhome->select_managements();
		$this->load->view('tem/managements',$data); 
	}
	public function add_managements(){
		$this->check_login_session();
		$data = $this->mhome->add_managements($_POST);
		echo json_encode($data);
	}
	public function edit_managements(){
		$this->check_login_session();
		$data = $this->mhome->edit_managements($_POST);
		echo json_encode($data);
	} 
	public function delete_managements(){
		$this->check_login_session();
		$data = $this->mhome->delete_managements($_POST);
		echo json_encode($data);
	}
	// management_positions
	public function management_positions(){	
		$this->check_login_session();
		$data = $this->mhome->select_management_positions();
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		$this->load->view('tem/management_positions',$data); 
	} 
	public function add_management_positions(){
		$this->check_login_session();
		$data = $this->mhome->add_management_positions($_POST);
		echo json_encode($data);	 
	}	
	public function edit_management_positions(){
		$this->check_login_session();
		$data = $this->mhome->edit_management_positions($_POST);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		echo json_encode($data);
	}
	public function delete_management_positions(){
		$this->check_login_session();
		$data = $this->mhome->delete_management_positions($_POST);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		echo json_encode($data);
	}
	//	personnel_categories
	public function personnel_categories(){
		$this->check_login_session();
		$data['personnel_categories'] = $this->mhome->select_personnel_categories();
		$this->load->view('tem/personnel_categories',$data); 
	}
	public function add_personnel_categories(){
		$this->check_login_session();
		$data = $this->mhome->add_personnel_categories($_POST);
		echo json_encode($data);
	} 
	public function edit_personnel_categories(){
		$this->check_login_session();
		$data = $this->mhome->edit_personnel_categories($_POST);
		echo json_encode($data);
	} 
	public function delete_personnel_categories(){
		$this->check_login_session();
		$data = $this->mhome->delete_personnel_categories($_POST);
		echo json_encode($data);
	}
	//	personnel_statuses
	public function personnel_statuses(){
		$this->check_login_session();
		$data['personnel_statuses'] = $this->mhome->select_personnel_statuses();
		$this->load->view('tem/personnel_statuses',$data); 
	}
	public function add_personnel_statuses(){
		$this->check_login_session();
		$data = $this->mhome->add_personnel_statuses($_POST);
		echo json_encode($data);
	} 
	public function edit_personnel_statuses(){
		$this->check_login_session();
		$data = $this->mhome->edit_personnel_statuses($_POST);
		echo json_encode($data);
	}
	public function delete_personnel_statuses(){
		$this->check_login_session();
   		$data = $this->mhome->delete_personnel_statuses($_POST);
    	echo json_encode($data);
  }
	//	personnel_types
	public function personnel_types(){
		$this->check_login_session();
		$data['personnel_types'] = $this->mhome->select_personnel_types();
		$this->load->view('tem/personnel_types',$data); 
	}
	public function add_personnel_types(){
		$this->check_login_session();
		$data = $this->mhome->add_personnel_types($_POST);
		echo json_encode($data);
	} 
	public function edit_personnel_types(){
		$this->check_login_session();
		$data = $this->mhome->edit_personnel_types($_POST);
		echo json_encode($data);
	}
	public function delete_personnel_types(){
		$this->check_login_session();
		$data = $this->mhome->delete_personnel_types($_POST);
		echo json_encode($data);
	}
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit();
	//	faculties
	public function faculties(){
		$this->check_login_session();
    $data['faculties'] = $this->mhome->select_faculties();
    	// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
    $this->load->view('tem/faculties',$data); 
 	}
  public function add_faculties(){
		$this->check_login_session();
		$data = $this->mhome->add_faculties($_POST);
		echo json_encode($data);
	}
  public function edit_faculties(){
		$this->check_login_session();
		$data = $this->mhome->edit_faculties($_POST);
		echo json_encode($data);
	} 
	public function delete_faculties(){
		$this->check_login_session();
		$data = $this->mhome->delete_faculties($_POST);
		echo json_encode($data);
	}
	//	departments
 	public function departments(){
		$this->check_login_session();
		$data = $this->mhome->select_departments();
    	// echo "<pre>";
		// print_r($data['faculties']);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/departments',$data); 
	}
  public function add_departments(){
		$this->check_login_session();
		$data = $this->mhome->add_departments($_POST);
		echo json_encode($data);
	}
  public function edit_departments(){
		$this->check_login_session();
    $data = $this->mhome->edit_departments($_POST);
		echo json_encode($data);
 	}
	public function delete_departments(){
		$this->check_login_session();
		$data = $this->mhome->delete_departments($_POST);
		echo json_encode($data);
	}
	//	academic_positions
	public function academic_positions(){
		$this->check_login_session();
		$data = $this->mhome->select_academic_positions();
		$this->load->view('tem/academic_positions',$data); 
	} 	
	public function add_academic_positions(){
		$this->check_login_session();
		$data = $this->mhome->add_academic_positions($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function edit_academic_positions(){
		$this->check_login_session();
		$data = $this->mhome->edit_academic_positions($_POST);
		// 	echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
		echo json_encode($data);
	}
	public function delete_academic_positions(){
		$this->check_login_session();
		$data = $this->mhome->delete_academic_positions($_POST);
		echo json_encode($data);
	}
	//	personnel
	public function personnels(){
		$this->check_login_session();
		$data = $this->mhome->select_personnels();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/personnels',$data); 
	} 
	public function add_personnels(){
		$this->check_login_session();
		$data = $this->mhome->add_personnels($_POST);
		echo json_encode($data);
	}
	public function edit_personnels(){
		$this->check_login_session();
		$data = $this->mhome->edit_personnels($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_personnels(){
		$this->check_login_session();
		$data = $this->mhome->delete_personnels($_POST);
		echo json_encode($data);
	}
	///
	public function students(){
		$this->check_login_session();
		$data['students'] = $this->mhome->select_students();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/students',$data); 
	}
	///
	public function individual_counseling_services(){
		$this->check_login_session();
		$data = $this->mhome->select_individual_counseling_services();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/individual_counseling_services',$data); 
	} 
	public function add_individual_counseling_services(){
		$this->check_login_session();
		$data = $this->mhome->add_individual_counseling_services($_POST);
		echo json_encode($data);
	}
	public function edit_individual_counseling_services(){
		$this->check_login_session();
		$data = $this->mhome->edit_individual_counseling_services($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_individual_counseling_services(){
		$this->check_login_session();
		$data = $this->mhome->delete_individual_counseling_services($_POST);
		echo json_encode($data);
	}
	///	
	public function services(){
		$this->check_login_session();
		$data = $this->mhome->select_services();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/services',$data); 
	} 
	public function add_services(){
		$this->check_login_session();
		$data = $this->mhome->add_services($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_services(){
		$this->check_login_session();
		$data = $this->mhome->edit_services($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_services(){
		$this->check_login_session();
		$data = $this->mhome->delete_services($_POST);
		echo json_encode($data);
	}
	///
	public function service_participants(){
		$this->check_login_session();
		$data = $this->mhome->select_service_participants();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/service_participants',$data); 
	}
	public function add_service_participants(){
		$this->check_login_session();
		$data = $this->mhome->add_service_participants($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_service_participants(){
		$this->check_login_session();
		$data = $this->mhome->edit_service_participants($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_service_participants(){
		$this->check_login_session();
		$data = $this->mhome->delete_service_participants($_POST);
		echo json_encode($data);
	}
	///
	public function activities(){
		$this->check_login_session();
		$data = $this->mhome->select_activities();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/activities',$data); 
	} 
	public function add_activities(){
		$this->check_login_session();
		$data = $this->mhome->add_activities($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_activities(){
		$this->check_login_session();
		$data = $this->mhome->edit_activities($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_activities(){
		$this->check_login_session();
		$data = $this->mhome->delete_activities($_POST);
		echo json_encode($data);
	}
	///
	public function activity_participants(){
		$this->check_login_session();
		$data = $this->mhome->select_activity_participants();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/activity_participants',$data); 
	} 
	public function add_activity_participants(){
		$this->check_login_session();
		$data = $this->mhome->add_activity_participants($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_activity_participants(){
		$this->check_login_session();
		$data = $this->mhome->edit_activity_participants($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_activity_participants(){
		$this->check_login_session();
		$data = $this->mhome->delete_activity_participants($_POST);
		echo json_encode($data);
	}
	///
	public function trainings(){
		$this->check_login_session();
		$data = $this->mhome->select_trainings();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/trainings',$data); 
	} 
	public function add_trainings(){
		$this->check_login_session();
		$data = $this->mhome->add_trainings($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_trainings(){
		$this->check_login_session();
		$data = $this->mhome->edit_trainings($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_trainings(){
		$this->check_login_session();
		$data = $this->mhome->delete_trainings($_POST);
		echo json_encode($data);
	}
	///	
	public function training_participants(){
		$this->check_login_session();
		$data = $this->mhome->select_training_participants();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/training_participants',$data); 
	} 
	public function add_training_participants(){
		$this->check_login_session();
		$data = $this->mhome->add_training_participants($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_training_participants(){
		$this->check_login_session();
		$data = $this->mhome->edit_training_participants($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	///
	public function counseling_types(){
		$this->check_login_session();
		$data['counseling_types'] = $this->mhome->select_counseling_types();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/counseling_types',$data); 
	}
	public function add_counseling_types(){
		$this->check_login_session();
		$data = $this->mhome->add_counseling_types($_POST);
		echo json_encode($data);
	} 
	public function edit_counseling_types(){
		$this->check_login_session();
		$data = $this->mhome->edit_counseling_types($_POST);
		echo json_encode($data);
	} 
	public function delete_counseling_types(){
		$this->check_login_session();
		$data = $this->mhome->delete_counseling_types($_POST);
		echo json_encode($data);
  }
	//
	public function leaves(){
		$this->check_login_session();
		$data = $this->mhome->select_leaves();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/leaves',$data); 
	} 
	public function add_leaves(){
		$this->check_login_session();
		$data = $this->mhome->add_leaves($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	//
	public function check_login(){
	
		$data = $this->mhome->check_login($_POST);
		// echo "<pre>";
		// print_r($_SESSION);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}

	public function service_participants_pic(){
		$this->check_login_session();
		$data = $this->mhome->select_service_participants_pic($_POST);
			// exit(); 
		$this->load->view('tem/service_participants_pic',$data); 
	
	}
} 


