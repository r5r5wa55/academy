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
            <h1 class="m-0" >ตารางการให้คำปรีกษา</h1>
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
        <div class="col-lg-2 hade-show">หัวข้อ</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($individual_counseling_services as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_ID'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['COUNSELING_NAME'];?></div>
         

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_individual_counseling_services(
              '<?php echo $value['INDIVIDUAL_COUNSELING_ID'];?>',
              '<?php echo $value['ADVISOR_ID'];?>',
              '<?php echo $value['STUDENT_ID'];?>',
              '<?php echo $value['COUNSELING_TYPE_ID'];?>',
              '<?php echo $value['COUNSELING_PROBLEM'];?>',
              '<?php echo $value['COUNSELING_DETAIL'];?>',
              '<?php echo $value['COUNSELING_SOLVE'];?>',
              '<?php echo $value['COUNSELING_RESULT'];?>',
              '<?php echo $value['COUNSELING_CREATE_DATE'];?>',
              '<?php echo $value['COUNSELING_DATE'];?>',
              '<?php echo $value['STUDEN_DATE'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_individual_counseling_services('<?php echo $value['INDIVIDUAL_COUNSELING_ID'];?>')">ลบข้อมูล</button>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_individual_counseling_services').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_individual_counseling_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การให้คำปรีกษา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">

              <label for="formGroupExampleInput" >ผู้ให้คำปรึกษา</label>
              <select class="form-control" name="ADVISOR_ID">
              <option value="">กรุณาเลือก</option>
                <?php foreach($personnels as $key=>$value): ?>
                  <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                <?php endforeach; ?>
              </select>
   
                <label for="formGroupExampleInput">หัวข้อ</label>
                <select class="form-control" name="COUNSELING_TYPE_ID">
                <option value="">กรุณาเลือก</option>

                <?php foreach($counseling_types as $key=>$value): ?>
                  <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                <?php endforeach; ?>
              </select>

                <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                <textarea class="form-control" rows="3" placeholder="การแก้ปัญหา" name="COUNSELING_PROBLEM"></textarea>
              
                <label for="formGroupExampleInput">การแก้ปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_SOLVE"></textarea>

              

              

                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="COUNSELING_DATE" placeholder="">

                

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >ผู้ขอคำปรีกษา</label>
                <select class="form-control" name="STUDENT_ID">
                <option value="">กรุณาเลือก</option>
                <?php foreach($students as $key=>$value): ?>
                  <option value="<?php echo $value['STUDENT_ID'];?>"><?php echo $value['STUDENT_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['STUDENT_SURNAME'];?></option>
                <?php endforeach; ?>
              </select>
                  
              <label for="formGroupExampleInput">วันที่ยื่นคำขอ</label>
                <input type="date" class="form-control"  name="COUNSELING_CREATE_DATE" placeholder="วันที่ยื่นคำขอ">

                <label for="formGroupExampleInput">รายละเอียดของปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="รายละเอียดของปัญหา" name="COUNSELING_DETAIL"></textarea>
               
                <label for="formGroupExampleInput">ผลลัพธ์</label>
                <textarea class="form-control" rows="3" placeholder="ผลลัพธ์ที่เกิดขี้น" name="COUNSELING_RESULT"></textarea>

                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="STUDEN_DATE" placeholder="">

         


            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_individual_counseling_services();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="edit_individual_counseling_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การให้คำปรีกษา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
              <input type="hidden" name='INDIVIDUAL_COUNSELING_ID'> 
              <label for="formGroupExampleInput" >ผู้ให้คำปรึกษา</label>
              <select class="form-control" name="ADVISOR_ID">
                <?php foreach($personnels as $key=>$value): ?>
                  <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                <?php endforeach; ?>
              </select>
   
                <label for="formGroupExampleInput">หัวข้อ</label>
                <select class="form-control" name="COUNSELING_TYPE_ID">

                <?php foreach($counseling_types as $key=>$value): ?>
                  <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                <?php endforeach; ?>
              </select>

                <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                <textarea class="form-control" rows="3" placeholder="การแก้ปัญหา" name="COUNSELING_PROBLEM"></textarea>
              
                <label for="formGroupExampleInput">การแก้ปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_SOLVE"></textarea>

              

              

                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="COUNSELING_DATE" placeholder="">

                

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >ผู้ขอคำปรีกษา</label>
                <select class="form-control" name="STUDENT_ID">
                <?php foreach($students as $key=>$value): ?>
                  <option value="<?php echo $value['STUDENT_ID'];?>"><?php echo $value['STUDENT_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['STUDENT_SURNAME'];?></option>
                <?php endforeach; ?>
              </select>
                  
              <label for="formGroupExampleInput">วันที่ยื่นคำขอ</label>
                <input type="date" class="form-control"  name="COUNSELING_CREATE_DATE" placeholder="วันที่ยื่นคำขอ">

                <label for="formGroupExampleInput">รายละเอียดของปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="รายละเอียดของปัญหา" name="COUNSELING_DETAIL"></textarea>
               
                <label for="formGroupExampleInput">ผลลัพธ์</label>
                <textarea class="form-control" rows="3" placeholder="ผลลัพธ์ที่เกิดขี้น" name="COUNSELING_RESULT"></textarea>

                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="STUDEN_DATE" placeholder="">

         


            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_individual_counseling_services();">Save changes</button>
          
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
