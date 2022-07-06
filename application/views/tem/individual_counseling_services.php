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
            <h1 class="m-0" >ตารางการให้คำปรีกษา</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">บุคุุคลากร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 box-btn-center">
          <a a href="javascritp:void(0)" class="box-btn-add" onclick="$('#add_individual_counseling_services').modal('show');">
            เพิ่มข้อมูล
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ปัญหาที่เจอ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">อาจารย์</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">นักศึกษา</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานะการร้องขอ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($individual_counseling_services as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-left"><?php echo $value['COUNSELING_PROBLEM'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><?php echo $value['PERSONNEL_NAME'];?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $value['PERSONNEL_SURNAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><?php echo $value['STUDENT_NAME'];?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $value['STUDENT_SURNAME'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">

              <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '0'): ?>
                <a>
                ยกเลิกการ
                </a>
              <?php endif; ?>
   
              <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '1'): ?>
                <a href="javascript:void(0)" class="btn-edit" onclick="main.show_individual_counseling_service_status(
                    '<?php echo $value['INDIVIDUAL_COUNSELING_ID'];?>',
                    '<?php echo $value['ADVISOR_ID'];?>',
                    '<?php echo $value['STUDENT_ID'];?>',
                    '<?php echo $value['COUNSELING_TYPE_ID'];?>',
                    '<?php echo $value['COUNSELING_PROBLEM'];?>',
                    '<?php echo $value['COUNSELING_DETAIL'];?>',
                    '<?php echo $value['COUNSELING_SOLVE'];?>',
                    '<?php echo $value['COUNSELING_RESULT'];?>',
                    '<?php echo $value['COUNSELING_CREATE_DATE'];?>',
                    '<?php echo $value['COUNSELING_DATE_START'];?>',
                    '<?php echo $value['COUNSELING_DATE_END'];?>',
                    '<?php echo $value['STUDEN_DATE_START'];?>',
                    '<?php echo $value['STUDEN_DATE_END'];?>',
                    '<?php echo $value['CONTACT'];?>',
                    '<?php echo $value['INDIVIDUAL_COUNSELING_STATUS'];?>');">
                  มีการร้องขอ
                </a>
              <?php endif; ?>
              <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '2'): ?>
                <a>
                  รอนักศึกษา(กดยืนยัน)
                </a>
     
              <?php endif; ?>
              <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '3'): ?>
                <a href="javascript:void(0)" class="btn-edit" onclick="main.conf_teacher_individual_counseling_service_studen(
                    '<?php echo $value['INDIVIDUAL_COUNSELING_ID'];?>',
                    '<?php echo $value['ADVISOR_ID'];?>',
                    '<?php echo $value['STUDENT_ID'];?>',
                    '<?php echo $value['COUNSELING_TYPE_ID'];?>',
                    '<?php echo $value['COUNSELING_PROBLEM'];?>',
                    '<?php echo $value['COUNSELING_DETAIL'];?>',
                    '<?php echo $value['COUNSELING_SOLVE'];?>',
                    '<?php echo $value['COUNSELING_RESULT'];?>',
                    '<?php echo $value['COUNSELING_CREATE_DATE'];?>',
                    '<?php echo $value['COUNSELING_DATE_START'];?>',
                    '<?php echo $value['COUNSELING_DATE_END'];?>',
                    '<?php echo $value['STUDEN_DATE_START'];?>',
                    '<?php echo $value['STUDEN_DATE_END'];?>',
                    '<?php echo $value['CONTACT'];?>',
                    '<?php echo $value['INDIVIDUAL_COUNSELING_STATUS'];?>',
                    '<?php echo $value['STUDEN_DATE_CONF_START'];?>');">
                  ยืนยันข้อมูล
                </a>
              <?php endif; ?>
              <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '4'): ?>
                <a>
                  รอผลลัพท์จากนักศึกษา
                </a>
              <?php endif; ?>
              <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '5'): ?>
                  <a class="susscee">
                    เสร็จสิ้น
                  </a>
              <?php endif; ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_individual_counseling_services(
                    '<?php echo $value['INDIVIDUAL_COUNSELING_ID'];?>',
                    '<?php echo $value['ADVISOR_ID'];?>',
                    '<?php echo $value['STUDENT_ID'];?>',
                    '<?php echo $value['COUNSELING_TYPE_ID'];?>',
                    '<?php echo $value['COUNSELING_PROBLEM'];?>',
                    '<?php echo $value['COUNSELING_DETAIL'];?>',
                    '<?php echo $value['COUNSELING_SOLVE'];?>',
                    '<?php echo $value['COUNSELING_RESULT'];?>',
                    '<?php echo $value['COUNSELING_CREATE_DATE'];?>',
            
                    '<?php echo $value['STUDEN_DATE_START'];?>',
                    '<?php echo $value['STUDEN_DATE_END'];?>',
                    '<?php echo $value['CONTACT'];?>',
                    '<?php echo $value['INDIVIDUAL_COUNSELING_STATUS'];?>');">
              แก้ไขข้อมูล
            </a>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_individual_counseling_services(
              '<?php echo $value['INDIVIDUAL_COUNSELING_ID'];?>');">
              ลบข้อมูล
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    
    </div>
    </div>
    </div>


