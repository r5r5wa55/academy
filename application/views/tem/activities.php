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
              <h1 class="m-0" >ตารางกิจกรรม</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                <li class="breadcrumb-item active">กิจกรรม</li>
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
            <a href="javascript:void(0)" class="box-btn-add" onclick="$('#add_activities').modal('show');">
            เพิ่มข้อมูล
            </a>
          </div> 
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ประเภทกิจกรรม</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">หมวดหมู่กิจกรรม</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ชื่อกิจกรรม</div>
          <div class="col-lg-3 col-md-2 col-sm-2 hade-show">ไฟล์ข้อมูล</div>
          <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
          <div class="col-lg-1 col-md-1 col-sm-2 hade-show">ลบข้อมูล</div>
        </div>
        <?php foreach($activities as $key=>$value): ?>
          <div class="row body-show-long">
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['ACTIVITY_CATEGORY_NAME'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['ACTIVITY_TYPE_NAME'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show text-long box-btn-left"><?php echo $value['ACTIVITY_NAME'];?></div>
            <div class="col-lg-3 col-md-2 col-sm-2 body-show text-long">


              <?php if ($value['ACTIVITIES_FILE'] != ''): ?>         
                  <div class="col-lg-10">
                    <label class="file text-long  col-lg-10 box-btn-center">
                      <a href="<?php echo base_url("/images/activities_file/".$value['ACTIVITIES_FILE']);?>" target="_blank">
                        <span class=""> 
                          <?php echo $value['ACTIVITIES_FILE'];?>
                        </span>
                      </a>
                    </label>
                    <label class="file text-long col-lg-4 ext-long box-btn-center">

                    <div class="upload-btn-wrapper">
                      <button class="btn btn-success btn-sm">แก้ไข</button>
                      <input type="file" id="file" aria-label="File browser example" data-id-ACTIVITY_ID="<?php echo $value['ACTIVITY_ID']?>" onchange="main.upload_file_activities(this)">
                      
                    </div>
                    </label>
                    
                  </div>

              <?php endif; ?>

              <!-- level 1 แสดงไอดีผู้เพื่ม-->
              <?php if ($value['ACTIVITIES_FILE'] == ''): ?> 
  
                <div class="col-lg-10">
                  <label class="file text-long col-lg-8 ext-long box-btn-center">
                    <input type="file" id="file" aria-label="File browser example" data-id-ACTIVITY_ID="<?php echo $value['ACTIVITY_ID']?>" onchange="main.upload_file_activities(this)">
                  </label>
                </div>


              <?php endif; ?>   






            </div>
          

            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0)" class="btn-edit" onclick="main.get_edit_activities(
                '<?php echo $value['ACTIVITY_ID'];?>',
                '<?php echo $value['ACTIVITY_TYPE_ID'];?>',
                '<?php echo $value['ACTIVITY_CATEGORY_ID'];?>',
                '<?php echo $value['ACTIVITY_NAME'];?>',
                '<?php echo $value['ACTIVITY_DATE'];?>',
                '<?php echo $value['ACTIVITY_PLACE'];?>',
                '<?php echo $value['ACTIVITY_DETAIL'];?>',
                '<?php echo $value['ACTIVITY_OWNER_ID'];?>',
                '<?php echo $value['ACTIVITIES_FILE'];?>');">
                แก้ไขข้อมูล
              </a>
            </div>

            <div class="col-lg-1 col-md-2 col-sm-2 body-show box-btn-center">
              <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_activities(
                '<?php echo $value['ACTIVITY_ID'];?>');">
                ลบข้อมูล
              </a>
          </div>
        </div>
        <?php endforeach; ?>
  
      </div>
  </div>
  


<div class="modal fade" id="add_activities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล กิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="row">    
            <div class="col-md-6">
              
                <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้จัดกิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_OWNER_ID">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >ผู้จัดกิจกรรม</label>
                  <input type="text" class="form-control"  name="ACTIVITY_OWNER_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?> 


              

              <label for="formGroupExampleInput">ชื่อกิจกรรม</label>
              <input class="form-control" rows="3" placeholder="ชื่อกิจกรรม" name="ACTIVITY_NAME"></input>
              <label for="formGroupExampleInput">ประเภทกิจกรรม</label>
              <select class="form-control" name="ACTIVITY_TYPE_ID">
                <option value="">กรุณาเลือก</option>
                <?php foreach($activity_types as $key=>$value): ?>
                    <option value="<?php echo $value['ACTIVITY_TYPE_ID'];?>"><?php echo $value['ACTIVITY_TYPE_NAME'];?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">สถานที่จัดกิจกรรม</label>
              <textarea class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="ACTIVITY_PLACE"></textarea>
      
            </div>
            <div class="col-md-6">   
              <label for="formGroupExampleInput" class="text-hidden"></label>
              <label for="formGroupExampleInput">วันที่จัดกิจกรรม</label>
              <input type="text" class="form-control"  name="ACTIVITY_DATE" placeholder="วันที่จัดกิจกรรม" id="ACTIVITY_DATE" readonly>
              <label for="formGroupExampleInput">หมวดหมู่กิจกรรม</label>
              <select class="form-control" name="ACTIVITY_CATEGORY_ID" >
                <option value="">กรุณาเลือก</option>
                <?php foreach($activity_categories as $key=>$value): ?>
                    <option value="<?php echo $value['ACTIVITY_CATEGORY_ID'];?>"><?php echo $value['ACTIVITY_CATEGORY_NAME'];?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">รายละเอียดกิจกรรม</label>
              <textarea type="text" class="form-control"  rows="3" name="ACTIVITY_DETAIL" placeholder="รายละเอียดกิจกรรม"></textarea>
             
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_activities();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_activities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล กิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="row">    
            <div class="col-md-6">


            
              <input type="hidden" rows="3" placeholder="ชื่อกิจกรรม" name="ACTIVITY_ID"></input>

           

              <?php if ($_SESSION['level'] === '1'): ?>     
                  <label for="formGroupExampleInput" >ผู้จัดกิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_OWNER_ID">
                      <option value="">กรุณาเลือก</option>
                      <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_SURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                <?php endif; ?>
                <!-- level 1 แสดงไอดีผู้เพื่ม-->
                <?php if ($_SESSION['level'] === '2'): ?> 
                  <label for="formGroupExampleInpt" >ผู้จัดกิจกรรม</label>
                  <input type="text" class="form-control"  name="ACTIVITY_OWNER_ID" value="<?php echo $_SESSION['PERSONNEL_ID'];?>" readonly placeholder="<?php echo $_SESSION['PERSONNEL_ID'];?>">
                <?php endif; ?> 


              <label for="formGroupExampleInput">ชื่อกิจกรรม</label>
              <input class="form-control" rows="3" placeholder="ชื่อกิจกรรม" name="ACTIVITY_NAME"></input>
              <label for="formGroupExampleInput">ประเภทกิจกรรม</label>
              <select class="form-control" name="ACTIVITY_TYPE_ID">
                <option value="">กรุณาเลือก</option>
                <?php foreach($activity_types as $key=>$value): ?>
                    <option value="<?php echo $value['ACTIVITY_TYPE_ID'];?>"><?php echo $value['ACTIVITY_TYPE_NAME'];?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">สถานที่จัดกิจกรรม</label>
              <textarea class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="ACTIVITY_PLACE"></textarea>
      
            </div>
            <div class="col-md-6">   
              <label for="formGroupExampleInput" class="text-hidden"></label>
              <label for="formGroupExampleInput">วันที่จัดกิจกรรม</label>
              <input type="text" class="form-control"  name="ACTIVITY_DATE" placeholder="วันที่จัดกิจกรรม" id="edit_ACTIVITY_DATE" readonly>
              <label for="formGroupExampleInput">หมวดหมู่กิจกรรม</label>
              <select class="form-control" name="ACTIVITY_CATEGORY_ID" >
                <option value="">กรุณาเลือก</option>
                <?php foreach($activity_categories as $key=>$value): ?>
                    <option value="<?php echo $value['ACTIVITY_CATEGORY_ID'];?>"><?php echo $value['ACTIVITY_CATEGORY_NAME'];?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput">รายละเอียดกิจกรรม</label>
              <textarea class="form-control" rows="3"  name="ACTIVITY_DETAIL" placeholder="รายละเอียดกิจกรรม"></textarea>
             
            </div>    
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_activities();">Save changes</button>
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



 
  jQuery('#edit_ACTIVITY_DATE').datetimepicker({
    onGenerate:function( ct ){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
      },
    weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
    format:'Y/m/d',
    timepicker:false,
    minDate:new Date(),

  });
  jQuery('#ACTIVITY_DATE').datetimepicker({
    onGenerate:function( ct ){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
      },
    weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
    format:'Y/m/d',
    timepicker:false,
    minDate:new Date(),

  });


  
</script>
</html>
