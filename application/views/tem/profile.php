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
  <div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
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
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <input type="file" name="files" id="files">
                
                  <input type="hidden" name="PERSONNEL_ID"/>
                  <img src="<?php echo base_url("/images/profile/".$_SESSION['PIC']);?>" class="img-reponsive img-thumbnail" alt="กรุณาใส่รูป">
                </div>

                <h3 class="profile-username text-center">ตำแหน่งการทำงาน</h3>

                <p class="text-muted text-center" ><?php echo $_SESSION['PERSONNEL_TYPE_DETAIL']?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>เพศ</b> <a class="float-right"><?php echo $_SESSION['PERSONNEL_SEX'] != 1 ? 'หญิง' : 'ชาย'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>รหัส</b> <a class="float-right"><?php echo $_SESSION['PERSONNEL_ID']?></a>
                  </li>
                  <li class="list-group-item">
                    <b>เบอร์ติดต่อ</b> <a class="float-right"><?php echo $_SESSION['PERSONNEL_MOBILE']?></a>
                  </li>
                </ul>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">ข้อมูลทั้งหมด</a></li>
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
             
                  <!-- /.tab-pane -->

                  <div class="tab-content" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">ชื่อ-นามสกุล</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_NAME'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$_SESSION['PERSONNEL_SURNAME']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">ชื่อ-นามสกุล(EN)</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_NAME_EN'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$_SESSION['PERSONNEL_SURNAME_EN']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_EMAIL']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-3 col-form-label">เบอร์โทรศัพท์</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_MOBILE']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label for="inputExperience" class="col-sm-3 col-form-label">เบอร์เลขที่บ้าน</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_PHONE']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label for="inputExperience" class="col-sm-3 col-form-label">เบอร์สำนักงาน</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_PHONE_EXTENSION']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label for="inputExperience" class="col-sm-3 col-form-label">เบอร์</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_PHONE']?></label>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label for="inputExperience" class="col-sm-3 col-form-label">เบอร์</label>
                        <div class="col-sm-9">
                        <label for="inputName" class="col-sm-9 col-form-label">:<?php echo $_SESSION['PERSONNEL_PHONE']?></label>
                        </div>
                      </div>

                 
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger"  onclick="main.get_edit_personnels(
               
               '<?php echo $_SESSION['PERSONNEL_ID'];?>',
               '<?php echo $_SESSION['PERSONNEL_NAME'];?>',
               '<?php echo $_SESSION['PERSONNEL_SURNAME'];?>',
               '<?php echo $_SESSION['PERSONNEL_NAME_EN'];?>',
               '<?php echo $_SESSION['PERSONNEL_SURNAME_EN'];?>',
               '<?php echo $_SESSION['PERSONNEL_EMAIL'];?>',
               '<?php echo $_SESSION['PERSONNEL_MOBILE'];?>',
               '<?php echo $_SESSION['PERSONNEL_PHONE'];?>',
               '<?php echo $_SESSION['PERSONNEL_PHONE_EXTENSION'];?>',
               '<?php echo $_SESSION['PERSONNEL_SEX'];?>',
               '<?php echo $_SESSION['ADMIN_USER_check'];?>',
               '<?php echo $_SESSION['ADMIN_PASS_check'];?>',
               '<?php echo $_SESSION['level'];?>');">
                  แก้ไขข้อมูล</button>
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<div class="modal fade" id="edit_personnels" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <label for="formGroupExampleInput">รหัสผู้แก้ไขบุคลากร</label>
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

              <label for="formGroupExampleInput">สิทธ์การเข้าถึง</label>
              <select name="level" class="form-control" id="level">
                  <option value="1">แอดมิน</option>
                  <option value="2">ผู้ใช้งาน</option>
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
          <button type="button" class="btn btn-primary" onclick="main.edit_personnels();">Save changes</button>
          
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
</script>
</body>
</html>
