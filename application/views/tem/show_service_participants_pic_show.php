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
            <h1>รายละเอียดการเข้าร่วมการบริการวิชาการ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">เพิ่มรูปภาพ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    

      <div class="container">

        <div class="row col-lg-12">
          <div class="col-md-2"></div>
            <div class="col-md-8"></div>
            <div class="col-md-2">
              <a href="<?php echo base_url()?>index.php/Home/service_participants" class="btn btn-info" >
                      ย้อนกลับ
                  
              </a>
          </div>
        </div>
      
      </div>
      <br>
      
      <div class="container">

        <div class="row col-lg-12 card img-reponsive">
        

              <?php foreach($service_participants_pic as $key=>$value): ?>
                <img src="/images/services_img/<?php echo $value['PIC_GARRY']?>" class="img-show" id="myImg">
              <?php endforeach; ?>
          
        </div>
    
      </div>

</div>

   

  
    <!--Edit Multiple image form -->
   
  </div>
  <!-- /.content-wrapper -->
 

  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
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
