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
              <li class="breadcrumb-item active">ข้อมูลผู้ใช้</li>
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
                  <input type="file" name="files" id="files">
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
            <div class="card">
             <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
             
                  <!-- /.tab-pane -->

                  <!-- <div class="tab-content" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">ชื่อ-นามสกุล</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_NAME'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$personnels['PERSONNEL_SURNAME']?></label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">ชื่อ-นามสกุลภาษาอังกฤษ</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_NAME_EN'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$personnels['PERSONNEL_SURNAME_EN']?></label>
                          </div>
                        </div>
                  
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-4 col-form-label">Email</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_EMAIL']?></label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">เบอร์โทรศัพท์</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_MOBILE']?></label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">เบอร์เลขที่บ้าน</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_PHONE']?></label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">เบอร์สำนักงาน</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_PHONE_EXTENSION']?></label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">สายงาน</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_CATEGORY_DETAIL']?></label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">รูปแบบการทำงาน</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_TYPE_DETAIL']?></label>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">สถานะการทำงาน</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['PERSONNEL_STATUS_DETAIL']?></label>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">แผนกที่รับผิดชอบ</label>
                          <div class="col-sm-8">
                            <label for="inputName" class="col-sm-8 col-form-label">:<?php echo $personnels['DEPARTMENT_NAME_TH']?></label>
                          </div>
                        </div>         
                        <div class="form-group row">
                         
                        </div>

                    </form>
                  </div> -->
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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
</script>
</body>
</html>
