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
            <h1 class="m-0" >ตำแหน่งผู้บริหาร</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">ตำแหน่งผู้บริหาร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   

    <div class="content">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 box-btn-center">
          <a href="javascript: void(0)" class="box-btn-add" onclick="$('#add_management_positions').modal('show');">
          เพิ่มข้อมูล
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รหัส</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">นามสกุล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ตำแหน่ง</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($management_positions as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_ID'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['MANAGEMENT_NAME'];?></div>

          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_management_positions(
              '<?php echo $value['MANAGEMENT_POSITION_ID'];?>',
              '<?php echo $value['MANAGEMENT_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['DEPARTMENT_ID'];?>');">
              แก้ไขข้อมูล
            </a>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 body-show  box-btn-center">
            <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_management_positions(
              '<?php echo $value['MANAGEMENT_POSITION_ID'];?>');">
              ลบข้อมูล
            </a>
          </div>
        </div>
      <?php endforeach; ?>
 
    </div>
  </div>
</div>


<div class="modal fade" id="add_management_positions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >เพิ่มข้อมูล ตำแหน่งผู้บริหาร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">

        <label for="formGroupExampleInput">ตำแหน่งผู้บริหาร</label>
        <select class="form-control" name="MANAGEMENT_ID" >
          <option value="">กรุณาเลือก</option>
            <?php foreach($managements as $key=>$value): ?>
              <option value="<?php echo $value['MANAGEMENT_ID'];?>"><?php echo $value['MANAGEMENT_NAME'];?></option>
            <?php endforeach; ?>
          </select>
          <label for="formGroupExampleInput">ชื่อ นามสกุล</label>
          <select class="form-control" name="PERSONNEL_ID" onchange="main.get_mangement_positions_onchange(this)" >
            <option value="">กรุณาเลือก</option>
            <?php foreach($personnels as $key=>$value): ?>
              <option value="<?php echo $value['PERSONNEL_ID'];?>" data-id-DEPARTMENT_ID="<?php echo $value['DEPARTMENT_ID']?>" ><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
            <?php endforeach; ?>
          </select>
    
          <label for="formGroupExampleInput">สาขา</label>
          <input type="text" class="form-control"  name="DEPARTMENT_ID" placeholder="สาขา">
   
   

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_management_positions();">Save changes</button>
          
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
      <div class="modal-body abc"  data-tes="1">
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
  $( document ).ready(function() {

  });
</script>
</body>
</html>
