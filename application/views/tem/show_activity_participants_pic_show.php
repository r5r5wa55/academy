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
            <h1>รายละเอียดการเข้าร่วมกิจกรรม</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">รายละเอียด</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    
        <div class="container ">

          <div class="row col-lg-12">
            <div class="col-md-2"></div>
              <div class="col-md-8"></div>
              <div class="col-md-2">
                <a href="<?php echo base_url()?>index.php/Home/activity_participants" class="btn btn-info" >
                        ย้อนกลับ
                    
                </a>
            </div>
          </div>
        
        </div>
        <br>
        
        <div class="container show-ser">
          <div class="row col-lg-12 card">
            <br>
            <center><h1><?php echo $activities['PERSONNEL_NAME'];?></h1></center>
            <br>
            <center><h2>เจ้าของ &nbsp;:&nbsp;<?php echo $activities['PERSONNEL_NAME'];?> &nbsp;&nbsp;<?php echo $activities['PERSONNEL_SURNAME'];?></h2></center>
            <br>
            <div class="row service-show  ">
              <div class="col-lg-1"></div> 
              <div class="col-lg-3 ">ชื่อกิจกรรม</div> 
              <div class="col-lg-8"><?php echo $activities['ACTIVITY_NAME'];?></div> 
            </div>
            <div class="row service-show">
              <div class="col-lg-1"></div> 
              <div class="col-lg-3">สถานที่จัดกิจกรรม</div> 
              <div class="col-lg-8"><?php echo $activities['ACTIVITY_PLACE'];?></div> 
        
            </div>
            <div class="row service-show">
              <div class="col-lg-1"></div> 
              <div class="col-lg-3">วันที่จัดกิจกรรม</div> 
              <div class="col-lg-8"><?php echo $activities['ACTIVITY_DATE'];?></div> 
            
            </div>
            <div class="row service-show">
              <div class="col-lg-1"></div> 
              <div class="col-lg-3">รายละเอียด</div> 
              <div class="col-lg-8"><?php echo $activities['ACTIVITY_DETAIL'];?></div> 
            </div>
            <div class="row service-show">
              <div class="col-lg-1"></div> 
              <div class="col-lg-3">ประเภทกิจกรรม</div> 
              <div class="col-lg-8"><?php echo $activities['ACTIVITY_TYPE_NAME'];?></div> 
            </div>
            <div class="row service-show">
              <div class="col-lg-1"></div> 
              <div class="col-lg-3">หมวดหมู่กิจกรรม</div> 
              <div class="col-lg-8"><?php echo $activities['ACTIVITY_CATEGORY_NAME'];?></div> 
            </div>
          </div>
        </div>


        <div class="container">
            <?php if ($activity_participants_pic != ''): ?>
              <div class="row col-lg-12 card img-reponsive">
                <?php foreach($activity_participants_pic as $key=>$value): ?>
                  <img src="/images/activities_img/<?php echo $value['PIC_GARRY']?>" class="img-show" id="myImg" onclick="main.get_show_services_img(this)">
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <?php if ($activity_participants_pic === null): ?>
              <div class="row col-lg-12 card img-reponsive">
                <h1 > ยังไม่ได้เพิ่มรูป</h1>
              </div>
            <?php endif; ?> 
        </div>
    
      

  </div>

   

  
    <!--Edit Multiple image form -->
   
  </div>
  <!-- /.content-wrapper -->
 

  <div id="myModal" class="modal">
    <div class="img1">
        <button class="btn btn-danger" data-dismiss="modal">&times;</button>
        <img src="" class="img-thumbnail img-profile-edit img-show-center hover-img" name="PIC" type="hidden">
    </div>
  </div>

  <!-- Control Sidebar -->
 <!-- /.control-sidebar -->



<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  // Get the modal
</script>

</body>
</html>
