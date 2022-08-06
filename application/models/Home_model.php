<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Home_model extends CI_Model {
  public function paginate_custom($totalpage,$curentpage,$rount){
    $First_page = $rount;
    $Last_page =$rount;
    $html_page = "";
    if($totalpage == 0){
      $totalpage = 1;
    }
    $url = $rount;
    $pag = 0;
    $search = isset($_GET['search_all'])?$_GET['search_all']:"";
    $search_url = "";
    if($search != ""){
      $search_url = '&search_all='.$search;
    }
    if($totalpage>0){
      for ($i=0; $i <$totalpage ; $i++) { 
        
        $active = '';
        if(($i+1)==$curentpage){
          $active = 'active-1';
        }
        $html_page .= '
          <li class="page-item" data-page="'.($i+1).'"><a class="page-link '.$active.'" href="'.$url.'?page='.($i+1).$search_url.'">'.($i+1).'</a></li>
        ';
        $pag++;
      }
    }
    
    $html_paginate = '
      <nav aria-label="Page navigation example" class="page-custom" data-curentpage="'.$curentpage.'">
        <ul class="pagination justify-content-center">
          <li class="page-item ">
            <a class="page-link" href="'.$First_page.'" tabindex="-1">First</a>
          </li>
          '.$html_page.'
          <li class="page-item">
            <a class="page-link" href="'.$url.'?page='.($pag).$search_url.'">Last</a>
          </li>
        </ul>
      </nav>
    ';
    
    return $html_paginate;
  }
  public function select_admin_login(){
    $this->db->select('*');
    $this->db->from('admin_login');
    $this->db->join('personnels','personnels.PERSONNEL_ID = admin_login.ADMIN_ID');
    $this->db->order_by("level", "asc");    
    $admin_login = $this->db->get();
    $admin_login = $admin_login->result_array();
    $personnels = $this->select_personnels();


    $DATA = array(
    'admin_login'=>$admin_login,
    'personnels' => $personnels['personnels']


    );
    // echo "<pre>";
    // print_r($admin_login);
    // echo "</pre>";
    // exit(); 
    // // หน้า network
    return $DATA;
  }
  
  //
  public function select_data(){
    // echo '<pre>';
    // print_r ($data);
    // echo '</pre>';
    // exit;
    $query = $this->db->get('academics');
   
    $query = $query->result_array();
    return $query;
  }
  public function select_academics($data_search = ""){
    
    $query = $this->db->get('academics');
    
    $this->db->select('*');
    $this->db->from('academics');
    if($data_search != ""){
      $this->db->like('`academics`.`ACADEMIC_NAME`', $data_search);
    };
    $query = $this->db->get();
    $query = $query->result_array();
    // echo '<pre>';
    // print_r ($query);
    // echo '</pre>';
    // exit;
    return $query;
  }
  public function add_academics($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACADEMIC_NAME']!=""){
      // echo '<pre>';
      // print_r ($data);
      // echo '</pre>';
      // exit;
      $data = array(
        'ACADEMIC_NAME' => $data['ACADEMIC_NAME'],
      ) ;
    
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
  //

  public function select_activity_categories($data_search = ""){
   
    $this->db->select('*');
    $this->db->from('activity_categories');
    if($data_search != ""){
      $this->db->like('`activity_categories`.`ACTIVITY_CATEGORY_NAME`', $data_search);
    };
    $query = $this->db->get();
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
  //

  public function select_activity_types($data_search = ""){

        
    $this->db->select('*');
    $this->db->from('activity_types');
    if($data_search != ""){
      $this->db->like('`activity_types`.`ACTIVITY_TYPE_NAME`', $data_search);
    };
    $query = $this->db->get();
    $query = $query->result_array();
    // echo '<pre>';

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
  //

  public function select_leave_types($data_search = ""){
 
    $this->db->select('*');
    $this->db->from('leave_types');
    if($data_search != ""){
      $this->db->like('`leave_types`.`LEAVE_TYPE`', $data_search);
      $this->db->or_like('`leave_types`.`LEAVE_TYPE_MAX`', $data_search);

    };
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  public function add_leave_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['LEAVE_TYPE']!=""){
      $data = array(
       
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
  //

  public function select_managements($data_search = ""){

    $this->db->select('*');
    $this->db->from('managements');
    if($data_search != ""){
      $this->db->like('`managements`.`MANAGEMENT_NAME`', $data_search);
    };
    $query = $this->db->get();
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
  //

  public function select_management_positions($data_search = ""){
    $this->db->select('*');
    $this->db->from('management_positions');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
    $this->db->join('managements', 'managements.MANAGEMENT_ID  = management_positions.MANAGEMENT_ID');
    $this->db->join('departments', 'departments.DEPARTMENT_ID  = management_positions.DEPARTMENT_ID');
    $this->db->order_by("personnels.PERSONNEL_ID", "asc");  
    if($data_search != ""){
      $this->db->like('management_positions.DEPARTMENT_ID', $data_search);
      $this->db->or_like('management_positions.PERSONNEL_ID', $data_search);
      $this->db->or_like('management_positions.START_DATE', $data_search);
      $this->db->or_like('management_positions.END_DATE', $data_search);
      $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      $this->db->or_like('managements.MANAGEMENT_NAME', $data_search);
      $this->db->or_like('departments.DEPARTMENT_ID', $data_search);
      $this->db->or_like('departments.DEPARTMENT_NAME_TH', $data_search);
      $this->db->or_like('departments.DEPARTMENT_NAME_EN', $data_search);
      

    };
    $management_positions = $this->db->get();
    $management_positions = $management_positions->result_array();
    $personnels = $this->select_personnels_all();

   


    $managements = $this->select_managements();
    $departments = $this->select_departments();

  
    // foreach ($managements as $key => $value) {
    //   if($value['MANAGEMENT_ID'] == 1){
    //     $data[] = array(
    //       'MANAGEMENT'=>$value['MANAGEMENT_ID']
    //   );
    //   }
      

    // }
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;

    $DATA = array(
      'management_positions'=>$management_positions,
      'managements'=>$managements,



      'personnels' => $personnels['personnels'],
      'departments' => $departments['departments']
    );
    

    // echo '<pre>';
    // print_r($DATA);
    // echo '</pre>';
    // exit;


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
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;
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
  //

  public function select_personnel_categories($data_search = ""){
    $this->db->select('*');
    $this->db->from('personnel_categories');
    if($data_search != ""){
      $this->db->like('`personnel_categories`.`PERSONNEL_CATEGORY_DETAIL`', $data_search);
    };
    $query = $this->db->get();
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

  //
  public function select_personnel_statuses($data_search = ""){
    $this->db->select('*');
    $this->db->from('personnel_statuses');
    if($data_search != ""){
      $this->db->like('`personnel_statuses`.`PERSONNEL_STATUS_DETAIL`', $data_search);
    };
    $query = $this->db->get();
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

  //
  public function select_personnel_types($data_search = ""){
    $this->db->select('*');
    $this->db->from('personnel_types');
    if($data_search != ""){
      $this->db->like('`personnel_types`.`PERSONNEL_TYPE_DETAIL`', $data_search);
    };
    $query = $this->db->get();
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
  
  //
  public function select_faculties($a = ""){

    $this->db->select('*');
    $this->db->from('faculties');
    if($a != ""){
      $this->db->like('faculties.FACUALTY_NAME_TH', $a);
      $this->db->or_like('faculties.FACUALTY_NAME_EN', $a);
    }
    
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  public function add_faculties($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['FACULTY_ID']!=""){
      $data = array(
      
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

  //
  public function select_departments($depart = ""){
    

    // print_r($_GET);
    // exit;
    
    $this->db->select('*');
    $this->db->from('departments');
    $this->db->join('faculties', 'faculties.FACULTY_ID = departments.FACULTY_ID');
    
    if($depart != ""){
      $this->db->like('departments.DEPARTMENT_ID', $depart);
      $this->db->or_like('departments.DEPARTMENT_NAME_TH', $depart);
      $this->db->or_like('departments.DEPARTMENT_NAME_EN', $depart);
    };
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

  //
  
  public function select_personnels_all(){
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



    return $DATA;
  }
  public function select_personnels($data_search = ""){
    $this->db->select('*');
    $this->db->from('personnels');
    $this->db->join('personnel_categories', 'personnel_categories.PERSONNEL_CATEGORY_ID = personnels.PERSONNEL_CATEGORY_ID');
    $this->db->join('personnel_statuses', 'personnel_statuses.PERSONNEL_STATUS_ID  = personnels.PERSONNEL_STATUS_ID');
    $this->db->join('personnel_types', 'personnel_types.PERSONNEL_TYPE_ID  = personnels.PERSONNEL_TYPE_ID');
    $this->db->join('departments', 'departments.DEPARTMENT_ID  = personnels.DEPARTMENT_ID');
    if($data_search != ""){
      $this->db->like('personnels.PERSONNEL_ID', $data_search);
      $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      $this->db->or_like('personnel_statuses.PERSONNEL_STATUS_DETAIL', $data_search);
    };
    $personnels = $this->db->get();
    $count  = $personnels->num_rows();
    
    $rount =$_SERVER['PHP_SELF'];
    $page = 1;
    if(isset($_GET['page']) && $_GET['page'] !=""){
      $page = $_GET['page'];
    }
    $totalpage = CEIL($count/5);
  
    $create_links = $this->paginate_custom($totalpage,$count,$rount);
  
    $this->db->select('*');
    $this->db->from('personnels');
    $this->db->join('personnel_categories', 'personnel_categories.PERSONNEL_CATEGORY_ID = personnels.PERSONNEL_CATEGORY_ID');
    $this->db->join('personnel_statuses', 'personnel_statuses.PERSONNEL_STATUS_ID  = personnels.PERSONNEL_STATUS_ID');
    $this->db->join('personnel_types', 'personnel_types.PERSONNEL_TYPE_ID  = personnels.PERSONNEL_TYPE_ID');
    $this->db->join('departments', 'departments.DEPARTMENT_ID  = personnels.DEPARTMENT_ID');
    if($data_search != ""){
      $this->db->like('personnels.PERSONNEL_ID', $data_search);
      $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      $this->db->or_like('personnel_statuses.PERSONNEL_STATUS_DETAIL', $data_search);
    };
    $pages = 0;
    if($page > 1){
      $pages = (int)($page-1) * 5;
    }
    $this->db->limit(5, $pages);
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
      'departments' => $departments['departments'],
      'create_links' => $create_links
    );
    return $DATA;
  }
  public function add_personnels($data){
    $st = array('st'=>0 ,'ms'=>'มีบางอย่งผิดพลาด');
    // echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit();

    $this->db->select('PERSONNEL_ID,PERSONNEL_USERNAME');
    $this->db->from('personnels');
    $this->db->where('PERSONNEL_ID', $data['PERSONNEL_ID']);
    $this->db->or_where('PERSONNEL_USERNAME', $data['PERSONNEL_USERNAME']);
    $personnels_check = $this->db->get();
    $personnels_check = $personnels_check->row_array();
    $PERSONNEL_USERNAME_check = isset($personnels_check['PERSONNEL_USERNAME'])?$personnels_check['PERSONNEL_USERNAME']:"";
    $PERSONNEL_ID_check = isset($personnels_check['PERSONNEL_ID'])?$personnels_check['PERSONNEL_ID']:""; 
    $st = array('st'=>0 ,'ms'=>'มีบางอย่งผิดพลาด');
    if($PERSONNEL_ID_check == $data['PERSONNEL_ID']){
      $st = array('st'=>0,'ms'=>$PERSONNEL_ID_check.' ซ้ำ','name'=>'PERSONNEL_ID');
   
    }elseif($PERSONNEL_USERNAME_check == $data['PERSONNEL_USERNAME']){
      $st = array('st'=>0,'ms'=>$PERSONNEL_USERNAME_check.' ซ้ำ','name'=>'PERSONNEL_USERNAME');
    }
    // echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit();

    if(is_array($data) && $data['PERSONNEL_ID']!=""  && $data['PERSONNEL_USERNAME']!="" && $PERSONNEL_ID_check == ""  && $PERSONNEL_USERNAME_check == ""  ){
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
        'PERSONNEL_SEX' => $data['personnel_sex'],
        'PERSONNEL_CREATE_BY' => $data['PERSONNEL_CREATE_BY'],
        'PERSONNEL_CRETTE_DATE' => $data['PERSONNEL_CRETTE_DATE'],
        'DEPARTMENT_ID' => $data['DEPARTMENT_ID'],
        'PERSONNEL_CATEGORY_ID' => $data['PERSONNEL_CATEGORY_ID'],
        'PERSONNEL_STATUS_ID' => $data['PERSONNEL_STATUS_ID'],
        'PERSONNEL_TYPE_ID' => $data['PERSONNEL_TYPE_ID'],
        'PERSONNEL_USERNAME' => $data['PERSONNEL_USERNAME'],
        'PERSONNEL_PASSWORD' => $data['PERSONNEL_PASSWORD'],
        'level' => $data['level'],
        'PERSONNEL_CREATE_BY' => $_SESSION['PERSONNEL_ID'],
        'PERSONNEL_LINE' => $data['PERSONNEL_LINE'],
        'PERSONNEL_FACEBOOK' => $data['PERSONNEL_FACEBOOK'],


      );
      $data = $this->db->insert('personnels', $data);
      $st = array('st'=>1,'ms'=>'สำเร็จ');
    }
    //    echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
    return $st;
  }
  public function edit_personnels($data){
    
    $st = array('st'=>0 ,'ms'=>'มีบางอย่งผิดพลาด');
  
    //  echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();



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
      $this->db->set('PERSONNEL_LINE', $data['PERSONNEL_LINE']);
      $this->db->set('PERSONNEL_FACEBOOK', $data['PERSONNEL_FACEBOOK']);
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

  //
  public function select_academic_positions($data_search = ""){
    $this->db->select('*');
    $this->db->from('academic_positions');
    $this->db->join('academics', 'academics.ACADEMIC_ID = academic_positions.ACADEMIC_ID');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = academic_positions.PERSONNEL_ID');
    if($data_search != ""){
      $this->db->like('academic_positions.PERSONNEL_ID', $data_search);
      $this->db->or_like('academics.ACADEMIC_NAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
    };
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
  // select_students เอาไว้เชื่อมตารางยังไม่ได้ใข้ทำอะไีร
  public function select_students(){
    $query = $this->db->get('students');
    $query = $query->result_array();
    return $query;
  }
  //
  public function select_individual_counseling_services($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('individual_counseling_services');
      $this->db->join('counseling_types', 'counseling_types.COUNSELING_TYPE_ID = individual_counseling_services.COUNSELING_TYPE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID  = individual_counseling_services.ADVISOR_ID');
      $this->db->join('students', 'students.STUDENT_ID  = individual_counseling_services.STUDENT_ID');
      $this->db->where('ADVISOR_ID', $_SESSION['PERSONNEL_ID'] );
      $this->db->where('personnels.PERSONNEL_ID', $_SESSION['PERSONNEL_ID'] );
      $this->db->order_by("individual_counseling_services.INDIVIDUAL_COUNSELING_ID", "desc");  

      if($data_search != ""){
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('counseling_types.COUNSELING_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      };
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
    // print_r($DATA);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['level']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['ADMIN_ID']);
    // echo "</pre>";
    // exit();
      return $DATA;

    }else{
      $this->db->select('*');
      $this->db->from('individual_counseling_services');
      $this->db->join('counseling_types', 'counseling_types.COUNSELING_TYPE_ID = individual_counseling_services.COUNSELING_TYPE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID  = individual_counseling_services.ADVISOR_ID');
      $this->db->join('students', 'students.STUDENT_ID  = individual_counseling_services.STUDENT_ID');
      if($data_search != ""){
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('counseling_types.COUNSELING_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      };
  

  
   
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
    // print_r($DATA);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['level']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // exit();
      return $DATA;

    }
  
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network

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
     
  
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
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

  public function select_services($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('services');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = services.SERVICE_OWNER');
      $this->db->where('SERVICE_OWNER', $_SESSION['PERSONNEL_ID']);
      if($data_search != ""){
        $this->db->like('services.SERVICE_OWNER', $data_search);
        $this->db->or_like('services.SERVICE_PLACE', $data_search);
        $this->db->or_like('services.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('services.FILE_DOCUMENT', $data_search);
      };
      $services = $this->db->get();
      $services = $services->result_array();
      $personnels = $this->select_personnels_all();
    
  
      $DATA = array(
        'services'=>$services,
        'personnels'=>$personnels['personnels']
      );

      // echo '<pre>';
      // print_r($personnels['personnels']);
      // echo '</pre>';
      // exit;
      
      return $DATA;
    }else{
      $this->db->select('*');
      $this->db->from('services');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = services.SERVICE_OWNER');
      if($data_search != ""){
        $this->db->like('services.SERVICE_OWNER', $data_search);
        $this->db->or_like('services.SERVICE_PLACE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('services.FILE_DOCUMENT', $data_search);
      };
      $services = $this->db->get();
      $services = $services->result_array();
      $personnels = $this->select_personnels_all();

      $DATA = array(
        'services'=>$services,
        'personnels'=>$personnels['personnels']
      );

      // echo '<pre>';
      // print_r($personnels['personnels']);
      // echo '</pre>';
      // exit;
      




      return $DATA;
    }
 
  }
  public function add_services($data){


      // echo '<pre>';
      // print_r($data);
      // echo '</pre>';
      // exit;
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
       
      );
     
      $data = $this->db->insert('services', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_services($data){
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 

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


      $this->db->update('services');
      $st = array('st'=>1);
    }
  
  

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
  public function save_upload_file_services($data){
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;

    $this->db->where('SERVICE_ID', $data['SERVICE_ID']);
    $this->db->set('FILE_DOCUMENT', $data['img_name']);
    $this->db->update('services');
    // $this->db->insert_batch('personnels', $data['img_name']); 
   
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;
    $this->db->select('*');
    $this->db->from('services');
    $this->db->where('SERVICE_ID', $data['SERVICE_ID']);
    $data = $this->db->get();
    $data = $data->row_array();


    // $path_delete= './images/researchs/';
    // if(file_exists($path_delete.$data['FILE_RESEARCHS'])){
    //   unlink($path_delete.$data['FILE_RESEARCHS']);
    // }

    

 

    $data_html = array(
      'st'=>0
    );
    if($data != array()){
  
      $data_html = array(
        'st'=>1
      );
    }
    //  echo "<pre>";
		// print_r($data_html);
		// echo "</pre>";
    // exit;
    return $data_html;
  }

  public function show_service_participants_pic(){
   



      $id = isset($_GET['img'])?$_GET['img']:"";

      $id_personal = isset($_GET['id_personal'])?$_GET['id_personal']:"";
      
      // echo '<pre>';
      // print_r($id_personal);
      // echo '</pre>';
      // exit;
      
      $DATA = array();

    if($id != ""){
      $this->db->select('*');
      $this->db->from('service_participants_pic');
      // $this->db->join('service_participants', 'service_participants.ID = service_participants_pic.SERVICE_ID');
      $this->db->where('SERVICE_ID', $_GET['img']);
      $this->db->where('CREATE_BY_SE', $_GET['id_personal']);


      $this->db->order_by("service_participants_pic.ID_S_P", "DESC");  

      $service_participants_pic = $this->db->get();
      $service_participants_pic = $service_participants_pic->result_array();
      // $personnels = $this->select_personnels_all();
    
      // echo '<pre>';
      // print_r($service_participants_pic);
      // echo '</pre>';
      // exit;
  
      $DATA = array(
        'service_participants_pic'=>$service_participants_pic
      
      );

      
    

    }
    return $DATA;
   
  }


  
  //

  public function select_service_participants($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('service_participants');
      $this->db->join('services', 'services.SERVICE_ID = service_participants.SERVICE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = service_participants.PERSONNEL_ID');
      $this->db->where('service_participants.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    
      if($data_search != ""){
        $this->db->like('services.SERVICE_TITLE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      };
      // echo '<pre>';
      // print_r($data_search);
      // echo '</pre>';
      // exit;
      $service_participants = $this->db->get();
      $service_participants = $service_participants->result_array();
      $services = $this->select_services();
      $personnels = $this->select_personnels();
      $DATA = array(
        'service_participants'=>$service_participants,
        'services' => $services['services'],
        'personnels' => $personnels['personnels']
      );
      return $DATA;
    }else{
      $this->db->select('*');
      $this->db->from('service_participants');
      $this->db->join('services', 'services.SERVICE_ID = service_participants.SERVICE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = service_participants.PERSONNEL_ID');
      if($data_search != ""){
        $this->db->like('services.SERVICE_TITLE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      };
      $service_participants = $this->db->get();
      $service_participants = $service_participants->result_array();
      $services = $this->select_services();
      $personnels = $this->select_personnels();
      $DATA = array(
        'service_participants'=>$service_participants,
        'services' => $services['services'],
        'personnels' => $personnels['personnels']
      );
      return $DATA;
    }
  }
  public function add_service_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['SERVICE_ID']!="" && $data['PERSONNEL_ID']!=""){
      $data = array(
        'SERVICE_ID' => $data['SERVICE_ID'],
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
        'TOTAL_HOUR_SERVICE_P' => $data['TOTAL_HOUR_SERVICE_P'],
        'SERVICE_P_START_DATE' => $data['SERVICE_P_START_DATE'], 
        'SERVICE_P_END_DATE' => $data['SERVICE_P_END_DATE'],
      
      );
     
      $data = $this->db->insert('service_participants', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_service_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['SERVICE_ID']!=""){
      $this->db->where('ID', $data['ID']);
      $this->db->set('SERVICE_ID', $data['SERVICE_ID']);
      $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
      $this->db->set('TOTAL_HOUR_SERVICE_P',  $data['TOTAL_HOUR_SERVICE_P']);
      $this->db->set('SERVICE_P_START_DATE', $data['SERVICE_P_START_DATE']);
      $this->db->set('SERVICE_P_END_DATE', $data['SERVICE_P_END_DATE']);


      $this->db->update('service_participants');
      $st = array('st'=>1);
    }
  
    // echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_service_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ID']!=""){
      $this->db->delete('service_participants', array('ID' => $data['ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
 
  //

  public function select_activities($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('activities');
      $this->db->join('activity_categories', 'activity_categories.ACTIVITY_CATEGORY_ID  = activities.ACTIVITY_CATEGORY_ID');
      $this->db->join('activity_types', 'activity_types.ACTIVITY_TYPE_ID  = activities.ACTIVITY_TYPE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = activities.ACTIVITY_OWNER_ID');
      $this->db->where('activities.ACTIVITY_OWNER_ID', $_SESSION['PERSONNEL_ID']);

      if($data_search != ""){
        $this->db->like('activities.ACTIVITY_NAME', $data_search);
        $this->db->or_like('activities.ACTIVITY_PLACE', $data_search);
        $this->db->or_like('activities.ACTIVITY_DETAIL', $data_search);
        $this->db->or_like('activity_categories.ACTIVITY_CATEGORY_NAME', $data_search);
        $this->db->or_like('activity_types.ACTIVITY_TYPE_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      };
      $activities = $this->db->get();
      $activities = $activities->result_array();
      $activity_categories = $this->select_activity_categories();
      $activity_types = $this->select_activity_types();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'activities'=>$activities,
        'activity_categories' => $activity_categories,
        'activity_types' => $activity_types,
        'personnels' => $personnels['personnels']
  
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA;
      
    }else{
      $this->db->select('*');
      $this->db->from('activities');
      $this->db->join('activity_categories', 'activity_categories.ACTIVITY_CATEGORY_ID  = activities.ACTIVITY_CATEGORY_ID');
      $this->db->join('activity_types', 'activity_types.ACTIVITY_TYPE_ID  = activities.ACTIVITY_TYPE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = activities.ACTIVITY_OWNER_ID');
      if($data_search != ""){
        $this->db->like('activities.ACTIVITY_NAME', $data_search);
        $this->db->or_like('activities.ACTIVITY_PLACE', $data_search);
        $this->db->or_like('activities.ACTIVITY_DETAIL', $data_search);
        $this->db->or_like('activity_categories.ACTIVITY_CATEGORY_NAME', $data_search);
        $this->db->or_like('activity_types.ACTIVITY_TYPE_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      };
      $activities = $this->db->get();
      $activities = $activities->result_array();
      $activity_categories = $this->select_activity_categories();
      $activity_types = $this->select_activity_types();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'activities'=>$activities,
        'activity_categories' => $activity_categories,
        'activity_types' => $activity_types,
        'personnels' => $personnels['personnels']
  
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA;
    }

  }
  public function add_activities($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_TYPE_ID']!="" && $data['ACTIVITY_CATEGORY_ID']!=""){
      $data = array(
        'ACTIVITY_TYPE_ID' => $data['ACTIVITY_TYPE_ID'],
        'ACTIVITY_CATEGORY_ID' => $data['ACTIVITY_CATEGORY_ID'],
        'ACTIVITY_NAME' => $data['ACTIVITY_NAME'],
        'ACTIVITY_DATE' => $data['ACTIVITY_DATE'], 
        'ACTIVITY_PLACE' => $data['ACTIVITY_PLACE'],
        'ACTIVITY_DETAIL' => $data['ACTIVITY_DETAIL'],
        'ACTIVITY_OWNER_ID' => $data['ACTIVITY_OWNER_ID'],
  
      );
     
      $data = $this->db->insert('activities', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_activities($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_ID']!=""){
      $this->db->where('ACTIVITY_ID', $data['ACTIVITY_ID']);
      $this->db->set('ACTIVITY_TYPE_ID', $data['ACTIVITY_TYPE_ID']);
      $this->db->set('ACTIVITY_CATEGORY_ID',  $data['ACTIVITY_CATEGORY_ID']);
      $this->db->set('ACTIVITY_NAME', $data['ACTIVITY_NAME']);
      $this->db->set('ACTIVITY_DATE', $data['ACTIVITY_DATE']);
      $this->db->set('ACTIVITY_PLACE', $data['ACTIVITY_PLACE']);
      $this->db->set('ACTIVITY_DETAIL',  $data['ACTIVITY_DETAIL']);
      $this->db->set('ACTIVITY_OWNER_ID', $data['ACTIVITY_OWNER_ID']);
      $this->db->update('activities');
      $st = array('st'=>1);
    }
  
    //   echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_activities($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_ID']!=""){
      $this->db->delete('activities', array('ACTIVITY_ID' => $data['ACTIVITY_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  public function save_upload_file_activities($data){
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;

    $this->db->where('ACTIVITY_ID', $data['ACTIVITY_ID']);
    $this->db->set('ACTIVITIES_FILE', $data['img_name']);
    $this->db->update('activities');
    // $this->db->insert_batch('personnels', $data['img_name']); 
   
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;
    $this->db->select('*');
    $this->db->from('activities');
    $this->db->where('ACTIVITY_ID', $data['ACTIVITY_ID']);
    $data = $this->db->get();
    $data = $data->row_array();


    // $path_delete= './images/researchs/';
    // if(file_exists($path_delete.$data['FILE_RESEARCHS'])){
    //   unlink($path_delete.$data['FILE_RESEARCHS']);
    // }

    

 

    $data_html = array(
      'st'=>0
    );
    if($data != array()){
  
      $data_html = array(
        'st'=>1
      );
    }
    //  echo "<pre>";
		// print_r($data_html);
		// echo "</pre>";
    // exit;
    return $data_html;
  }

 


  
  //
  
  public function select_activity_participants($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('activity_participants');
      $this->db->join('activities', 'activities.ACTIVITY_ID  = activity_participants.ACTIVITY_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = activity_participants.PERSONNEL_ID');
      $this->db->where('activity_participants.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
      if($data_search != ""){
        $this->db->like('activities.ACTIVITY_NAME', $data_search);
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      };
      $activity_participants = $this->db->get();
      $activity_participants = $activity_participants->result_array();
      $activities = $this->select_activities();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'activity_participants'=>$activity_participants,
        'activities' => $activities['activities'],
        'personnels' => $personnels['personnels']
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA; 
    }else{
      $this->db->select('*');
      $this->db->from('activity_participants');
      $this->db->join('activities', 'activities.ACTIVITY_ID  = activity_participants.ACTIVITY_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = activity_participants.PERSONNEL_ID');
      if($data_search != ""){
        $this->db->like('activities.ACTIVITY_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      };
      $activity_participants = $this->db->get();
      $activity_participants = $activity_participants->result_array();
      $activities = $this->select_activities();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'activity_participants'=>$activity_participants,
        'activities' => $activities['activities'],
        'personnels' => $personnels['personnels']
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA; 


    }

  }
  public function add_activity_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ACTIVITY_ID']!="" && $data['PERSONNEL_ID']!=""){
      $data = array(
        'ACTIVITY_ID' => $data['ACTIVITY_ID'],
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
      
      );
     
      $data = $this->db->insert('activity_participants', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_activity_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ID_ACTIVITY_PARTICIPANTS']!=""){
      $this->db->where('ID_ACTIVITY_PARTICIPANTS', $data['ID_ACTIVITY_PARTICIPANTS']);
      $this->db->set('ACTIVITY_ID', $data['ACTIVITY_ID']);
      $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
      $this->db->update('activity_participants');
      $st = array('st'=>1);
    }
  
    //   echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_activity_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ID_ACTIVITY_PARTICIPANTS']!=""){
      $this->db->delete('activity_participants', array('ID_ACTIVITY_PARTICIPANTS' => $data['ID_ACTIVITY_PARTICIPANTS'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  public function show_activity_participants_pic(){
   
    $id = isset($_GET['img'])?$_GET['img']:"";
    $id_personal = isset($_GET['id_personal'])?$_GET['id_personal']:"";

    // echo '<pre>';
    // print_r($id_personal);
    // echo '</pre>';
    // exit;
    
    $DATA = array();

    if($id != ""){
    $this->db->select('*');
    $this->db->from('activity_participants_pic');
    // $this->db->join('service_participants', 'service_participants.ID = service_participants_pic.SERVICE_ID');
    $this->db->where('ACTIVITY_ID', $_GET['img']);
    $this->db->where('ADD_BY', $id_personal);
   
    $this->db->order_by("activity_participants_pic.ID", "DESC");  

    $activity_participants_pic = $this->db->get();
    $activity_participants_pic = $activity_participants_pic->result_array();
    // $this->db->where('CREATE_BY_SE', $_GET['id_personal']);

    // echo '<pre>';
    // $personnels = $this->select_personnels_all();
  
    // echo '<pre>';
    // print_r($service_participants_pic);
    // echo '</pre>';
    // exit;

    $DATA = array(
      'activity_participants_pic'=>$activity_participants_pic
    
    );

    
  

    }
    return $DATA;
 
  }

  //
  public function select_trainings($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('trainings');
      $this->db->join('personnels','personnels.PERSONNEL_ID = trainings.TRAINING_OWNER');
      $this->db->where('trainings.TRAINING_OWNER', $_SESSION['PERSONNEL_ID']);
      if($data_search != ""){
        $this->db->like('trainings.TRAINING_TITLE', $data_search);
        $this->db->like('trainings.TRAINING_PLACE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      }
      $trainings = $this->db->get();
      $trainings = $trainings->result_array();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'trainings'=>$trainings,
       'personnels' => $personnels['personnels']
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA;
    }else{
      $this->db->select('*');
      $this->db->from('trainings');
      $this->db->join('personnels','personnels.PERSONNEL_ID = trainings.TRAINING_OWNER');
      if($data_search != ""){
        $this->db->like('trainings.TRAINING_TITLE', $data_search);
        $this->db->or_like('trainings.TRAINING_PLACE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      }
      $trainings = $this->db->get();
      $trainings = $trainings->result_array();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'trainings'=>$trainings,
       'personnels' => $personnels['personnels']
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA;
    }
  }
  public function add_trainings($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['TRAINING_TITLE']!="" && $data['TRAINING_PLACE']!=""){
      $data = array(
        'TRAINING_TITLE' => $data['TRAINING_TITLE'],
        'TRAINING_PLACE' => $data['TRAINING_PLACE'],

        'TRAINING_OWNER' => $data['TRAINING_OWNER'],
        'TOTAL_HOUR_TRAINING' => $data['TOTAL_HOUR_TRAINING'],
        'TRAINING_START_DATE' => $data['TRAINING_START_DATE'],
        'TRAINING_END_DATE' => $data['TRAINING_END_DATE'],
      );
     
      $data = $this->db->insert('trainings', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_trainings($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['TRAINING_ID']!=""){
      $this->db->where('TRAINING_ID', $data['TRAINING_ID']);
      $this->db->set('TRAINING_TITLE', $data['TRAINING_TITLE']);
      $this->db->set('TRAINING_PLACE',  $data['TRAINING_PLACE']);
      $this->db->set('TRAINING_OWNER', $data['TRAINING_OWNER']);
 
      $this->db->set('TOTAL_HOUR_TRAINING', $data['TOTAL_HOUR_TRAINING']);
      $this->db->set('TRAINING_START_DATE',  $data['TRAINING_START_DATE']);
      $this->db->set('TRAINING_END_DATE', $data['TRAINING_END_DATE']);

      $this->db->update('trainings');
      $st = array('st'=>1);
    }
  
    // echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_trainings($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['TRAINING_ID']!=""){
      $this->db->delete('trainings', array('TRAINING_ID' => $data['TRAINING_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  public function save_upload_file_trainings($data){
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;

    $this->db->where('TRAINING_ID', $data['TRAINING_ID']);
    $this->db->set('FILE_TAINING', $data['img_name']);
    $this->db->update('trainings');
    // $this->db->insert_batch('personnels', $data['img_name']); 
   
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;
    $this->db->select('*');
    $this->db->from('trainings');
    $this->db->where('TRAINING_ID', $data['TRAINING_ID']);
    $data = $this->db->get();
    $data = $data->row_array();


    // $path_delete= './images/researchs/';
    // if(file_exists($path_delete.$data['FILE_RESEARCHS'])){
    //   unlink($path_delete.$data['FILE_RESEARCHS']);
    // }

    

 

    $data_html = array(
      'st'=>0
    );
    if($data != array()){
  
      $data_html = array(
        'st'=>1
      );
    }
    //  echo "<pre>";
		// print_r($data_html);
		// echo "</pre>";
    // exit;
    return $data_html;
  }

  ///
  public function select_training_participants($data_search = ""){
    if($_SESSION['level'] != "1"){
      $this->db->select('*');
    $this->db->from('training_participants');
    $this->db->join('trainings', 'trainings.TRAINING_ID  = training_participants.TRAINING_ID');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = training_participants.PERSONNEL_ID');
    $this->db->where('training_participants.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    if($data_search != ""){
      $this->db->like('trainings.TRAINING_TITLE', $data_search);
      $this->db->or_like('trainings.TRAINING_BUDGET', $data_search);
      $this->db->or_like('personnels.PERSONNEL_ID', $data_search);
      $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
    }
    $training_participants = $this->db->get();
    $training_participants = $training_participants->result_array();
    $trainings = $this->select_trainings();
    $personnels = $this->select_personnels();

    $DATA = array(
      'training_participants'=>$training_participants,
      'trainings' => $trainings['trainings'],
      'personnels' => $personnels['personnels']
    );
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network
    return $DATA;
    }else{
      $this->db->select('*');
      $this->db->from('training_participants');
      $this->db->join('trainings', 'trainings.TRAINING_ID  = training_participants.TRAINING_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = training_participants.PERSONNEL_ID');
  
      $training_participants = $this->db->get();
      $training_participants = $training_participants->result_array();
      $trainings = $this->select_trainings();
      $personnels = $this->select_personnels();
  
      $DATA = array(
        'training_participants'=>$training_participants,
        'trainings' => $trainings['trainings'],
        'personnels' => $personnels['personnels']
      );
      // echo "<pre>";
      // print_r($departments['departments']);
      // echo "</pre>";
      // exit(); 
      // // หน้า network
      return $DATA;
    }
  }
  public function add_training_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['TRAINING_ID']!="" && $data['PERSONNEL_ID']!=""){
      $data = array(
        'TRAINING_ID' => $data['TRAINING_ID'],
        'TRAINING_BUDGET	' => $data['TRAINING_BUDGET'],
        'TRAINING_RESULT' => $data['TRAINING_RESULT'],
        'TRAINING_EVALUATION_RESULT' => $data['TRAINING_EVALUATION_RESULT'],
        'TRAINING_ASSESSOR_ID' => $data['TRAINING_ASSESSOR_ID'],
        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
      );
     
      $data = $this->db->insert('training_participants', $data);
      $st = array('st'=>1);
    }
  
    return $st;
  }
  public function edit_training_participants($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['ID_TRAINING_PARTICIPANTS']!=""){
      $this->db->where('ID_TRAINING_PARTICIPANTS', $data['ID_TRAINING_PARTICIPANTS']);
      $this->db->set('TRAINING_ID', $data['TRAINING_ID']);
      $this->db->set('TRAINING_BUDGET', $data['TRAINING_BUDGET']);
      $this->db->set('TRAINING_RESULT', $data['TRAINING_RESULT']);
      $this->db->set('TRAINING_EVALUATION_RESULT', $data['TRAINING_EVALUATION_RESULT']);
      $this->db->set('TRAINING_ASSESSOR_ID', $data['TRAINING_ASSESSOR_ID']);
      $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
  

      $this->db->update('training_participants');
      $st = array('st'=>1);
    }
  
    // echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 

    return $st;
  }
  public function delete_training_participants($data){

    
    $st = array('st'=>0);
    if(is_array($data) && $data['ID_TRAINING_PARTICIPANTS']!=""){
      $this->db->delete('training_participants', array('ID_TRAINING_PARTICIPANTS' => $data['ID_TRAINING_PARTICIPANTS'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  
  public function select_training_participants_pic(){
   



    $id = isset($_GET['img'])?$_GET['img']:"";

    $id_personal = isset($_GET['id_personal'])?$_GET['id_personal']:"";
    
    // echo '<pre>';
    // print_r($id_personal);
    // echo '</pre>';
    // exit;
    
    $DATA = array();

    if($id != ""){
      $this->db->select('*');
      $this->db->from('training_participants_pic');
      // $this->db->join('service_participants', 'service_participants.ID = service_participants_pic.SERVICE_ID');
      $this->db->where('TRAINING_ID', $_GET['img']);
      $this->db->where('CREATE_BY_TR', $_GET['id_personal']);


      $this->db->order_by("training_participants_pic.ID", "DESC");  

      $training_participants_pic = $this->db->get();
      $training_participants_pic = $training_participants_pic->result_array();
      // $personnels = $this->select_personnels_all();
    
      // echo '<pre>';
      // print_r($service_participants_pic);
      // echo '</pre>';
      // exit;

      $DATA = array(
        'training_participants_pic'=>$training_participants_pic
      
      );

      
    

    }
    return $DATA;
 
  }





  //
  public function select_counseling_types($data_search = ""){
    $this->db->select('*');
    $this->db->from('counseling_types');
    if($data_search != ""){
      $this->db->like('`counseling_types`.`COUNSELING_NAME`', $data_search);
    };
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;

  }
  public function add_counseling_types($data){
    $st = array('st'=>0);
    if(is_array($data) && $data['COUNSELING_NAME']!=""){
      $data = array('COUNSELING_NAME' => $data['COUNSELING_NAME'],);
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
  //
  public function select_leaves_management_positions(){
    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');

    $this->db->where('personnels.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);




    $query = $this->db->get();
    $query = $query->result_array();
    return $query;

  }
  public function select_leaves($data_search = ""){



      // echo "<pre>";
      // print_r($data_search);
      // echo "</pre>";

    // if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
      $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
      
      $this->db->where('personnels.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);

      
      if($data_search != ""){
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('leave_types.LEAVE_TYPE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      };
      
      $this->db->order_by("LEAVE_ID", "DESC");
      $leaves = $this->db->get();
      $leaves = $leaves->result_array();
      $personnels = $this->select_personnels();
      $leave_types = $this->select_leave_types();




      $this->db->select('*');
      $this->db->from('management_positions');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
      $this->db->join('managements', 'managements.MANAGEMENT_ID = management_positions.MANAGEMENT_ID');
      $this->db->or_where('managements.MANAGEMENT_ID','1');
      $this->db->where('management_positions.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);
      $management_positions_OFFICER = $this->db->get();
      $management_positions_OFFICER = $management_positions_OFFICER->result_array();
     



      
      $this->db->select('*');
      $this->db->from('management_positions');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
      $this->db->join('managements', 'managements.MANAGEMENT_ID = management_positions.MANAGEMENT_ID');
      $this->db->or_where('managements.MANAGEMENT_ID','2');
      $this->db->or_where('managements.MANAGEMENT_ID','3');
      $this->db->or_where('managements.MANAGEMENT_ID','4');
      $this->db->where('management_positions.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);
      $management_positions_SUPERVISOR_ID = $this->db->get();
      $management_positions_SUPERVISOR_ID = $management_positions_SUPERVISOR_ID->result_array();
     

     
      

      // $we = $this->db->select_sum('LAST_LEAVES_NUMBER_USE');
      // $this->db->from('leaves');
      // $this->db->where('leaves.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);

      // $query = $this->db->get(); 
      // $query = $query->result_array();
    
      // echo "<pre>";
      // print_r($management_positions_SUPERVISOR_ID);
      // echo "</pre>";
 
      // exit();

      $DATA = array(
        'leaves'=>$leaves,
        'management_positions_SUPERVISOR_ID'=>$management_positions_SUPERVISOR_ID,
        'management_positions_OFFICER'=>$management_positions_OFFICER,
        'personnels' => $personnels['personnels'],
        'leave_types' => $leave_types
      );
   
    return $DATA;



  

  }
  public function add_leaves($data){




    
  
    $st = array('st'=>0);

    // echo'<pre>';
    // print_r($data);
    // echo'</pre>';
    // exit;
    if(is_array($data) && $data['LEAVE_TYPE_ID'] != ""){
      $data = array(

        'PERSONNEL_ID' => $data['PERSONNEL_ID'],
        'WRITE_DATE' => $data['WRITE_DATE'],
        'LAST_LEAVE_TYPE_ID' => $data['LAST_LEAVE_TYPE_ID'],
        'LAST_LEAVE_TYPE_MAX' => $data['LAST_LEAVE_TYPE_MAX'], 
        'LAST_LEAVE_TOAL' => $data['LAST_LEAVE_TOAL'], 
        'LAST_LEAVE_START_DATE' => $data['LAST_LEAVE_START_DATE'],
        'LAST_LEAVE_END_DATE' => $data['LAST_LEAVE_END_DATE'],
        'LEAVE_TYPE_ID' => $data['LEAVE_TYPE_ID'],
        'LEAVE_TOAL' => $data['LEAVE_TOAL'],
        'LEAVE_START_DATE' => $data['LEAVE_START_DATE'], 
        'LEAVE_END_DATE' => $data['LEAVE_END_DATE'],
        'OFFICER' => $data['OFFICER'], 
        'SUPERVISOR_ID' => $data['SUPERVISOR_ID'],
        'WRITE_PLACE' => $data['WRITE_PLACE'],
        'CONFINED' => $data['CONFINED'],
        'LEAVE_HALF_DATE' => $data['LEAVE_HALF_DATE'],
        'HALF_ONE' => isset($data['HALF_ONE'])?$data['HALF_ONE']:"",


        'SUPERVISOR_STATUS' => '0',
        'MY_CHECK' => $data['myCheck'],
      );

      $data = $this->db->insert('leaves', $data);
      $st = array('st'=>1);

    }





      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->where('leaves.OFFICER',   $_SESSION['PERSONNEL_ID']);
      $this->db->where('leaves.SUPERVISOR_STATUS', '0');

      $leaves_status = $this->db->get();
      $leaves_status = $leaves_status->result_array();
      $leaves_status = count($leaves_status); 
      $_SESSION['OFFICER_STATUS'] = $leaves_status;
      
    return $st;
  }
  public function get_edit_leaves($data){
    
 
   

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;


    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
    $this->db->where('leaves.LEAVE_TYPE_ID', $data['LEAVE_TYPE_ID']);
    $this->db->where('leaves.LEAVE_ID', $data['LEAVE_ID']);
    
    $LEAVE_TYPE_ID = $this->db->get();
    $LEAVE_TYPE_ID = $LEAVE_TYPE_ID->row_array();


 


    
    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LAST_LEAVE_TYPE_ID');
    $this->db->where('leaves.LAST_LEAVE_TYPE_ID', $data['LAST_LEAVE_TYPE_ID']);
    $this->db->where('leaves.LEAVE_ID', $data['LEAVE_ID']);
    
    $LAST_LEAVE_TYPE_ID = $this->db->get();
    $LAST_LEAVE_TYPE_ID = $LAST_LEAVE_TYPE_ID->row_array();

    $LAST_LEAVE_TYPE_ID = isset($LAST_LEAVE_TYPE_ID)?$LAST_LEAVE_TYPE_ID:"";

   


    
    $NUM_LEAVE_TOAL = $this->db->select_sum('LEAVE_TOAL');
    $this->db->from('leaves');
    $this->db->where('leaves.PERSONNEL_ID',$_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.LEAVE_TYPE_ID',$data['LEAVE_TYPE_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS','2');

    $NUM_LEAVE_TOAL = $this->db->get(); 
    $NUM_LEAVE_TOAL = $NUM_LEAVE_TOAL->result_array();


    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL[0])?$NUM_LEAVE_TOAL[0]:"0";

    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL['LEAVE_TOAL'])?$NUM_LEAVE_TOAL['LEAVE_TOAL']:"0";

    // echo '<pre>';
    // print_r($LEAVE_TYPE_ID);
    // echo '</pre>';

    // echo '<pre>';
    // print_r($NUM_LEAVE_TOAL);
    // echo '</pre>';
    // exit;
    $DATA = array(
      'LEAVE_TYPE_ID'=>$LEAVE_TYPE_ID,
      'LAST_LEAVE_TYPE_ID' => $LAST_LEAVE_TYPE_ID,
      'daysDiff' => $data['daysDiff'],
      'NUM_LEAVE_TOAL' => $NUM_LEAVE_TOAL,
      'LEAVE_TOAL' => $data['LEAVE_TOAL'],
      
    );
    // echo '<pre>';
    // print_r($DATA);
    // echo '</pre>';
    // exit;
    return $DATA;
  }
  public function get_edit_leaves_approve($data){
    
 
   

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;


    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
    $this->db->where('leaves.LEAVE_TYPE_ID', $data['LEAVE_TYPE_ID']);
    $this->db->where('leaves.LEAVE_ID', $data['LEAVE_ID']);
    
    $LEAVE_TYPE_ID = $this->db->get();
    $LEAVE_TYPE_ID = $LEAVE_TYPE_ID->row_array();


 


    
    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LAST_LEAVE_TYPE_ID');
    $this->db->where('leaves.LAST_LEAVE_TYPE_ID', $data['LAST_LEAVE_TYPE_ID']);
    $this->db->where('leaves.LEAVE_ID', $data['LEAVE_ID']);
    
    $LAST_LEAVE_TYPE_ID = $this->db->get();
    $LAST_LEAVE_TYPE_ID = $LAST_LEAVE_TYPE_ID->row_array();

    $LAST_LEAVE_TYPE_ID = isset($LAST_LEAVE_TYPE_ID)?$LAST_LEAVE_TYPE_ID:"";

   


    
    $NUM_LEAVE_TOAL = $this->db->select_sum('LEAVE_TOAL');
    $this->db->from('leaves');
    $this->db->where('leaves.PERSONNEL_ID',$_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.LEAVE_TYPE_ID',$data['LEAVE_TYPE_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS','2');

    $NUM_LEAVE_TOAL = $this->db->get(); 
    $NUM_LEAVE_TOAL = $NUM_LEAVE_TOAL->result_array();


    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL[0])?$NUM_LEAVE_TOAL[0]:"0";

    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL['LEAVE_TOAL'])?$NUM_LEAVE_TOAL['LEAVE_TOAL']:"0";

    // echo '<pre>';
    // print_r($LEAVE_TYPE_ID);
    // echo '</pre>';

    // echo '<pre>';
    // print_r($NUM_LEAVE_TOAL);
    // echo '</pre>';
    // exit;
    $DATA = array(
      'LEAVE_TYPE_ID'=>$LEAVE_TYPE_ID,
      'LAST_LEAVE_TYPE_ID' => $LAST_LEAVE_TYPE_ID,
      'daysDiff' => $data['daysDiff'],
      'NUM_LEAVE_TOAL' => $NUM_LEAVE_TOAL,
      
    );
    // echo '<pre>';
    // print_r($DATA);
    // echo '</pre>';
    // exit;
    return $DATA;
  }

  
  public function edit_leaves($data){

      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      // exit(); 
 
      // [PERSONNEL_ID] => 110211
      // [WRITE_DATE] => 2022/07/19
      // [LAST_LEAVE_TYPE_ID] => 5
      // [LAST_LEAVE_TYPE_MAX] => 10
      // [LAST_LEAVE_TOAL] => 2
      // [LAST_LEAVE_START_DATE] => 2022/07/21
      // [LAST_LEAVE_END_DATE] => 2022/07/22
      // [LEAVE_TYPE_ID] => 1
      // [LEAVE_TOAL] => 2
      // [LEAVE_START_DATE] => 2022/07/21
      // [LEAVE_END_DATE] => 2022/07/22
      // [OFFICER] => 110211
      // [SUPERVISOR_ID] => 110213
      // [WRITE_PLACE] => sadasd
      // [CONFINED] => 1
      // [LEAVE_HALF_DATE] => 
      // [HALF_ONE] => 1
      // [myCheck] => true

    $st = array('st'=>0);
 



    $this->db->where('LEAVE_ID', $data['LEAVE_ID']);

    $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
    $this->db->set('WRITE_DATE',  $data['WRITE_DATE']);
    $this->db->set('LAST_LEAVE_TYPE_ID', $data['LAST_LEAVE_TYPE_ID']);
    $this->db->set('LAST_LEAVE_START_DATE', $data['LAST_LEAVE_START_DATE']);
    $this->db->set('LAST_LEAVE_END_DATE', $data['LAST_LEAVE_END_DATE']);

      
    $this->db->set('LEAVE_TYPE_ID',  $data['LEAVE_TYPE_ID']);
    $this->db->set('LEAVE_TOAL',  $data['LEAVE_TOAL']);
    $this->db->set('LEAVE_START_DATE', $data['edit_LEAVE_START_DATE']);
    $this->db->set('LEAVE_END_DATE', $data['edit_LEAVE_END_DATE']);

    
    $this->db->set('OFFICER',  $data['OFFICER']);
    $this->db->set('SUPERVISOR_ID',  $data['SUPERVISOR_ID']);
    $this->db->set('WRITE_PLACE', $data['WRITE_PLACE']);

    $this->db->set('CONFINED',  $data['CONFINED']);
    $this->db->set('MY_CHECK',  $data['myCheck_edit']);
    $this->db->set('LEAVE_HALF_DATE', $data['edit_LEAVE_HALF_DATE']);
    $this->db->set('HALF_ONE', $data['HALF_ONE']);
    

    $this->db->update('leaves');
    $st = array('st'=>1);
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
 

    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->where('leaves.OFFICER',   $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS', '0');

    $leaves_status = $this->db->get();
    $leaves_status = $leaves_status->result_array();
    $leaves_status = count($leaves_status); 
    $_SESSION['OFFICER_STATUS'] = $leaves_status;

    return $st;
  }
  public function delete_leaves($data){
    $st = array('st'=>0);
  


    if(is_array($data) && $data['LEAVE_ID']!=""){
      $this->db->delete('leaves', array('LEAVE_ID' => $data['LEAVE_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }

  //
 
  public function check_login($data){


      $this->db->select('*');
      $this->db->from('personnels');
      $this->db->where('PERSONNEL_USERNAME', $data['ADMIN_USER']);
      $this->db->where('PERSONNEL_PASSWORD', $data['ADMIN_PASS']);


      $check_login = $this->db->get();
      $check_login = $check_login->row_array();

      // echo "<pre>";
      // print_r($check_login);
      // echo "</pre>";
  

      
      $level = isset($check_login['level'])?$check_login['level']:"";
      $ADMIN_USER_check = isset($check_login['PERSONNEL_USERNAME'])?$check_login['PERSONNEL_USERNAME']:"";
      $ADMIN_PASS_check = isset($check_login['PERSONNEL_PASSWORD'])?$check_login['PERSONNEL_PASSWORD']:"";
     
      $PERSONNEL_ID = isset($check_login['PERSONNEL_ID'])?$check_login['PERSONNEL_ID']:"";
      $PERSONNEL_NAME = isset($check_login['PERSONNEL_NAME'])?$check_login['PERSONNEL_NAME']:"";
      $PERSONNEL_SURNAME = isset($check_login['PERSONNEL_SURNAME'])?$check_login['PERSONNEL_SURNAME']:"";
      $PIC = isset($check_login['PIC'])?$check_login['PIC']:"";
      $PERSONNEL_NAME_EN = isset($check_login['PERSONNEL_NAME_EN'])?$check_login['PERSONNEL_NAME_EN']:"";
      $PERSONNEL_SURNAME_EN = isset($check_login['PERSONNEL_SURNAME_EN'])?$check_login['PERSONNEL_SURNAME_EN']:"";
      $PERSONNEL_EMAIL = isset($check_login['PERSONNEL_EMAIL'])?$check_login['PERSONNEL_EMAIL']:"";
      $PERSONNEL_MOBILE = isset($check_login['PERSONNEL_MOBILE'])?$check_login['PERSONNEL_MOBILE']:"";
      $PERSONNEL_PHONE_EXTENSION = isset($check_login['PERSONNEL_PHONE_EXTENSION'])?$check_login['PERSONNEL_PHONE_EXTENSION']:"";
      $PERSONNEL_PHONE = isset($check_login['PERSONNEL_PHONE'])?$check_login['PERSONNEL_PHONE']:"";
      $PERSONNEL_SEX = isset($check_login['PERSONNEL_SEX'])?$check_login['PERSONNEL_SEX']:"";
      $PERSONNEL_TYPE_DETAIL = isset($check_login['PERSONNEL_TYPE_DETAIL'])?$check_login['PERSONNEL_TYPE_DETAIL']:"";
      $PERSONNEL_CATEGORY_DETAIL = isset($check_login['PERSONNEL_CATEGORY_DETAIL'])?$check_login['PERSONNEL_CATEGORY_DETAIL']:"";
      $DEPARTMENT_ID = isset($check_login['DEPARTMENT_ID'])?$check_login['DEPARTMENT_ID']:"";


      // echo "<pre>";
      // print_r($check_login['level']);
      // echo "</pre>";
      // exit();


      $_SESSION['ADMIN_USER_check'] = $ADMIN_USER_check;
      $_SESSION['ADMIN_PASS_check'] = $ADMIN_PASS_check;
      $_SESSION['level'] = $level;
      $_SESSION['PIC'] = $PIC;
      $_SESSION['PERSONNEL_ID'] = $PERSONNEL_ID;
      $_SESSION['PERSONNEL_NAME'] = $PERSONNEL_NAME;
      $_SESSION['PERSONNEL_SURNAME'] = $PERSONNEL_SURNAME;
      $_SESSION['PERSONNEL_NAME_EN'] = $PERSONNEL_NAME_EN;
      $_SESSION['PERSONNEL_SURNAME_EN'] = $PERSONNEL_SURNAME_EN;

      $_SESSION['PERSONNEL_EMAIL'] = $PERSONNEL_EMAIL;
      $_SESSION['PERSONNEL_MOBILE'] = $PERSONNEL_MOBILE;
      $_SESSION['PERSONNEL_PHONE_EXTENSION'] = $PERSONNEL_PHONE_EXTENSION;
      $_SESSION['PERSONNEL_PHONE'] = $PERSONNEL_PHONE;
      $_SESSION['PERSONNEL_SEX'] = $PERSONNEL_SEX;
      $_SESSION['PERSONNEL_TYPE_DETAIL'] = $PERSONNEL_TYPE_DETAIL;
      $_SESSION['PERSONNEL_CATEGORY_DETAIL'] = $PERSONNEL_CATEGORY_DETAIL;
      $_SESSION['DEPARTMENT_ID'] = $DEPARTMENT_ID;

    // echo "<pre>";
    // print_r($level);
    // echo "</pre>";
    // exit(); 
      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->where('leaves.OFFICER',   $_SESSION['PERSONNEL_ID']);
      $this->db->where('leaves.SUPERVISOR_STATUS', '0');

      $leaves_status = $this->db->get();
      $leaves_status = $leaves_status->result_array();
      $leaves_status = count($leaves_status); 
      $_SESSION['OFFICER_STATUS'] = $leaves_status;
      


      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->where('leaves.SUPERVISOR_ID',   $_SESSION['PERSONNEL_ID']);
      $this->db->where('leaves.SUPERVISOR_STATUS', '1');


      $leaves_SUPERVISOR_ID = $this->db->get();
      $leaves_SUPERVISOR_ID = $leaves_SUPERVISOR_ID->result_array();
      $leaves_SUPERVISOR_ID = count($leaves_SUPERVISOR_ID);
      $_SESSION['SUPERVISOR_ID'] = $leaves_SUPERVISOR_ID;





    
      $this->db->select('*');
      $this->db->from('management_positions');
      $this->db->where('management_positions.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
      $this->db->where('management_positions.MANAGEMENT_ID', '1');

      $check_OFFICER = $this->db->get();
      $check_OFFICER = $check_OFFICER->result_array();
      $_SESSION['check_OFFICER'] = $check_OFFICER;

      

      $this->db->select('*');
      $this->db->from('management_positions');
      $this->db->where('management_positions.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
      // $this->db->where('management_positions.MANAGEMENT_ID', '2');

      // $this->db->where_in('management_positions.MANAGEMENT_ID', '4');
    
      
      $check_SUPERVISOR_ID = $this->db->get();
      $check_SUPERVISOR_ID = $check_SUPERVISOR_ID->result_array();  
      $_SESSION['check_SUPERVISOR_ID'] = $check_SUPERVISOR_ID;

      
      // echo "<pre>";
      // print_r($_SESSION['OFFICER_STATUS']);
      // echo "</pre>";
      // echo "<pre>";
      // print_r($_SESSION['PERSONNEL_ID']);
      // echo "</pre>";
      // echo "<pre>";
      // print_r($check_OFFICER);
      // echo "</pre>";
      // echo "<pre>";
      // print_r($check_SUPERVISOR_ID);
      // echo "</pre>";
      // exit();

      $st = array(
        'st'=>0,
        'msg'=>'ไม่มี user ในระบบ หรือ กรอกรหัสผ่านผิด กรุณาตรวจสอบ'
      ); 

      if($ADMIN_USER_check != "" && $ADMIN_PASS_check != ""){
        $st = array(
          'st'=>1,
          'msg'=>'login สำเร็จ'
        );
      }
    return $st;
  }
  public function select_login(){
    $this->db->select('*');
    $this->db->from('admin_login');
    $this->db->join('personnels','personnels.PERSONNEL_ID = admin_login.PERSONNEL_ID');
    $admin_login = $this->db->get();
    $admin_login = $admin_login->result_array();
    $personnels = $this->select_personnels();
    $DATA = array(
      'admin_login'=>$admin_login,
      'personnels' => $personnels['personnels']
    );
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network
    return $DATA;
  }
  //
  public function select_profile($data_search = ""){
    $this->db->from('personnels');
    $this->db->join('personnel_categories', 'personnel_categories.PERSONNEL_CATEGORY_ID = personnels.PERSONNEL_CATEGORY_ID');
    $this->db->join('personnel_statuses', 'personnel_statuses.PERSONNEL_STATUS_ID  = personnels.PERSONNEL_STATUS_ID');
    $this->db->join('personnel_types', 'personnel_types.PERSONNEL_TYPE_ID  = personnels.PERSONNEL_TYPE_ID');
    $this->db->join('departments', 'departments.DEPARTMENT_ID  = personnels.DEPARTMENT_ID');

    $this->db->where('personnels.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);


    $personnels = $this->db->get();
    $personnels = $personnels->row_array();
    $personnel_categories = $this->select_personnel_categories();
    $personnel_statuses = $this->select_personnel_statuses();
    $personnel_types = $this->select_personnel_types();
    $departments = $this->select_departments();


    $this->db->from('researchs');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = researchs.RESEARCHER_ID');
    $this->db->where('researchs.RESEARCHER_ID',   $_SESSION['PERSONNEL_ID']);
    $researchs = $this->db->get();
    $researchs = $researchs->row_array();


    $this->db->from('researchs');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = researchs.RESEARCHER_ID');
    $this->db->where('researchs.RESEARCHER_ID',   $_SESSION['PERSONNEL_ID']);
    $researchs_status = $this->db->get();
    $researchs_status = $researchs_status->result_array();
    $researchs_status = count($researchs_status); 




    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->where('leaves.PERSONNEL_ID',   $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS', '2');
    $leaves_status = $this->db->get();
    $leaves_status = $leaves_status->result_array();
    $leaves_status = count($leaves_status); 

    
    $this->db->from('individual_counseling_services');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = individual_counseling_services.ADVISOR_ID');
    $this->db->where('individual_counseling_services.ADVISOR_ID',   $_SESSION['PERSONNEL_ID']);
    $individual_counseling_services_status = $this->db->get();
    $individual_counseling_services_status = $individual_counseling_services_status->result_array();
    $individual_counseling_services_status = count($individual_counseling_services_status); 

    

       
    $this->db->from('leaves');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
    $this->db->where('leaves.PERSONNEL_ID',   $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS', '2');
    $leaves_name = $this->db->get();
    $leaves_name = $leaves_name->row_array();


    
    
    // echo '<pre>';
    // print_r($leaves_name);
    // echo '</pre>';
    // exit;
    
    $DATA = array(
      'personnels'=>$personnels,
      'personnel_categories' => $personnel_categories,
      'personnel_statuses' => $personnel_statuses,
      'personnel_types' => $personnel_types,
      'departments' => $departments['departments'],
      'researchs' => $researchs,
      'leaves_status' => $leaves_status,
      'researchs_status' => $researchs_status,
      'individual_counseling_services_status' => $individual_counseling_services_status,
      'leaves_name' => $leaves_name,
      
      
    );


    
    // echo '<pre>';
    // print_r($DATA);
    // echo '</pre>';
    // exit;
    return $DATA;



  }
  public function edit_profile($data){
    
    $st = array('st'=>0 ,'ms'=>'มีบางอย่งผิดพลาด');
  
    //  echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

    $this->db->select('PERSONNEL_ID,PERSONNEL_USERNAME');
    $this->db->from('personnels');
    $this->db->where('PERSONNEL_USERNAME', $data['PERSONNEL_USERNAME']);
    $this->db->where_not_in('PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    $personnels_check = $this->db->get();
    $personnels_check = $personnels_check->row_array();

    //  echo "<pre>";
		// print_r($personnels_check);
		// echo "</pre>";
		// exit();
    $PERSONNEL_USERNAME_check = isset($personnels_check['PERSONNEL_USERNAME'])?$personnels_check['PERSONNEL_USERNAME']:"";
    $st = array('st'=>0 ,'ms'=>'มีบางอย่งผิดพลาด');
  
    if($PERSONNEL_USERNAME_check == $data['PERSONNEL_USERNAME']){
      $st = array('st'=>0,'ms'=>$PERSONNEL_USERNAME_check.' ซ้ำ','name'=>'PERSONNEL_USERNAME');
    }

    $st = array('st'=>0);
    if(is_array($data) && $data['PERSONNEL_NAME']!=""){
      $this->db->where('PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
      $this->db->set('PERSONNEL_NAME', $data['PERSONNEL_NAME']);
      $this->db->set('PERSONNEL_SURNAME',  $data['PERSONNEL_SURNAME']);
      $this->db->set('PERSONNEL_NAME_EN', $data['PERSONNEL_NAME_EN']);
      $this->db->set('PERSONNEL_SURNAME_EN', $data['PERSONNEL_SURNAME_EN']);
      $this->db->set('PERSONNEL_EMAIL', $data['PERSONNEL_EMAIL']);
      $this->db->set('PERSONNEL_MOBILE',  $data['PERSONNEL_MOBILE']);
      $this->db->set('PERSONNEL_PHONE', $data['PERSONNEL_PHONE']);
      $this->db->set('PERSONNEL_PHONE_EXTENSION', $data['PERSONNEL_PHONE_EXTENSION']);
      $this->db->set('PERSONNEL_SEX', $data['PERSONNEL_SEX']);
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
  
  ///
 
  
  public function save_upload($data){
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;

    $this->db->insert_batch('service_participants_pic', $data['img_name']); 

    $this->db->select('*');
    $this->db->from('service_participants_pic');
    $this->db->where('SERVICE_ID', $data['SERVICE_ID']);

    $data = $this->db->get();
    $data = $data->result_array();
    $output = "";
    $data_html = array(
      'html'=>$output,
      'st'=>0
    );
    if($data != array()){
      foreach ($data as $key => $value) {
        $output .= '
          <div class="col-md-3">
            <img src="'.base_url().'images/upload/'.$value["PIC_GARRY"].'" class="img-reponsive img-thumbnail box-img-upload"/>
          </div>
        ';
      }
      $data_html = array(
        'html'=>$output,
        'st'=>1
      );
    }
    
    return $data_html;
  }
  public function save_upload_profile($data){

    
    // echo "<pre>";
		// print_r($data['PIC']);
		// echo "</pre>";
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;

    $this->db->where('PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    $this->db->set('PIC', $data['img_name']);
    $this->db->update('personnels');
    // $this->db->insert_batch('personnels', $data['img_name']); 

    $this->db->select('*');
    $this->db->from('personnels');
    $this->db->where('PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    $data = $this->db->get();
    $data = $data->row_array();

    $path_delete= './images/profile/';
    if(file_exists($path_delete.$_SESSION['PIC'])){
      unlink($path_delete.$_SESSION['PIC']);
    }
    
    $_SESSION['PIC'] = isset($data['PIC'])?$data['PIC']:"";
 

    $data_html = array(
      'st'=>0
    );
    if($data != array()){
  
      $data_html = array(
        'st'=>1
      );
    }
    //  echo "<pre>";
		// print_r($data_html);
		// echo "</pre>";
    // exit;
    return $data_html;
  }
  public function Mget_img_SERVICE($data){
    $this->db->select('*');
    $this->db->from('service_participants_pic');
    $this->db->where('SERVICE_ID', $data['SERVICE_ID']);

    $data = $this->db->get();
    $data = $data->result_array();
    $output = "";
    $data_html = array(
      'html'=>$output,
      'st'=>0
    );
    
    if($data != array()){
      foreach ($data as $key => $value) {
        $output .= '
          <div class="col-md-3">
            <img src="'.base_url().'images/upload/'.$value["PIC_GARRY"].'" class="img-reponsive img-thumbnail box-img-upload"/>
          </div>
        ';
      }
      $data_html = array(
        'html'=>$output,
        'st'=>1
      );
    }
    // echo  '<pre>';
    // print_r($data_html);
    // echo  '</pre>';
    // exit;
    return  $data_html;
    
  }
  public function fetch_data($query){
    $this->db->select("*");
    $this->db->from("admin_login");
    if($query != '')
    {
      $this->db->like('ADMIN_USER ', $query);
      $this->db->or_like('ADMIN_PASS', $query);
      $this->db->or_like('PERSONNEL_ID', $query);
      $this->db->or_like('level', $query);
   
    }
    $this->db->order_by('ADMIN_ID ', 'DESC');
    return $this->db->get();
  }
 
  public function select_researchs($data_search = ""){
    $level = isset($_SESSION['level'])?$_SESSION['level']:"";
    if($level != "1" &&  $level != ""){
      $this->db->select('*');
      $this->db->from('researchs');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID  = researchs.RESEARCHER_ID');
      $this->db->where('researchs.RESEARCHER_ID', $_SESSION['PERSONNEL_ID']);
     
      if($data_search != ""){
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('researchs.RESEARCH_TITLE_TH', $data_search);
        $this->db->or_like('researchs.RESEARCH_ABSTRACT_TH', $data_search);
        $this->db->or_like('researchs.RESEARCH_TITLE_EN', $data_search);
        $this->db->or_like('researchs.RESEARCH_ABSTRACT_EN', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      };
      $researchs = $this->db->get();
      $researchs = $researchs->result_array();
      $personnels = $this->select_personnels();
  
    
      $DATA = array(
        'researchs'=>$researchs,
        'personnels' => $personnels['personnels']
      );

    }else{
      $this->db->select('*');
      $this->db->from('researchs');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID  = researchs.RESEARCHER_ID');

      if($data_search != ""){
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('researchs.RESEARCH_TITLE_TH', $data_search);
        $this->db->or_like('researchs.RESEARCH_ABSTRACT_TH', $data_search);
        $this->db->or_like('researchs.RESEARCH_TITLE_EN', $data_search);
        $this->db->or_like('researchs.RESEARCH_ABSTRACT_EN', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      };
      $researchs = $this->db->get();
      $researchs = $researchs->result_array();
      $personnels = $this->select_personnels();
    
    
      $DATA = array(
        'researchs'=>$researchs,
    
        'personnels' => $personnels['personnels']
      );
    // echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['level']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['ADMIN_ID']);
    // echo "</pre>";
    // exit();
   

    }
    // echo '<pre>';
    // print_r($researchs);
    // echo '</pre>';
    // exit;
    return $DATA;
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network

  }


  public function add_researchs($data){
    $st = array('st'=>0);

    if(is_array($data) && $data['RESEARCHER_ID']!="" && $data['RESEARCHER_ID']!=""){
      $data = array(
        'RESEARCH_TITLE_TH' => $data['RESEARCH_TITLE_TH'],
        'RESEARCH_TITLE_EN' => $data['RESEARCH_TITLE_EN'],
         
        'RESEARCH_ABSTRACT_TH' => $data['RESEARCH_ABSTRACT_TH'],
        'RESEARCH_ABSTRACT_EN' => $data['RESEARCH_ABSTRACT_EN'], 
        'RESEARCH_TYPE' => $data['RESEARCH_TYPE'],
        'RESEARCH_BUDGETT' => $data['RESEARCH_BUDGETT'], 
        'RESEARCH_START_DATE' => $data['RESEARCH_START_DATE'],
        'RESEARCH_END_DATE' => $data['RESEARCH_END_DATE'], 
        'RESEARCHER_ID' => $data['RESEARCHER_ID'],
        'RESEARCHER_TYPE' => $data['RESEARCHER_TYPE'],
    
      );
     
      
          // echo "<pre>";
          // print_r($data);
          // echo "</pre>";
          // echo "<pre>";
          // print_r($data['RESEARCHER_ID']);
          // echo "</pre>";
          // exit();
        
      $data = $this->db->insert('researchs', $data);
      $st = array('st'=>1);

          // echo "<pre>";
          // print_r($st);
          // echo "</pre>";
          // exit();
    }
  
    return $st;
  }
  public function save_upload_file_researchs($data){
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;

    $this->db->where('RESEARCH_ID', $data['RESEARCH_ID']);
    $this->db->set('FILE_RESEARCHS', $data['img_name']);
    $this->db->update('researchs');
    // $this->db->insert_batch('personnels', $data['img_name']); 
   
    // echo "<pre>";
		// print_r($data['img_name']);
		// echo "</pre>";
    // exit;
    $this->db->select('*');
    $this->db->from('researchs');
    $this->db->where('RESEARCH_ID', $data['RESEARCH_ID']);
    $data = $this->db->get();
    $data = $data->row_array();


    // $path_delete = './images/researchs/';
    // unlink($path_delete.$data['FILE_RESEARCHS']);
  

    

 

    $data_html = array(
      'st'=>0
    );
    if($data != array()){
  
      $data_html = array(
        'st'=>1
      );
    }
    //  echo "<pre>";
		// print_r($data_html);
		// echo "</pre>";
    // exit;
    return $data_html;
  }
  public function edit_researchs($data){
    $st = array('st'=>0);
    $this->db->where('RESEARCH_ID', $data['RESEARCH_ID']);
    $this->db->set('RESEARCH_TITLE_TH', $data['RESEARCH_TITLE_TH']);
    $this->db->set('RESEARCH_TITLE_EN',  $data['RESEARCH_TITLE_EN']);
    $this->db->set('RESEARCH_ABSTRACT_TH', $data['RESEARCH_ABSTRACT_TH']);
    $this->db->set('RESEARCH_ABSTRACT_EN', $data['RESEARCH_ABSTRACT_EN']);
    $this->db->set('RESEARCH_BUDGETT', $data['RESEARCH_BUDGETT']);
    $this->db->set('RESEARCH_START_DATE',  $data['RESEARCH_START_DATE']);
    $this->db->set('RESEARCH_END_DATE', $data['RESEARCH_END_DATE']);
    $this->db->set('RESEARCHER_TYPE', $data['RESEARCHER_TYPE']);
    $this->db->set('RESEARCHER_ID', $data['RESEARCHER_ID']);
    $this->db->set('RESEARCH_TYPE', $data['RESEARCH_TYPE']);


    $this->db->update('researchs');
    $st = array('st'=>1);
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
 


    return $st;
  }
  public function delete_researchs($data){
    $st = array('st'=>0);
  


    if(is_array($data) && $data['RESEARCH_ID']!=""){
      $this->db->delete('researchs', array('RESEARCH_ID' => $data['RESEARCH_ID'])); 
      $st = array('st'=>1);
    }
    return $st;
  }
  

  public function getleaves($data = ""){
    // echo'<pre>';
    // print_r($data);
    // echo'</pre>';
    // exit;



    




   
    $leave_types = 
    $this->db->select('*');
    $this->db->from('leave_types');
    $this->db->where('leave_types.LEAVE_TYPE_ID', $data["LEAVE_TYPE_ID"]);
    $leave_types = $this->db->get();
    $leave_types = $leave_types->row_array();

    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
    $this->db->where('leaves.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.LEAVE_TYPE_ID', $data["LEAVE_TYPE_ID"]);

 
    $this->db->order_by("LEAVE_ID", "DESC");
    $leaves = $this->db->get();
    $leaves = $leaves->row_array();
   




 
    $NUM_LEAVE_TOAL = $this->db->select_sum('LEAVE_TOAL');
    $this->db->from('leaves');
    $this->db->where('leaves.PERSONNEL_ID',$_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.LEAVE_TYPE_ID',$data['LEAVE_TYPE_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS','2');

    $NUM_LEAVE_TOAL = $this->db->get(); 
    $NUM_LEAVE_TOAL = $NUM_LEAVE_TOAL->result_array();


    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL[0])?$NUM_LEAVE_TOAL[0]:"0";

    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL['LEAVE_TOAL'])?$NUM_LEAVE_TOAL['LEAVE_TOAL']:"0";

    
    // echo "<pre>";
    // print_r($leave_types);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($leaves);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($NUM_LEAVE_TOAL);
    // echo "</pre>";
    // exit;






 
 
    $DATA = array(
      'leaves'=>$leaves,
      'leave_types' => $leave_types,
      'NUM_LEAVE_TOAL' => $NUM_LEAVE_TOAL
    );
 
    // echo'<pre>';
    // print_r($DATA);
    // echo'</pre>';
    // exit;
   
    return $DATA ;
  

  }
  public function edit_leave_type_id($data = ""){
    // echo'<pre>';
    // print_r($data);
    // echo'</pre>';
    // exit;



    




   
    $leave_types = 
    $this->db->select('*');
    $this->db->from('leave_types');
    $this->db->where('leave_types.LEAVE_TYPE_ID', $data["LEAVE_TYPE_ID"]);
    $leave_types = $this->db->get();
    $leave_types = $leave_types->row_array();

    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
    $this->db->where('leaves.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.LEAVE_TYPE_ID', $data["LEAVE_TYPE_ID"]);

 
    $this->db->order_by("LEAVE_ID", "DESC");
    $leaves = $this->db->get();
    $leaves = $leaves->row_array();
   




 
    $NUM_LEAVE_TOAL = $this->db->select_sum('LEAVE_TOAL');
    $this->db->from('leaves');
    $this->db->where('leaves.PERSONNEL_ID',$_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.LEAVE_TYPE_ID',$data['LEAVE_TYPE_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS','2');

    $NUM_LEAVE_TOAL = $this->db->get(); 
    $NUM_LEAVE_TOAL = $NUM_LEAVE_TOAL->result_array();


    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL[0])?$NUM_LEAVE_TOAL[0]:"0";

    $NUM_LEAVE_TOAL = isset($NUM_LEAVE_TOAL['LEAVE_TOAL'])?$NUM_LEAVE_TOAL['LEAVE_TOAL']:"0";

    
    // echo "<pre>";
    // print_r($leave_types);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($leaves);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($NUM_LEAVE_TOAL);
    // echo "</pre>";
    // exit;






 
 
    $DATA = array(
      'leaves'=>$leaves,
      'leave_types' => $leave_types,
      'NUM_LEAVE_TOAL' => $NUM_LEAVE_TOAL
    );
 
    // echo'<pre>';
    // print_r($DATA);
    // echo'</pre>';
    // exit;
   
    return $DATA ;
  

  }
  public function get_last_leave_type_name($data){
   

   

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
  


    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
    $this->db->where('leaves.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);

    $this->db->where('leaves.PERSONNEL_ID', $_SESSION['PERSONNEL_ID']);
    
    $this->db->where('leaves.SUPERVISOR_STATUS', '2');
 
    $this->db->order_by("LEAVE_ID", "DESC");
    $leaves = $this->db->get();
    $leaves = $leaves->row_array();
   










 

    $DATA = array(
      'leaves'=>$leaves
    );
    //  echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // exit;

    return $DATA ;
  

  }
  public function get_mangement_positions_onchange($data = ""){

    $departments = 
    $this->db->select('*');
    $this->db->from('departments');
    $this->db->where('departments.DEPARTMENT_ID', $data["DEPARTMENT_ID"]);
    $departments = $this->db->get();
    $departments = $departments->row_array();
    $DATA = array(
     
      'departments' => $departments
    );

    return $DATA ;
  

  }
  public function select_leaves_approve($data_search = ""){

    
    // if($_SESSION['level'] != "1"){
      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
      $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');

      $this->db->where('leaves.OFFICER', $_SESSION['PERSONNEL_ID']);
    
      if($data_search != ""){
        $this->db->like('personnels.PERSONNEL_ID', $data_search);
        $this->db->or_like('leave_types.LEAVE_TYPE', $data_search);
        $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
        $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
      };
      
      $this->db->order_by("LEAVE_ID", "DESC");
      $leaves = $this->db->get();
      $leaves = $leaves->result_array();
      $personnels = $this->select_personnels();
      $leave_types = $this->select_leave_types();


  
      $this->db->select('*');
      $this->db->from('management_positions');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
      $this->db->join('managements', 'managements.MANAGEMENT_ID = management_positions.MANAGEMENT_ID');
      $this->db->or_where('managements.MANAGEMENT_ID','1');
      $this->db->where('management_positions.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);
      $management_positions_OFFICER = $this->db->get();
      $management_positions_OFFICER = $management_positions_OFFICER->result_array();
     



      
      $this->db->select('*');
      $this->db->from('management_positions');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
      $this->db->join('managements', 'managements.MANAGEMENT_ID = management_positions.MANAGEMENT_ID');
      $this->db->or_where('managements.MANAGEMENT_ID','2');
      $this->db->or_where('managements.MANAGEMENT_ID','3');
      $this->db->or_where('managements.MANAGEMENT_ID','4');
      $this->db->where('management_positions.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);
      $management_positions_SUPERVISOR_ID = $this->db->get();
      $management_positions_SUPERVISOR_ID = $management_positions_SUPERVISOR_ID->result_array();
      

      // echo "<pre>";
      // print_r($leaves);
      // echo "</pre>";
 
      // echo "<pre>";
      // print_r($_SESSION['PERSONNEL_ID']);
      // echo "</pre>";
      // exit();

      $DATA = array(
        'leaves'=>$leaves,
        'personnels' => $personnels['personnels'],
        'leave_types' => $leave_types,
        'management_positions_OFFICER' => $management_positions_OFFICER,
        'management_positions_SUPERVISOR_ID' => $management_positions_SUPERVISOR_ID
      );
    

    return $DATA;
  }
  public function get_leaves_approve($data){
      // echo'<pre>';
      // print_r($data);
      // echo'</pre>';
      // exit;
      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
      $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');
      $this->db->where('leaves.OFFICER', $_SESSION['PERSONNEL_ID']);
      $this->db->where('leaves.LEAVE_ID', $data['LEAVE_ID']);
      $leaves_LEAVE_TYPE_ID = $this->db->get();
      $leaves_LEAVE_TYPE_ID = $leaves_LEAVE_TYPE_ID->row_array();

      // echo'<pre>';
      // print_r($leaves_LEAVE_TYPE_ID);
      // echo'</pre>';
      // exit;

      $this->db->select('*');
      $this->db->from('leaves');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
      $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LAST_LEAVE_TYPE_ID');
      $this->db->where('leaves.OFFICER', $_SESSION['PERSONNEL_ID']);
      $this->db->where('leaves.LEAVE_ID', $data['LEAVE_ID']);
      $leaves_LAST_LEAVE_TYPE_ID = $this->db->get();
      $leaves_LAST_LEAVE_TYPE_ID = $leaves_LAST_LEAVE_TYPE_ID->row_array();

      $DATA = array(
        'leaves_LEAVE_TYPE_ID'=>$leaves_LEAVE_TYPE_ID,
        'leaves_LAST_LEAVE_TYPE_ID' => $leaves_LAST_LEAVE_TYPE_ID
      );
      // echo'<pre>';
      // print_r($DATA);
      // echo'</pre>';
      // exit;
    return $DATA;
  }

  public function update_leaves_approve($data){


    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // exit();


    $st = array('st'=>0);
    $this->db->where('LEAVE_ID', $data['LEAVE_ID']);
  
    $this->db->set('SUPERVISOR_STATUS',  $data['SUPERVISOR_STATUS']);
    $this->db->set('SUPERVISOR_OPINION',  $data['SUPERVISOR_OPINION']);
 

    $this->db->update('leaves');
    $st = array('st'=>1);



    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->where('leaves.SUPERVISOR_ID',   $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS', '1');


    $leaves_SUPERVISOR_ID = $this->db->get();
    $leaves_SUPERVISOR_ID = $leaves_SUPERVISOR_ID->result_array();
    $leaves_SUPERVISOR_ID = count($leaves_SUPERVISOR_ID);
    $_SESSION['SUPERVISOR_ID'] = $leaves_SUPERVISOR_ID;
    
 
      



 
    // echo "<pre>";
    // print_r($check_login['level']);
    // echo "</pre>";
    // exit();


		// echo "</pre>";
		// exit(); 
 


    return $st;
  }

  

  public function add_edit_leaves_approve($data){

      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      // exit(); 

      // [PERSONNEL_ID] => 110211
      // [WRITE_DATE] => 2022/07/19
      // [LAST_LEAVE_TYPE_ID] => 5
      // [LAST_LEAVE_TYPE_MAX] => 10
      // [LAST_LEAVE_TOAL] => 2
      // [LAST_LEAVE_START_DATE] => 2022/07/21
      // [LAST_LEAVE_END_DATE] => 2022/07/22
      // [LEAVE_TYPE_ID] => 1
      // [LEAVE_TOAL] => 2
      // [LEAVE_START_DATE] => 2022/07/21
      // [LEAVE_END_DATE] => 2022/07/22
      // [OFFICER] => 110211
      // [SUPERVISOR_ID] => 110213
      // [WRITE_PLACE] => sadasd
      // [CONFINED] => 1
      // [LEAVE_HALF_DATE] => 
      // [HALF_ONE] => 1
      // [myCheck] => true

    $st = array('st'=>0);




    $this->db->where('LEAVE_ID', $data['LEAVE_ID']);

    $this->db->set('PERSONNEL_ID', $data['PERSONNEL_ID']);
    $this->db->set('WRITE_DATE',  $data['WRITE_DATE']);
    $this->db->set('LAST_LEAVE_TYPE_ID', $data['LAST_LEAVE_TYPE_ID']);
    $this->db->set('LAST_LEAVE_START_DATE', $data['LAST_LEAVE_START_DATE']);
    $this->db->set('LAST_LEAVE_END_DATE', $data['LAST_LEAVE_END_DATE']);

      
    $this->db->set('LEAVE_TYPE_ID',  $data['LEAVE_TYPE_ID']);
    $this->db->set('LEAVE_TOAL',  $data['LEAVE_TOAL']);
    $this->db->set('LEAVE_START_DATE', $data['edit_LEAVE_START_DATE']);
    $this->db->set('LEAVE_END_DATE', $data['edit_LEAVE_END_DATE']);

    
    $this->db->set('OFFICER',  $data['OFFICER']);
    $this->db->set('SUPERVISOR_ID',  $data['SUPERVISOR_ID']);
    $this->db->set('WRITE_PLACE', $data['WRITE_PLACE']);

    $this->db->set('MY_CHECK',  $data['myCheck_edit']);
    $this->db->set('LEAVE_HALF_DATE', $data['edit_LEAVE_HALF_DATE']);
    $this->db->set('HALF_ONE', $data['HALF_ONE']);
    

    $this->db->update('leaves');
    $st = array('st'=>1);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // exit(); 


    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->where('leaves.OFFICER',   $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS', '0');

    $leaves_status = $this->db->get();
    $leaves_status = $leaves_status->result_array();
    $leaves_status = count($leaves_status); 
    $_SESSION['OFFICER_STATUS'] = $leaves_status;

    return $st;
  }

  

  
  public function select_leaves_approve_supervisor($data_search = ""){


    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = leaves.PERSONNEL_ID');
    $this->db->join('leave_types', 'leave_types.LEAVE_TYPE_ID = leaves.LEAVE_TYPE_ID');

    $this->db->where('leaves.SUPERVISOR_ID', $_SESSION['PERSONNEL_ID']);
  
    if($data_search != ""){
      $this->db->like('personnels.PERSONNEL_ID', $data_search);
      $this->db->or_like('leave_types.LEAVE_TYPE', $data_search);
      $this->db->or_like('personnels.PERSONNEL_SURNAME', $data_search);
      $this->db->or_like('personnels.PERSONNEL_NAME', $data_search);
    };
    
    $this->db->order_by("LEAVE_ID", "DESC");
    $leaves = $this->db->get();
    $leaves = $leaves->result_array();
    $personnels = $this->select_personnels();
    $leave_types = $this->select_leave_types();


    $this->db->select('*');
    $this->db->from('management_positions');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
    $this->db->join('managements', 'managements.MANAGEMENT_ID = management_positions.MANAGEMENT_ID');
    $this->db->or_where('managements.MANAGEMENT_ID','1');
    $this->db->where('management_positions.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);
    $management_positions_OFFICER = $this->db->get();
    $management_positions_OFFICER = $management_positions_OFFICER->result_array();
   



    
    $this->db->select('*');
    $this->db->from('management_positions');
    $this->db->join('personnels', 'personnels.PERSONNEL_ID = management_positions.PERSONNEL_ID');
    $this->db->join('managements', 'managements.MANAGEMENT_ID = management_positions.MANAGEMENT_ID');
    $this->db->or_where('managements.MANAGEMENT_ID','2');
    $this->db->or_where('managements.MANAGEMENT_ID','3');
    $this->db->or_where('managements.MANAGEMENT_ID','4');
    $this->db->where('management_positions.DEPARTMENT_ID',$_SESSION['DEPARTMENT_ID']);
    $management_positions_SUPERVISOR_ID = $this->db->get();
    $management_positions_SUPERVISOR_ID = $management_positions_SUPERVISOR_ID->result_array();
    

    

    // echo "<pre>";
    // print_r($leaves);
    // echo "</pre>";

    // echo "<pre>";
    // print_r($_SESSION['PERSONNEL_ID']);
    // echo "</pre>";
    // exit();

    $DATA = array(
      'leaves'=>$leaves,
      'personnels' => $personnels['personnels'],
      'leave_types' => $leave_types,
      'management_positions_OFFICER' => $management_positions_OFFICER,
      'management_positions_SUPERVISOR_ID' => $management_positions_SUPERVISOR_ID
    );
  

    return $DATA;
  }
  public function add_edit_leaves_approve_supervisor($data){
    $st = array('st'=>0);
    $this->db->where('LEAVE_ID', $data['LEAVE_ID']);
  
    $this->db->set('SUPERVISOR_STATUS',  $data['SUPERVISOR_STATUS']);

 

    $this->db->update('leaves');
    $st = array('st'=>1);



    $this->db->select('*');
    $this->db->from('leaves');
    $this->db->where('leaves.SUPERVISOR_ID',   $_SESSION['PERSONNEL_ID']);
    $this->db->where('leaves.SUPERVISOR_STATUS', '1');


    $leaves_SUPERVISOR_ID = $this->db->get();
    $leaves_SUPERVISOR_ID = $leaves_SUPERVISOR_ID->result_array();
    $leaves_SUPERVISOR_ID = count($leaves_SUPERVISOR_ID);
    $_SESSION['SUPERVISOR_ID'] = $leaves_SUPERVISOR_ID;
    
 
      



 
    // echo "<pre>";
    // print_r($check_login['level']);
    // echo "</pre>";
    // exit();


		// echo "</pre>";
		// exit(); 
 


    return $st;
  }


  public function check_login_student($data){


    
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
   

    $this->db->select('*');
    $this->db->from('students');
    $this->db->where('STUDENT_USERNAME', $data['ADMIN_USER']);
    $this->db->where('STUDENT_PASSWORD', $data['ADMIN_PASS']);


    $check_login = $this->db->get();
    $check_login = $check_login->row_array();

    // echo "<pre>";
    // print_r($check_login);
    // echo "</pre>";
    // exit();




    
    $STUDENT_ID = isset($check_login['STUDENT_ID'])?$check_login['STUDENT_ID']:"";
    $STUDENT_NAME = isset($check_login['STUDENT_NAME'])?$check_login['STUDENT_NAME']:"";
    $STUDENT_SURNAME = isset($check_login['STUDENT_SURNAME'])?$check_login['STUDENT_SURNAME']:"";
    $STUDENT_NAME_EN = isset($check_login['STUDENT_NAME_EN'])?$check_login['STUDENT_NAME_EN']:"";
    $STUDENT_SURNAME_EN = isset($check_login['STUDENT_SURNAME_EN'])?$check_login['STUDENT_SURNAME_EN']:"";
    $STUDENT_EMAIL = isset($check_login['STUDENT_EMAIL'])?$check_login['STUDENT_EMAIL']:"";
    $STUDENT_TELL = isset($check_login['STUDENT_TELL'])?$check_login['STUDENT_TELL']:"";
    $STUDENT_USERNAME_check = isset($check_login['STUDENT_USERNAME'])?$check_login['STUDENT_USERNAME']:"";
    $STUDENT_PASSWORD_check = isset($check_login['STUDENT_PASSWORD'])?$check_login['STUDENT_PASSWORD']:"";
   



    // echo "<pre>";
    // print_r($check_login['level']);
    // echo "</pre>";
    // exit();


    $_SESSION['STUDENT_TELL'] = $STUDENT_TELL;
    $_SESSION['STUDENT_USERNAME'] = $STUDENT_USERNAME_check;
    $_SESSION['STUDENT_PASSWORD'] = $STUDENT_PASSWORD_check;

    $_SESSION['STUDENT_ID'] = $STUDENT_ID;
    $_SESSION['STUDENT_NAME'] = $STUDENT_NAME;
    $_SESSION['STUDENT_SURNAME'] = $STUDENT_SURNAME;
    $_SESSION['STUDENT_NAME_EN'] = $STUDENT_NAME_EN;
    $_SESSION['STUDENT_SURNAME_EN'] = $STUDENT_SURNAME_EN;
    $_SESSION['STUDENT_EMAIL'] = $STUDENT_EMAIL;

   
   
    // echo "<pre>";
    // print_r($_SESSION['OFFICER_STATUS']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['SUPERVISOR_ID']);
    // echo "</pre>";
    // exit();

    $st = array(
      'st'=>0,
      'msg'=>'ไม่มี user ในระบบ หรือ กรอกรหัสผ่านผิด กรุณาตรวจสอบ'
    ); 

    if($STUDENT_USERNAME_check != "" && $STUDENT_PASSWORD_check != ""){
      $st = array(
        'st'=>1,
        'msg'=>'login สำเร็จ'
      );
    }
    return $st;
  }

  public function profile_student(){
 



      $this->db->select('*');
      $this->db->from('individual_counseling_services');
      $this->db->join('counseling_types', 'counseling_types.COUNSELING_TYPE_ID = individual_counseling_services.COUNSELING_TYPE_ID');
      $this->db->join('personnels', 'personnels.PERSONNEL_ID  = individual_counseling_services.ADVISOR_ID');
      $this->db->join('students', 'students.STUDENT_ID  = individual_counseling_services.STUDENT_ID');
      $this->db->where('individual_counseling_services.STUDENT_ID', $_SESSION['STUDENT_ID'] );

      $this->db->order_by("INDIVIDUAL_COUNSELING_ID", "DESC");
      $individual_counseling_services = $this->db->get();
      $individual_counseling_services = $individual_counseling_services->result_array();
      $counseling_types = $this->select_counseling_types();
      $personnels = $this->select_personnels();
     
    
    // echo "<pre>";
    // print_r($individual_counseling_services);
    // echo "</pre>";
    // exit();


      $DATA = array(
        'individual_counseling_services'=>$individual_counseling_services,
        'counseling_types' => $counseling_types,
        'personnels' => $personnels['personnels']
      );
    // echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['level']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['ADMIN_ID']);
    // echo "</pre>";
    // exit();
      return $DATA;

  
  
    // echo "<pre>";
    // print_r($departments['departments']);
    // echo "</pre>";
    // exit(); 
    // // หน้า network

  }


  public function add_individual_counseling_services_student($data){
    if(is_array($data) && $data['STUDENT_ID']!="" && $data['COUNSELING_CREATE_DATE']!=""){
      $data = array(
        'ADVISOR_ID' => $data['ADVISOR_ID'],
        'STUDENT_ID' => $data['STUDENT_ID'],
        'COUNSELING_TYPE_ID' => $data['COUNSELING_TYPE_ID'],
        'COUNSELING_PROBLEM' => $data['COUNSELING_PROBLEM'],
        'COUNSELING_CREATE_DATE' => $data['COUNSELING_CREATE_DATE'],
        'CONTACT' => $data['CONTACT'],
        'STUDEN_DATE_START' => $data['STUDEN_DATE_START'],
        'STUDEN_DATE_END' => $data['STUDEN_DATE_END'],
        'COUNSELING_DATE_START' => $data['STUDEN_DATE_START'],
        'COUNSELING_DATE_END' => $data['STUDEN_DATE_END'],
        'INDIVIDUAL_COUNSELING_STATUS' => '1',
        
    
      );
      $data = $this->db->insert('individual_counseling_services', $data);
      $st = array('st'=>1,'ms'=>'สำเร็จ');
    }
  
    return $st;
  }

  public function edit_status_individual_counseling_services($data){
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 


    $st = array('st'=>0);
    $this->db->where('INDIVIDUAL_COUNSELING_ID', $data['INDIVIDUAL_COUNSELING_ID']);
    $this->db->set('ADVISOR_ID', $data['ADVISOR_ID']);
    $this->db->set('STUDENT_ID',  $data['STUDENT_ID']);
    $this->db->set('COUNSELING_TYPE_ID', $data['COUNSELING_TYPE_ID']);

    $this->db->set('COUNSELING_PROBLEM', $data['COUNSELING_PROBLEM']);
    $this->db->set('COUNSELING_DETAIL', $data['COUNSELING_DETAIL']);
    $this->db->set('COUNSELING_CREATE_DATE',  $data['COUNSELING_CREATE_DATE']);

    $this->db->set('COUNSELING_DATE_START', $data['COUNSELING_DATE_START']);
    $this->db->set('COUNSELING_DATE_END', $data['COUNSELING_DATE_END']);
    $this->db->set('STUDEN_DATE_START', $data['STUDEN_DATE_START']);
    $this->db->set('STUDEN_DATE_END', $data['STUDEN_DATE_END']);
    $this->db->set('CONTACT', $data['CONTACT']);

    $this->db->set('STUDEN_DATE_CONF_START', $data['COUNSELING_DATE_START']);
    $this->db->set('STUDEN_DATE_CONF_END', $data['COUNSELING_DATE_END']);
    $this->db->set('INDIVIDUAL_COUNSELING_STATUS', '2');
   

    $this->db->update('individual_counseling_services');
    $st = array('st'=>1);
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
 


    return $st;
  }
  
  public function update_conf_individual_counseling_service_studen($data){
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 


    $st = array('st'=>0);
    $this->db->where('INDIVIDUAL_COUNSELING_ID', $data['INDIVIDUAL_COUNSELING_ID']);
  


    $this->db->set('STUDEN_DATE_CONF_START', $data['COUNSELING_DATE_START']);

    $this->db->set('INDIVIDUAL_COUNSELING_STATUS', $data['INDIVIDUAL_COUNSELING_STATUS']);
    $this->db->set('DETAIL_NOT', $data['DETAIL_NOT']);

    $this->db->update('individual_counseling_services');
    $st = array('st'=>1);
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
 


    return $st;
  }
  public function update_conf_teacher_individual_counseling_service_studen($data){
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 


    $st = array('st'=>0);
    $this->db->where('INDIVIDUAL_COUNSELING_ID', $data['INDIVIDUAL_COUNSELING_ID']);
  

    $this->db->set('INDIVIDUAL_COUNSELING_STATUS', $data['INDIVIDUAL_COUNSELING_STATUS']);

    $this->db->update('individual_counseling_services');
    $st = array('st'=>1);
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
 


    return $st;
  }
  
  public function update_individual_counseling_filnel($data){
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 


    $st = array('st'=>0);
    $this->db->where('INDIVIDUAL_COUNSELING_ID', $data['INDIVIDUAL_COUNSELING_ID']);
  

    $this->db->set('INDIVIDUAL_COUNSELING_STATUS','5');
    $this->db->set('COUNSELING_SOLVE', $data['COUNSELING_SOLVE']);
    $this->db->set('COUNSELING_RESULT', $data['COUNSELING_RESULT']);

    $this->db->update('individual_counseling_services');
    $st = array('st'=>1);
    // echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
 


    return $st;
  }
  
  public function search_we(){

      $this->db->select('*');
      $this->db->from('table_images');
  
      $table_images = $this->db->get();
      $table_images = $table_images->result_array();

    // echo "<pre>";
    // print_r($table_images);
    // echo "</pre>";
    // exit();
  
    
      $DATA = array(
        'table_images'=>$table_images
      );

 
    // echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION['level']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // exit();
   

    
    // echo '<pre>';
    // print_r($researchs);
    // echo '</pre>';
    // exit;
    return $DATA;
    // echo "<pre>";
    // print_r($DATA);
    // echo "</pre>";
    // exit(); 
    // // หน้า network

  }


  public function last_leave_end_date_onchange($data){

    // echo "<pre>";
    // print_r($data['LEAVE_START_DATE']);
    // echo "</pre>";
    if($data['LEAVE_HALF_DATE'] == ""){
      $strStartDate = $data['LEAVE_START_DATE'];
      $strEndDate = $data['LEAVE_END_DATE'];
      
      $intWorkDay = 0;
      $intHoliday = 0;
      $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1; 
    
      while (strtotime($strStartDate) <= strtotime($strEndDate)) {
        
        $DayOfWeek = date("w", strtotime($strStartDate));
        if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
        {
          $intHoliday++;
          // echo "$strStartDate = <font color=red>Holiday</font><br>";
        }
        else
        {
          $intWorkDay++;
          // echo "$strStartDate = <b>Work Day</b><br>";
        }
        //$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....
    
        $strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
      }
  
    }else{
      $strStartDate = $data['LEAVE_START_DATE'];
      $strEndDate = $data['LEAVE_END_DATE'];
      
      $intWorkDay = -0.5;
      $intHoliday = 0;
      $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1; 
    
      while (strtotime($strStartDate) <= strtotime($strEndDate)) {
        
        $DayOfWeek = date("w", strtotime($strStartDate));
        if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
        {
          $intHoliday++;
          // echo "$strStartDate = <font color=red>Holiday</font><br>";
        }
        else
        {
          $intWorkDay++;
          // echo "$strStartDate = <b>Work Day</b><br>";
        }
        //$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....
    
        $strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
      
      }
    }



    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // exit();
    // $this->db->select('*');
    // $this->db->from('table_images');

    // $table_images = $this->db->get();
    // $table_images = $table_images->result_array();





  
    $DATA = array(
      'intWorkDay'=>$intWorkDay,
      'data'=>$data
    );


    return $DATA;


  }
  public function last_edit_leave_end_date_onchange($data){

    // echo "<pre>";
    // print_r($data['LEAVE_START_DATE']);
    // echo "</pre>";
    if($data['LEAVE_HALF_DATE'] == ""){
      $strStartDate = $data['LEAVE_START_DATE'];
      $strEndDate = $data['LEAVE_END_DATE'];
      
      $intWorkDay = 0;
      $intHoliday = 0;
      $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1; 
    
      while (strtotime($strStartDate) <= strtotime($strEndDate)) {
        
        $DayOfWeek = date("w", strtotime($strStartDate));
        if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
        {
          $intHoliday++;
          // echo "$strStartDate = <font color=red>Holiday</font><br>";
        }
        else
        {
          $intWorkDay++;
          // echo "$strStartDate = <b>Work Day</b><br>";
        }
        //$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....
    
        $strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
      }
  
    }else{
      $strStartDate = $data['LEAVE_START_DATE'];
      $strEndDate = $data['LEAVE_END_DATE'];
      
      $intWorkDay = -0.5;
      $intHoliday = 0;
      $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1; 
    
      while (strtotime($strStartDate) <= strtotime($strEndDate)) {
        
        $DayOfWeek = date("w", strtotime($strStartDate));
        if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
        {
          $intHoliday++;
          // echo "$strStartDate = <font color=red>Holiday</font><br>";
        }
        else
        {
          $intWorkDay++;
          // echo "$strStartDate = <b>Work Day</b><br>";
        }
        //$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....
    
        $strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
      
      }
    }



    // echo "<pre>";
    // print_r($intWorkDay);
    // echo "</pre>";
    // exit();
    // $this->db->select('*');
    // $this->db->from('table_images');

    // $table_images = $this->db->get();
    // $table_images = $table_images->result_array();





  
    $DATA = array(
      'intWorkDay'=>$intWorkDay
    );


    return $DATA;


  }
  
  
}






