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
  <!-- Navbar -->
 
  <?php $this->load->view('tem/inc_head_menu.php')?>

  <?php $this->load->view('tem/inc_lift_menu')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 2646.44px;">  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ข้อมูลผู้ใช้งาน</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active">ข้อมูลผู้ใช้ </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!-- <img src="////<?php echo base_url("/images/profile/Artboard_1.png");?>" class="img-reponsive img-thumbnail img-profile" alt="กรุณาใส่รูป"> -->
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <div class="upload-btn-wrapper">
                          <button class="btn btn-success btn-sm">แก้ไขรูปภาพ</button>
                             <input type="file" name="files" id="files">
                          
                  </div>
              
                  <input type="hidden" name="PERSONNEL_ID"/>
                  <div class="box-img">
                    <img src="<?php echo base_url("/images/profile/".$_SESSION['PIC']);?>" class="img-reponsive img-thumbnail img-profile" alt="กรุณาใส่รูป">
                  </div>
                </div>

                <h3 class="profile-username text-center">ตำแหน่งการทำงาน</h3>

                <p class="text-muted text-center" ><?php echo $personnels['PERSONNEL_TYPE_DETAIL']?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>เพศ</b> <a class="float-right"><?php echo $personnels['PERSONNEL_SEX'] != 1 ? 'หญิง' : 'ชาย'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>รหัส</b> <a class="float-right"><?php echo $personnels['PERSONNEL_ID']?></a>
                  </li>
                  <li class="list-group-item">
                    <b>เบอร์ติดต่อ</b> <a class="float-right"><?php echo $personnels['PERSONNEL_MOBILE']?></a>
                  </li>
                </ul>
                <a href="javascript:void(0)" class="btn btn-edit-profile" onclick="main.get_edit_profile(
                    '<?php echo $personnels['PERSONNEL_ID'];?>',
                    '<?php echo $personnels['PERSONNEL_NAME'];?>',
                    '<?php echo $personnels['PERSONNEL_SURNAME'];?>',
                    '<?php echo $personnels['PERSONNEL_NAME_EN'];?>',
                    '<?php echo $personnels['PERSONNEL_SURNAME_EN'];?>',
                    '<?php echo $personnels['PERSONNEL_EMAIL'];?>',
                    '<?php echo $personnels['PERSONNEL_MOBILE'];?>',
                    '<?php echo $personnels['PERSONNEL_PHONE'];?>',
                    '<?php echo $personnels['PERSONNEL_PHONE_EXTENSION'];?>',
                    '<?php echo $personnels['PERSONNEL_SEX'];?>',
                    '<?php echo $personnels['PERSONNEL_CREATE_BY'];?>',
                    '<?php echo $personnels['PERSONNEL_CRETTE_DATE'];?>',
                    '<?php echo $personnels['DEPARTMENT_ID'];?>',
                    '<?php echo $personnels['PERSONNEL_TYPE_ID'];?>',
                    '<?php echo $personnels['PERSONNEL_STATUS_ID'];?>',
                    '<?php echo $personnels['PERSONNEL_CATEGORY_ID'];?>', 
                    '<?php echo $personnels['PERSONNEL_USERNAME'];?>',
                    '<?php echo $personnels['PERSONNEL_PASSWORD'];?>',
                    '<?php echo $personnels['level'];?>');">
                  แก้ไขข้อมูล
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- About Me Box -->
          
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card fix-766">
             <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
             
                  <!-- /.tab-pane -->

                  <div class="tab-content" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row we">
                        <img src="/backg/researchers.png" class="img-resear">
                        <div class="col-md-12 front-we">
                          <a href="<?php echo base_url()?>index.php/Home/researchs"><span class="text-resear">งานวิจัย</span></a>
                        </div>
                        <div class="col-md-12 front-we1">
                          <span href="">งานวิจัยล่าสุด 
                            <br>
                            <h6>
                              <?php if ($researchs != ''): ?>
                                <a href="<?php echo base_url("/images/researchs/".$researchs['FILE_RESEARCHS']);?>" target="_blank" class="researchs">
                                  <?php echo $researchs['FILE_RESEARCHS'];?>
                                </a>
                              <?php endif; ?>
                            
                              <?php if ($researchs != '' && $researchs['FILE_RESEARCHS'] == ''): ?>
                                <a>
                                  ยังไม่ได้เพิ่มไฟล์ข้อมูล
                                </a>    
                              <?php endif; ?>
                              <?php if ($researchs == ''): ?>
                                <a>
                                  ยังไม่ได้ทำรายการ
                                </a>    
                              <?php endif; ?>
                            </h6>
                            <h6>มีการดำเนินการวิจัยแล้วทั้งหมด <?php echo $researchs_status?> </h6>
                          </span> 
                        </div>
                      </div>
                      
                      <div class="form-group we3 col-md-12">
                        <!-- <label for="inputName" class="col-sm-4 col-form-label">ชื่อ-นามสกุลภาษาอังกฤษ</label> -->
                        <div class="row">
                          <div class="col-md-6 we4">
                          
                            <img src="/backg/online.png" width="100%" height="100%" class="img-resear">
                            <div class="col-md-12 front-online">
                              <a href="<?php echo base_url()?>index.php/Home/individual_counseling_services"><span>การให้คำปรึกษา</span></a>
                              <br>
                              <br>        
                              <h6 class="leave-online">มีคำร้องขอ <?php echo $individual_counseling_services_status?> รายการ</h6>
                                </div>
                          </div>         
                          <div class="col-md-6 leave-mannger3">
                            <img src="/backg/sick.png" width="100%" height="100%" class="img-resear">
                            <div class="col-md-12 leave-ma3">
                              <a href="<?php echo base_url()?>index.php/Home/leaves"><span class="header">การลาป่วย</span></a>
                              <br>
                              <span>หัวข้อการลาครั้งล่าสุด</span>
                              <br>
                              <?php if ($leaves_name != ''): ?>
                                <a  class="leave3 text-long">
                                  <?php echo $leaves_name['LEAVE_TYPE'];?>
                                </a>
                              <?php endif; ?>

                              <?php if ($leaves_name == ''): ?>
                                <a class="leave3 text-long">
                                  ยังไม่ได้ทำรายการ
                                </a>    
                              <?php endif; ?>
                              <br>        
                              <h6 class="leave-ma3">ลาไปแล้ว <?php echo $leaves_status?> ครั้ง</h6>

                            </div>
                          </div> 

                        </div>              
                      </div>                
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /การอนุมิต -->
          <?php if ($_SESSION['check_OFFICER'] != null && $_SESSION['check_SUPERVISOR_ID'] != null ): ?>
            <div class="col-md-12">
              <div class="card fix">
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
              
                    <!-- /.tab-pane -->
                    <div class="tab-content" id="settings">
                      <form class="form-horizontal">
                    
                        
                        <div class="form-group we3 col-md-12">
                          <!-- <label for="inputName" class="col-sm-4 col-form-label">ชื่อ-นามสกุลภาษาอังกฤษ</label> -->
                            <div class="row">
                                <div class="col-md-6 leave-mannger">  
                                  <img src="/backg/leave-manager.png" width="100%" height="100%" class="img-resear">
                                  <div class="col-md-12 leave-ma">
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve"><span class="color-b">การอนุมัติ</span></a>
                                    <br>
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve"><span class="color-b">ระดับเจ้าหน้าที่</span></a>
                                    <br>
                                    <br>        
                                    <h6 class="leave-ma">มีรายการร้องขอ <?php echo $_SESSION['OFFICER_STATUS']?> รายการ</h6>
                                  </div>
                                </div> 
                                <div class="col-md-6 leave-mannger2">
                                  <img src="/backg/leave-pro.png" width="100%" height="100%" class="img-resear">
                                  <div class="col-md-12 leave-ma2">
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve_supervisor"><span class="color-b">การอนุมัติ</span></a>
                                    <br>
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve_supervisor"><span class="color-b">ระดับหัวหน้า</span></a>
                                    <br>
                                    <br>        
                                    <h6 class="leave-ma">มีรายการร้องขอ  <?php echo $_SESSION['SUPERVISOR_ID']?> รายการ</h6>
                                  </div>
                                </div>
                            </div>
                          </div>              
                        </div>                
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          <?php endif; ?>  

          <?php if ($_SESSION['check_OFFICER'] != null && $_SESSION['check_SUPERVISOR_ID'] == null ): ?>
            <div class="col-md-12">
              <div class="card fix">
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
              
                    <!-- /.tab-pane -->
                    <div class="tab-content" id="settings">
                      <form class="form-horizontal">
                    
                        
                        <div class="form-group we3 col-md-12">
                          <!-- <label for="inputName" class="col-sm-4 col-form-label">ชื่อ-นามสกุลภาษาอังกฤษ</label> -->
                            <div class="row">
                                <div class="col-md-6 leave-mannger">  
                                  <img src="/backg/leave-manager.png" width="100%" height="100%" class="img-resear">
                                  <div class="col-md-12 leave-ma">
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve"><span class="color-b">การอนุมัติ</span></a>
                                    <br>
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve"><span class="color-b">ระดับเจ้าหน้าที่</span></a>
                                    <br>
                                    <br>        
                                    <h6 class="leave-ma">มีรายการร้องขอ <?php echo $_SESSION['OFFICER_STATUS']?> รายการ</h6>
                                  </div>
                                </div> 
                               
                            </div>
                          </div>              
                        </div>                
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          <?php endif; ?>  
        
          <?php if ($_SESSION['check_OFFICER'] == null && $_SESSION['check_SUPERVISOR_ID'] != null ): ?>
            <div class="col-md-12">
              <div class="card fix">
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
              
                    <!-- /.tab-pane -->
                    <div class="tab-content" id="settings">
                      <form class="form-horizontal">
                    
                        
                        <div class="form-group we3 col-md-12">
                          <!-- <label for="inputName" class="col-sm-4 col-form-label">ชื่อ-นามสกุลภาษาอังกฤษ</label> -->
                            <div class="row">
                             
                                <div class="col-md-6 leave-mannger2">
                                  <img src="/backg/leave-pro.png" width="100%" height="100%" class="img-resear">
                                  <div class="col-md-12 leave-ma2">
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve_supervisor"><span >การอนุมัติ</span></a>
                                    <br>
                                    <a href="<?php echo base_url()?>index.php/Home/leaves_approve_supervisor"><span >ระดับหัวหน้า</span></a>
                                    <br>
                                    <br>        
                                    <h6 class="leave-ma">มีรายการร้องขอ  <?php echo $_SESSION['SUPERVISOR_ID']?> รายการ</h6>
                                  </div>
                                </div>
                            </div>
                          </div>              
                        </div>                
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          <?php endif; ?>  
          <!-- /.col -->
        </div>
    
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


            
  <div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูล บุคลากร</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <div class="row">    
                <div class="col-md-6">
                  <label for="formGroupExampleInput">รหัสผู้เพิ่มข้อมูลบุคลากร</label>
                  <input type="text" class="form-control"  name="PERSONNEL_CREATE_BY" placeholder="รหัสผู้แก้ไขบุคลากร" readonly >
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
                  <input type="Email" class="form-control"  name="PERSONNEL_EMAIL" placeholder="อีเมล" onkeyup="main.checkemail(this)">

                  <label for="formGroupExampleInput">เบอร์โทรศัพท์บ้าน</label>
                  <input type="text" class="form-control"  name="PERSONNEL_MOBILE" placeholder="เบอร์โทรศัพท์บ้าน 10 หลัก">
                </div>
                <div class="col-md-6">
                  <label for="formGroupExampleInput" >รหัสบุคลากร 6 หลัก</label>
                  <input type="text" class="form-control"  name="PERSONNEL_ID" placeholder="รหัสบุคลากร" readonly>
                    
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
                  <input type="date" class="form-control"  name="PERSONNEL_CRETTE_DATE" placeholder="วันที่สร้าง" readonly>
                  <label for="formGroupExampleInput">เบอร์โทรศัพท์ส่วนตัว</label>
                  <input type="text" class="form-control"  name="PERSONNEL_PHONE" placeholder="เบอร์โทรศัพท์ส่วนตัว 10 หลัก" onkeyup="main.checkcountinputphone(this)">
                  <label for="formGroupExampleInput">เบอร์โทรศัพท์สำนักงาน</label>
                  <input type="text" class="form-control"  name="PERSONNEL_PHONE_EXTENSION" placeholder="เบอร์โทรศัพท์สำนักงาน" >
              </div>    
            </div>  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="main.edit_profile();">Save changes</button>
            
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Control Sidebar -->
 <!-- /.control-sidebar -->



<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  $('#files').change(function(){
    main.upload_img_profile()   
  });
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


<script type="text/javascript">
  
$(document).ready(function(){
  // Edit Data from Database
  $(document).on("click",".btn-success", function(){
    var editId = $(this).data('id');
    // console.log(editId);
    $.ajax({
      url  :window.location.origin+"/index.php/Home/edit",
      type : "POST",
      cache: false,
      data : {editId:editId},
      success:function(data){
       
        $("#editForm").html(data);
      
      }
      
    });
    
  });




  // Update Data from database
  $(document).on("submit", "#editForm", function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url  :window.location.origin+"/index.php/Home/update",
    
      type : "POST",
      cache: false,
      contentType : false, // you can also use multipart/form-data replace of false
      processData : false,
      data: formData,
      success:function(response){
        location.reload();
        $("#exampleModal").modal();
        alert("Image updated successfully");
       
        fetchData();
       
      }
    });
  });
});



</script>



</body>
</html>
