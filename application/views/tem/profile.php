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
                  <?php if ($_SESSION['image'] == ""): ?>
                    <input type="file" name="files" id="files">
                  <?php endif; ?>
                  <input type="hidden" name="ADMIN_ID"/>
                  <img src="<?php echo base_url("/images/profile/".$_SESSION['image']);?>" class="img-reponsive img-thumbnail" alt="กรุณาใส่รูป">
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
                          <button type="submit" class="btn btn-danger">แก้ไขข้อมูล</button>
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
