<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Home_model extends CI_Model {
  public function select_data(){
    $query = $this->db->get('academics');
    $query = $query->result_array();
    return $query;
  }
  public function select_academics(){
    $query = $this->db->get('academics');
    $query = $query->result_array();
    return $query;
  }
  public function add_academics($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACADEMIC_NAME']!=""){
      $data = array(
        'ACADEMIC_NAME' => $data['ACADEMIC_NAME'],
      );
      $data = $this->db->insert('academics', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_academics($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACADEMIC_NAME']!=""){
      $this->db->set('ACADEMIC_NAME',  $data['ACADEMIC_NAME']);
      $this->db->where('ACADEMIC_ID', $data['ACADEMIC_ID']);
      $this->db->update('academics');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_academics($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACADEMIC_ID']!=""){
      $this->db->delete('academics', array('ACADEMIC_ID' => $data['ACADEMIC_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
///
  public function select_activity_categories(){
    $query = $this->db->get('activity_categories');
    $query = $query->result_array();
    return $query;
  }
  public function add_activity_categories($data){
    $st = array('activity_categories'=>0);
    if(is_array($data) && $data['ACTIVITY_CATEGORY_NAME']!=""){
        
      $data = array(
        'ACTIVITY_CATEGORY_NAME' => $data['ACTIVITY_CATEGORY_NAME'],
      );
      $data = $this->db->insert('activity_categories', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_activity_categories($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_CATEGORY_NAME']!=""){
      $this->db->set('ACTIVITY_CATEGORY_NAME',  $data['ACTIVITY_CATEGORY_NAME']);
      $this->db->where('ACTIVITY_CATEGORY_ID', $data['ACTIVITY_CATEGORY_ID']);
      $this->db->update('activity_categories');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_activity_categories($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_CATEGORY_ID']!=""){
      $this->db->delete('activity_categories', array('ACTIVITY_CATEGORY_ID' => $data['ACTIVITY_CATEGORY_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_activity_types(){
    $query = $this->db->get('activity_types');
    $query = $query->result_array();
    return $query;
  }
  public function add_activity_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_TYPE_NAME']!=""){
      $data = array(
        'ACTIVITY_TYPE_NAME' => $data['ACTIVITY_TYPE_NAME'],
      );
      $data = $this->db->insert('activity_types', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_activity_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_TYPE_NAME']!=""){
      $this->db->set('ACTIVITY_TYPE_NAME',  $data['ACTIVITY_TYPE_NAME']);
      $this->db->where('ACTIVITY_TYPE_ID', $data['ACTIVITY_TYPE_ID']);
      $this->db->update('activity_types');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_activity_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_TYPE_ID']!=""){
      $this->db->delete('activity_types', array('ACTIVITY_TYPE_ID' => $data['ACTIVITY_TYPE_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_leave_types(){
    $query = $this->db->get('leave_types');
    $query = $query->result_array();
    return $query;
  }
  public function add_leave_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['LEAVE_TYPE']!=""){
      $data = array(
        'LEAVE_TYPE_ID' => $data['LEAVE_TYPE_ID'],
        'LEAVE_TYPE' => $data['LEAVE_TYPE'],
        'LEAVE_TYPE_MAX' => $data['LEAVE_TYPE_MAX'],
     
      );
      $data = $this->db->insert('leave_types', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_leave_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['LEAVE_TYPE']!=""){
      $this->db->where('LEAVE_TYPE_ID', $data['LEAVE_TYPE_ID']);
      $this->db->set('LEAVE_TYPE', $data['LEAVE_TYPE']);
      $this->db->set('LEAVE_TYPE_MAX',  $data['LEAVE_TYPE_MAX']);
      $this->db->update('leave_types');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_leave_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['LEAVE_TYPE_ID']!=""){
      $this->db->delete('leave_types', array('LEAVE_TYPE_ID' => $data['LEAVE_TYPE_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_managements(){
    $query = $this->db->get('managements');
    $query = $query->result_array();
    return $query;
  }
  public function add_managements($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['MANAGEMENT_NAME']!=""){
      $data = array(
        'MANAGEMENT_NAME' => $data['MANAGEMENT_NAME'],
      );
      $data = $this->db->insert('managements', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_managements($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['MANAGEMENT_NAME']!=""){
      $this->db->set('MANAGEMENT_NAME',  $data['MANAGEMENT_NAME']);
      $this->db->where('MANAGEMENT_ID', $data['MANAGEMENT_ID']);
      $this->db->update('managements');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_managements($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['MANAGEMENT_ID']!=""){
      $this->db->delete('managements', array('MANAGEMENT_ID' => $data['MANAGEMENT_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_management_positions(){
    $this->db->select('*');
    $this->db->from('management_positions');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
    $this->db->join('managements', 'managements.MANAGEMENT_ID  = management_positions.MANAGEMENT_ID');
    $this->db->join('departments', 'departments.DEPARTMENT_ID  = management_positions.DEPARTMENT_ID');
    $management_positions = $this->db->get();
    $management_positions = $management_positions->result_array();
    $personnels = $this->select_personnels();
    $managements = $this->select_managements();
    $departments = $this->select_departments();

    $DATA = array(
      'management_positions'=>$management_positions,
      'managements'=>$managements,
      'personnels' => $personnels['personnels'],
      'departments' => $departments['departments']
    );
    // var_dump($DATA);
    // echo "<pre>";
		// // print_r($management_positions);
    // var_dump($DATA);
		// echo "</pre>";
		// // exit(); 
    // // หน้า network
    return $DATA;
  }
  public function add_management_positions($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['MANAGEMENT_ID']!="" && $data['DEPARTMENT_ID']!=""){
      $data = array(
        'MANAGEMENT_ID' => $data['MANAGEMENT_ID'],
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
        'DEPARTMENT_ID' => $data['DEPARTMENT_ID'],
      );
      $data = $this->db->insert('management_positions', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_management_positions($data){
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_ID']!=""){
      $this->db->where('MANAGEMENT_POSITION_ID', $data['MANAGEMENT_POSITION_ID']);
      $this->db->set('MANAGEMENT_ID', $data['MANAGEMENT_ID']);
      $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
      $this->db->set('DEPARTMENT_ID',  $data['DEPARTMENT_ID']);
      $this->db->update('management_positions');
      $st = array('st'=>1);
    }
    // echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_management_positions($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['MANAGEMENT_POSITION_ID']!=""){
      $this->db->delete('management_positions', array('MANAGEMENT_POSITION_ID' => $data['MANAGEMENT_POSITION_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_personnel_categories(){
    $query = $this->db->get('personnel_categories');
    $query = $query->result_array();
    return $query;
  }
  public function add_personnel_categories($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_CATEGORY_DETAIL']!=""){
      $data = array(
        'PERSONNEL_CATEGORY_DETAIL' => $data['PERSONNEL_CATEGORY_DETAIL'],
      );
      $data = $this->db->insert('personnel_categories', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_personnel_categories($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_CATEGORY_DETAIL']!=""){
      $this->db->set('PERSONNEL_CATEGORY_DETAIL',  $data['PERSONNEL_CATEGORY_DETAIL']);
      $this->db->where('PERSONNEL_CATEGORY_ID', $data['PERSONNEL_CATEGORY_ID']);
      $this->db->update('personnel_categories');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_personnel_categories($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_CATEGORY_ID']!=""){
      $this->db->delete('personnel_categories', array('PERSONNEL_CATEGORY_ID' => $data['PERSONNEL_CATEGORY_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_personnel_statuses(){
    $query = $this->db->get('personnel_statuses');
    $query = $query->result_array();
    return $query;
  }
  public function add_personnel_statuses($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_STATUS_DETAIL']!=""){
      $data = array(
        'PERSONNEL_STATUS_DETAIL' => $data['PERSONNEL_STATUS_DETAIL'],
      );
      $data = $this->db->insert('personnel_statuses', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_personnel_statuses($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_STATUS_DETAIL']!=""){
      $this->db->set('PERSONNEL_STATUS_DETAIL', $data['PERSONNEL_STATUS_DETAIL']);
      $this->db->where('PERSONNEL_STATUS_ID', $data['PERSONNEL_STATUS_ID']);
      $this->db->update('personnel_statuses');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_personnel_statuses($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_STATUS_ID']!=""){
      $this->db->delete('personnel_statuses', array('PERSONNEL_STATUS_ID' => $data['PERSONNEL_STATUS_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_personnel_types(){
    $query = $this->db->get('personnel_types');
    $query = $query->result_array();
    return $query;
  }
  public function add_personnel_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_TYPE_DETAIL']!=""){
      $data = array(
        'PERSONNEL_TYPE_DETAIL' => $data['PERSONNEL_TYPE_DETAIL'],
      );
      $data = $this->db->insert('personnel_types', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_personnel_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_TYPE_DETAIL']!=""){
      $this->db->set('PERSONNEL_TYPE_DETAIL',  $data['PERSONNEL_TYPE_DETAIL']);
      $this->db->where('PERSONNEL_TYPE_ID', $data['PERSONNEL_TYPE_ID']);
      $this->db->update('personnel_types');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_personnel_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_TYPE_ID']!=""){
      $this->db->delete('personnel_types', array('PERSONNEL_TYPE_ID' => $data['PERSONNEL_TYPE_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_faculties(){
    $query = $this->db->get('faculties');
    $query = $query->result_array();
    return $query;
  }
  public function add_faculties($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['FACULTY_ID']!=""){
      $data = array(
        'ID_F' => $data['ID_F'],
        'FACULTY_ID' => $data['FACULTY_ID'],
        'FACUALTY_NAME_TH' => $data['FACUALTY_NAME_TH'],
        'FACUALTY_NAME_EN' => $data['FACUALTY_NAME_EN'],
      );
      $data = $this->db->insert('faculties', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_faculties($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['FACULTY_ID']!=""){
      $this->db->where('ID_F', $data['ID_F']);
      $this->db->set('FACULTY_ID', $data['FACULTY_ID']);
      $this->db->set('FACUALTY_NAME_TH',  $data['FACUALTY_NAME_TH']);
      $this->db->set('FACUALTY_NAME_EN', $data['FACUALTY_NAME_EN']);
      $this->db->update('faculties');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_faculties($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ID_F']!=""){
      $this->db->delete('faculties', array('ID_F' => $data['ID_F'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_departments(){
    $this->db->select('*');
    $this->db->from('departments');
    $this->db->join('faculties', 'faculties.FACULTY_ID = departments.FACULTY_ID');
    $departments = $this->db->get();
    $departments = $departments->result_array();
    $faculties = $this->select_faculties();
    $DATA = array(
      'departments'=>$departments,
      'faculties' => $faculties
    );
    // 	echo "<pre>";
		// print_r($departments);
		// echo "</pre>";
		// exit(); 
    // หน้า network
    return $DATA;
  }
  public function add_departments($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['FACULTY_ID']!="" && $data['DEPARTMENT_ID']!=""){
      $data = array(
        'DEPARTMENT_ID' => $data['DEPARTMENT_ID'],
        'DEPARTMENT_NAME_TH' => $data['DEPARTMENT_NAME_TH'],
        'DEPARTMENT_NAME_EN' => $data['DEPARTMENT_NAME_EN'],
        'FACULTY_ID' => $data['FACULTY_ID'],
      );
      $data = $this->db->insert('departments', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_departments($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['FACULTY_ID']!=""){
      $this->db->where('ID_DEP', $data['ID_DEP']);
      $this->db->set('DEPARTMENT_ID', $data['DEPARTMENT_ID']);
      $this->db->set('DEPARTMENT_NAME_TH',  $data['DEPARTMENT_NAME_TH']);
      $this->db->set('DEPARTMENT_NAME_EN', $data['DEPARTMENT_NAME_EN']);
      $this->db->set('FACULTY_ID', $data['FACULTY_ID']);
      $this->db->update('departments');
      $st = array('st'=>1);
      
    }
  
    return $st;
  }
  public function delete_departments($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ID_DEP']!=""){
      $this->db->delete('departments', array('ID_DEP' => $data['ID_DEP'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_personnels(){
    $this->db->select('*');
    $this->db->from('personnels');
    $this->db->join('personnel_categories', 'personnel_categories.PERSONNEL_CATEGORY_ID = personnels.PERSONNEL_CATEGORY_ID');
    $this->db->join('personnel_statuses', 'personnel_statuses.PERSONNEL_STATUS_ID  = personnels.PERSONNEL_STATUS_ID');
    $this->db->join('personnel_types', 'personnel_types.PERSONNEL_TYPE_ID  = personnels.PERSONNEL_TYPE_ID');
    $this->db->join('departments', 'departments.DEPARTMENT_ID  = personnels.DEPARTMENT_ID');
    $personnels = $this->db->get();
    $personnels = $personnels->result_array();
    $personnel_categories = $this->select_personnel_categories();
    $personnel_statuses = $this->select_personnel_statuses();
    $personnel_types = $this->select_personnel_types();
    $departments = $this->select_departments();
    $DATA = array(
      'personnels'=>$personnels,
      'personnel_categories' => $personnel_categories,
      'personnel_statuses' => $personnel_statuses,
      'personnel_types' => $personnel_types,
      'departments' => $departments['departments']
    );
    // echo "<pre>";
		// print_r($departments['departments']);
		// echo "</pre>";
		// exit(); 
    // // หน้า network
    return $DATA;
  }
  public function add_personnels($data){
    $st = array('st'=>0 ,'ms'=>'มีบางอย่งผิดพลาด');

    $this->db->select('PERSONNEL_ID,PERSONNEL_USERNAME');
    $this->db->from('personnels');
    $this->db->where('PERSONNEL_ID', $data['PERSONNEL_ID']);
    $this->db->or_where('PERSONNEL_ID', $data['PERSONNEL_ID']);
    $personnels_check = $this->db->get();
    $personnels_check = $personnels_check->row_array();
    $PERSONNEL_ID_check = isset($personnels_check['PERSONNEL_ID'])?$personnels_check['PERSONNEL_ID']:"";
    $PERSONNEL_USERNAME_check = isset($personnels_check['PERSONNEL_USERNAME'])?$personnels_check['PERSONNEL_USERNAME']:"";
    
    
    

    if($PERSONNEL_ID_check == $data['PERSONNEL_ID']){
      $st = array('st'=>0,'ms'=>$PERSONNEL_ID_check.' ซ้ำ','name'=>'PERSONNEL_ID');
    }

    if($PERSONNEL_USERNAME_check == $data['PERSONNEL_USERNAME']){
      $st = array('st'=>0,'ms'=>$PERSONNEL_USERNAME_check.' ซ้ำ','name'=>'PERSONNEL_USERNAME');
    }
   
    if(is_array($data) && $data['PERSONNEL_CATEGORY_ID']!="" && $data['PERSONNEL_ID']!="" && $PERSONNEL_ID_check == ""){
      $data = array(
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
        'PERSONNEL_NAME' => $data['PERSONNEL_NAME'],
        'PERSONNEL_SURNAME' => $data['PERSONNEL_SURNAME'],
        'PERSONNEL_NAME_EN' => $data['PERSONNEL_NAME_EN'],
        'PERSONNEL_SURNAME_EN' => $data['PERSONNEL_SURNAME_EN'],
        'PERSONNEL_EMAIL' => $data['PERSONNEL_EMAIL'],
        'PERSONNEL_MOBILE' => $data['PERSONNEL_MOBILE'],
        'PERSONNEL_PHONE' => $data['PERSONNEL_PHONE'],
        'PERSONNEL_PHONE_EXTENSION' => $data['PERSONNEL_PHONE_EXTENSION'],
        'PERSONNEL_SEX' => $data['PERSONNEL_SEX'],
        'PERSONNEL_CREATE_BY' => $data['PERSONNEL_CREATE_BY'],
        'PERSONNEL_CRETTE_DATE' => $data['PERSONNEL_CRETTE_DATE'],
        'DEPARTMENT_ID' => $data['DEPARTMENT_ID'],
        'PERSONNEL_CATEGORY_ID' => $data['PERSONNEL_CATEGORY_ID'],
        'PERSONNEL_STATUS_ID' => $data['PERSONNEL_STATUS_ID'],
        'PERSONNEL_TYPE_ID' => $data['PERSONNEL_TYPE_ID'],
        'PERSONNEL_USERNAME' => $data['PERSONNEL_USERNAME'],
        'PERSONNEL_PASSWORD' => $data['PERSONNEL_PASSWORD'],
      );
      $data = $this->db->insert('personnels', $data);
      $st = array('st'=>1,'ms'=>'สำเร็จ');
    }
  
    return $st;
  }
  public function edit_personnels($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_ID']!=""){
      $this->db->where('PERSONNEL_ID', $data['PERSONNEL_ID']);
      $this->db->set('PERSONNEL_NAME', $data['PERSONNEL_NAME']);
      $this->db->set('PERSONNEL_SURNAME',  $data['PERSONNEL_SURNAME']);
      $this->db->set('PERSONNEL_NAME_EN', $data['PERSONNEL_NAME_EN']);
      $this->db->set('PERSONNEL_SURNAME_EN', $data['PERSONNEL_SURNAME_EN']);
      $this->db->set('PERSONNEL_EMAIL', $data['PERSONNEL_EMAIL']);
      $this->db->set('PERSONNEL_MOBILE',  $data['PERSONNEL_MOBILE']);
      $this->db->set('PERSONNEL_PHONE', $data['PERSONNEL_PHONE']);
      $this->db->set('PERSONNEL_PHONE_EXTENSION', $data['PERSONNEL_PHONE_EXTENSION']);
      $this->db->set('PERSONNEL_SEX', $data['PERSONNEL_SEX']);
      $this->db->set('PERSONNEL_CREATE_BY',  $data['PERSONNEL_CREATE_BY']);
      $this->db->set('PERSONNEL_CRETTE_DATE',  $data['PERSONNEL_CRETTE_DATE']);
      $this->db->set('DEPARTMENT_ID',  $data['DEPARTMENT_ID']);
      $this->db->set('PERSONNEL_CATEGORY_ID', $data['PERSONNEL_CATEGORY_ID']);
      $this->db->set('PERSONNEL_STATUS_ID', $data['PERSONNEL_STATUS_ID']);
      $this->db->set('PERSONNEL_TYPE_ID', $data['PERSONNEL_TYPE_ID']);
      $this->db->set('PERSONNEL_USERNAME', $data['PERSONNEL_USERNAME']);
      $this->db->set('PERSONNEL_PASSWORD', $data['PERSONNEL_PASSWORD']);
      $this->db->update('personnels');
      $st = array('st'=>1);
    }
    //   echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_personnels($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_ID']!=""){
      $this->db->delete('personnels', array('PERSONNEL_ID' => $data['PERSONNEL_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///
  public function select_academic_positions(){
    $this->db->select('*');
    $this->db->from('academic_positions');
    $this->db->join('academics', 'academics.ACADEMIC_ID = academic_positions.ACADEMIC_ID');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = academic_positions.PERSONNEL_ID');
    $academic_positions = $this->db->get();
    $academic_positions = $academic_positions->result_array();
    $academics = $this->select_academics();
    $personnels = $this->select_personnels();
    $DATA = array(
      'academic_positions'=>$academic_positions,
      'academics' => $academics,
      'personnels' => $personnels['personnels']
    );
    // 	echo "<pre>";
		// print_r($DATA);
		// echo "</pre>";
		// exit(); 
    // // หน้า network
    return $DATA;
  }
  public function add_academic_positions($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACADEMIC_ID']!="" && $data['PERSONNEL_ID']!=""){
      $data = array(
        'ACADEMIC_ID' => $data['ACADEMIC_ID'],
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],  
      );
     
      $data = $this->db->insert('academic_positions', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_academic_positions($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_ID']!=""){
      $this->db->where('ACADEMIC_POSITION_ID', $data['ACADEMIC_POSITION_ID']);
      $this->db->set('ACADEMIC_ID', $data['ACADEMIC_ID']);
      $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
      $this->db->update('academic_positions');
      $st = array('st'=>1);
    }
    //   echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_academic_positions($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACADEMIC_POSITION_ID']!=""){
      $this->db->delete('academic_positions', array('ACADEMIC_POSITION_ID' => $data['ACADEMIC_POSITION_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
/// select_students เอาไว้เชื่อมตารางยังไม่ได้ใข้ทำอะไีร
  public function select_students(){
    $query = $this->db->get('students');
    $query = $query->result_array();
    return $query;
  }
///
  public function select_individual_counseling_services(){
    $this->db->select('*');
    $this->db->from('individual_counseling_services');
    $this->db->join('counseling_types', 'counseling_types.COUNSELING_TYPE_ID = individual_counseling_services.COUNSELING_TYPE_ID');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID  = individual_counseling_services.ADVISOR_ID');
    $this->db->join('students', 'students.STUDENT_ID  = individual_counseling_services.STUDENT_ID');

 
    $individual_counseling_services = $this->db->get();
    $individual_counseling_services = $individual_counseling_services->result_array();
    $counseling_types = $this->select_counseling_types();
    $personnels = $this->select_personnels();
    $students = $this->select_students();
  
    $DATA = array(
      'individual_counseling_services'=>$individual_counseling_services,
      'counseling_types' => $counseling_types,
      'students' => $students,
      'personnels' => $personnels['personnels']
    );
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network
    return $DATA;
  }
  public function add_individual_counseling_services($data){
    if(is_array($data) && $data['ADVISOR_ID']!="" && $data['STUDENT_ID']!=""){
      $data = array(
        'ADVISOR_ID' => $data['ADVISOR_ID'],
        'STUDENT_ID' => $data['STUDENT_ID'],
        'COUNSELING_TYPE_ID' => $data['COUNSELING_TYPE_ID'],
        'COUNSELING_PROBLEM' => $data['COUNSELING_PROBLEM'],
        'COUNSELING_DETAIL' => $data['COUNSELING_DETAIL'],
        'COUNSELING_SOLVE' => $data['COUNSELING_SOLVE'],
        'COUNSELING_RESULT' => $data['COUNSELING_RESULT'],
        'COUNSELING_CREATE_DATE' => $data['COUNSELING_CREATE_DATE'],
        'COUNSELING_DATE' => $data['COUNSELING_DATE'],
        'STUDEN_DATE' => $data['STUDEN_DATE'],
    
      );
      $data = $this->db->insert('individual_counseling_services', $data);
      $st = array('st'=>1,'ms'=>'สำเร็จ');
    }
  
    return $st;
  }
  public function edit_individual_counseling_services($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ADVISOR_ID']!=""){
      $this->db->where('INDIVIDUAL_COUNSELING_ID', $data['INDIVIDUAL_COUNSELING_ID']);
      $this->db->set('ADVISOR_ID', $data['ADVISOR_ID']);
      $this->db->set('STUDENT_ID',  $data['STUDENT_ID']);
      $this->db->set('COUNSELING_TYPE_ID', $data['COUNSELING_TYPE_ID']);
      $this->db->set('COUNSELING_PROBLEM', $data['COUNSELING_PROBLEM']);
      $this->db->set('COUNSELING_DETAIL', $data['COUNSELING_DETAIL']);
      $this->db->set('COUNSELING_SOLVE',  $data['COUNSELING_SOLVE']);
      $this->db->set('COUNSELING_RESULT', $data['COUNSELING_RESULT']);
      $this->db->set('COUNSELING_CREATE_DATE', $data['COUNSELING_CREATE_DATE']);
      $this->db->set('COUNSELING_DATE', $data['COUNSELING_DATE']);
      $this->db->set('STUDEN_DATE', $data['STUDEN_DATE']);


      $this->db->update('individual_counseling_services');
      $st = array('st'=>1);
    }
  
    //   echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_individual_counseling_services($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['INDIVIDUAL_COUNSELING_ID']!=""){
      $this->db->delete('individual_counseling_services', array('INDIVIDUAL_COUNSELING_ID' => $data['INDIVIDUAL_COUNSELING_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }

  public function select_services(){
    $this->db->select('*');
    $this->db->from('services');
  
    $services = $this->db->get();
    $services = $services->result_array();
  
  
    $DATA = array(
      'services'=>$services
    );
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network
    return $DATA;
  }
  public function add_services($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['SERVICE_TITLE']!="" && $data['SERVICE_PLACE']!=""){
      $data = array(
        'SERVICE_TITLE' => $data['SERVICE_TITLE'],
        'SERVICE_PLACE' => $data['SERVICE_PLACE'],
         
        'SERVICE_OWNER' => $data['SERVICE_OWNER'],
        'PARTICIPANT_TYPE' => $data['PARTICIPANT_TYPE'], 
        'PARTICIPANT' => $data['PARTICIPANT'],
        'TOTAL_PARTICIPANT' => $data['TOTAL_PARTICIPANT'], 
        'TOTAL_HOUR' => $data['TOTAL_HOUR'],
        'SERVICE_START_DATE' => $data['SERVICE_START_DATE'], 
        'SERVICE_END_DATE' => $data['SERVICE_END_DATE'],
        'FILE_DOCUMENT' => $data['FILE_DOCUMENT'], 
      );
     
      $data = $this->db->insert('services', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_services($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['SERVICE_TITLE']!=""){
      $this->db->where('SERVICE_ID', $data['SERVICE_ID']);
      $this->db->set('SERVICE_TITLE', $data['SERVICE_TITLE']);
      $this->db->set('SERVICE_PLACE',  $data['SERVICE_PLACE']);
      $this->db->set('SERVICE_OWNER', $data['SERVICE_OWNER']);
      $this->db->set('PARTICIPANT_TYPE', $data['PARTICIPANT_TYPE']);
      $this->db->set('PARTICIPANT', $data['PARTICIPANT']);
      $this->db->set('TOTAL_PARTICIPANT',  $data['TOTAL_PARTICIPANT']);
      $this->db->set('TOTAL_HOUR', $data['TOTAL_HOUR']);
      $this->db->set('SERVICE_START_DATE', $data['SERVICE_START_DATE']);
      $this->db->set('SERVICE_END_DATE', $data['SERVICE_END_DATE']);
      $this->db->set('FILE_DOCUMENT', $data['FILE_DOCUMENT']);


      $this->db->update('services');
      $st = array('st'=>1);
    }
  
    //   echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_services($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['SERVICE_ID']!=""){
      $this->db->delete('services', array('SERVICE_ID' => $data['SERVICE_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  ///

  public function select_service_participants(){
    $this->db->select('*');
    $this->db->from('service_participants');
    $this->db->join('services', 'services.SERVICE_ID = service_participants.SERVICE_ID');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = service_participants.PERSONNEL_ID');
    $service_participants = $this->db->get();
    $service_participants = $service_participants->result_array();
    $services = $this->select_services();
    $personnels = $this->select_personnels();
    $DATA = array(
      'service_participants'=>$service_participants,
      'services' => $services['services'],
      'personnels' => $personnels['personnels']
    );
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network
    return $DATA;
  }
  public function add_service_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['SERVICE_ID']!="" && $data['PERSONNEL_ID']!=""){
      $data = array(
        'SERVICE_ID' => $data['SERVICE_ID'],
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
        'TOTAL_HOUR' => $data['TOTAL_HOUR'],
        'SERVICE_START_DATE' => $data['SERVICE_START_DATE'], 
        'SERVICE_END_DATE' => $data['SERVICE_END_DATE'],
      
      );
     
      $data = $this->db->insert('service_participants', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }

  ///
  public function select_counseling_types(){
    $query = $this->db->get('counseling_types');
    $query = $query->result_array();
    return $query;
  }
  public function add_counseling_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['COUNSELING_NAME']!=""){
      $data = array(
        'COUNSELING_NAME' => $data['COUNSELING_NAME'],
      );
      $data = $this->db->insert('counseling_types', $data);
      $st = array('st'=>1);
    }
    return $st;
  }
  public function edit_counseling_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['COUNSELING_NAME']!=""){
      $this->db->set('COUNSELING_NAME',  $data['COUNSELING_NAME']);
      $this->db->where('COUNSELING_TYPE_ID', $data['COUNSELING_TYPE_ID']);
      $this->db->update('counseling_types');
      $st = array('st'=>1);
    }
    return $st;
  }
  public function delete_counseling_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['COUNSELING_TYPE_ID']!=""){
      $this->db->delete('counseling_types', array('COUNSELING_TYPE_ID' => $data['COUNSELING_TYPE_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }

}
