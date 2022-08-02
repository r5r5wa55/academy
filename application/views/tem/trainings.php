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
              <h1 class="m-0" >การอบรม</h1>
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
            <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_trainings').modal('show');">
            เพิ่มข้อมูล
            </a>
          </div> 
        </div>
        <div class="row ">
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ชื่อการอบรม</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานที่จัดการอบรม</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">เจ้าของการอบรม</div>
          <div class="col-lg-3 col-md-2 col-sm-2 hade-show">ไฟล์ข้อมูล</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
          <div class="col-lg-1 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
        </div>
        <?php foreach($trainings as $key=>$value): ?>
          <div class="row body-show-long">
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['TRAINING_TITLE'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['TRAINING_PLACE'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left">
              <?php echo $value['PERSONNEL_NAME'];?>
              &nbsp&nbsp&nbsp&nbsp&nbsp
              <?php echo $value['PERSONNEL_SURNAME'];?>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 body-show text-long">
                  <?php if ($value['FILE_TAINING'] != ''): ?>             
                      <div class="col-lg-10">
                        <label class="file text-long  col-lg-10 box-btn-center">
                          <a href="<?php echo base_url("/images/trainings_file/".$value['FILE_TAINING']);?>" target="_blank">
                            <span class=""> 
                              <?php echo $value['FILE_TAINING'];?>
                            </span>
                          </a>
                        </label>
                        <label class="file text-long col-lg-4 ext-long box-btn-center">
                          


                        <div class="upload-btn-wrapper">
                          <button class="btn btn-success btn-sm">แก้ไข</button>
                          <input type="file" id="file" aria-label="File browser example" data-id-TRAINING_ID="<?php echo $value['TRAINING_ID']?>" onchange="main.upload_file_trainings(this)">
                          
                        </div>
                        </label>
                        
                      </div>
                  
                  <?php endif; ?>            
                  <!-- level 1 แสดงไอดีผู้เพื่ม-->
                  <?php if ($value['FILE_TAINING'] == ''): ?>         
                    <div class="col-lg-10">
                      <label class="file text-long col-lg-8 ext-long box-btn-center">
                        <input type="file" id="file" aria-label="File browser example" data-id-TRAINING_ID="<?php echo $value['TRAINING_ID']?>" onchange="main.upload_file_trainings(this)">
                      </label>
                    </div>
                  <?php endif; ?>   
            </div>
          

            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_trainings(
              '<?php echo $value['TRAINING_ID'];?>',
              '<?php echo $value['TRAINING_TITLE'];?>',
              '<?php echo $value['TRAINING_PLACE'];?>',
              '<?php echo $value['TRAINING_OWNER'];?>',
              '<?php echo $value['TOTAL_HOUR_TRAINING'];?>',
              '<?php echo $value['TRAINING_START_DATE'];?>',
              '<?php echo $value['TRAINING_END_DATE'];?>');">



              แก้ไขข้อมูล
            </a>

            </div>

            <div class="col-lg-1 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_trainings(
                '<?php echo $value['TRAINING_ID'];?>');">
                ลบข้อมูล
              </a>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
  </div>
   





<div class="modal fade" id="add_trainings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การอบรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
              

                <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >เจ้าของการอบรม</label>
                    <select class="form-control" name="TRAINING_OWNER">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >เจ้าของการอบรม</label>
                  <input type="text" class="form-control"  name="TRAINING_OWNER" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?> 
                <label for="formGroupExampleInput">ชื่อการอบรม</label>
                <textarea class="form-control" rows="3" placeholder="ชื่อการอบรม" name="TRAINING_TITLE"></textarea>
                <label for="formGroupExampleInput">ตั้งแต่</label>
                <input class="form-control" type="text" rows="3" name="TRAINING_START_DATE" id="TRAINING_START_DATE"  readonly placeholder="ตั้งแต่วันที่"></input>
                
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput">เวลาในการอบรม</label>
                <input type="text" class="form-control"  name="TOTAL_HOUR_TRAINING" placeholder="ระยะเวลา" onkeyup="main.checkcountinput(this)">
                <label for="formGroupExampleInput">สถานที่จัดการอบรม</label>
                <textarea type="text" class="form-control" rows="3"  name="TRAINING_PLACE" placeholder="สถานที่จัดการอบรม"></textarea>

                <label for="formGroupExampleInput">สิ้นสุด</label>
                <input class="form-control" type="text"   name="TRAINING_END_DATE" id="TRAINING_END_DATE" readonly placeholder="ถีงวันที่"></input>


              
          


            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_trainings();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="edit_trainings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การอบรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
            
              

                <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >เจ้าของการอบรม</label>
                    <select class="form-control" name="TRAINING_OWNER">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >เจ้าของการอบรม</label>
                  <input type="text" class="form-control"  name="TRAINING_OWNER" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?> 
                  <input class="form-control" type="hidden" rows="3" name="TRAINING_ID"></input>
                <label for="formGroupExampleInput">ชื่อการอบรม</label>
                <textarea class="form-control" rows="3" placeholder="ชื่อการอบรม" name="TRAINING_TITLE"></textarea>
                <label for="formGroupExampleInput">ตั้งแต่</label>
                <input class="form-control" type="text" rows="3" name="TRAINING_START_DATE" id="edit_TRAINING_START_DATE"  readonly placeholder="ตั้งแต่วันที่"></input>
                
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput">เวลาในการอบรม</label>
                <input type="text" class="form-control"  name="TOTAL_HOUR_TRAINING" placeholder="ระยะเวลา" onkeyup="main.checkcountinput(this)">
                <label for="formGroupExampleInput">สถานที่จัดการอบรม</label>
                <textarea type="text" class="form-control" rows="3"  name="TRAINING_PLACE" placeholder="สถานที่จัดการอบรม"></textarea>

                <label for="formGroupExampleInput">สิ้นสุด</label>
                <input class="form-control" type="text"   name="TRAINING_END_DATE" id="edit_TRAINING_END_DATE" readonly placeholder="ถีงวันที่"></input>


              
          


            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_trainings();">Save changes</button>
          
        </div>
      </div>
    </div>
  </div>
</div>









<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>


<script>

  $(function(){
    jQuery(function(){
      $.datetimepicker.setLocale('th');
      
      jQuery('#TRAINING_START_DATE').datetimepicker({
        onGenerate:function( ct ){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
      },

        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        format:'Y/m/d',
        startDate:new Date(),
        // minDate:'-1970/01/02' ,
        minDate:new Date(),
        onShow:function( ct ){
          // console.log(ct);
          // return false;
          this.setOptions({
            maxDate:jQuery('#TRAINING_END_DATE').val()?jQuery('#TRAINING_END_DATE').val():false
            
          })
        },
  
        timepicker:false
      });
      jQuery('#TRAINING_END_DATE').datetimepicker({
        onGenerate:function( ct ){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
      },
        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        format:'Y/m/d',
        onShow:function( ct ){
          this.setOptions({
            minDate:jQuery('#TRAINING_START_DATE').val()?jQuery('#TRAINING_START_DATE').val():false
          })
        },
        timepicker:false
      });
    });
      
    

  });

  $(function(){
    jQuery(function(){
      $.datetimepicker.setLocale('th');
      
      jQuery('#edit_TRAINING_START_DATE').datetimepicker({
        onGenerate:function( ct ){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
      },

        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        format:'Y/m/d',
        startDate:new Date(),
        // minDate:'-1970/01/02' ,
        minDate:new Date(),
        onShow:function( ct ){
          // console.log(ct);
          // return false;
          this.setOptions({
            maxDate:jQuery('#edit_TRAINING_END_DATE').val()?jQuery('#edit_TRAINING_END_DATE').val():false
            
          })
        },
  
        timepicker:false
      });
      jQuery('#edit_TRAINING_END_DATE').datetimepicker({
        onGenerate:function( ct ){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
      },
        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        format:'Y/m/d',
        onShow:function( ct ){
          this.setOptions({
            minDate:jQuery('#edit_TRAINING_START_DATE').val()?jQuery('#edit_TRAINING_START_DATE').val():false
          })
        },
        timepicker:false
      });
    });
      
    

  });
</script>
</body>
</html>
