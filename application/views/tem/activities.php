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
        <div class="col-lg-2 hade-show">ประเภทกิจกรรม</div>
        <div class="col-lg-2 hade-show">หมวดหมู่กิจกรรม</div>
        <div class="col-lg-2 hade-show">ชื่อกิจกรรม</div>
        <div class="col-lg-2 hade-show">วันที่จัดกิจกรรม</div>
        <div class="col-lg-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($activities as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 body-show"><?php echo $value['ACTIVITY_TYPE_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['ACTIVITY_CATEGORY_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['ACTIVITY_NAME'];?></div>
          <div class="col-lg-2 body-show"><?php echo $value['ACTIVITY_DATE'];?></div>
         

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-success" onclick="main.get_edit_activities(
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
            </button>
          </div>

          <div class="col-lg-2 body-show">
            <button type="button" class="btn btn-block btn-danger" onclick="main.delete_activities('<?php echo $value['ACTIVITY_ID'];?>')">ลบข้อมูล</button>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"> <button type="button" class="btn btn-block btn-outline-primary btn-lg m-3 p-3" onclick="$('#add_activities').modal('show');">เพิ่มข้อมูล</button></div>
        <div class="col-lg-4"></div>
      </div>
    </div>
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
                <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="ACTIVITY_PLACE"></input>


                <label for="formGroupExampleInput">ผู้จัดกิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_OWNER_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>
              
          

                

              </div>
              <div class="col-md-6">

                  
                <label for="formGroupExampleInput">วันที่จัดกิจกรรม</label>
                <input type="date" class="form-control"  name="ACTIVITY_DATE" placeholder="วันที่จัดกิจกรรม">
                <label for="formGroupExampleInput">หมวดหมู่กิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_CATEGORY_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($activity_categories as $key=>$value): ?>
                        <option value="<?php echo $value['ACTIVITY_CATEGORY_ID'];?>"><?php echo $value['ACTIVITY_CATEGORY_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>

              

                <label for="formGroupExampleInput">รายละเอียดกิจกรรม</label>
                <input type="text" class="form-control"  name="ACTIVITY_DETAIL" placeholder="รายละเอียดกิจกรรม">
    
      

                <label for="formGroupExampleInput">ไฟล์ข้อมูล</label>
                <input type="file" class="form-control"  name="FILE_DOCUMENT" placeholder="FILE_DOCUMENT">

             

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
            
                <input type="hidden" name="ACTIVITY_ID">
                <label for="formGroupExampleInput">ชื่อกิจกรรม</label>
                <input class="form-control" rows="3" placeholder="ชื่อกิจกรรม" name="ACTIVITY_NAME"></input>

                <label for="formGroupExampleInput">ประเภทกิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_TYPE_ID">
                    <?php foreach($activity_types as $key=>$value): ?>
                        <option value="<?php echo $value['ACTIVITY_TYPE_ID'];?>"><?php echo $value['ACTIVITY_TYPE_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>

            
   
                
                <label for="formGroupExampleInput">สถานที่จัดกิจกรรม</label>
                <input class="form-control" rows="3" placeholder="สถานที่จัดกิจกรรม" name="ACTIVITY_PLACE"></input>


                <label for="formGroupExampleInput">ผู้จัดกิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_OWNER_ID">
                        <option value="">กรุณาเลือก</option>
                    <?php foreach($personnels as $key=>$value): ?>
                        <option value="<?php echo $value['PERSONNEL_ID'];?>"><?php echo $value['PERSONNEL_NAME'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['PERSONNEL_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>
              
          

                

              </div>
              <div class="col-md-6">

                  
                <label for="formGroupExampleInput">วันที่จัดกิจกรรม</label>
                <input type="date" class="form-control"  name="ACTIVITY_DATE" placeholder="วันที่จัดกิจกรรม">
                <label for="formGroupExampleInput">หมวดหมู่กิจกรรม</label>
                    <select class="form-control" name="ACTIVITY_CATEGORY_ID">
                    <?php foreach($activity_categories as $key=>$value): ?>
                        <option value="<?php echo $value['ACTIVITY_CATEGORY_ID'];?>"><?php echo $value['ACTIVITY_CATEGORY_NAME'];?></option>
                    <?php endforeach; ?>
                    </select>

              

                <label for="formGroupExampleInput">รายละเอียดกิจกรรม</label>
                <input type="text" class="form-control"  name="ACTIVITY_DETAIL" placeholder="รายละเอียดกิจกรรม">
    
      

                <label for="formGroupExampleInput">ไฟล์ข้อมูล</label>
                <input type="file" class="form-control"  name="FILE_DOCUMENT" placeholder="FILE_DOCUMENT">

             

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
</html>
