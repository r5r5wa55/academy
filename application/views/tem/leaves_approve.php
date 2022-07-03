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
    $jquery_ui_v="1.8.5";  
    $theme=array("0"=>"base","1"=>"black-tie","2"=>"blitzer","3"=>"cupertino","4"=>"dark-hive","5"=>"dot-luv",  
        "6"=>"eggplant", "7"=>"excite-bike","8"=>"flick","9"=>"hot-sneaks","10"=>"humanity","11"=>"le-frog",  
        "12"=>"mint-choc","13"=>"overcast","14"=>"pepper-grinder","15"=>"redmond","16"=>"smoothness",  
        "17"=>"south-street","18"=>"start","19"=>"sunny","20"=>"swanky-purse","21"=>"trontastic","22"=>"ui-darkness",  
        "23"=>"ui-lightness","24"=>"vader");  
    $jquery_ui_theme=$theme[14];  
    ?>  
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
            <h1 class="m-0" >การอนุมัติการลา</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">การลา</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 hade-show">รหัส/ขื่อ/นามสกุล</div>
    
        <div class="col-lg-3 col-md-3 col-sm-3 hade-show">ประเภทการลา</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">จำนวนวันที่ขอลา</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">การอนุมัติ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
      </div>
      <?php foreach($leaves as $key=>$value):?>
        <div class="row body-show-long">
          <div class="col-lg-3 col-md-3 col-sm-3 body-show box-btn-left">
            <?php echo $value['PERSONNEL_ID'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $value['PERSONNEL_SURNAME'];?>
          </div>
         
          <div class="col-lg-3 col-md-3 col-sm-3 body-show box-btn-left"><?php echo $value['LEAVE_TYPE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><?php echo $value['LEAVES_NUMBER_USE'];?></div> 
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">




        

          
            <?php if ($value['SUPERVISOR_STATUS'] == '0'): ?>
              <a href="javascript:void(0);" class="box-btn-add" onclick="main.get_leaves_approve(
                '<?php echo $value['LEAVE_ID'];?>',
                '<?php echo $value['PERSONNEL_ID'];?>');">
                รอรับการอนุมัติ
              </a>
            <?php endif; ?>
            <?php if ($value['SUPERVISOR_STATUS'] == '1'): ?>
              <a class="success">ผ่านการอนุมัติ</a>
            <?php endif; ?>
            <?php if ($value['SUPERVISOR_STATUS'] == '2'): ?>
              ผ่านการอนุมัติ
            <?php endif; ?>
            <?php if ($value['SUPERVISOR_STATUS'] == '3'): ?>
              <a class="danger">ไม่ผ่านการอนุมัติ</a>
            <?php endif; ?>

        
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0);" class="btn-edit" onclick="main.edit_leaves('<?php echo $value['LEAVE_ID'];?>');">
                แก้ไขข้อมูล
              </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_leaves" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">การอนุมัติการลา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="formGroupExampleInpt"><h3>การลาครั้งล่าสุด</h3></label>
        <div class="form-group">
          <div class="row">   
             
            <div class="col-md-6">
              <input type="hidden" name="LEAVE_ID">
              <label for="formGroupExampleInpt" >ผู้ขอลา</label>
              <input type="text" class="form-control"  name="PERSONNEL_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
              <label for="formGroupExampleInput">หัวข้อการลาครั้งลาสุด</label>
              <select class="form-control" name="LAST_LEAVE_TYPE_ID" onchange="main.get_last_leave_type_onchange(this)" disabled>
                <option value="">ยังไม่มีการทำรายการ</option>
                <?php foreach($leave_types as $key=>$value):?>
                  <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">ลาครั้งล่าสุดตั้งแต่วันที่</label>
              
              <input type="text" class="form-control" id="LAST_LEAVE_START_DATE" readonly  name="LAST_LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">
            </div>
            <div class="col-md-6">
              <label for="formGroupExampleInput">วันที่ทำแบบฟอร์ม</label>
              <input type="text" class="form-control"  id="WRITE_DATE"  name="WRITE_DATE" placeholder="วันที่ลา" readonly >
              <div class="row" >
                <div class="col-lg-4 col-md-4 col-sm-4 body-leave-number">
                  <label for="formGroupExampleInput">วันลาทั้งหมด</label>
                  <input type="text" class="form-control"  name="LAST_LEAVE_TYPE_MAX_SHOW" readonly value="0">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 body-leave-number">
                  <label for="formGroupExampleInput">ใช้ไปแล้ว</label>
                  <input type="text" class="form-control"  name="LAST_LEAVE_TOAL"  value="0" readonly> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 body-leave-number">
                  <label for="formGroupExampleInput">จำนวนที่เหลือ</label>
                  <input type="text" class="form-control"  name="LAST_LEAVES_NUMBER_SHOW"  value="0" readonly>
                </div>
              </div> 
              <label for="formGroupExampleInput">ลาครั้งลาสุดถึงวันที่</label>
              <input type="text" class="form-control"  name="LAST_LEAVE_END_DATE" placeholder="ถึงวันที่" readonly>
            </div>    
          </div>  
        </div>
        <div class="line-1"></div>
      </div>
      <div class="modal-body">
        <label for="formGroupExampleInpt"><h3>ข้อมูลการลาปัจจุบัน</h3></label>
        <div class="form-group">
          <div class="row">    
            <div class="col-md-6">

              <!-- level 1 แสดงไอดีผู้เพื่ม-->
              <label for="formGroupExampleInput">หัวข้อการลา</label>
              <select class="form-control" name="LEAVE_TYPE_ID" onchange="main.get_last_leave_type_onchange(this)" disabled>
                <option value="">กรุณาเลือก</option>
                <?php foreach($leave_types as $key=>$value):?>
                  <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">ขอลาตั้งแต่วันที่</label>
              <input type="text" class="form-control" readonly id="LEAVE_START_DATE" name="LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">
              <label for="formGroupExampleInput">สถานที่</label>
              <textarea class="form-control" name="WRITE_PLACE" rows="3" placeholder="สถานที่" readonly></textarea>
              

              <label for="formGroupExampleInput">การอนุมัติ</label>
              <div class="row radioinput">    
                <div class="col-md-6">  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="SUPERVISOR_STATUS" checked="" value="1">
                    <label class="form-check-label" >อนุมัติ</label>
                  </div>
                </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="SUPERVISOR_STATUS"  value="3">
                    <label class="form-check-label">ไม่อนุมัติ</label>
                  </div>
              </div> 
        

            </div>
          
            <div class="col-md-6">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 body-leave-number">
                  <label for="formGroupExampleInput">วันลาทั้งหมด</label>
                  <input type="text" class="form-control"  name="LEAVE_TYPE_MAX_SHOW" placeholder="0" readonly>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 body-leave-number">
                  <label for="formGroupExampleInput">จำนวนวันที่ลา</label>
                  <input type="text" class="form-control"  name="LEAVE_TOAL" placeholder="0" readonly> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 body-leave-number">
                  <label for="formGroupExampleInput">คงเหลือ</label>
                  <input type="text" class="form-control"  name="LEAVES_NUMBER_PLUS" value="0" readonly>
                </div>
              </div>  
              <label for="formGroupExampleInput">ขอลาถึงวันที่</label>
              <input type="text" class="form-control" readonly id="LEAVE_END_DATE" name="LEAVE_END_DATE" placeholder="ถึงวันที่"> 
              
              <label for="formGroupExampleInput">แสดงความคิดเห็น</label>
              <textarea class="form-control" name="SUPERVISOR_OPINION" rows="3" placeholder="แสดงความคิดเห็น"></textarea>
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          <button type="button" class="btn btn-primary" onclick="main.add_edit_leaves_approve();">ยืนยันข้อมูล</button>
        </div>
      </div>









      
    </div>
  </div>
</div>




<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  // $(function(){
  //   jQuery(function(){
  //     $.datetimepicker.setLocale('th');
  //     jQuery('#LEAVE_START_DATE').datetimepicker({
  //       format:'Y/m/d',
    
  //       onShow:function( ct ){
  //         this.setOptions({
  //           maxDate:jQuery('#LEAVE_END_DATE').val()?jQuery('#LEAVE_END_DATE').val():false
  //         })
  //       },
  //       timepicker:false
  //     });
  //     jQuery('#LEAVE_END_DATE').datetimepicker({
  //       format:'Y/m/d',
  //       onShow:function( ct ){
  //         this.setOptions({
  //           minDate:jQuery('#LEAVE_START_DATE').val()?jQuery('#LEAVE_START_DATE').val():false
  //         })
  //       },
  //       timepicker:false
  //     });
  //   });
      
  

  // });

</script>


</body>
</html>
