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
            <h1 class="m-0" >ตารางวิชาการ personnels</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">บุคุุคลากร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
      <div class="row">
        <div class="col-lg-2 hade-show">รหัส</div>
        <div class="col-lg-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 hade-show">นามสกุล</div>
        <div class="col-lg-2 hade-show">ประเภทการลา</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($leaves as $key=>$value):?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_ID'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['LEAVE_TYPE'];?></div>
         

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_leaves(
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
              '<?php echo $value['LEAVE_STATUS'];?>',
              '<?php echo $value['LEAVE_FILE'];?>');">
               แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_leaves('<?php echo $value['LEAVE_ID'];?>')">ลบข้อมูล</button>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_leaves').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_leaves" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล บุคลากร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">

              <label for="formGroupExampleInput">ผู้ขอลา</label>
                <select class="form-control" name="PERSONNEL_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                 </select>

                <label for="formGroupExampleInput">สถานที่</label>
                <input type="text" class="form-control"  name="WRITE_PLACE" placeholder="สถานที่"  >

                
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

                
                <label for="formGroupExampleInput">การลาทั้งหมด</label>
                <input type="text" class="form-control"  name="LEAVE_TOAL" placeholder="จำนวนการลาทั้งหมด">

                <label for="formGroupExampleInput">หัวข้อการลาครั้งลาสุด</label>
                <select class="form-control" name="LAST_LEAVE_TYPE_ID" >
                <option value="">กรุณาเลือก</option>
                  <?php foreach($leave_types as $key=>$value): ?>
                    <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                  <?php endforeach; ?>
                </select>

               
                
                <label for="formGroupExampleInput">ลาครั้งล่าสุดตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

                <label for="formGroupExampleInput">เจ้าหน้าที่</label>
                <select class="form-control" name="OFFICER">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                </select>

                <label for="formGroupExampleInput">สถานะการลา</label>
                <input type="text" class="form-control"  name="LEAVE_STATUS" placeholder="สถานะการลา"> 

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

               

                <label for="formGroupExampleInput">ไม่ได้ใช้</label>
                <input type="text" class="form-control"  name="PERSONNEL_PHONE" placeholder="ไม่ได้ใช้">

                

                <label for="formGroupExampleInput">จำนวนการลาครั้งลาสุด</label>
                <input type="text" class="form-control"  name="LAST_LEAVE_TOAL" placeholder="จำนวนการลาครั้งลาสุด" >

              
                <label for="formGroupExampleInput">ลาครั้งลาสุดถึงวันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_END_DATE" placeholder="ถึงวันที่">


            
                <label for="formGroupExampleInput">หัวหน้างาน</label>
                <select class="form-control" name="SUPERVISOR_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                 </select>

            
     


                <label for="formGroupExampleInput">ไฟล์การลา</label>
                <input type="file" class="form-control"  name="LEAVE_FILE" placeholder="ไฟล์การลา" >

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
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล บุคลากร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">

              <label for="formGroupExampleInput">ผู้ขอลา</label>
                <select class="form-control" name="PERSONNEL_ID">
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">สถานที่</label>
                <input type="text" class="form-control"  name="WRITE_PLACE" placeholder="สถานที่"  >

                
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

                
                <label for="formGroupExampleInput">การลาทั้งหมด</label>
                <input type="text" class="form-control"  name="LEAVE_TOAL" placeholder="จำนวนการลาทั้งหมด">

                <label for="formGroupExampleInput">หัวข้อการลาครั้งลาสุด</label>
                <select class="form-control" name="LAST_LEAVE_TYPE_ID" >
                <option value="">กรุณาเลือก</option>
                  <?php foreach($leave_types as $key=>$value): ?>
                    <option value="<?php echo $value['LEAVE_TYPE_ID'];?>"><?php echo $value['LEAVE_TYPE'];?></option>
                  <?php endforeach; ?>
                </select>

               
                
                <label for="formGroupExampleInput">ลาครั้งล่าสุดตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_START_DATE" placeholder="ตั้งแต่วันที่">

                <label for="formGroupExampleInput">เจ้าหน้าที่</label>
                <select class="form-control" name="OFFICER">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                </select>

                <label for="formGroupExampleInput">สถานะการลา</label>
                <input type="text" class="form-control"  name="LEAVE_STATUS" placeholder="สถานะการลา"> 

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

               

                <label for="formGroupExampleInput">ไม่ได้ใช้</label>
                <input type="text" class="form-control"  name="PERSONNEL_PHONE" placeholder="ไม่ได้ใช้">

                

                <label for="formGroupExampleInput">จำนวนการลาครั้งลาสุด</label>
                <input type="text" class="form-control"  name="LAST_LEAVE_TOAL" placeholder="จำนวนการลาครั้งลาสุด" >

              
                <label for="formGroupExampleInput">ลาครั้งลาสุดถึงวันที่</label>
                <input type="date" class="form-control"  name="LAST_LEAVE_END_DATE" placeholder="ถึงวันที่">


            
                <label for="formGroupExampleInput">หัวหน้างาน</label>
                <select class="form-control" name="SUPERVISOR_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                 </select>

            
     


                <label for="formGroupExampleInput">ไฟล์การลา</label>
                <input type="file" class="form-control"  name="LEAVE_FILE" placeholder="ไฟล์การลา" >

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


