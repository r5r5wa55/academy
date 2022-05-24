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
      <a href="../../index2.html" class="h1"><b>เข้าสู่ระบบ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ระบบจัดการฐานข้อมูล</p>
  



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
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                แสดงรหัสผ่าน
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            
          <button type="button" class="btn btn-primary" onclick="main.check_login();">เข้าสู่ระบบ</button>



          </div>
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
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	// if ('WebSocket' in window) {
	// 	(function () {
	// 		function refreshCSS() {
	// 			var sheets = [].slice.call(document.getElementsByTagName("link"));
	// 			var head = document.getElementsByTagName("head")[0];
	// 			for (var i = 0; i < sheets.length; ++i) {
	// 				var elem = sheets[i];
	// 				var parent = elem.parentElement || head;
	// 				parent.removeChild(elem);
	// 				var rel = elem.rel;
	// 				if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
	// 					var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
	// 					elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
	// 				}
	// 				parent.appendChild(elem);
	// 			}
	// 		}
	// 		var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
	// 		var address = protocol + window.location.host + window.location.pathname + '/ws';
	// 		var socket = new WebSocket(address);
	// 		socket.onmessage = function (msg) {
	// 			if (msg.data == 'reload') window.location.reload();
	// 			else if (msg.data == 'refreshcss') refreshCSS();
	// 		};
	// 		if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
	// 			console.log('Live reload enabled.');
	// 			sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
	// 		}
	// 	})();
	// }
	// else {
	// 	console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	// }
	// ]]>
</script></body>
</html>
