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
            <h1 class="m-0" >ข้อมูลสายงาน</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">personnel_categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="content">
      <div class="row" >
         <div class="col-lg-2 "></div>
        <div class="col-lg-2 hade-show">รหัส</div>
        <div class="col-lg-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
        <div class="col-lg-2 "></div>
      </div>
      <?php foreach($personnel_categories as $key=>$value): ?>
        <div class="row">
        <div class="col-lg-2 "></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_CATEGORY_ID'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_CATEGORY_DETAIL'];?></div>
          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_personnel_categories('<?php echo $value['PERSONNEL_CATEGORY_ID'];?>','<?php echo $value['PERSONNEL_CATEGORY_DETAIL'];?>');">แก้ไขข้อมูล</button>
          </div>
          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_personnel_categories('<?php echo $value['PERSONNEL_CATEGORY_ID'];?>')">ลบข้อมูล</button>
             <div class="col-lg-2 "></div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_personnel_categories').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  $( document ).ready(function() {
  });
</script>
</body>
</html>
