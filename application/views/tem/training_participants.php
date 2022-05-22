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
            <h1 class="m-0" >ตารางผู้เข้าร่วมการอบรม</h1>
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
        <div class="col-lg-2 hade-show">ชื่อการอบรม</div>
        <div class="col-lg-2 hade-show">ชื่อผู้เข้าร่วม</div>
        <div class="col-lg-2 hade-show">นามสกุลผู้เข้าร่วม</div>
        <div class="col-lg-2 hade-show">วันที่จัดกิจกรรม</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($training_participants as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['TRAINING_TITLE'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['TRAINING_BUDGET'];?></div>
         

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_training_participants(
              '<?php echo $value['ID_TRAINING_PARTICIPANTS'];?>',
              '<?php echo $value['TRAINING_ID'];?>',
              '<?php echo $value['TRAINING_BUDGET'];?>',
              '<?php echo $value['TRAINING_RESULT'];?>',
              '<?php echo $value['TRAINING_EVALUATION_RESULT'];?>',
              '<?php echo $value['TRAINING_ASSESSOR_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_training_participants('<?php echo $value['ID_TRAINING_PARTICIPANTS'];?>')">ลบข้อมูล</button>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_training_participants').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_training_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล ผู้เข้าร่วมการอบรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
              

                <label for="formGroupExampleInput">ชื่อการอบรม</label>
                    <select class="form-control" name="TRAINING_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($trainings as $key=>$value): ?>
                        <option value="<?php echo $value['TRAINING_ID'];?>"><?php echo $value['TRAINING_TITLE'];?></option>
                    <?php endforeach; ?>
                    </select>
                <label for="formGroupExampleInput">งบประมาณ</label>  
                <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_BUDGET">
            
   
             

                    <label for="formGroupExampleInput">ผลการประเมิน</label>  
                    <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_EVALUATION_RESULT">

                

              </div>
              <div class="col-md-6">

                  
            
                <label for="formGroupExampleInput">ผู้เข้าร่วมการอบรม</label>
                    <select class="form-control" name="PERSONNEL_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>
                    <label for="formGroupExampleInput">รหัสผู้ประเมิน</label>
                    <select class="form-control" name="TRAINING_ASSESSOR_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>
                
                    <label for="formGroupExampleInput">ผลลัพธ์</label>  
                    <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_RESULT">
            
      
             

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_training_participants();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_training_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล ผู้เข้าร่วมการอบรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
              
                <input type="hidden" name="ID_TRAINING_PARTICIPANTS">
                <label for="formGroupExampleInput">ชื่อการอบรม</label>
                    <select class="form-control" name="TRAINING_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($trainings as $key=>$value): ?>
                        <option value="<?php echo $value['TRAINING_ID'];?>"><?php echo $value['TRAINING_TITLE'];?></option>
                    <?php endforeach; ?>
                    </select>
                <label for="formGroupExampleInput">งบประมาณ</label>  
                <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_BUDGET">
            
   
             

                    <label for="formGroupExampleInput">ผลการประเมิน</label>  
                    <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_EVALUATION_RESULT">

                

              </div>
              <div class="col-md-6">

                  
            
                <label for="formGroupExampleInput">ผู้เข้าร่วมการอบรม</label>
                    <select class="form-control" name="PERSONNEL_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>
                    <label for="formGroupExampleInput">รหัสผู้ประเมิน</label>
                    <select class="form-control" name="TRAINING_ASSESSOR_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>
                
                    <label for="formGroupExampleInput">ผลลัพธ์</label>  
                    <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_RESULT">
            
      
             

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_training_participants();">Save changes</button>
          
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
