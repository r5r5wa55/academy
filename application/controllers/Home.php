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
		$this->load->library('pagination');
	}  
	public function check_login_session(){
	
		$ADMIN_USER_check = isset( $_SESSION['ADMIN_USER_check'])? $_SESSION['ADMIN_USER_check']:"";
		$ADMIN_PASS_check = isset( $_SESSION['ADMIN_PASS_check'])? $_SESSION['ADMIN_PASS_check']:"";
		if($ADMIN_USER_check == "" && $ADMIN_PASS_check == ""){
			$data = $this->mhome->select_personnels();
			
			$this->load->helper('url');
			redirect('http://academy.com/', 'refresh');
			
		
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
		redirect('http://academy.com/', 'refresh');
		
	}
	//
	public function search_all(){
		$search_all = "";
		if(isset($_GET['search_all']) && $_GET['search_all'] != ""){
			$search_all = $_GET['search_all'];
		}
		return $search_all ;
	}
	public function we_search(){
		$depart = "";
		if(isset($_GET['search_all']) && $_GET['search_all']  != ""){
			$depart = $_GET['search_all'];
		};
		return $depart;
	}
	///
	public function page1(){

		$data['academics'] = $this->mhome->select_data();
		$this->load->view('tem/page1'); 
	}
	public function academics(){
		$this->check_login_session();


		$data_search = $this->search_all(); 
		$data['academics'] = $this->mhome->select_academics($data_search);

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

		$data_search = $this->search_all(); 
		$data['managements'] = $this->mhome->select_managements($data_search);

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
		$data_search = $this->search_all(); 
		$data = $this->mhome->select_management_positions($data_search);

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
		$data_search = $this->search_all(); 
		$data['personnel_categories'] = $this->mhome->select_personnel_categories($data_search);
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
		$data_search = $this->search_all(); 
		$data['personnel_statuses'] = $this->mhome->select_personnel_statuses($data_search);
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
		$data_search = $this->search_all(); 
		$data['personnel_types'] = $this->mhome->select_personnel_types($data_search);
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

		$a = "";
		if(isset($_GET['search_all']) && $_GET['search_all'] != ""){
			$a = $_GET['search_all'];
			
		}
    $data['faculties'] = $this->mhome->select_faculties($a);
    
	

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

		// print_r($_GET['search_all']);
		// exit;
		$depart = $this->we_search();
		$data = $this->mhome->select_departments($depart);
 
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
		$data_search = $this->search_all(); 
		$data = $this->mhome->select_academic_positions($data_search);


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
		$data_search = $this->search_all();
		$data = $this->mhome->select_personnels($data_search);
		$this->load->view('tem/personnels',$data); 
	} 
	public function add_personnels(){
		$this->check_login_session();
		$data = $this->mhome->add_personnels($_POST);

		// 		echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
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


		$data_search = $this->search_all(); 
		$data = $this->mhome->select_individual_counseling_services($data_search);
	
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
		$data_search = $this->search_all(); 
		$data = $this->mhome->select_leaves($data_search);
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
	public function upload(){

    if($_FILES["files"]["name"] != '')
      $output = '';
      $config["upload_path"] = './images/upload/';
      $config["allowed_types"] = './jpg|jpeg|png|gif';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
			$img_name = array();
      for($count = 0; $count<count($_FILES["files"]["name"]); $count ++){
				$_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
				$_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
				$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
				$_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
				$_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
				
				if($this->upload->do_upload('file')){
					$data = $this->upload->data();
					// $output .= '
					// <div class="col-md-3">
					//   <img src="'.base_url().'upload/'.$data["file_name"].'" class="img-reponsive img-thumbnail"/>
					// </div>
					// ';
					$img_name[] = array(
						'PIC_GARRY'=>$data["file_name"],
						'SERVICE_ID' => $_POST['SERVICE_ID'],
						'CREATE_BY_SE' => $_SESSION['ADMIN_USER_check'],
					);
				}
			}
			$data = array(
				'SERVICE_ID' => $_POST['SERVICE_ID'],
				'img_name' => $img_name
			);
			// 		echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
			$data = $this->mhome->save_upload($data);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
			echo json_encode($data);
  }
	public function upload_profile(){

    if($_FILES["files"]["name"] != '')
      $output = '';
      $config["upload_path"] = './images/profile/';
      $config["allowed_types"] = './jpg|jpeg|png|gif';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
			$img_name = array();
      for($count = 0; $count<count($_FILES["files"]["name"]); $count ++){
				$_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
				$_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
				$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
				$_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
				$_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
				
				if($this->upload->do_upload('file')){
					$data = $this->upload->data();
					// $output .= '
					// <div class="col-md-3">
					//   <img src="'.base_url().'upload/'.$data["file_name"].'" class="img-reponsive img-thumbnail"/>
					// </div>
					// ';
					$img_name[] = array(
						'PIC'=>$data["file_name"],
					
					);
				}
			}
			$data = array(
				'img_name' => $img_name
			);
		// 			echo "<pre>";
		// print_r($data);
		// echo "</pre>";

			$data = $this->mhome->save_upload_profile($data);


			echo json_encode($data);
  }
  public function get_img_SERVICE(){
		$data = $this->mhome->Mget_img_SERVICE($_POST);
		echo json_encode($data);
	}

	public	function profile(){
			$this->load->view('tem/profile');
	}
	
	public function fetch(){
		$output = '';
		$query = '';
		$this->load->model('Home_model');
		if($this->input->post('query')){
			$query = $this->input->post('query');
		}
		$data = $this->Home_model->fetch_data($query);
		$output = '
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tr>
					<th>Customer Name</th>
					<th>Address</th>
					<th>City</th>
					<th>Postal Code</th>
					<th>Country</th>
					</tr>
		';
		if($data->num_rows() > 0){
			foreach($data->result() as $row){
				$output .= '
						<tr>
						<td>'.$row->ADMIN_USER.'</td>
						<td>'.$row->ADMIN_PASS.'</td>
						<td>'.$row->PERSONNEL_ID.'</td>
						<td>'.$row->level.'</td>
						
						<td>'.$row->level.'</td>
						</tr>
				';
				
			}
		}else{
			$output .= '<tr>
					<td colspan="5">ไม่มีข้อมูล</td>
					</tr>';
		}
			$output .= '</table>';
			echo $output;
 	}
 
 	public function admin_login(){
		$this->check_login_session();
		$data = $this->mhome->select_where_not_in();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/admin_login',$data); 
	} 
	public function add_admin_login(){
		// $this->check_login_session();
		$data = $this->mhome->add_admin_login($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}

} 


