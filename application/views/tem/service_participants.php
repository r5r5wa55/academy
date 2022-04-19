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
            <h1 class="m-0" >ตารางการเข้าร่วมบริการ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">การให้บริการ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
      <div class="row">
        <div class="col-lg-2 hade-show">หัวข้อการบริการ</div>
        <div class="col-lg-2 hade-show">ชื่อผู้เข้าร่วม</div>
        <div class="col-lg-2 hade-show">นามสกุลผู้เข้าร่วม</div>
        <div class="col-lg-2 hade-show">ชั่วโมงในการเข้าร่วม</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($service_participants as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['SERVICE_TITLE'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['TOTAL_HOUR'];?></div>
         

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_service_participants(
              '<?php echo $value['SERVICE_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['TOTAL_HOUR'];?>', 
              '<?php echo $value['CREATE_BY'];?>',
              '<?php echo $value['SERVICE_START_DATE'];?>',
              '<?php echo $value['SERVICE_END_DATE'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_service_participants('<?php echo $value['ID'];?>')">ลบข้อมูล</button>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_service_participants').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_service_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การเข้าร่วมบริการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
     

                <label for="formGroupExampleInput">หัวข้อการบริการ</label>
                <select class="form-control" name="SERVICE_ID">
                <option value="">กรุณาเลือก</option>
                  <?php foreach($services as $key=>$value): ?>
                    <option value="<?php echo $value['SERVICE_ID'];?>"><?php echo $value['SERVICE_TITLE'];?></option>
                  <?php endforeach; ?>
                </select>
            
   
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control" rows="3" placeholder="ตั้งแต่วันที่"  name="SERVICE_START_DATE"></input>

                
    

                <label for="formGroupExampleInput">ชั่วโมงในการเข้าร่วม</label>
                <input class="form-control" rows="3" placeholder="ชั่วโมงในการเข้าร่วม" name="TOTAL_HOUR"></input>
          

                

              </div>
              <div class="col-md-6">
                
                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการ</label>
                <select class="form-control" name="PERSONNEL_ID">
                <option value="">กรุณาเลือก</option>
                  <?php foreach($personnels as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                  <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control" rows="3" placeholder="ตั้งแต่วันที่"  name="SERVICE_END_DATE"></input>

 
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_service_participants();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_service_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การให้บริการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">

                <label  type="hiden" name="SERVICE_ID" id="SERVICE_ID"></label>
                <label for="formGroupExampleInput" >หัวข้อการบริการ</label>
                <input class="form-control" rows="3" placeholder="SERVICE_TITLE" name="SERVICE_TITLE"></label>

            
   
                <label for="formGroupExampleInput">เจ้าของผู้ให้บริการ</label>
                <input class="form-control" rows="3" placeholder="SERVICE_OWNER" name="SERVICE_OWNER"></input>

                
                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการ</label>
                <input class="form-control" rows="3" placeholder="PARTICIPANT" name="PARTICIPANT"></input>

                <label for="formGroupExampleInput">เวลาเริ่มการบริการ</label>
                <input class="form-control" rows="3" placeholder="SERVICE_START_DATE" name="SERVICE_START_DATE"></input>

                <label for="formGroupExampleInput">เวลาในการอบรม</label>
                <input class="form-control" rows="3" placeholder="TOTAL_HOUR" name="TOTAL_HOUR"></input>
              
          

                

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >สถานที่ให้บริการ</label>
                <input type="text" class="form-control"  name="SERVICE_PLACE" placeholder="SERVICE_PLACE  ">

                  
                <label for="formGroupExampleInput">ลักษณะผู้เข้าร่วมการบริการ</label>
                <input type="text" class="form-control"  name="PARTICIPANT_TYPE" placeholder="PARTICIPANT_TYPE">

                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการทั้งหมด</label>
                <input type="text" class="form-control"  name="TOTAL_PARTICIPANT" placeholder="TOTAL_PARTICIPANT">
    
                <label for="formGroupExampleInput">เวลาเสร็จสิ้นการบริการ]</label>
                <input type="text" class="form-control"  name="SERVICE_END_DATE" placeholder="SERVICE_END_DATE">

                <label for="formGroupExampleInput">ไฟล์ข้อมูล</label>
                <input type="file" class="form-control"  name="FILE_DOCUMENT" placeholder="FILE_DOCUMENT">

             

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_services();">Save changes</button>
          
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
