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

		
		// $array[] = array(1,2,3);
		// $array[] = array(4,5,6);

		// echo '<pre>';
		// print_r($array);
		// echo	'</pre>';
		// exit;




		$ADMIN_USER_check = isset( $_SESSION['ADMIN_USER_check'])? $_SESSION['ADMIN_USER_check']:"";
		$ADMIN_PASS_check = isset( $_SESSION['ADMIN_PASS_check'])? $_SESSION['ADMIN_PASS_check']:"";
		if($ADMIN_USER_check == "" && $ADMIN_PASS_check == ""){
			$this->load->view('tem/home_we');
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
	public function home(){
		$ADMIN_USER_check = isset( $_SESSION['ADMIN_USER_check'])? $_SESSION['ADMIN_USER_check']:"";
		$ADMIN_PASS_check = isset( $_SESSION['ADMIN_PASS_check'])? $_SESSION['ADMIN_PASS_check']:"";
		if($ADMIN_USER_check == "" && $ADMIN_PASS_check == ""){
			$this->load->view('tem/home');
		}else{
			$this->personnels();
			// $this->load->view('tem/profile');
		}

	
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
		$data_search = $this->search_all(); 
		$data['activity_categories'] = $this->mhome->select_activity_categories($data_search);
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
		$data_search = $this->search_all(); 
		$data['activity_types'] = $this->mhome->select_activity_types($data_search);
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
		$data_search = $this->search_all(); 
		$data['leave_types'] = $this->mhome->select_leave_types($data_search);
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
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;

		$data = $this->mhome->add_management_positions($_POST);
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
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
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;
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
			// 		echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
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
		// 		echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit(); 
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
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit(); 
		$data = $this->mhome->edit_individual_counseling_services($_POST);
	
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
		$data_search = $this->search_all();
		$data = $this->mhome->select_services($data_search);
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
	public function upload_file_services(){
    	// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		// exit(); 

		if($_FILES["files"]["name"] != '')
      $output = '';
			$config['image_library'] = 'gd2';
      $config["upload_path"] = './images/services_file/';
      $config["allowed_types"] = './jpg|jpeg|png|gif|pdf';
			// $config['encrypt_name'] = FALSE;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
      $this->load->library('upload', $config);
			$this->load->library('image_lib', $config);
      $this->upload->initialize($config);

			$_FILES["file"]["name"] = $_FILES["files"]["name"][0];
			$_FILES["file"]["type"] = $_FILES["files"]["type"][0];
			$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][0];
			$_FILES["file"]["error"] = $_FILES["files"]["error"][0];
			$_FILES["file"]["size"] = $_FILES["files"]["size"][0];


			$new_name = $_FILES["file"]["name"];
			$config['file_name'] = $new_name;
			
			if($this->upload->do_upload('file')){
				$data = $this->upload->data();
			}

				
			$data = array(
				'SERVICE_ID' => $_POST['SERVICE_ID'],
				'img_name' => $new_name
			);
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;

			$data = $this->mhome->save_upload_file_services($data);
			echo json_encode($data);
  	}
	
	public function edit_services_file(){

		if (isset($_POST['editId'])) {
	    $editId = $_POST['editId'];
		}
		// echo "<pre>";
		// print_r($editId);
		// echo "</pre>";

		// exit;

 
		if (!empty($editId)) {
	
			$this->db->select('*');
			$this->db->from('services');
			$this->db->where('SERVICE_ID', $editId);
			$query = $this->db->get();
			$query = $query->row_array();

		
	 
			if (count($query) > 0) {
						
					$output = "";
					
					// foreach ($query as $key => $row) {
						
						$row = $query;
						
						$image = '/images/services_file/'.$row['FILE_DOCUMENT'];
						
						
						$output.="<form id='editForm'>
						<div class='modal-body' style='height: 200px;'>
											<input type='hidden' name='image_id' id='image_id' value='".$row['SERVICE_ID']."'/>
									<div class='form-group'>
							<div class='custom-file mb-3'>
								<input type='file' class='custom-file-input' name='file_name' id='file_name'>
								<label class='custom-file-label'>Choose Images to Upload</label>
								<img src='".$image."' class='img-thumbnail' width='200px' height='200px'/>
								</div>
									</div>
						</div>
						<div class='modal-footer'>
							<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
							<button type='submit' class='btn btn-success'>Update</button>
						</div>
							</form>";
					// }
					echo $output;	
			}
  		}
	
		
	
		
	} 
	public function update_services_file(){


		if (isset($_POST['image_id'])) {
		
	    $image_id = $_POST['image_id'];
		}
	
		if (!empty($_FILES['file_name']['name'])) {


			
				// echo "<pre>";
				// print_r($image_id);
				// echo "</pre>";


				$fileTmp = $_FILES['file_name']['tmp_name'];

				$allowImg = array('png','jpeg','jpg','gif');

				$fileExnt = explode('.', $_FILES['file_name']['name']);

				$fileActExt   = strtolower(end($fileExnt));

				$newFile = rand(). '.'. $fileActExt;

				$destination = './images/upload/'.$newFile;

			
			

					
					// exit;

				if (in_array($fileActExt, $allowImg)) {
						if ($_FILES['file_name']['size'] > 0 && $_FILES['file_name']['error']==0) {


							
			
					$this->db->select('*');
					$this->db->from('table_images');
					$this->db->where('id', $image_id);
					$query = $this->db->get();
					$query = $query->result_array();
					$row =  $query[0];

		


	
			

					$filePath = './images/upload/'.$row['images'];
					
					if (move_uploaded_file($fileTmp, $destination)) {

				$this->db->where('id', $image_id);
				$this->db->set('images',  $newFile);
				$this->db->update('table_images');




				unlink($filePath);
					}
			}
				}
		}
		
		$this->load->view('tem/update'); 
		
	} 
	public function show_service_participants_pic(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->show_service_participants_pic($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 	
		
		$this->load->view('tem/service_participants_pic',$data); 

	}
	public function show_service_participants_pic_show(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->show_service_participants_pic_show($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		
		$this->load->view('tem/show_service_participants_pic_show',$data); 

	}


	
	///
	public function service_participants(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->select_service_participants($data_search);
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
	
	public function service_participants_pic(){
		$this->check_login_session();
		$data = $this->mhome->select_service_participants_pic($_POST);
			// exit(); 
		$this->load->view('tem/service_participants_pic',$data); 
	
	}
	///
	public function activities(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->select_activities($data_search);
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

	
	public function upload_file_activities(){
    	// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		// exit(); 

		if($_FILES["files"]["name"] != '')
      $output = '';
			$config['image_library'] = 'gd2';
      $config["upload_path"] = './images/activities_file/';
      $config["allowed_types"] = './jpg|jpeg|png|gif|pdf';
			// $config['encrypt_name'] = FALSE;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
      $this->load->library('upload', $config);
			$this->load->library('image_lib', $config);
      $this->upload->initialize($config);

			$_FILES["file"]["name"] = $_FILES["files"]["name"][0];
			$_FILES["file"]["type"] = $_FILES["files"]["type"][0];
			$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][0];
			$_FILES["file"]["error"] = $_FILES["files"]["error"][0];
			$_FILES["file"]["size"] = $_FILES["files"]["size"][0];


			$new_name = $_FILES["file"]["name"];
			$config['file_name'] = $new_name;
			
			if($this->upload->do_upload('file')){
				$data = $this->upload->data();
			}

				
			$data = array(
				'ACTIVITY_ID' => $_POST['ACTIVITY_ID'],
				'img_name' => $new_name
			);
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;

			$data = $this->mhome->save_upload_file_activities($data);
			echo json_encode($data);
  	}


	///
	public function activity_participants(){
		
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->select_activity_participants($data_search);
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
	public function show_activity_participants_pic(){
		$this->check_login_session();

		$data = $this->mhome->show_activity_participants_pic($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		
		$this->load->view('tem/activity_participants_pic',$data); 

	}
	public function show_activity_participants_pic_show(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->show_activity_participants_pic_show($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		
		$this->load->view('tem/show_activity_participants_pic_show',$data); 

	}
	public function upload_activity_participants_pic(){
	

		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		
		// echo "<pre>";
		// print_r($_REQUEST);
		// echo "</pre>";
		// exit(); 
	
		
	
		if (!empty($_FILES['multipleFile']['name'])) {


	 
	    $multiplefile = $_FILES['multipleFile']['name'];

				// $data = array();


        foreach ($multiplefile as $name => $value) {
            
            $allowImg = array('png','jpeg','jpg','gif');	
            $fileExnt = explode('.', $multiplefile[$name]);
            $fileTmp = $_FILES['multipleFile']['tmp_name'][$name];        
            $newFile = 	rand(). '.'. $fileExnt[1];
            $target_dir = './images/activities_img/'.$newFile; 

            if (in_array($fileExnt[1], $allowImg)) {
                if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {  
                    if (move_uploaded_file($fileTmp, $target_dir)) {

											$data[]=array(
												'PIC_GARRY'=>$newFile,
												'ACTIVITY_ID'=>$_REQUEST['id-img'],
												'ADD_BY'=>$_REQUEST['personel']
												
											);
								

                    }
                }
            }
        }
				$this->db->insert_batch('activity_participants_pic', $data); 
				

		}

		echo json_encode($data);

		exit(); 

	} 
	public function delete_activity_participants_pic(){

		// echo "<pre>";
		// print_r($_POST['deleteId']);
		// echo "</pre>";
		// exit;


		if (isset($_POST['deleteId'])) {
		
			$deleteId = $_POST['deleteId'];

	
				$this->db->select('*');
				$this->db->from('activity_participants_pic');
				$this->db->where('ID', $deleteId);
				$query = $this->db->get();
				$query = $query->result_array();

			
			



			

			$row =  $query[0];

			$filePath = 'activities_img/'.$row['ID'];
				
				$this->db->delete('activity_participants_pic', array('ID' => $deleteId)); 
			// $query = "DELETE FROM table_images WHERE id = $deleteId";

				if (mysqli_query($con, $query)) {
						unlink($filePath);
				}
			}

	
		
		$this->load->view('tem/delete'); 
		
	} 



	///
	public function trainings(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->select_trainings($data_search);
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
	public function upload_file_trainings(){
    	// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		// exit(); 

		if($_FILES["files"]["name"] != '')
			$output = '';
					$config['image_library'] = 'gd2';
			$config["upload_path"] = './images/trainings_file/';
			$config["allowed_types"] = './jpg|jpeg|png|gif|pdf';
					// $config['encrypt_name'] = FALSE;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
			$this->load->library('upload', $config);
					$this->load->library('image_lib', $config);
			$this->upload->initialize($config);

			$_FILES["file"]["name"] = $_FILES["files"]["name"][0];
			$_FILES["file"]["type"] = $_FILES["files"]["type"][0];
			$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][0];
			$_FILES["file"]["error"] = $_FILES["files"]["error"][0];
			$_FILES["file"]["size"] = $_FILES["files"]["size"][0];


			$new_name = $_FILES["file"]["name"];
			$config['file_name'] = $new_name;
			
			if($this->upload->do_upload('file')){
				$data = $this->upload->data();
			}

				
			$data = array(
				'TRAINING_ID' => $_POST['TRAINING_ID'],
				'img_name' => $new_name
		);
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;

			$data = $this->mhome->save_upload_file_trainings($data);
			echo json_encode($data);
  	}
	///	
	public function training_participants(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->select_training_participants($data_search);
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
	public function delete_training_participants(){
		$this->check_login_session();
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$data = $this->mhome->delete_training_participants($_POST);
		echo json_encode($data);
	}

	public function training_participants_pic(){
		$this->check_login_session();
		$data = $this->mhome->select_training_participants_pic($_POST);
			// exit(); 
		$this->load->view('tem/training_participants_pic',$data); 
	
	}
	public function upload_training_participants_pic(){
	

		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		
		// echo "<pre>";
		// print_r($_REQUEST);
		// echo "</pre>";
		// exit(); 
	
		
	
		if (!empty($_FILES['multipleFile']['name'])) {


	 
	    $multiplefile = $_FILES['multipleFile']['name'];

				// $data = array();


        foreach ($multiplefile as $name => $value) {
            
            $allowImg = array('png','jpeg','jpg','gif');	
            $fileExnt = explode('.', $multiplefile[$name]);
            $fileTmp = $_FILES['multipleFile']['tmp_name'][$name];        
            $newFile = 	rand(). '.'. $fileExnt[1];
            $target_dir = './images/trainings_img/'.$newFile; 

            if (in_array($fileExnt[1], $allowImg)) {
                if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {  
                    if (move_uploaded_file($fileTmp, $target_dir)) {

											$data[]=array(
												'PIC_GARRY'=>$newFile,
												'TRAINING_ID'=>$_REQUEST['id-img'],
												'CREATE_BY_TR'=>$_REQUEST['personel']
												
											);
								

                    }
                }
            }
        }
				$this->db->insert_batch('training_participants_pic', $data); 
				

		}

		echo json_encode($data);

		exit(); 

	} 
	public function delete_training_participants_pic(){

		// echo "<pre>";
		// print_r($_POST['deleteId']);
		// echo "</pre>";
		// exit;


		if (isset($_POST['deleteId'])) {
		
			$deleteId = $_POST['deleteId'];

	
				$this->db->select('*');
				$this->db->from('training_participants_pic');
				$this->db->where('ID', $deleteId);
				$query = $this->db->get();
				$query = $query->result_array();

			
			



			

			$row =  $query[0];

			$filePath = 'trainings_img/'.$row['ID'];
				
				$this->db->delete('training_participants_pic', array('ID' => $deleteId)); 
			// $query = "DELETE FROM table_images WHERE id = $deleteId";

				if (mysqli_query($con, $query)) {
						unlink($filePath);
				}
   			}

	
		
	
		
	} 

	public function show_training_participants_pic_show(){
		$this->check_login_session();
		$data_search = $this->search_all();
		$data = $this->mhome->show_training_participants_pic_show($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		
		$this->load->view('tem/show_training_participants_pic_show',$data); 

	}
	
	///
	public function counseling_types(){
		$this->check_login_session();
		$data_search = $this->search_all(); 
		$data['counseling_types'] = $this->mhome->select_counseling_types($data_search);

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
		// $this->check_login_session();		
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
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$data = $this->mhome->add_leaves($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function edit_leaves(){
		$this->check_login_session();
		$data = $this->mhome->edit_leaves($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function get_edit_leaves(){
		$this->check_login_session();		
		$data = $this->mhome->get_edit_leaves($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function get_edit_leaves_approve(){
		$this->check_login_session();		
		$data = $this->mhome->get_edit_leaves_approve($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function update_leaves_approve(){
		$this->check_login_session();		
		$data = $this->mhome->update_leaves_approve($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	
	

	public function delete_leaves(){
		$this->check_login_session();
		$data = $this->mhome->delete_leaves($_POST);
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
	
	
	public function upload_profile(){

    	if($_FILES["files"]["name"] != '')
		$output = '';
				$config['image_library'] = 'gd2';
		$config["upload_path"] = './images/profile/';
		$config["allowed_types"] = './jpg|jpeg|png|gif';
				// $config['encrypt_name'] = FALSE;
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
		$this->load->library('upload', $config);
				$this->load->library('image_lib', $config);
		$this->upload->initialize($config);

				$_FILES["file"]["name"] = $_FILES["files"]["name"][0];
				$_FILES["file"]["type"] = $_FILES["files"]["type"][0];
				$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][0];
				$_FILES["file"]["error"] = $_FILES["files"]["error"][0];
				$_FILES["file"]["size"] = $_FILES["files"]["size"][0];

				$new_name = $_FILES["file"]["name"];
				$config['file_name'] = $new_name;
				
				if($this->upload->do_upload('file')){
					$data = $this->upload->data();
				}

					
				$data = array(
					'img_name' => $new_name
				);
				$data = $this->mhome->save_upload_profile($data);
				echo json_encode($data);
  	}
 	public function get_img_SERVICE(){
		$data = $this->mhome->Mget_img_SERVICE($_POST);
		echo json_encode($data);
	}

	public	function profile(){
		// echo "<pre>";
		// print_r($_SESSION);
		// echo "</pre>";
		// exit;
		$this->check_login_session();		
		$data_search = $this->search_all(); 
		$data = $this->mhome->select_profile($data_search);

		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit;
		$this->load->view('tem/profile',$data);
	}
	public function edit_profile(){
		$this->check_login_session();
		// 		echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit(); 
		$data = $this->mhome->edit_profile($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
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

	public function researchs(){
		$this->check_login_session();		
		$data_search = $this->search_all(); 
		$data = $this->mhome->select_researchs($data_search);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/researchs',$data); 
	} 
	public function add_researchs(){
			$this->check_login_session();
			$data = $this->mhome->add_researchs($_POST);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit(); 
			echo json_encode($data);
	}
	public function upload_file_researchs(){
    	// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		// exit(); 

		if($_FILES["files"]["name"] != '')
      $output = '';
			$config['image_library'] = 'gd2';
      $config["upload_path"] = './images/researchs/';
      $config["allowed_types"] = './jpg|jpeg|png|gif|pdf';
			// $config['encrypt_name'] = FALSE;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
      $this->load->library('upload', $config);
			$this->load->library('image_lib', $config);
      $this->upload->initialize($config);

			$_FILES["file"]["name"] = $_FILES["files"]["name"][0];
			$_FILES["file"]["type"] = $_FILES["files"]["type"][0];
			$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][0];
			$_FILES["file"]["error"] = $_FILES["files"]["error"][0];
			$_FILES["file"]["size"] = $_FILES["files"]["size"][0];


			$new_name = $_FILES["file"]["name"];
			$config['file_name'] = $new_name;
			
			if($this->upload->do_upload('file')){
				$data = $this->upload->data();
			}

				
			$data = array(
				'RESEARCH_ID' => $_POST['RESEARCH_ID'],
				'img_name' => $new_name
			);
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;

			$data = $this->mhome->save_upload_file_researchs($data);
			echo json_encode($data);
  	}
	public function edit_researchs(){
		$this->check_login_session();

		$data = $this->mhome->edit_researchs($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function delete_researchs(){
		$this->check_login_session();
		$data = $this->mhome->delete_researchs($_POST);
		echo json_encode($data);
  	}

	
	public function getleaves(){
		$this->check_login_session();		
		$data = $this->mhome->getleaves($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function edit_leave_type_id(){
		$this->check_login_session();		
		$data = $this->mhome->edit_leave_type_id($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	
	public function get_last_leave_type_name(){
		$this->check_login_session();		
		$data = $this->mhome->get_last_leave_type_name($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function leaves_approve(){
		$this->check_login_session();		
		$data_search = $this->search_all(); 
		$data = $this->mhome->select_leaves_approve($data_search);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/leaves_approve',$data); 
	} 
	public function get_mangement_positions_onchange(){
		$this->check_login_session();		
		$data = $this->mhome->get_mangement_positions_onchange($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function get_leaves_approve(){
		$this->check_login_session();		
		$data = $this->mhome->get_leaves_approve($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function add_edit_leaves_approve(){
		$this->check_login_session();		
		$data = $this->mhome->add_edit_leaves_approve($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function leaves_approve_supervisor(){
		$this->check_login_session();	
		$data_search = $this->search_all(); 	
		$data = $this->mhome->select_leaves_approve_supervisor($data_search);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/leaves_approve_supervisor',$data); 
	} 
	public function add_edit_leaves_approve_supervisor(){
		$this->check_login_session();		
		$data = $this->mhome->add_edit_leaves_approve_supervisor($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	///

	public function students_login(){

		
	
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/students_login'); 
	} 
	public function check_login_student(){

		$data = $this->mhome->check_login_student($_POST);
		// echo "<pre>";
		// print_r($_SESSION);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function profile_student(){

			
		$data = $this->mhome->profile_student();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/profile_student',$data); 
	
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 

	}
	
	public function add_individual_counseling_services_student(){
	
		$data = $this->mhome->add_individual_counseling_services_student($_POST);
		echo json_encode($data);
	}
	public function edit_status_individual_counseling_services(){
		$this->check_login_session();
		$data = $this->mhome->edit_status_individual_counseling_services($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function update_conf_individual_counseling_service_studen(){
		
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit(); 
		$data = $this->mhome->update_conf_individual_counseling_service_studen($_POST);
	
		echo json_encode($data);
	}
	public function update_conf_teacher_individual_counseling_service_studen(){
		$this->check_login_session();
		$data = $this->mhome->update_conf_teacher_individual_counseling_service_studen($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	
	public function update_individual_counseling_filnel(){
	
		$data = $this->mhome->update_individual_counseling_filnel($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	
	public function we(){

		$data = $this->mhome->search_we();
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/we'); 
	} 
	public function dbConnection(){
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$this->load->view('tem/dbConnection'); 
	} 
	public function upload1(){
	

		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		
		// echo "<pre>";
		// print_r($_REQUEST);
		// echo "</pre>";
		// exit(); 
	
		
	
		if (!empty($_FILES['multipleFile']['name'])) {


	 
	    $multiplefile = $_FILES['multipleFile']['name'];

				// $data = array();


        foreach ($multiplefile as $name => $value) {
            
            $allowImg = array('png','jpeg','jpg','gif');	
            $fileExnt = explode('.', $multiplefile[$name]);
            $fileTmp = $_FILES['multipleFile']['tmp_name'][$name];        
            $newFile = 	rand(). '.'. $fileExnt[1];
            $target_dir = './images/services_img/'.$newFile; 

            if (in_array($fileExnt[1], $allowImg)) {
                if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {  
                    if (move_uploaded_file($fileTmp, $target_dir)) {

											$data[]=array(
												'PIC_GARRY'=>$newFile,
												'SERVICE_ID'=>$_REQUEST['id-img'],
												'CREATE_BY_SE'=>$_REQUEST['personel']
												
											);
								

                    }
                }
            }
        }
				$this->db->insert_batch('service_participants_pic', $data); 
				

		}

		echo json_encode($data);

		exit(); 

	} 

	public function edit(){

		if (isset($_POST['editId'])) {
	    $editId = $_POST['editId'];
		}
		// echo "<pre>";
		// print_r($editId);
		// echo "</pre>";

		// exit;

 
		if (!empty($editId)) {
	
			$this->db->select('*');
			$this->db->from('service_participants_pic');
			$this->db->where('ID_S_P', $editId);
			$query = $this->db->get();
			$query = $query->row_array();

		
	 
			if (count($query) > 0) {
						
					$output = "";
					
					// foreach ($query as $key => $row) {
						
						$row = $query;
						
						$image = '/images/services_img/'.$row['PIC_GARRY'];
						
						
						$output.="<form id='editForm'>
						<div class='modal-body' style='height: 200px;'>
											<input type='hidden' name='image_id' id='image_id' value='".$row['ID_S_P']."'/>
									<div class='form-group'>
							<div class='custom-file mb-3'>
								<input type='file' class='custom-file-input' name='file_name' id='file_name'>
								<label class='custom-file-label'>Choose Images to Upload</label>
								<img src='".$image."' class='img-thumbnail' width='200px' height='200px'/>
								</div>
									</div>
						</div>
						<div class='modal-footer'>
							<button type='button' class='btn btn-danger' data-dismiss='modal'>ปิด</button>
							<button type='submit' class='btn btn-success'>แก้ไข</button>
						</div>
							</form>";
					// }
					echo $output;	
			}
			exit;
  		}
	
		
	
		
	} 
	public function update(){


		if (isset($_POST['image_id'])) {
		
	    $image_id = $_POST['image_id'];
		}
	
		if (!empty($_FILES['file_name']['name'])) {


			
				// echo "<pre>";
				// print_r($image_id);
				// echo "</pre>";

			

				$fileTmp = $_FILES['file_name']['tmp_name'];

				$allowImg = array('png','jpeg','jpg','gif');

				$fileExnt = explode('.', $_FILES['file_name']['name']);

				$fileActExt   = strtolower(end($fileExnt));

				$newFile = rand(). '.'. $fileActExt;

				$destination = './images/services_img/'.$newFile;

			
			

					
					// exit;

				if (in_array($fileActExt, $allowImg)) {
						if ($_FILES['file_name']['size'] > 0 && $_FILES['file_name']['error']==0) {


							
			
					$this->db->select('*');
					$this->db->from('service_participants_pic');
					$this->db->where('ID_S_P', $image_id);
					$query = $this->db->get();
					$query = $query->result_array();
					$row =  $query[0];

		


	
			

					$filePath = './images/services_img/'.$row['images'];
					
					if (move_uploaded_file($fileTmp, $destination)) {



				$this->db->where('ID_S_P', $image_id);
				$this->db->set('PIC_GARRY',  $newFile);
				$this->db->update('service_participants_pic');




				unlink($filePath);
					}
			}
				}
		}
		
		$this->load->view('tem/update'); 
		
	} 
	public function delete(){

		// echo "<pre>";
		// print_r($_POST['deleteId']);
		// echo "</pre>";
		// exit;


		if (isset($_POST['deleteId'])) {
		
	    $deleteId = $_POST['deleteId'];

  
			$this->db->select('*');
			$this->db->from('service_participants_pic');
			$this->db->where('ID_S_P', $deleteId);
			$query = $this->db->get();
			$query = $query->result_array();

		
		



    	

	    $row =  $query[0];

	    $filePath = 'services_img/'.$row['ID_S_P'];
			
			$this->db->delete('service_participants_pic', array('ID_S_P' => $deleteId)); 
	    // $query = "DELETE FROM table_images WHERE id = $deleteId";

			if (mysqli_query($con, $query)) {
					unlink($filePath);
			}
   		}

	
		
		$this->load->view('tem/delete'); 
		
	} 

	/// วันที่
	public function last_leave_end_date_onchange(){
	
		$data = $this->mhome->last_leave_end_date_onchange($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	public function last_edit_leave_end_date_onchange(){
	
		$data = $this->mhome->last_edit_leave_end_date_onchange($_POST);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	}
	
} 


