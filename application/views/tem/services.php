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
            <h1 class="m-0" >ตารางการให้บริการ</h1>
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
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">หัวข้อการบริการ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">สถานที่ให้บริการ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">เจ้าของผู้ให้บริการ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ไฟล์ข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show">ลบข้อมูล</div>
      </div>
      <?php foreach($services as $key=>$value): ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['SERVICE_TITLE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['SERVICE_PLACE'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['SERVICE_OWNER'];?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 body-show"><?php echo $value['FILE_DOCUMENT'];?></div>
         

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

          <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center">
            <a href="javascript:void(0)" class="btn-delete" onclick="main.delete_services(
              '<?php echo $value['SERVICE_ID'];?>');">
              ลบข้อมูล
            </a>
        </div>
      </div>
      <?php endforeach; ?>
>
    </div>
    </div>
    </div>


<div class="modal fade" id="add_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การให้บริการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">

                <label for="formGroupExampleInput">เจ้าของผู้ให้บริการ</label>
                <input class="form-control" rows="3" placeholder="เจ้าของผู้ให้บริการ" name="SERVICE_OWNER"></input>

                <label for="formGroupExampleInput" >สถานที่ให้บริการ</label>
                <input type="text" class="form-control"  name="SERVICE_PLACE" placeholder="สถานที่ให้บริการ  ">

                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการ</label>
                <input class="form-control" rows="3" placeholder="ผู้เข้าร่วมการบริการ" name="PARTICIPANT"></input>

                <label for="formGroupExampleInput">เวลาเริ่มการบริการ</label>
                <input type="date" class="form-control" rows="3" placeholder="เวลาเริ่มการบริการ" name="SERVICE_START_DATE"></input>

                <label for="formGroupExampleInput">เวลาในการอบรม</label>
                <input class="form-control" rows="3" placeholder="เวลาในการอบรม" name="TOTAL_HOUR"></input>
              
              </div>
              <div class="col-md-6">
                   
                <label for="formGroupExampleInput" >หัวข้อการบริการ</label>
                <input class="form-control" rows="3" placeholder="หัวข้อการบริการ" name="SERVICE_TITLE"></input>       
                <label for="formGroupExampleInput">ลักษณะผู้เข้าร่วมการบริการ</label>
                <input type="text" class="form-control"  name="PARTICIPANT_TYPE" placeholder="ลักษณะผู้เข้าร่วมการบริการ">

                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการทั้งหมด</label>
                <input type="text" class="form-control"  name="TOTAL_PARTICIPANT" placeholder="ผู้เข้าร่วมการบริการทั้งหมด">
    
                <label for="formGroupExampleInput">เวลาเสร็จสิ้นการบริการ</label>
                <input type="date" class="form-control"  name="SERVICE_END_DATE" placeholder="เวลาเสร็จสิ้นการบริการ">


             

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
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล การให้บริการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row">    
              <div class="col-md-6">
                <label  type="hiden" name="SERVICE_ID" id="SERVICE_ID"></label>             
                <label for="formGroupExampleInput">เจ้าของผู้ให้บริการ</label>
                <input class="form-control" rows="3" placeholder="เจ้าของผู้ให้บริการ" name="SERVICE_OWNER"></input>
                <label for="formGroupExampleInput" >สถานที่ให้บริการ</label>
                <input type="text" class="form-control"  name="SERVICE_PLACE" placeholder="สถานที่ให้บริการ ">
     
                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการ</label>
                <input class="form-control" rows="3" placeholder="ผู้เข้าร่วมการบริการ" name="PARTICIPANT"></input>

                <label for="formGroupExampleInput">เวลาเริ่มการบริการ</label>
                <input type="date" class="form-control" rows="3" placeholder="เวลาเริ่มการบริการ" name="SERVICE_START_DATE"></input>

                <label for="formGroupExampleInput">เวลาในการอบรม</label>
                <input class="form-control" rows="3" placeholder="เวลาในการอบรม" name="TOTAL_HOUR"></input>
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput" >หัวข้อการบริการ</label>
                <input class="form-control" rows="3" placeholder="หัวข้อการบริการ" name="SERVICE_TITLE"></label>     
                <label for="formGroupExampleInput">ลักษณะผู้เข้าร่วมการบริการ</label>
                <input type="text" class="form-control"  name="PARTICIPANT_TYPE" placeholder="ลักษณะผู้เข้าร่วมการบริการ">
                <label for="formGroupExampleInput">ผู้เข้าร่วมการบริการทั้งหมด</label>
                <input type="text" class="form-control"  name="TOTAL_PARTICIPANT" placeholder="ผู้เข้าร่วมการบริการทั้งหมด">
                <label for="formGroupExampleInput">เวลาเสร็จสิ้นการบริการ]</label>
                <input type="date" class="form-control"  name="SERVICE_END_DATE" placeholder="เวลาเสร็จสิ้นการบริการ">
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
</html>
