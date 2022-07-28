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
              <h1 class="m-0" >การบริการวิชาการ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">การให้บริการ</li>
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
            <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_services').modal('show');">
            เพิ่มข้อมูล
            </a>
          </div> 
        </div>
        <div class="row ">
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">หัวข้อการบริการวิชาการ</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานที่ให้บริการ</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">เจ้าของผู้ให้บริการ</div>
          <div class="col-lg-3 col-md-2 col-sm-2 hade-show">ไฟล์ข้อมูล</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
          <div class="col-lg-1 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
        </div>
        <?php foreach($services as $key=>$value): ?>
          <div class="row body-show-long">
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['SERVICE_TITLE'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['SERVICE_PLACE'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left">
              <?php echo $value['PERSONNEL_SURNAME'];?>
              &nbsp&nbsp&nbsp&nbsp&nbsp
              <?php echo $value['PERSONNEL_NAME'];?>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 body-show text-long">

                  <?php if ($value['FILE_DOCUMENT'] != ''): ?>     

                          
                      <div class="col-lg-10">
                        <label class="file text-long  col-lg-10 box-btn-center">
                          <a href="<?php echo base_url("/images/services_file/".$value['FILE_DOCUMENT']);?>" target="_blank">
                            <span class=""> 
                              <?php echo $value['FILE_DOCUMENT'];?>
                            </span>
                          </a>
                        </label>
                        <label class="file text-long col-lg-4 ext-long box-btn-center">
                          


                        <div class="upload-btn-wrapper">
                          <button class="btn btn-success btn-sm">แก้ไข</button>
                          <input type="file" id="file" aria-label="File browser example" data-id-SERVICE_ID="<?php echo $value['SERVICE_ID']?>" onchange="main.upload_file_services(this)">
                          
                        </div>
                        </label>
                        
                      </div>
                  
                  <?php endif; ?>
                  
                  <!-- level 1 แสดงไอดีผู้เพื่ม-->
                  <?php if ($value['FILE_DOCUMENT'] == ''): ?> 

                  

                    
                    <div class="col-lg-10">
                      <label class="file text-long col-lg-8 ext-long box-btn-center">
                        <input type="file" id="file" aria-label="File browser example" data-id-SERVICE_ID="<?php echo $value['SERVICE_ID']?>" onchange="main.upload_file_services(this)">
                      </label>
                    </div>
                

                  <?php endif; ?>   


            


          
            </div>
          

            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_services(

                '<?php echo $value['SERVICE_ID'];?>',
                '<?php echo $value['SERVICE_TITLE'];?>',
                '<?php echo $value['SERVICE_PLACE'];?>',
                '<?php echo $value['SERVICE_OWNER'];?>',
                '<?php echo $value['PARTICIPANT_TYPE'];?>',
                '<?php echo $value['PARTICIPANT'];?>',
                '<?php echo $value['TOTAL_PARTICIPANT'];?>',
                '<?php echo $value['TOTAL_HOUR'];?>',
                '<?php echo $value['SERVICE_START_DATE'];?>',
                '<?php echo $value['SERVICE_END_DATE'];?>',
                '<?php echo $value['FILE_DOCUMENT'];?>');">
                แก้ไขข้อมูล
              </a>

            </div>

            <div class="col-lg-1 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_services(
                '<?php echo $value['SERVICE_ID'];?>');">
                ลบข้อมูล
              </a>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
  </div>
   


<div class="modal fade" id="add_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การบริการวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">


              <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้ให้บริการบริการวิชาการ</label>
                    <select class="form-control" name="SERVICE_OWNER">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >ผู้ให้บริการบริการวิชาการ</label>
                  <input type="text" class="form-control"  name="SERVICE_OWNER" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?> 
              


                <label for="formGroupExampleInput" >หัวข้อการบริการวิชาการ</label>
                <textarea class="form-control"  placeholder="หัวข้อการบริการ" name="SERVICE_TITLE"></textarea>  
          

                <label for="formGroupExampleInput">กลุ่มเป้าหมาย</label>
                <input class="form-control" rows="3" placeholder="ผู้เข้าร่วมการบริการ" name="PARTICIPANT"></input>

                <label for="formGroupExampleInput">เวลาในการบริการวิชาการ</label>
                <input class="form-control" rows="3" placeholder="เวลาในการอบรม" name="TOTAL_HOUR" onkeyup="main.checkcountinput(this)"></input>

                <label for="formGroupExampleInput">เวลาในการเริ่มการบริการวิชาการ</label>
                <input type="text" class="form-control" rows="3" placeholder="เวลาเริ่มการบริการ" id="SERVICE_START_DATE" name="SERVICE_START_DATE"  value="<?php echo "".date("08:00");?>">

                
              
              </div>
              <div class="col-md-6">

                <label for="formGroupExampleInput" class="text-hidden"></label>
              
                <label for="formGroupExampleInput" >สถานที่ให้บริการวิชาการ</label>
                <textarea type="text" class="form-control"  name="SERVICE_PLACE" placeholder="สถานที่ให้บริการ"></textarea>  


                <label for="formGroupExampleInput">ลักษณะผู้เข้าร่วมการบริการวิชาการ</label>
                <input type="text" class="form-control"  name="PARTICIPANT_TYPE" placeholder="ลักษณะผู้เข้าร่วมการบริการ">

                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการวิชาการ</label>
                <input type="text" class="form-control"  name="TOTAL_PARTICIPANT" placeholder="จำนวนผู้เข้าร่วม" onkeyup="main.checkcountinput(this)">
    
                <label for="formGroupExampleInput">ถึงเวลา</label>
                <input type="text" class="form-control"  name="SERVICE_END_DATE" id="SERVICE_END_DATE" placeholder="เวลาเสร็จสิ้นการบริการ" value="<?php echo "".date("16:00");?>">



              


            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_services();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="edit_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การบริการวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">


              <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้ให้บริการบริการวิชาการ</label>
                    <select class="form-control" name="SERVICE_OWNER">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >ผู้ให้บริการบริการวิชาการ</label>
                  <input type="text" class="form-control"  name="SERVICE_OWNER" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?> 
              

                
                <input type="hidden" class="form-control"  name="SERVICE_ID"></input>  

                <label for="formGroupExampleInput" >หัวข้อการบริการวิชาการ</label>
                <textarea class="form-control"  placeholder="หัวข้อการบริการ" name="SERVICE_TITLE"></textarea>  
          

                <label for="formGroupExampleInput">กลุ่มเป้าหมาย</label>
                <input class="form-control" rows="3" placeholder="ผู้เข้าร่วมการบริการ" name="PARTICIPANT"></input>

                <label for="formGroupExampleInput">เวลาในการบริการวิชาการ</label>
                <input class="form-control" rows="3" placeholder="เวลาในการอบรม" name="TOTAL_HOUR" onkeyup="main.checkcountinput(this)"></input>

                <label for="formGroupExampleInput">เวลาในการเริ่มการบริการวิชาการ</label>
                <input type="text" class="form-control" rows="3" placeholder="เวลาเริ่มการบริการ" id="edit_SERVICE_START_DATE" name="edit_SERVICE_START_DATE" >

                
              
              </div>
              <div class="col-md-6">

                <label for="formGroupExampleInput" class="text-hidden"></label>
              
                <label for="formGroupExampleInput" >สถานที่ให้บริการวิชาการ</label>
                <textarea type="text" class="form-control"  name="SERVICE_PLACE" placeholder="สถานที่ให้บริการ"></textarea>  


                <label for="formGroupExampleInput">ลักษณะผู้เข้าร่วมการบริการวิชาการ</label>
                <input type="text" class="form-control"  name="PARTICIPANT_TYPE" placeholder="ลักษณะผู้เข้าร่วมการบริการ">

                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการวิชาการ</label>
                <input type="text" class="form-control"  name="TOTAL_PARTICIPANT" placeholder="จำนวนผู้เข้าร่วม" onkeyup="main.checkcountinput(this)">
    
                <label for="formGroupExampleInput">ถึงเวลา</label>
                <input type="text" class="form-control"  name="edit_SERVICE_END_DATE" id="edit_SERVICE_END_DATE" placeholder="เวลาเสร็จสิ้นการบริการ">



              


            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_services();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>






<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>



</body>
<script>
  jQuery('#SERVICE_START_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });

  jQuery('#SERVICE_END_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });
      
  jQuery('#edit_SERVICE_START_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });

  jQuery('#edit_SERVICE_END_DATE').datetimepicker({
        datepicker:false,
        format:'H:i'
      });
    
    $(document).on("click",".btn-success", function(){
      var editId = $(this).data('id');
      // var editId =   $('#edit_services [name=editId]').val(editId);

      // console.log(editId);
      // return false;
    $.ajax({
      url  :window.location.origin+"/index.php/Home/edit_services_file",
      type : "POST",
      cache: false,
      data : {editId:editId},
      success:function(data){
        $("#editForm").html(data);
      }
    });
  });
  
</script>


</html>
