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
<body class="we">
   

    <div class="">
      <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0" >การขอคำปรึกษา</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
            
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
            <div class="col-lg-2 col-md-2 col-sm-2 box-btn-center text-long">
              <a a href="javascritp:void(0)" class="box-btn-add" onclick="$('#add_individual_counseling_services').modal('show');">
                เพิ่มข้อมูล
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ปัญหาการขอคำปรึกษา</div>
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show">หมวดหมู่การร้องขอ</div>
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ขื่อ/นามสกุลอาจารย์</div>
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show ">วันที่ยื่นคำขอ</div>
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานะการยื่นคำขอ</div>
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แสดงข้อมูล</div>
          </div>
          <?php foreach($individual_counseling_services as $key=>$value): ?>
            <div class="row body-show-long">
              <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-left text-long">
                &nbsp&nbsp&nbsp<?php echo $value['COUNSELING_PROBLEM'];?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center text-long">
                <?php echo $value['COUNSELING_NAME'];?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center text-long">
                <?php echo $value['PERSONNEL_NAME'];?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <?php echo $value['PERSONNEL_SURNAME'];?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center text-long">
                <?php echo $value['COUNSELING_CREATE_DATE'];?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-cente text-long">
                <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '0'): ?>
                  <a>
                  ยกเลิกรายการ
                  </a>
                <?php endif; ?>
                <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '1'): ?>
                  <a>
                  รอการตอบรับ
                  </a>
                <?php endif; ?>
                <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '2'): ?>
                  <a href="javascript:void(0)" class="btn-edit" onclick="main.conf_individual_counseling_service_studen(
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
                    '<?php echo $value['STUDEN_DATE_CONF_START'];?>',
                    '<?php echo $value['STUDEN_DATE_CONF_END'];?>');">
                    กดยืนยันข้อมูล
                  </a>
                <?php endif; ?>
                <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '3'): ?>
                  <a class="danger">
                    รอการยืนยัน
                  </a>
                <?php endif; ?>
                <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '4'): ?>
                  <a href="javascript:void(0)" class="btn-edit" onclick="main.get_conseling_result_st(
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
                    ผลลัพธ์ที่ได้
                  </a>
                <?php endif; ?>
                <?php if ($value['INDIVIDUAL_COUNSELING_STATUS'] == '5'): ?>
                  <a class="danger">
                    เสร็จสิ้น
                  </a>
                <?php endif; ?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
                <a href="javascript:void(0)" class="btn-edit" onclick="main.show_individual_counseling_service(
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
                    '<?php echo $value['STUDEN_DATE_CONF_START'];?>',
                    '<?php echo $value['DETAIL_NOT'];?>',
                    '<?php echo $value['INDIVIDUAL_COUNSELING_STATUS'];?>');">
                  แสดงข้อมูล
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        
        </div>
    </div>

    
  
    <div class="modal fade" id="add_individual_counseling_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
               
                      <label for="formGroupExampleInpt" >วันที่กรอกข้อมูล</label>
                      <input type="text" class="form-control"  id="COUNSELING_CREATE_DATE"  name="COUNSELING_CREATE_DATE" readonly value="<?php echo date("Y/m/d") ?>">
                    <label for="formGroupExampleInput">หัวข้อการขอคำปรึกษา</label>
                    <select class="form-control" name="COUNSELING_TYPE_ID" >
                      <option value="" >กรุณาเลือก</option>
                      <?php foreach($counseling_types as $key=>$value): ?>
                        <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                      <?php endforeach; ?>
                    </select>


                    <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                    <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_PROBLEM"></textarea>
  
  
                    <label for="formGroupExampleInput">วันที่สะดวก ตั้งแต่</label>
                    <input type="text" class="form-control"  name="STUDEN_DATE_START" id="STUDEN_DATE_START" readonly placeholder="เลือกวันที่ว่าง">
                  </div>


                  <div class="col-md-6">
                    <label for="formGroupExampleInput" >รหัสผู้ขอคำปรีกษา</label>
                    <input type="text" class="form-control"  name="STUDENT_ID" value="<?php echo $_SESSION['STUDENT_ID'];?>" readonly >
                    <label for="formGroupExampleInput" >ผู้ให้คำปรึกษา</label>
                    <select class="form-control" name="ADVISOR_ID">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>

                    <label for="formGroupExampleInput">ช่องทางในการติดต่อ</label>
                    <textarea class="form-control" rows="3" placeholder="ช่องทางอื่นๆ facebook Line" name="CONTACT"></textarea>
         
                    <label for="formGroupExampleInput">ถึงวันที่</label>
                    <input type="text" class="form-control"  name="STUDEN_DATE_END" id="STUDEN_DATE_END" readonly placeholder="เลือกวันที่ว่าง">
                </div>    
              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" onclick="main.add_individual_counseling_services_student();">ยืนยันข้อมูล</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  


    <div class="modal fade" id="conf_individual_counseling_service_studen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="formGroupExampleInpt"><h3>การขอคำปรึกษา</h3></label>
            <div class="form-group">
              <div class="row">   
                
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
              </div>  
            </div>
            <div class="line-1"></div>

          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="row">    
                <div class="col-md-6">

                  <!-- level 1 แสดงไอดีผู้เพื่ม-->
                  
                  <label for="formGroupExampleInput">*ยืนยันวันที่ขอคำปรึกษา</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_CONF_START" id="STUDEN_DATE_CONF_START" readonly placeholder="เลือกวันที่ว่าง">
                  <label for="formGroupExampleInput">*กรณีไม่ยอมรับการให้คำปรึกษา</label>
                  <textarea class="form-control" rows="3" placeholder="เนื่องจากวันไม่ตรงตามต้องการ หรือ ปัญหาได้รับการแก้ไขแล้ว" name="DETAIL_NOT"></textarea>

                </div>
              
                <div class="col-md-6">
                  <label for="formGroupExampleInput">การยินยอม</label>
                  <div class="row radioinput">    
                    <div class="col-md-6">  
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="INDIVIDUAL_COUNSELING_STATUS" checked="" value="3">
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" onclick="main.update_conf_individual_counseling_service_studen();">ตกลง</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    


    <div class="modal fade" id="individual_counseling_filnel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การลา</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="formGroupExampleInpt"><h3>การลาครั้งล่าสุด</h3></label>
            <div class="form-group">
              <div class="row">   
                
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
              </div>  
            </div>

            <div class="line-1"></div>
            <label for="formGroupExampleInput">วันที่เข้ารับการให้คำปรึกษา</label>
            <input type="text" class="form-control"  name="STUDEN_DATE_CONF_START" id="STUDEN_DATE_CONF_START" readonly placeholder="เลือกวันที่ว่าง">
            
            <div class="line-2"></div>
          </div>
          <div class="modal-body">
            <div class="form-group">
       
              <div class="row">    
                <div class="col-md-6">

                  <!-- level 1 แสดงไอดีผู้เพื่ม-->
                  
                  
                  <label for="formGroupExampleInput">วิธีการแก้ปัญหา</label>
                  <textarea class="form-control" rows="3" placeholder="(กรอกหลังจากที่ได้รับคำปรึกษาแล้ว)" name="COUNSELING_SOLVE"></textarea>

                </div>
              
                <div class="col-md-6">
            

                <label for="formGroupExampleInput">ผลลัพธ์ที่ได้</label>
                <textarea class="form-control" rows="3" placeholder="(กรอกหลังจากที่ได้รับคำปรึกษาแล้ว)" name="COUNSELING_RESULT"></textarea>


                </div>
              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" onclick="main.update_individual_counseling_filnel();">ตกลง</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="show_individual_counseling_service_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <label for="formGroupExampleInpt" >วันที่กรอกข้อมูล</label>
                  <input type="text" class="form-control"  id="COUNSELING_CREATE_DATE"  name="COUNSELING_CREATE_DATE" readonly >
                  <label for="formGroupExampleInput">หัวข้อการขอคำปรึกษา</label>
                  <select class="form-control" name="COUNSELING_TYPE_ID" disabled>
                    <option value="">กรุณาเลือก</option>
                    <?php foreach($counseling_types as $key=>$value): ?>
                      <option value="<?php echo $value['COUNSELING_TYPE_ID'];?>"><?php echo $value['COUNSELING_NAME'];?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="formGroupExampleInput">วันที่สะดวก ตั้งแต่</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_START" id="STUDEN_DATE_START" readonly placeholder="เลือกวันที่ว่าง">
                

                  <label for="formGroupExampleInput">ปัญหาที่เจอ</label>
                  <textarea class="form-control" rows="3" placeholder="ปัญหาที่เจอ" name="COUNSELING_PROBLEM" readonly></textarea>
              
                  <label for="formGroupExampleInput">คำแนะนำที่ได้รับ</label>
                  <textarea class="form-control" rows="3" placeholder="คำแนะนำที่ได้รับ" name="COUNSELING_DETAIL" readonly></textarea>
                  <label for="formGroupExampleInput">ผลลัพธ์ที่เกิดขี้น</label>
                  <textarea class="form-control" rows="3" placeholder="ผลลัพธ์ที่เกิดขี้น" name="COUNSELING_RESULT" readonly></textarea>
                  <label for="formGroupExampleInput">วันที่นัด</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_CONF_START" id="STUDEN_DATE_CONF_START" readonly placeholder="ยังไม่ได้วันนัด">
           
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
      
                  <label for="formGroupExampleInput">ถึงวันที่</label>
                  <input type="text" class="form-control"  name="STUDEN_DATE_END" id="STUDEN_DATE_END" readonly placeholder="เลือกวันที่ว่าง">
              
                  <label for="formGroupExampleInput">ช่องทางในการติดต่อ</label>
                  <textarea class="form-control" rows="3" placeholder="ช่องทางอื่นๆ facebook Line" name="CONTACT" readonly></textarea>
    
                  <label for="formGroupExampleInput">วิธีการแก้ปัญหา</label>
                  <textarea class="form-control" rows="3" placeholder="วิธีการแก้ปัญหา" name="COUNSELING_SOLVE" readonly></textarea>
              
                  <label for="formGroupExampleInput">สาเหตุการยกเลิก</label>
                  <textarea class="form-control" rows="3" placeholder="สาเหตุการยกเลิก" name="DETAIL_NOT" readonly></textarea>
              
                </div>    
              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" onclick="main.add_individual_counseling_services_student();">ยืนยันข้อมูล</button>
              
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
      jQuery('#STUDEN_DATE_CONF_START').datetimepicker({
        format:'Y/m/d',
    
        onShow:function( ct ){
          this.setOptions({
            maxDate:jQuery('#STUDEN_DATE_CONF_END').val()?jQuery('#STUDEN_DATE_CONF_END').val():false
          })
        },
        timepicker:false
      });
      jQuery('#STUDEN_DATE_CONF_END').datetimepicker({
        format:'Y/m/d',
        onShow:function( ct ){
          this.setOptions({
            minDate:jQuery('#STUDEN_DATE_CONF_START').val()?jQuery('#STUDEN_DATE_CONF_START').val():false
          })
        },
        timepicker:false
      });
    });
      
    jQuery(function(){
      $.datetimepicker.setLocale('th');
      jQuery('#STUDEN_DATE_START').datetimepicker({
        format:'Y/m/d',
    
        onShow:function( ct ){
          this.setOptions({
            maxDate:jQuery('#STUDEN_DATE_END').val()?jQuery('#STUDEN_DATE_END').val():false
          })
        },
        timepicker:false
      });
      jQuery('#STUDEN_DATE_END').datetimepicker({
        format:'Y/m/d',
        onShow:function( ct ){
          this.setOptions({
            minDate:jQuery('#STUDEN_DATE_START').val()?jQuery('#STUDEN_DATE_START').val():false
          })
        },
        timepicker:false
      });
    });

  });



  


  
</script>


</body>
</html>
