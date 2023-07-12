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
  <!-- Navbar -->
 
  <?php $this->load->view('tem/inc_head_menu.php')?>

  <?php $this->load->view('tem/inc_lift_menu')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 2646.44px;">  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>เพิ่มรูปภาพการเข้าร่วมการบริการวิชาการ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">เพิ่มรูปภาพ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <div class="container">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-6">
            <!-- <div class="alert alert-success alert-dismissible" id="success" style="display: none;" style="float:left;">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                จัดเก็บรูปภาพเสร็จสิ้น
            </div> -->
            
            <form id="submitForm" method="POST">
              <div class="form-group">
                
                <div class="custom-file mb-2">
                  <input type="file" class="" name="multipleFile[]" id="multipleFile" required="" multiple>
                  <input type="hidden" class="" name="id-img" id="id-img"  value="<?php echo $_GET['img']?>">
                  <input type="hidden" class="" name="personel" id="personel"  value="<?php echo $_GET['id_personal']?>">

                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="upload" class="btn btn-primary" style="float:left;" >อัพเดทรูปภาพ</button><br>
              </div> 
          
            </form>
          </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row col-lg-12">
        <div class="col-md-2"></div>
          <div class="col-md-8"></div>
          <div class="col-md-2">
            <a href="<?php echo base_url()?>index.php/Home/training_participants" class="btn btn-info" >
                    ย้อนกลับ
                
            </a>
          </div>
      </div>
    </div>
    <br>



    <div class="container" id="gallery"><table class="table table-striped"><thead>
								<tr>
									<th>เลขรูป</th>
									<th>ชื่อรูป</th>
									<!-- <th>แก้ไข</th> -->
									<th>ลบ</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach($training_participants_pic as $key=>$value): ?>
                  <tr>
                    <td>  <?php echo $key+1?></td>
                    <td><img src="/images/trainings_img/<?php echo $value['PIC_GARRY']?>" class="img-thumbnail" width="150px" height="150px"></td>

                    <!-- <td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#exampleModal' data-id="">แก้ไข</button></td> -->
			              <td><button type='button' class='btn btn-danger btn-sm delete-btn' data-id="<?php echo $value['ID']?>">ลบ</button></td>

                
                  </tr>
                <?php endforeach; ?>
							</tbody>

						</table></div>

  
    <!--Edit Multiple image form -->
    <div class='modal' id='exampleModal'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h4 class='modal-title'>แก้ไขรูปภาพ</h4>
              <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <div id="editForm">
                เรียบร้อย
            </div>
          </div>    
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
 
 


  <!-- Control Sidebar -->
 <!-- /.control-sidebar -->



<!-- ./wrapper -->
<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script type="text/javascript">
  
  $(document).ready(function(){
    $("#submitForm").on("submit", function(e){
        e.preventDefault();

        $.ajax({
        
          url  :window.location.origin+"/index.php/Home/upload_training_participants_pic",
          type :"POST",
          cache:false,
          contentType : false, // you can also use multipart/form-data replace of false
          processData : false,
          data: new FormData(this),
          success:function(response){
            location.reload();
            $("#success").show();
            $("#multipleFile").val("");
            fetchData();

        // console.log(url);
        // console.log(data);
        
          }
        });
      
    });
    // Fetch Data from Database


    // Edit Data from Database
    $(document).on("click",".btn-success", function(){
      var editId = $(this).data('id');
      // console.log(editId);
      $.ajax({
        url  :window.location.origin+"/index.php/Home/edit",
        type : "POST",
        cache: false,
        data : {editId:editId},
        success:function(data){
        
          $("#editForm").html(data);
        
        }
        
      });
      
    });

    // Delete Data from database



    $(document).on('click','.delete-btn', function(){
      var deleteId = $(this).data('id');
      console.log(deleteId);
      if (confirm("ยืนยันการลบ")) {
        $.ajax({
          url  :window.location.origin+"/index.php/Home/delete_training_participants_pic",
      
          type : "POST",
          cache:false,
          data:{deleteId:deleteId},
          success:function(data){
            location.reload();
            fetchData();
            alert("Image is deleted successfully");
          }
        });
      }
    });

    // Update Data from database
    $(document).on("submit", "#editForm", function(e){
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url  :window.location.origin+"/index.php/Home/update",
      
        type : "POST",
        cache: false,
        contentType : false, // you can also use multipart/form-data replace of false
        processData : false,
        data: formData,
        success:function(response){
          location.reload();
          $("#exampleModal").modal();
          alert("Image updated successfully");
        
          fetchData();
        
        }
      });
    });
  });



</script>

</body>
</html>
