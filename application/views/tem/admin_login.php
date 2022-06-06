<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <?php 
    $this->load->view('tem/inc_css');
  ?>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <style>p.indent{ padding-left: 1.8em }</style>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url()."public/"?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php $this->load->view('tem/inc_head_menu.php')?>

  <?php $this->load->view('tem/inc_lift_menu')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" >สิทธิ์การเข้าใช้งาน</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">สิทธิ์การเข้าใช้งาน</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="row">
        <div class="col-lg-2 hade-show">รหัส</div>
        <div class="col-lg-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 hade-show">นามสกุล</div>
        <div class="col-lg-2 hade-show">ตำแหน่ง</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($admin_login as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['ADMIN_ID'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['level'] != 1 ? 'ผู้ใช้งาน' : 'แอดมิน'?></div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_management_positions( 
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_management_positions('<?php echo $value['PERSONNEL_ID'];?>')">ลบข้อมูล</button>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_admin_login').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="add_admin_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >เพิ่มข้อมูล สิทธิ์การเข้าใช้งาน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">

          <label for="formGroupExampleInput">สิทธิ์การเข้าใช้งาน</label>
          <select class="form-control" name="ADMIN_ID" >
              <option value="">กรุณาเลือก</option>
              <?php foreach($admin_login as $key=>$value): ?>
                <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
              <?php endforeach; ?>
            </select>
            <label for="formGroupExampleInput">สิทธิ์การเข้าใช้งาน</label>
            <select name="level" class="form-control" id="level">
              <option value="">กรุณาเลือก</option>
              <option value="1">แอดมิน</option>
              <option value="2">ผู้ใช้งาน</option>
            </select>
        </div>
          <label for="formGroupExampleInput">ชื่อผู้ใช้</label>
          <input type="text" class="form-control"  name="PERSONNEL_USERNAME" placeholder="ชื่อผู้ใช้">
          <label for="formGroupExampleInput">รหัสผ่าน</label>
          <div class="input-group input-group-md">
            <input type="password" class="form-control"  id="myInput"  name="PERSONNEL_PASSWORD" placeholder="รหัสผ่าน">
            <span class="input-group-append">
              <button type="checkbox" class="btn btn-info btn-flat"name="PERSONNEL_PASSWORD"  onclick="myFunction()" id="myInput">แสดง</button>
            </span>
          </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="main.add_admin_login();">Save changes</button>
            
          </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_management_positions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title exampleModalLongTitle" id="exampleModalLongTitle" >เเก้ไขข้อมูล ตำแหน่งผู้บริหาร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ตำแหน่งผู้บริหาร</label>
          <select class="form-control" name="MANAGEMENT_ID" >
            <?php foreach($managements as $key=>$value): ?>
              <option value="<?php echo $value['MANAGEMENT_ID'];?>"><?php echo $value['MANAGEMENT_NAME'];?></option>
            <?php endforeach; ?>
          </select>
          <label for="formGroupExampleInput">ชื่อ นามสกุล</label>
          <select class="form-control" name="PERSONNEL_ID" >
            <?php foreach($personnels as $key=>$value): ?>
              <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
            <?php endforeach; ?>
          </select>
          <label for="formGroupExampleInput">สาขา</label>
          <select class="form-control" name="DEPARTMENT_ID" >
            <?php foreach($departments as $key=>$value): ?>
              <option value="<?php echo $value['DEPARTMENT_ID'];?>"><?php echo $value['DEPARTMENT_NAME_TH'];?></option>
            <?php endforeach; ?>
          </select>
   
          <input type="hidden" name='MANAGEMENT_POSITION_ID'> 

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_management_positions();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  function myFunctionedit() {
    var x = document.getElementById("myInputedit");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }

  }
</script>
</body>
</html>
