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
            <h1 class="m-0" >ข้อมูลบุคคลากร</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">บุคคลากร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php if ($_SESSION['level'] === '1'): ?>  <!-- add_personnels ช่อน -->
      
      <?php endif; ?>
      <!-- /.content-header -->
    <div class="content">
      <div class="row">
        <?php if ($_SESSION['level'] === '1'): ?>  <!-- add_personnels ช่อน -->
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2 box-btn-center">
              <a href="javascript:void(0)" onclick="$('#add_personnels').modal('show');" class="box-btn-add">
              เพิ่มข้อมูล
              </a>
          </div>
        <?php endif; ?>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">รหัส</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">นามสกุล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานะการทำงาน</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      
      <?php foreach($personnels as $key=>$value):?><!-- show_personnels -->
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_ID'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['PERSONNEL_STATUS_DETAIL'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><!-- get_edit_personnels -->
              <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_personnels(
              '<?php echo $value['PERSONNEL_ID'];?>',
              '<?php echo $value['PERSONNEL_NAME'];?>',
              '<?php echo $value['PERSONNEL_SURNAME'];?>',
              '<?php echo $value['PERSONNEL_NAME_EN'];?>',
              '<?php echo $value['PERSONNEL_SURNAME_EN'];?>',
              '<?php echo $value['PERSONNEL_EMAIL'];?>',
              '<?php echo $value['PERSONNEL_MOBILE'];?>',
              '<?php echo $value['PERSONNEL_PHONE'];?>',
              '<?php echo $value['PERSONNEL_PHONE_EXTENSION'];?>',
              '<?php echo $value['PERSONNEL_SEX'];?>',
              '<?php echo $value['PERSONNEL_CREATE_BY'];?>',
              '<?php echo $value['PERSONNEL_CRETTE_DATE'];?>',
              '<?php echo $value['DEPARTMENT_ID'];?>',
              '<?php echo $value['PERSONNEL_TYPE_ID'];?>',
              '<?php echo $value['PERSONNEL_STATUS_ID'];?>',
              '<?php echo $value['PERSONNEL_CATEGORY_ID'];?>', 
              '<?php echo $value['PERSONNEL_USERNAME'];?>',
              '<?php echo $value['PERSONNEL_PASSWORD'];?>',
                '<?php echo $value['level'];?>');">
                แก้ไขข้อมูล
              </a>
        
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><!-- delete_personnels -->
              <a href="javascript:void(0)" class="btn-delete"  onclick="main.delete_personnels('<?php echo $value['PERSONNEL_ID'];?>')">
                ลบข้อมูล
              </a>  
            </div>
        </div>
      <?php endforeach; ?>
      <?php echo $create_links; ?>
   
    </div>
  </div>
</div>

    


<div class="modal fade" id="add_personnels" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล บุคลากร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <div class="row">    
            <div class="col-md-6">
              <label for="formGroupExampleInput">รหัสผู้สร้างบุคลากร</label>
              <input type="text" class="form-control"  name="PERSONNEL_CREATE_BY" placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly > 
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
                    <input class="form-check-input" type="radio" name="PERSONNEL_SEX" checked="" value="2">
                    <label class="form-check-label">หญิง</label>
                  </div>
              </div>  
              <label for="formGroupExampleInput">อีเมล</label>
              <input type="text" class="form-control"  name="PERSONNEL_EMAIL" placeholder="อีเมล">
              <label for="formGroupExampleInput">เบอร์โทรศัพท์บ้าน</label>
              <input type="text" class="form-control"  name="PERSONNEL_MOBILE" placeholder="เบอร์โทรศัพท์บ้าน 10 หลัก">
              <label for="formGroupExampleInput" >รูปแบบการทำงาน</label>
              <select class="form-control" name="PERSONNEL_TYPE_ID">
                <option value="">กรุณาเลือก</option>
                  <?php foreach($personnel_types as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_TYPE_ID'];?>"><?php echo $value['PERSONNEL_TYPE_DETAIL'];?></option>
                  <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">สายงาน</label>
              <select class="form-control" name="PERSONNEL_CATEGORY_ID" >
                <option value="">กรุณาเลือก</option>
                  <?php foreach($personnel_categories as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_CATEGORY_ID'];?>"><?php echo $value['PERSONNEL_CATEGORY_DETAIL'];?></option>
                  <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">สิทธ์การเข้าถึง</label>
              <select name="level" class="form-control" id="level">
                  <option value="">กรุณาเลือก</option>
                  <option value="1">แอดมิน</option>
                  <option value="2">ผู้ใช้งาน</option>
              </select>
            </div>
            <div class="col-md-6">
                <label for="formGroupExampleInput" >รหัสบุคลากร 6 หลัก</label>
                <input type="text" class="form-control"  name="PERSONNEL_ID" placeholder="รหัสบุคลากร" onkeyup="main.checkcountinput(this)">    
                <label for="formGroupExampleInput">รหัสผ่าน</label>
                <div class="input-group input-group-md">
                  <input type="password" class="form-control"  id="myInput"  name="PERSONNEL_PASSWORD" placeholder="รหัสผ่าน">
                  <span class="input-group-append">
                    <button type="checkbox" class="btn btn-info btn-flat"name="PERSONNEL_PASSWORD"  onclick="myFunction()" id="myInput">แสดง</button>
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
                  <option value="">กรุณาเลือก</option>
                  <?php foreach($personnel_statuses as $key=>$value): ?>
                    <option value="<?php echo $value['PERSONNEL_STATUS_ID'];?>"><?php echo $value['PERSONNEL_STATUS_DETAIL'];?></option>
                  <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">แผนก</label>
                <select class="form-control" name="DEPARTMENT_ID" >
                  <option value="">กรุณาเลือก</option>
                  <?php foreach($departments as $key=>$value): ?>
                    <option value="<?php echo $value['DEPARTMENT_ID'];?>"><?php echo $value['DEPARTMENT_NAME_TH'];?></option>
                  <?php endforeach; ?>
                </select>
              
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_personnels();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>


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
