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
            <h1 class="m-0" >ตารางการลา</h1>
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
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-2 col-md-2 box-btn-center">
          <a href="javascript:void(0);" class="box-btn-add" onclick="$('#add_leaves').modal('show');">
          เพิ่มข้อมูล
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รหัส</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">นามสกุล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ประเภทการลา</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($leaves as $key=>$value):?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_ID'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['LEAVE_TYPE'];?></div> 
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_leaves(
              '<?php echo $value['LEAVE_ID'];?>',
              '<?php echo $value['LEAVE_TYPE_ID'];?>',
              '<?php echo $value['WRITE_PLACE'];?>',
              '<?php echo $value['WRITE_DATE'];?>',
              '<?php echo $value['LEAVE_START_DATE'];?>',
              '<?php echo $value['LEAVE_END_DATE'];?>',
              '<?php echo $value['LEAVE_TOAL'];?>',
              '<?php echo $value['LAST_LEAVE_TYPE_ID'];?>',
              '<?php echo $value['LAST_LEAVE_START_DATE'];?>',
              '<?php echo $value['LAST_LEAVE_END_DATE'];?>',
              '<?php echo $value['LAST_LEAVE_TOAL'];?>',
              '<?php echo $value['OFFICER'];?>',
              '<?php echo $value['SUPERVISOR_ID'];?>',
              '<?php echo $value['SUPERVISOR_OPINION'];?>',
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['LEAVE_STATUS'];?>');">
               แก้ไขข้อมูล
            </a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0);" class="btn-delete" onclick="main.delete_leaves('<?php echo $value['LEAVE_ID'];?>');">
                ลบข้อมูล
              </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<div class="modal fade" id="add_leaves" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การลา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">


              <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้ขอลา</label>
                    <select class="form-control" name="PERSONNEL_ID">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >ผู้ขอลา</label>
                  <input type="text" class="form-control"  name="PERSONNEL_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?>               

        

                <label for="formGroupExampleInput">สถานที่</label>
                <input type="text" class="form-control"  name="WRITE_PLACE" placeholder="สถานที่"  >

                
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

     

                <label for="formGroupExampleInput">หัวข้อการลาครั้งลาสุด</label>
                <select class="form-control" name="LAST_LEAVE_TYPE_ID" >
                <option value="">กรุณาเลือก</option>
                  <?php foreach($leave_types as $key=>$value): ?>
                    <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                  <?php endforeach; ?>
                </select>

               
                
                <label for="formGroupExampleInput">ลาครั้งล่าสุดตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

                           
                <label for="formGroupExampleInput">การลาทั้งหมด</label>
                <input type="text" class="form-control"  name="LEAVE_TOAL" placeholder="จำนวนการลาทั้งหมด">

                <label for="formGroupExampleInput">เจ้าหน้าที่</label>
                <select class="form-control" name="OFFICER">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                </select>

          

                <label for="formGroupExampleInput">ความคิดเห็น</label>
                <textarea class="form-control" name="SUPERVISOR_OPINION" rows="3" placeholder="ความคิดเห็น"></textarea>

              </div>
              <div class="col-md-6">
              <label for="formGroupExampleInput">หัวข้อการลา</label>
              <select class="form-control" name="LEAVE_TYPE_ID" >
               <option value="">กรุณาเลือก</option>
                <?php foreach($leave_types as $key=>$value): ?>
                  <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                <?php endforeach; ?>
              </select>
           
                <label for="formGroupExampleInput">วันที่ลา</label>
                <input type="date" class="form-control"  name="WRITE_DATE" placeholder="วันที่ลา">

                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="LEAVE_END_DATE" placeholder="ถึงวันที่">
                <label for="formGroupExampleInput">จำนวนการลาครั้งลาสุด</label>
                <input type="text" class="form-control"  name="LAST_LEAVE_TOAL" placeholder="จำนวนการลาครั้งลาสุด" >

              
                <label for="formGroupExampleInput">ลาครั้งลาสุดถึงวันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_END_DATE" placeholder="ถึงวันที่">


            
       
                <label for="formGroupExampleInput">สถานะการลา</label>
                <input type="text" class="form-control"  name="LEAVE_STATUS" placeholder="สถานะการลา"> 
                <label for="formGroupExampleInput">หัวหน้างาน</label>
                <select class="form-control" name="SUPERVISOR_ID">
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
          <button type="button" class="btn btn-primary" onclick="main.add_leaves();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="edit_leaves" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไข การลา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">

                <input type="hidden" name="LEAVE_ID">
                <label for="formGroupExampleInput">ผู้ขอลา</label>
                <input type="text" class="form-control"  name="PERSONNEL_ID" placeholder="สถานที่" readonly>
                <label for="formGroupExampleInput">สถานที่</label>
                <input type="text" class="form-control"  name="WRITE_PLACE" placeholder="สถานที่"  >

                
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

             

                <label for="formGroupExampleInput">หัวข้อการลาครั้งลาสุด</label>
                <select class="form-control" name="LAST_LEAVE_TYPE_ID" >
                <option value="">กรุณาเลือก</option>
                  <?php foreach($leave_types as $key=>$value): ?>
                    <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                  <?php endforeach; ?>
                </select>

               
                
                <label for="formGroupExampleInput">ลาครั้งล่าสุดตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">
                   
                <label for="formGroupExampleInput">การลาทั้งหมด</label>
                <input type="text" class="form-control"  name="LEAVE_TOAL" placeholder="จำนวนการลาทั้งหมด">

                <label for="formGroupExampleInput">เจ้าหน้าที่</label>
                <select class="form-control" name="OFFICER">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                </select>

          

                <label for="formGroupExampleInput">ความคิดเห็น</label>
                <textarea class="form-control" name="SUPERVISOR_OPINION" rows="3" placeholder="ความคิดเห็น"></textarea>

              </div>
              <div class="col-md-6">
              <label for="formGroupExampleInput">หัวข้อการลา</label>
              <select class="form-control" name="LEAVE_TYPE_ID" >
               <option value="">กรุณาเลือก</option>
                <?php foreach($leave_types as $key=>$value): ?>
                  <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                <?php endforeach; ?>
              </select>
           
                <label for="formGroupExampleInput">วันที่ลา</label>
                <input type="date" class="form-control"  name="WRITE_DATE" placeholder="วันที่ลา">

                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="LEAVE_END_DATE" placeholder="ถึงวันที่">
                <label for="formGroupExampleInput">จำนวนการลาครั้งลาสุด</label>
                <input type="text" class="form-control"  name="LAST_LEAVE_TOAL" placeholder="จำนวนการลาครั้งลาสุด" >

              
                <label for="formGroupExampleInput">ลาครั้งลาสุดถึงวันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_END_DATE" placeholder="ถึงวันที่">


            
           
                <label for="formGroupExampleInput">สถานะการลา</label>
                <input type="text" class="form-control"  name="LEAVE_STATUS" placeholder="สถานะการลา"> 

                <label for="formGroupExampleInput">หัวหน้างาน</label>
                <select class="form-control" name="SUPERVISOR_ID">
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
          <button type="button" class="btn btn-primary" onclick="main.edit_leaves();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
function myFunctionedit() {
  var x = document.getElementById("myInputedit");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}
</script>


</body>
</html>
