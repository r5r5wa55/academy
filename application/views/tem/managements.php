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
            <h1 class="m-0" >ประเภทตำแหน่งผู้บริหาร</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">ประเภทตำแหน่งผู้บริหาร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
   
    <div class="content">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 box-btn-center">
          <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_managements').modal('show');">
          เพิ่มข้อมูล
          </a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
      </div>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รหัส</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
        <div class="col-lg-2 "></div>
      </div>
      <?php foreach($managements as $key=>$value): ?>
        <div class="row">
        <div class="col-lg-2 "></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['MANAGEMENT_ID'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['MANAGEMENT_NAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_managements(
              '<?php echo $value['MANAGEMENT_ID'];?>',
              '<?php echo $value['MANAGEMENT_NAME']?>');">
              แก้ไขข้อมูล
            </a>   
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_managements(
              '<?php echo $value['MANAGEMENT_ID'];?>');">
              ลบข้อมูล
            </a>
          </div>
        </div>
      <?php endforeach; ?>
  
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
