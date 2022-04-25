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
            <h1 class="m-0" >ตารางผู้เข้าร่วมกิจกรรม</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">ผู้เข้าร่วมกิจกรรม</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
      <div class="row">
        <div class="col-lg-2 hade-show">ชื่อกิจกรรม</div>
        <div class="col-lg-2 hade-show">ชื่อผู้เข้าร่วม</div>
        <div class="col-lg-2 hade-show">นามสกุลผู้เข้าร่วม</div>
        <div class="col-lg-2 hade-show">วันที่จัดกิจกรรม</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($activity_participants as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['ACTIVITY_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['ACTIVITY_DATE'];?></div>
         

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_activity_participants(
              '<?php echo $value['ACTIVITY_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['ID_ACTIVITY_PARTICIPANTS'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_activity_participants('<?php echo $value['ID_ACTIVITY_PARTICIPANTS'];?>')">ลบข้อมูล</button>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_activity_participants').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_activity_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล ผู้เข้าร่วมกิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
              

                <label for="formGroupExampleInput">กิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($activities as $key=>$value): ?>
                        <option value="<?php echo $value['ACTIVITY_ID'];?>"><?php echo $value['ACTIVITY_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>

            
   
          

                

              </div>
              <div class="col-md-6">

                  
            
                <label for="formGroupExampleInput">ผู้เข้าร่วมกิจกรรม</label>
                    <select class="form-control" name="PERSONNEL_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>

          

             

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_activity_participants();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<<div class="modal fade" id="edit_activity_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูล ผู้เข้าร่วมกิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
                <label for="formGroupExampleInput">กิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_ID">
                    <?php foreach($activities as $key=>$value): ?>
                        <option value="<?php echo $value['ACTIVITY_ID'];?>"><?php echo $value['ACTIVITY_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>
              </div>
              <div class="col-md-6">

                  
            
                <label for="formGroupExampleInput">ผู้เข้าร่วมกิจกรรม</label>
                    <select class="form-control" name="PERSONNEL_ID">
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>

                    <label  type="hiden" name="ID_ACTIVITY_PARTICIPANTS" id="ID_ACTIVITY_PARTICIPANTS"></label>

             

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_activity_participants();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>





<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>



</body>
</html>
