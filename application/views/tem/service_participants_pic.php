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
            <h1 class="m-0" >ตารางวิชาการ ตำแหน่งทางวิชาการ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">ตารางวิชาการ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="row">
    
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รหัส</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">เพืมรูปภาพ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้รูปภาพ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบรูปภาพ</div>
       
      </div>
      <?php foreach($services as $key=>$value):?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['SERVICE_ID'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['SERVICE_TITLE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><img src="'.base_url().'upload/'.$data["file_name"].'" class="img-reponsive img-thumbnail"/></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show">
            <button type="button" class="btn btn-block btn-outline-primary" onclick="main.open_add_service_participants_pic('<?php echo $value['SERVICE_ID'];?>')">เพืมรูปภาพ</button>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_service_participants_pic(
              '<?php echo $value['SERVICE_ID'];?>',
              '<?php echo $value['SERVICE_TITLE'];?>',
              '<?php echo $value['SERVICE_TITLE'];?>',
              '<?php echo $value['SERVICE_TITLE'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_service_participants_pic('<?php echo $value['SERVICE_ID'];?>')">ลบข้อมูล</button>
          </div>
        </div>
      <?php endforeach; ?>
    
    </div>
  </div>
</div>

<div class="modal fade" id="add_service_participants_pic" tabindex="-1"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล คณตำแหน่งทางวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">กรุณาเลือก ตำแหน่งทางวิชาการ</label>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
              </div>
            </div>
            <div class="col-md-4">
              <di class="form-group"> 
                <label>เลือกรูป</label>
                <input type="file" name="files" id="files" multiple/>
                <input type="hidden" name="SERVICE_ID"/>
              </div>
            </div>
            <div class="col-md-4">
              <di class="form-group">
              </di>
            </div>
          </div>
          <div class="modal-footer uploaded_images">
            <div style="clear:both"></div>
            <div class="row" id="uploaded_images"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="edit_service_participants_pic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title exampleModalLongTitle" id="exampleModalLongTitle" >เเก้ไขข้อมูล ตำแหน่งทางวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="formGroupExampleInput">กรุณาเลือก ตำแหน่งทางวิชาการ</label>
          <select class="form-control" name="ACADEMIC_ID" >
            <option value="">กรุณาเลือก</option>
            <?php foreach($academics as $key=>$value): ?>
              <option value="<?php echo $value['ACADEMIC_ID'];?>"><?php echo $value['ACADEMIC_NAME'];?></option>
            <?php endforeach; ?>
          </select>
          <label for="formGroupExampleInput">กรุณาเลือก ชิ่อ-นามสกุล</label>
          <select class="form-control" name="PERSONNEL_ID" >
            <option value="">กรุณาเลือก</option>
            <?php foreach($personnels as $key=>$value): ?>
              <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></php></option>
            <?php endforeach; ?>
          </select>
          <input type="hidden"  name="ACADEMIC_POSITION_ID" placeholder="ชื่อคณะ">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_academic_positions();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div> 

<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  $('#files').change(function(){
     main.upload_img()   
  });
</script>
</body>
</html>
