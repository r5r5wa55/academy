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
              <h1 class="m-0" >งานวิจัย</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">งานวิจัย</li>
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
          <div class="col-lg-1 col-md-2 col-sm-2"></div>
          <div class="col-lg-3 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-2 col-md-2 col-sm-2 box-btn-center">
            <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_researchs').modal('show');">
            เพิ่มข้อมูล
            </a>
          </div> 
        </div>
        <div class="row ">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show text-long ">ขื่องานวิจัย</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show text-long ">หัวหน้าโครการ</div>
          <div class="col-lg-1 col-md-1 col-sm-1 hade-show text-long ">งบงานวิจัย</div>
          <div class="col-lg-3 col-md-3 col-sm-2 hade-show text-long ">ไฟล์งานวิจัย</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show text-long ">แก้ไขข้อมูล</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show text-long ">ลบข้อมูล</div>
        </div>
        <?php foreach($researchs as $key=>$value): ?>
          <div class="row body-show-long">
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['RESEARCH_TITLE_TH'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['PERSONNEL_SURNAME'];?>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $value['PERSONNEL_NAME'];?></div>
            <div class="col-lg-1 col-md-2 col-sm-2 body-show text-long box-btn-left">
              <?php echo $value['RESEARCH_BUDGETT'];?>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 body-show text-long">

                  <?php if ($value['FILE_RESEARCHS'] != ''): ?>     

                          
                      <div class="col-lg-10">
                        <label class="file text-long  col-lg-10 box-btn-left">
                          <a href="<?php echo base_url("/images/researchs/".$value['FILE_RESEARCHS']);?>" target="_blank">
                            <span class=""> 
                              <?php echo $value['FILE_RESEARCHS'];?>
                            </span>
                          </a>
                        </label>
                        <label class="file text-long col-lg-4 ext-long box-btn-center">
                          <div class="upload-btn-wrapper">
                            <button class="btn btn-success btn-sm">แก้ไข</button>
                            <input type="file" id="file" aria-label="File browser example" data-id-RESEARCH_ID="<?php echo $value['RESEARCH_ID']?>" onchange="main.upload_file_researchs(this)">
                          </div>
                        </label>
                        
                      </div>
                  
                  <?php endif; ?>
                  
                  <!-- level 1 แสดงไอดีผู้เพื่ม-->
                  <?php if ($value['FILE_RESEARCHS'] == ''): ?> 

                  

                    
                    <div class="col-lg-10">
                      <label class="file text-long col-lg-8 ext-long box-btn-center">
                        <input type="file" id="file" aria-label="File browser example" data-id-RESEARCH_ID="<?php echo $value['RESEARCH_ID']?>" onchange="main.upload_file_researchs(this)">
                      </label>
                    </div>
                

                  <?php endif; ?>   


            


          
            </div>
          

            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_researchs(
                '<?php echo $value['RESEARCH_ID'];?>',
                '<?php echo $value['RESEARCH_TITLE_TH'];?>',
                '<?php echo $value['RESEARCH_TITLE_EN'];?>',
                '<?php echo $value['RESEARCH_ABSTRACT_TH'];?>',
                '<?php echo $value['RESEARCH_ABSTRACT_EN'];?>',
                '<?php echo $value['RESEARCH_TYPE'];?>',
                '<?php echo $value['RESEARCH_BUDGETT'];?>',
                '<?php echo $value['RESEARCH_START_DATE'];?>',
                '<?php echo $value['RESEARCH_END_DATE'];?>',
                '<?php echo $value['RESEARCHER_ID'];?>',
                '<?php echo $value['RESEARCHER_TYPE'];?>',
                '<?php echo $value['FILE_RESEARCHS'];?>');">
                แก้ไขข้อมูล
              </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_researchs(
                '<?php echo $value['RESEARCH_ID'];?>');">
                ลบข้อมูล
              </a>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
  </div>
   

<div class="modal fade" id="add_researchs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล งานวิจัย</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">   
               
              <div class="col-md-6">
                <!-- level 1 แสดงตัวเลือก --> 
                <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้ทำงานวิจัย</label>
                    <select class="form-control" name="RESEARCHER_ID">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >รหัสผู้ทำงานวิจัย</label>
                  <input type="text" class="form-control"  name="RESEARCHER_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?>            
                <input type="hidden" class="form-control"  name="RESEARCH_ID" placeholder="">
                <input type="hidden" class="form-control"  name="level" value="<?php echo $_SESSION['level'];?>">

                <label for="formGroupExampleInput">ชื่องานวิจัยภาษาไทย</label>
                <textarea class="form-control" rows="3" placeholder="ชื่องานวิจัยภาษาไทย" name="RESEARCH_TITLE_TH"></textarea>
                <label for="formGroupExampleInput">บทคัดย่อการวิจัยภาษาไทย</label>
                <textarea class="form-control" rows="3" placeholder="บทคัดย่อการวิจัยภาษาไทย" name="RESEARCH_ABSTRACT_TH"></textarea>
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="RESEARCH_START_DATE"  placeholder="">
                <label for="formGroupExampleInput">ประเภทนักวิจัย</label>
                <select name="RESEARCHER_TYPE" class="form-control" id="RESEARCHER_TYPE">
                    <option value="">กรุณาเลือก</option>
                    <option value="1">ผู้ทำการวิจัย</option>
                    <option value="2">ผู้ร่วมทำการวิจัย</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput">ประเภทงานวิจัย</label>
                <select name="RESEARCH_TYPE" class="form-control" id="RESEARCH_TYPE">
                    <option value="">กรุณาเลือก</option>
                    <option value="1">การวิจัยเชิงสำรวจ</option>
                    <option value="2">การวิจัยเชิงพัฒนา</option>
                    <option value="3">การวิจัยเชิงความสัมพันธ์</option>
                </select>
                <label for="formGroupExampleInput">ชื่องานวิจัยภาษาอังกฤษ</label>
                <textarea class="form-control" rows="3" placeholder="ชื่องานวิจัยภาษาอังกฤษ" name="RESEARCH_TITLE_EN"></textarea>
               
                <label for="formGroupExampleInput">บทคัดย่อการวิจัยภาษาอังกฤษ</label>
                <textarea class="form-control" rows="3" placeholder="บทคัดย่อการวิจัยภาษาอังกฤษ" name="RESEARCH_ABSTRACT_EN"></textarea>
               
                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="RESEARCH_END_DATE" placeholder="">

                <label for="formGroupExampleInput">งบประมาณ</label>
                <input type="text" class="form-control"  name="RESEARCH_BUDGETT" placeholder="" onkeyup="main.checkcountinput(this)">

              </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_researchs();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="edit_researchs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไข งานวิจัย</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">   
               
              <div class="col-md-6">
           
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
   
                  <label for="formGroupExampleInpt" >รหัสผู้ทำงานวิจัย</label>
                  <input type="text" class="form-control"  name="RESEARCHER_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly >
                  
                <input type="hidden" class="form-control"  name="RESEARCH_ID" placeholder="">
   
                <label for="formGroupExampleInput">ชื่องานวิจัยภาษาไทย</label>
                <textarea class="form-control" rows="3" placeholder="ชื่องานวิจัยภาษาไทย" name="RESEARCH_TITLE_TH"></textarea>
                <label for="formGroupExampleInput">บทคัดย่อการวิจัยภาษาไทย</label>
                <textarea class="form-control" rows="3" placeholder="บทคัดย่อการวิจัยภาษาไทย" name="RESEARCH_ABSTRACT_TH"></textarea>
                <label for="formGroupExampleInput">ตั้งแต่วันที่</label>
                <input type="date" class="form-control"  name="RESEARCH_START_DATE"  placeholder="">
                <label for="formGroupExampleInput">ประเภทนักวิจัย</label>
                <select name="RESEARCHER_TYPE" class="form-control" id="RESEARCHER_TYPE">
                    <option value="">กรุณาเลือก</option>
                    <option value="1">ผู้ทำการวิจัย</option>
                    <option value="2">ผู้ร่วมทำการวิจัย</option>
                </select>

                

              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput">ประเภทงานวิจัย</label>
                <select name="RESEARCH_TYPE" class="form-control" id="RESEARCH_TYPE">
                    <option value="">กรุณาเลือก</option>
                    <option value="1">การวิจัยเชิงสำรวจ</option>
                    <option value="2">การวิจัยเชิงพัฒนา</option>
                    <option value="3">การวิจัยเชิงความสัมพันธ์</option>
                </select>
                <label for="formGroupExampleInput">ชื่องานวิจัยภาษาอังกฤษ</label>
                <textarea class="form-control" rows="3" placeholder="ชื่องานวิจัยภาษาอังกฤษ" name="RESEARCH_TITLE_EN"></textarea>
               
                <label for="formGroupExampleInput">บทคัดย่อการวิจัยภาษาอังกฤษ</label>
                <textarea class="form-control" rows="3" placeholder="บทคัดย่อการวิจัยภาษาอังกฤษ" name="RESEARCH_ABSTRACT_EN"></textarea>
               
                <label for="formGroupExampleInput">ถึงวันที่</label>
                <input type="date" class="form-control"  name="RESEARCH_END_DATE" placeholder="">

                <label for="formGroupExampleInput">งบประมาณ</label>
                <input type="text" class="form-control"  name="RESEARCH_BUDGETT" placeholder="">

              </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_researchs();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>





<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<!-- <script>
  $('#files').change(function(){
     main.upload_file_researchs()   
  });
</script> -->


</body>
</html>
