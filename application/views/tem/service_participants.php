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
            <h1 class="m-0" >ตารางการเข้าร่วมการบริการวิชาการ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">การเข้าร่วม</li>
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
          <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_service_participants').modal('show');">
          เพิ่มข้อมูล
          </a>
        </div> 
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">หัวข้อการบริการ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ชื่อ/นามสกุลผู้เข้าร่วม</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">เวลาในการบริการวิชาการ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รูปภาพ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($service_participants as $key=>$value): ?>
        <div class="row body-show-long">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['SERVICE_TITLE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left">
            <?php echo $value['PERSONNEL_NAME'];?>
            &nbsp&nbsp&nbsp&nbsp&nbsp
            <?php echo $value['PERSONNEL_SURNAME'];?>
          </div>
          <div class="col-lg-1 col-md-2 col-sm-2 body-show text-long box-btn-center">
            <?php echo $value['SERVICE_P_START_DATE'];?>
            &nbsp&nbsp&nbsp&nbsp&nbsp
            <?php echo $value['SERVICE_P_END_DATE'];?>
          </div>
          <div class="col-lg-1 col-md-2 col-sm-2 body-show text-long box-btn-left">น.
            &nbsp&nbsp&nbsp&nbsp&nbsp
            <?php echo $value['TOTAL_HOUR_SERVICE_P'];?> &nbsp&nbsp ช.ม
          </div>


          <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-center">
            <a href="/index.php/Home/show_service_participants_pic?img=<?php echo $value['ID'];?>" class="btn-pic">
              แสดงรูปภาพ
            </a>
          </div>
         
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_service_participants(
              '<?php echo $value['ID'];?>',
              '<?php echo $value['SERVICE_ID'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['TOTAL_HOUR_SERVICE_P'];?>', 
              '<?php echo $value['SERVICE_P_START_DATE'];?>',
              '<?php echo $value['SERVICE_P_END_DATE'];?>');">
              แก้ไขข้อมูล
            </a>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a a href="javascript:void(0)" class="btn-delete" onclick="main.delete_service_participants(
              '<?php echo $value['ID'];?>');">
              ลบข้อมูล
            </a>
          </div>
      </div>
      <?php endforeach; ?>
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
            
   
                <label for="formGroupExampleInput">เวลาเริ่มการบริการ</label>
                <input type="text" class="form-control" rows="3" placeholder="เวลาเริ่มการบริการ" id="SERVICE_P_START_DATE" name="SERVICE_P_START_DATE"  value="<?php echo "".date("08:00");?>">

                
    

                <label for="formGroupExampleInput">ชั่วโมงในการเข้าร่วม</label>
                <input class="form-control" rows="3" placeholder="ชั่วโมงในการเข้าร่วม" name="TOTAL_HOUR_SERVICE_P" onkeyup="main.checkcountinput(this)"></input>
          

                

              </div>
              <div class="col-md-6">
                
                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการ</label>
                <select class="form-control" name="PERSONNEL_ID">
                <option value="">กรุณาเลือก</option>
                  <?php foreach($personnels as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                  <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">เวลาสิ้นสุดการบริการ</label>
                <input type="text" class="form-control" rows="3"  id="SERVICE_P_END_DATE" name="SERVICE_P_END_DATE"  value="<?php echo "".date("16:00");?>">

                
       

 
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
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การเข้าร่วมบริการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
     
              <input type="hidden" name="ID"></input>  
                <label for="formGroupExampleInput">หัวข้อการบริการ</label>
                <select class="form-control" name="SERVICE_ID">
                <option value="">กรุณาเลือก</option>
                  <?php foreach($services as $key=>$value): ?>
                    <option value="<?php echo $value['SERVICE_ID'];?>"><?php echo $value['SERVICE_TITLE'];?></option>
                  <?php endforeach; ?>
                </select>
            
   
                <label for="formGroupExampleInput">เวลาเริ่มการบริการ</label>
                <input type="text" class="form-control" rows="3" placeholder="เวลาเริ่มการบริการ" id="edit_SERVICE_P_START_DATE" name="edit_SERVICE_P_START_DATE"  value="<?php echo "".date("08:00");?>">

                
    

                <label for="formGroupExampleInput">ชั่วโมงในการเข้าร่วม</label>
                <input class="form-control" rows="3" placeholder="ชั่วโมงในการเข้าร่วม" name="TOTAL_HOUR_SERVICE_P" onkeyup="main.checkcountinput(this)"></input>
          

                

              </div>
              <div class="col-md-6">
                
                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการ</label>
                <select class="form-control" name="PERSONNEL_ID">
                <option value="">กรุณาเลือก</option>
                  <?php foreach($personnels as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                  <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">เวลาสิ้นสุดการบริการ</label>
                <input type="text" class="form-control" rows="3"  id="edit_SERVICE_P_END_DATE" name="edit_SERVICE_P_END_DATE"  value="<?php echo "".date("16:00");?>">

                
       

 
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_service_participants();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>






<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>



</body>
<script>
  jQuery('#SERVICE_P_START_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });

  jQuery('#SERVICE_P_END_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });
      
  jQuery('#edit_SERVICE_P_START_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });

  jQuery('#edit_SERVICE_P_END_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });
    
     
</script>
</html>
