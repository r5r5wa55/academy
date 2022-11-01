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
            <h1 class="m-0" >ตารางกิจกรรม</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">กิจกรรม</li>
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
          <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_trainings').modal('show');">
          เพิ่มข้อมูล
          </a>
        </div> 
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รหัสการอบรม</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ชื่อการอบรม</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานที่จัดการอบรม</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">เจ้าของการอบรม</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($trainings as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['TRAINING_ID'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['TRAINING_TITLE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['TRAINING_PLACE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></div>
           

          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_trainings(
              '<?php echo $value['TRAINING_ID'];?>',
              '<?php echo $value['TRAINING_TITLE'];?>',
              '<?php echo $value['TRAINING_PLACE'];?>',
              '<?php echo $value['TRAINING_OWNER'];?>',
              '<?php echo $value['TRAINING_COMMENT'];?>',
              '<?php echo $value['TOTAL_HOUR_TRAINING'];?>',
              '<?php echo $value['TRAINING_START_DATE'];?>',
              '<?php echo $value['TRAINING_END_DATE'];?>',
              '<?php echo $value['FILE_TAINING'];?>');">
              แก้ไขข้อมูล
            </a>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_trainings(
              '<?php echo $value['TRAINING_ID'];?>');">
              ลบข้อมูล
            </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_trainings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล กิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
              
                <label for="formGroupExampleInput">ชื่อการอบรม</label>
                <input class="form-control" rows="3" placeholder="ชื่อกิจกรรม" name="TRAINING_TITLE"></input>

                <label for="formGroupExampleInput">เจ้าของการอบรม</label>
                    <select class="form-control" name="TRAINING_OWNER">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                    </select>

                <label for="formGroupExampleInput">ตั้งแต่</label>
                <input class="form-control" type="date" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_START_DATE"></input>

                
                
                <label for="formGroupExampleInput">แสดงความคิดเห็น</label>
                <textarea class="form-control" rows="3" placeholder="แสดงความคิดเห็น" name="TRAINING_COMMENT"></textarea>

              
          

                

              </div>
              <div class="col-md-6">

                  
                <label for="formGroupExampleInput">สถานที่จัดการอบรม</label>
                <input type="text" class="form-control"  name="TRAINING_PLACE" placeholder="สถานที่จัดการอบรม">

                <label for="formGroupExampleInput">ขั่วโมงในการจัดการอบรม</label>
                <input type="text" class="form-control"  name="TOTAL_HOUR_TRAINING" placeholder="ขั่วโมงในการจัดการอบรม">
             

                <label for="formGroupExampleInput">สิ้นสุด</label>
                <input class="form-control" type="date" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_END_DATE"></input>


              
          


                <label for="formGroupExampleInput">ไฟล์ข้อมูล</label>
                <input type="file" class="form-control"  name="FILE_TAINING" placeholder="FILE_TAINING">

             

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_trainings();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_trainings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล กิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">        
              <input class="form-control" type="hidden" rows="3" placeholder="ชื่อกิจกรรม" name="TRAINING_ID"></input>
                <label for="formGroupExampleInput">ชื่อการอบรม</label>
                <input class="form-control" rows="3" placeholder="ชื่อกิจกรรม" name="TRAINING_TITLE"></input>
                <label for="formGroupExampleInput">เจ้าของการอบรม</label>
                <select class="form-control" name="TRAINING_OWNER">
                  <option value="">กรุณาเลือก</option>
                  <?php foreach($personnels as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                  <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">ตั้งแต่</label>
                <input class="form-control" type="date" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_START_DATE"></input>   
                <label for="formGroupExampleInput">แสดงความคิดเห็น</label>
                <textarea class="form-control" rows="3" placeholder="แสดงความคิดเห็น" name="TRAINING_COMMENT"></textarea>
              </div>
              <div class="col-md-6">               
                <label for="formGroupExampleInput">สถานที่จัดการอบรม</label>
                <input type="text" class="form-control"  name="TRAINING_PLACE" placeholder="สถานที่จัดการอบรม">
                <label for="formGroupExampleInput">ขั่วโมงในการจัดการอบรม</label>
                <input type="text" class="form-control"  name="TOTAL_HOUR_TRAINING" placeholder="ขั่วโมงในการจัดการอบรม">
                <label for="formGroupExampleInput">สิ้นสุด</label>
                <input class="form-control" type="date" rows="3" placeholder="สถานที่จัดกิจกรรม" name="TRAINING_END_DATE"></input>
                <label for="formGroupExampleInput">ไฟล์ข้อมูล</label>
                <input type="file" class="form-control"  name="FILE_TAINING" placeholder="FILE_TAINING">
              </div>    
            </div>  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_trainings();">Save changes</button>
          
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
