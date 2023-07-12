 
<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<style>

</style>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <?php 
    $this->load->view('tem/inc_css');
  ?>

<body>
  
<div class="container1">
      <div class="">
        
          <br>
          <h1>ระบบจัดการฐานข้อมูล</h1>
      </div>  
  </div>
  <div class="container">
      <div class="child">
        <a href="<?php echo base_url()?>index.php/Home/home" class="btn-o" style="float:right;">    
        อาจารย์
        </a>
      </div>  

      <div class="child2">
          <a href="<?php echo base_url()?>index.php/Home/students_login" class="btn-o" style="float:left;">     
            นักศึกษา
          </a>
      </div> 

  </div>


<?php $this->load->view('tem/inc_js')?>
<script>
 
</script>
</body>
</html>