<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <?php 
    $this->load->view('tem/inc_css');
  ?>

  
<body class="hold-transition login-page">
              
  <div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h3"><b>เข้าสู่ระบบนักศึกษา</b></a>
    </div>
    <div class="card-body">
   
  



      <form method="post" id="admin_login">
        <div class="input-group mb-3">
          <input type="text" name="ADMIN_USER" class="form-control" placeholder="Username">
          <span class="text-danger"></span>  
        </div>
        <div class="input-group mb-3">
          <input type="password" name="ADMIN_PASS" class="form-control" placeholder="Password">
          <span class="text-danger"></span>  
        </div>
        <div class="row">
          <div class="col-12"><button type="button" class="btn btn-block btn-outline-primary btn-lg" onclick="main.check_login_student();">เข้าสู่ระบบ</button></div>
          <!-- /.col -->
        </div>
        
      </form>

    
 
  
 
    </div>
 
    <!-- /.card-body -->
  </div>

  <!-- /.card -->
</div>

<!-- /.login-box -->

<!-- jQuery -->

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
