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
            <h1 class="m-0" >ตารางวิชาการ personnels</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">ตารางวิชาการ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="row">
    
        <div class="col-lg-1 hade-show">รหัส</div>
        <div class="col-lg-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 hade-show">ขื่อ</div>
        <div class="col-lg-2 hade-show">แสดงข้อมูล</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-1 hade-show">ลบข้อมูล</div>
       
      </div>
      <?php foreach($personnels as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-1 body-show"><?php echo $value['PERSONNEL_ID'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['PERSONNEL_STATUS_DETAIL'];?></div>
          <div class="col-lg-2 hade-show">แสดงข้อมูล</div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_personnels(
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
              '<?php echo $value['PERSONNEL_PASSWORD'];?>');">
              แก้ไขข้อมูล
            </button>
          </div>

          <div class="col-lg-1 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_personnels('<?php echo $value['PERSONNEL_ID'];?>')">ลบข้อมูล</button>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_personnels').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
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
                <input type="text" class="form-control"  name="PERSONNEL_CREATE_BY" placeholder="รหัสผู้สร้างบุคลากร" readonly >

                
                <label for="formGroupExampleInput">ไอดี</label>
                <input type="text" class="form-control"  name="PERSONNEL_USERNAME" placeholder="ไอดี">

                
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

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >รหัสบุคลากร</label>
                <input type="text" class="form-control"  name="PERSONNEL_ID" placeholder="รหัสบุคลากร">

                <label for="formGroupExampleInput">รหัสผ่าน</label>
                <input type="password" class="form-control"  name="PERSONNEL_PASSWORD" placeholder="รหัสผ่าน">

               

                <label for="formGroupExampleInput">นามสกุล</label>
                <input type="text" class="form-control"  name="PERSONNEL_SURNAME" placeholder="นามสกุล">

                <label for="formGroupExampleInput">นามสกุลภาษาอังกฤษ</label>
                <input type="text" class="form-control"  name="PERSONNEL_SURNAME_EN" placeholder="นามสกุลภาษาอังกฤษ">

                  <div class="form-group">
                    <label>วันที่สร้าง</label>
                      <div class="input-group date" name="PERSONNEL_CRETTE_DATE" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div div  div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>

              

                <label for="formGroupExampleInput">เบอร์โทรศัพท์ส่วนตัว</label>
                <input type="text" class="form-control"  name="PERSONNEL_PHONE" placeholder="เบอร์โทรศัพท์ส่วนตัว 10 หลัก">

                <label for="formGroupExampleInput">เบอร์โทรศัพท์สำนักงาน</label>
                <input type="text" class="form-control"  name="PERSONNEL_PHONE_EXTENSION" placeholder="เบอร์โทรศัพท์สำนักงาน">

           

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
        <h5 class="modal-title exampleModalLongTitle" id="exampleModalLongTitle" >เเก้ไขข้อมูล บุคลากร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">รหัสบุคลากร</label>
           <input type="text" class="form-control"  name="PERSONNEL_ID" placeholder="รหัสบุคลากร">
          <label for="formGroupExampleInput">ชื่อ</label>
            <input type="text" class="form-control"  name="PERSONNEL_NAME" placeholder="ชื่อ">
          <label for="formGroupExampleInput">นามสกุล</label>
           <input type="text" class="form-control"  name="PERSONNEL_SURNAME" placeholder="นามสกุล">
          <label for="formGroupExampleInput">ชื่อภาษาอังกฤษ</label>
            <input type="text" class="form-control"  name="PERSONNEL_NAME_EN" placeholder="ชื่อภาษาอังกฤษ">
          <label for="formGroupExampleInput">นามสกุลภาษาอังกฤษ</label>
            <input type="text" class="form-control"  name="PERSONNEL_SURNAME_EN" placeholder="นามสกุลภาษาอังกฤษ">
          <label bel for="formGroupExampleInput">อีเมล</label>
            <input type="text" class="form-control"  name="PERSONNEL_EMAIL" placeholder="อีเมล">
          <label for="formGroupExampleInput">เบอร์โทรศัพท์บ้าน</label>
            <input type="text" class="form-control"  name="PERSONNEL_MOBILE" placeholder="เบอร์โทรศัพท์บ้าน 10 หลัก">
          <label for="formGroupExampleInput">เบอร์โทรศัพท์ส่วนตัว</label>
            <input type="text" class="form-control"  name="PERSONNEL_PHONE" placeholder="เบอร์โทรศัพท์ส่วนตัว 10 หลัก">
          <label for="formGroupExampleInput">เบอร์โทรศัพท์สำนักงาน</label>
            <input type="text" class="form-control"  name="PERSONNEL_PHONE_EXTENSION" placeholder="เบอร์โทรศัพท์สำนักงาน">


            <label for="formGroupExampleInput">เพศ</label>
                <div class="row radioinput">    
                  <div class="col-md-6">  
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PERSONNEL_SEX" value="1">
                      <label class="form-check-label">ชาย</label>
                    </div>
                  </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PERSONNEL_SEX" value="2">
                      <label class="form-check-label">หญิง</label>
                    </div>
                </div>  

          <label for="formGroupExampleInput">เพศ</label>
            <input type="text" class="form-control"  name="PERSONNEL_SEX" placeholder="เพศ">


          <label for="formGroupExampleInput">รหัสผู้สร้างบุคลากร</label>
            <input type="text" class="form-control"  name="PERSONNEL_CREATE_BY" placeholder="รหัสผู้สร้างบุคลากร">
          <label for="formGroupExampleInput">วันที่สร้าง</label>
            <input type="text" class="form-control"  name="PERSONNEL_CRETTE_DATE" placeholder="วันที่สร้าง">
          <label for="formGroupExampleInput">สายงาน</label>
          <select class="form-control" name="PERSONNEL_CATEGORY_ID" >
            <?php foreach($personnel_categories as $key=>$value): ?>
              <option value="<?php echo $value['PERSONNEL_CATEGORY_ID'];?>"><?php echo $value['PERSONNEL_CATEGORY_DETAIL'];?></option>
            <?php endforeach; ?>
          </select>
             <label for="formGroupExampleInput">แผนก</label>
          <select class="form-control" name="DEPARTMENT_ID" >
            <?php foreach($departments as $key=>$value): ?>
              <option value="<?php echo $value['DEPARTMENT_ID'];?>"><?php echo $value['DEPARTMENT_NAME_TH'];?></option>
            <?php endforeach; ?>
          </select>
        <label for="formGroupExampleInput" >สถานะการทำงาน</label>
          <select class="form-control" name="PERSONNEL_STATUS_ID">
            <?php foreach($personnel_statuses as $key=>$value): ?>
              <option value="<?php echo $value['PERSONNEL_STATUS_ID'];?>"><?php echo $value['PERSONNEL_STATUS_DETAIL'];?></option>
            <?php endforeach; ?>
          </select>
          <label for="formGroupExampleInput" >รูปแบบการทำงาน</label>
          <select class="form-control" name="PERSONNEL_TYPE_ID">
            <?php foreach($personnel_types as $key=>$value): ?>
              <option value="<?php echo $value['PERSONNEL_TYPE_ID'];?>"><?php echo $value['PERSONNEL_TYPE_DETAIL'];?></option>
            <?php endforeach; ?>
          </select>
          <label for="formGroupExampleInput">ไอดี</label>
            <input type="text" class="form-control"  name="PERSONNEL_USERNAME" placeholder="ไอดี">
          <label for="formGroupExampleInput">รหัสผ่าน</label>
            <input type="text" class="form-control"  name="PERSONNEL_PASSWORD" placeholder="รหัสผ่าน">
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
<script></script>
</body>
</html>