<div class="modal fade" id="show_leaves" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แสดงข้อมูล บุคลากร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
                <label for="formGroupExampleInput">รหัสผู้สร้างบุคลากร</label>
                <!-- <input type="text" class="form-control"  name="PERSONNEL_CREATE_BY" placeholder="รหัสผู้สร้างบุคลากร" readonly > -->
              <br>
                <label class="PERSONNEL_CREATE_BY"></label>
                <label for="formGroupExampleInput">ชื่อผู้ใช้</label>
                
                <input type="text" class="form-control"  name="PERSONNEL_USERNAME" placeholder="ชื่อผู้ใช้">

                <label for="formGroupExampleInput">ชื่อ</label>
                <input type="text" class="form-control"  name="PERSONNEL_NAME" placeholder="ชื่อ">

                <label for="formGroupExampleInput">ชื่อภาษาอังกฤษ</label>
                <input type="text" class="form-control"  name="PERSONNEL_NAME_EN" placeholder="ชื่อภาษาอังกฤษ">

                <label for="formGroupExampleInput">เพศ</label>
                <div class="row radioinput">    
                  <div class="col-md-6">  
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PERSONNEL_SEX" checked="" value="1">
                      <label class="form-check-label" >ชาย</label>
                    </div>
                  </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PERSONNEL_SEX"  value="2">
                      <label class="form-check-label">หญิง</label>
                    </div>
                </div>  

                <label for="formGroupExampleInput">อีเมล</label>
                <input type="text" class="form-control"  name="PERSONNEL_EMAIL" placeholder="อีเมล">

                <label for="formGroupExampleInput">เบอร์โทรศัพท์บ้าน</label>
                <input type="text" class="form-control"  name="PERSONNEL_MOBILE" placeholder="เบอร์โทรศัพท์บ้าน 10 หลัก">

                <label for="formGroupExampleInput" >รูปแบบการทำงาน</label>
              <select class="form-control" name="PERSONNEL_TYPE_ID">
                <?php foreach($personnel_types as $key=>$value): ?>
                  <option value="<?php echo $value['PERSONNEL_TYPE_ID'];?>"><?php echo $value['PERSONNEL_TYPE_DETAIL'];?></option>
                <?php endforeach; ?>
              </select>

              <label for="formGroupExampleInput">สายงาน</label>
              <select class="form-control" name="PERSONNEL_CATEGORY_ID" >
                <?php foreach($personnel_categories as $key=>$value): ?>
                  <option value="<?php echo $value['PERSONNEL_CATEGORY_ID'];?>"><?php echo $value['PERSONNEL_CATEGORY_DETAIL'];?></option>
                <?php endforeach; ?>
              </select>

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >รหัสบุคลากร 6 หลัก</label>
                <input type="text" class="form-control"  name="PERSONNEL_ID" placeholder="รหัสบุคลากร" onkeyup="main.checkcountinput(this)">
                  
                <label for="formGroupExampleInput">รหัสผ่าน</label>
                <div class="input-group input-group-md">
                  <input type="password" class="form-control"  id="myInputedit"  name="PERSONNEL_PASSWORD" placeholder="รหัสผ่าน">
                  <span class="input-group-append">
                    <button type="checkbox" class="btn btn-info btn-flat"name="PERSONNEL_PASSWORD"  onclick="myFunctionedit()" id="myInputedit">แสดง</button>
                  </span>
                </div>
                <label for="formGroupExampleInput">นามสกุล</label>
                <input type="text" class="form-control"  name="PERSONNEL_SURNAME" placeholder="นามสกุล">

                <label for="formGroupExampleInput">นามสกุลภาษาอังกฤษ</label>
                <input type="text" class="form-control"  name="PERSONNEL_SURNAME_EN" placeholder="นามสกุลภาษาอังกฤษ">

                <label for="formGroupExampleInput">วันที่สร้าง</label>
                <input type="date" class="form-control"  name="PERSONNEL_CRETTE_DATE" placeholder="วันที่สร้าง">

                <label for="formGroupExampleInput">เบอร์โทรศัพท์ส่วนตัว</label>
                <input type="text" class="form-control"  name="PERSONNEL_PHONE" placeholder="เบอร์โทรศัพท์ส่วนตัว 10 หลัก">

                <label for="formGroupExampleInput">เบอร์โทรศัพท์สำนักงาน</label>
                <input type="text" class="form-control"  name="PERSONNEL_PHONE_EXTENSION" placeholder="เบอร์โทรศัพท์สำนักงาน" >

              <label for="formGroupExampleInput">สถานะการทำงาน</label>
              <select class="form-control" name="PERSONNEL_STATUS_ID">
                <?php foreach($personnel_statuses as $key=>$value): ?>
                  <option value="<?php echo $value['PERSONNEL_STATUS_ID'];?>"><?php echo $value['PERSONNEL_STATUS_DETAIL'];?></option>
                <?php endforeach; ?>
              </select>
    
              <label for="formGroupExampleInput">แผนก</label>
              <select class="form-control" name="DEPARTMENT_ID" >
                <?php foreach($departments as $key=>$value): ?>
                  <option value="<?php echo $value['DEPARTMENT_ID'];?>"><?php echo $value['DEPARTMENT_NAME_TH'];?></option>
                <?php endforeach; ?>
              </select>

            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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