<div class="modal fade" id="add_individual_counseling_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การให้คำปรีกษา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
              <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้ให้คำปรึกษา</label>
                    <select class="form-control" name="ADVISOR_ID">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >ผู้ให้คำปรึกษา</label>
                  <input type="text" class="form-control"  name="ADVISOR_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?>            

        
   
                <label for="formGroupExampleInput">หัวข้อ</label>
                <select class="form-control" name="COUNSELING_TYPE_ID">
                <option value="">กรุณาเลือก</option>

                <?php foreach($counseling_types as $key=>$value): ?>
                  <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                <?php endforeach; ?>
              </select>

                <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                <textarea class="form-control" rows="3" placeholder="การแก้ปัญหา" name="COUNSELING_PROBLEM"></textarea>
              
                <label for="formGroupExampleInput">การแก้ปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_SOLVE"></textarea>

              

              

                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="COUNSELING_DATE" placeholder="">

                

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >ผู้ขอคำปรีกษา</label>
                <select class="form-control" name="STUDENT_ID">
                <option value="">กรุณาเลือก</option>
                <?php foreach($students as $key=>$value): ?>
                  <option value="<?php echo $value['STUDENT_ID'];?>"><?php echo $value['STUDENT_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['STUDENT_SURNAME'];?></option>
                <?php endforeach; ?>
              </select>
                  
              <label for="formGroupExampleInput">วันที่ยื่นคำขอ</label>
                <input type="date" class="form-control"  name="COUNSELING_CREATE_DATE" placeholder="วันที่ยื่นคำขอ">

                <label for="formGroupExampleInput">รายละเอียดของปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="รายละเอียดของปัญหา" name="COUNSELING_DETAIL"></textarea>
               
                <label for="formGroupExampleInput">ผลลัพธ์</label>
                <textarea class="form-control" rows="3" placeholder="ผลลัพธ์ที่เกิดขี้น" name="COUNSELING_RESULT"></textarea>
                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="STUDEN_DATE" placeholder="">
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_individual_counseling_services();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_individual_counseling_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูล การให้คำปรีกษา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
                <input type="hidden" name='INDIVIDUAL_COUNSELING_ID'> 
                <label for="formGroupExampleInpt" >ผู้ทำงานวิจัย</label>
                <input type="text" class="form-control"  name="ADVISOR_ID" readonly ">
                <label for="formGroupExampleInput">หัวข้อ</label>
                <select class="form-control" name="COUNSELING_TYPE_ID">
                  <option value="">กรุณาเลือก</option>
                  <?php foreach($counseling_types as $key=>$value): ?>
                    <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                  <?php endforeach; ?>
                </select>
                <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                <textarea class="form-control" rows="3" placeholder="การแก้ปัญหา" name="COUNSELING_PROBLEM"></textarea>
                <label for="formGroupExampleInput">การแก้ปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_SOLVE"></textarea>
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="COUNSELING_DATE" placeholder="">
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >ผู้ขอคำปรีกษา</label>
                <select class="form-control" name="STUDENT_ID">
                <option value="">กรุณาเลือก</option>
                <?php foreach($students as $key=>$value): ?>
                  <option value="<?php echo $value['STUDENT_ID'];?>"><?php echo $value['STUDENT_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['STUDENT_SURNAME'];?></option>
                <?php endforeach; ?>
              </select>
                  
              <label for="formGroupExampleInput">วันที่ยื่นคำขอ</label>
                <input type="date" class="form-control"  name="COUNSELING_CREATE_DATE" placeholder="วันที่ยื่นคำขอ">

                <label for="formGroupExampleInput">รายละเอียดของปัญหา</label>
                <textarea class="form-control" rows="3" placeholder="รายละเอียดของปัญหา" name="COUNSELING_DETAIL"></textarea>
               
                <label for="formGroupExampleInput">ผลลัพธ์</label>
                <textarea class="form-control" rows="3" placeholder="ผลลัพธ์ที่เกิดขี้น" name="COUNSELING_RESULT"></textarea>

                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="STUDEN_DATE" placeholder=""> 
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_individual_counseling_services();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="show_individual_counseling_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">การขอคำปรึกษา</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <div class="row">    
                  <div class="col-md-6">
           
                    <!-- level 1 แสดงไอดีผู้เพื่ม-->
                    <input type="hidden" class="form-control"  id="INDIVIDUAL_COUNSELING_ID"  name="INDIVIDUAL_COUNSELING_ID" readonly >

                    <label for="formGroupExampleInpt" >วันที่กรอกข้อมูล</label>
                    <input type="text" class="form-control"  id="COUNSELING_CREATE_DATE"  name="COUNSELING_CREATE_DATE" readonly >
                    <label for="formGroupExampleInput">หัวข้อการขอคำปรึกษา</label>
                    <select class="form-control" name="COUNSELING_TYPE_ID" disabled>
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($counseling_types as $key=>$value): ?>
                        <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                    <label for="formGroupExampleInput">วันที่สะดวก(นักศึกษา)</label>
                    <input type="text" class="form-control"  name="STUDEN_DATE_START" id="STUDEN_DATE_START" readonly placeholder="เลือกวันที่ว่าง">
                  

                    <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                    <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_PROBLEM" readonly></textarea>
               
                    <label for="formGroupExampleInput">วันที่สะดวก(อาจารย์)</label>
                    <input type="text" class="form-control"  name="COUNSELING_DATE_START" id="COUNSELING_DATE_START" readonly placeholder="เลือกวันที่ว่าง">
                

                   
                    <label for="formGroupExampleInput">คำแนะนำ</label>
                    <textarea class="form-control" rows="3" placeholder="วิธีการแก้ปัญหา" name="COUNSELING_DETAIL" ></textarea>
         
             
  

                
                  </div>


                  <div class="col-md-6">
                    <label for="formGroupExampleInput" >รหัสผู้ขอคำปรีกษา</label>
                    <input type="text" class="form-control"  name="STUDENT_ID" value="<?php echo $_SESSION['STUDENT_ID'];?>" readonly >
                    <label for="formGroupExampleInput" >ผู้ให้คำปรึกษา</label>
                    <select class="form-control" name="ADVISOR_ID" disabled>
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
       
                    <label for="formGroupExampleInput">ถึงวันที่(นักศึกษา)</label>
                    <input type="text" class="form-control"  name="STUDEN_DATE_END" id="STUDEN_DATE_END" readonly placeholder="เลือกวันที่ว่าง">
                
                    <label for="formGroupExampleInput">ช่องทางในการติดต่อ</label>
                    <textarea class="form-control" rows="3" placeholder="ช่องทางอื่นๆ facebook Line" name="CONTACT" readonly></textarea>

                    <label for="formGroupExampleInput">ถึงวันที่(อาจารย์)</label>
                    <input type="text" class="form-control"  name="COUNSELING_DATE_END" id="COUNSELING_DATE_END" readonly placeholder="เลือกวันที่ว่าง">
                
                  
              
             
                </div>    
              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" onclick="main.edit_status_individual_counseling_services();">ยืนยันข้อมูล</button>
              
            </div>
          </div>
        </div>
      </div>
</div>



  <div class="modal fade" id="conf_individual_counseling_service_studen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">การให้คำปรีกษา</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="formGroupExampleInpt"><h3>การลาครั้งล่าสุด</h3></label>
            <div class="form-group">
              <div class="row">   
                <!-- ซ่้ายบน -->
                <div class="col-md-6">
                  <input type="hidden" class="form-control"  id="INDIVIDUAL_COUNSELING_ID"  name="INDIVIDUAL_COUNSELING_ID" readonly >
                  <label for="formGroupExampleInpt" >วันที่กรอกข้อมูล</label>
                  <input type="text" class="form-control"  id="COUNSELING_CREATE_DATE"  name="COUNSELING_CREATE_DATE" readonly >
                  <label for="formGroupExampleInput">หัวข้อการขอคำปรึกษา</label>
                  <select class="form-control" name="COUNSELING_TYPE_ID" disabled>
                    <option value="">กรุณาเลือก</option>
                    <?php foreach($counseling_types as $key=>$value): ?>
                      <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="formGroupExampleInput">วันที่สะดวก(นักศึกษา)</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_START" id="STUDEN_DATE_START" readonly placeholder="เลือกวันที่ว่าง">
                  <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                  <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_PROBLEM" readonly></textarea>
                  <label for="formGroupExampleInput">วันที่สะดวก(อาจารย์)</label>
                  <input type="text" class="form-control"  name="COUNSELING_DATE_START" id="COUNSELING_DATE_START" readonly placeholder="เลือกวันที่ว่าง">
                </div>
                <!-- ซ่้ายบน -->
                  <!-- ขวาบน -->
                <div class="col-md-6">
                  <label for="formGroupExampleInput" >รหัสผู้ขอคำปรีกษา</label>
                  <input type="text" class="form-control"  name="STUDENT_ID" value="<?php echo $_SESSION['STUDENT_ID'];?>" readonly >
                  <label for="formGroupExampleInput" >ผู้ให้คำปรึกษา</label>
                  <select class="form-control" name="ADVISOR_ID" disabled>
                    <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                      <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="formGroupExampleInput">ถึงวันที่(นักศึกษา)</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_END" id="STUDEN_DATE_END" readonly placeholder="เลือกวันที่ว่าง">
                  <label for="formGroupExampleInput">คำแนะนำ</label>
                  <textarea class="form-control" rows="3" placeholder="วิธีการแก้ปัญหา" name="COUNSELING_DETAIL" readonly></textarea>
                  <label for="formGroupExampleInput">ถึงวันที่(อาจารย์)</label>
                  <input type="text" class="form-control"  name="COUNSELING_DATE_END"  readonly placeholder="เลือกวันที่ว่าง">  
                  <input type="hidden" class="form-control"  name="STUDEN_DATE_CONF_END" id="STUDEN_DATE_CONF_END" readonly placeholder="เลือกวันที่ว่าง">
                </div>
                   <!-- ขวาบน -->    
              </div>  
            </div>
            <div class="line-1"></div>



          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="row">    
                <div class="col-md-6">

                  <!-- level 1 แสดงไอดีผู้เพื่ม-->
                  
                  <label for="formGroupExampleInput">วันที่นักศึกษายืนยันขอรับคำปรีกษา</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_CONF_START" id="STUDEN_DATE_CONF_START" readonly placeholder="เลือกวันที่ว่าง">
             
                </div>
              
                <div class="col-md-6">
                  <label for="formGroupExampleInput">ยืนยันการให้คำปรึกษา</label>
                  <div class="row radioinput">    
                    <div class="col-md-6">  
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="INDIVIDUAL_COUNSELING_STATUS" checked="" value="4">
                        <label class="form-check-label" >ยอมรับการให้คำปรึกษา</label>
                      </div>
                    </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="INDIVIDUAL_COUNSELING_STATUS"  value="0">
                        <label class="form-check-label">ไม่ยอมรับการให้คำปรึกษา</label>
                      </div>
                  </div> 
              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" onclick="main.update_conf_teacher_individual_counseling_service_studen();">ตกลง</button>
            </div>
          </div>

        </div>
      </div>
  </div>


<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  $(function(){
      jQuery(function(){
        $.datetimepicker.setLocale('th');
        jQuery('#COUNSELING_DATE_START').datetimepicker({
          format:'Y/m/d',
      
          onShow:function( ct ){
            this.setOptions({
              maxDate:jQuery('#COUNSELING_DATE_END').val()?jQuery('#COUNSELING_DATE_END').val():false
            })
          },
          timepicker:false
        });
        jQuery('#COUNSELING_DATE_END').datetimepicker({
          format:'Y/m/d',
          onShow:function( ct ){
            this.setOptions({
              minDate:jQuery('#COUNSELING_DATE_START').val()?jQuery('#COUNSELING_DATE_START').val():false
            })
          },
          timepicker:false
        });
      });
        
      

  });

 
</script>


</body>
</html>
