<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
  <title>Ajax Multiple Image Upload with Edit Update Delete using PHP Mysql</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
    $this->load->view('tem/inc_css');
  ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="jumbotron text-center">
  <h2>Ajax Multiple Image Upload with Edit Update Delete using PHP Mysql</h2>
</div>

<div class="container">
  <div class="row">
  	<div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible" id="success" style="display: none;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          File uploaded successfully
        </div>
      <form id="submitForm">
        <div class="form-group">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="multipleFile[]" id="multipleFile" required="" multiple>
            <label class="custom-file-label" for="multipleFile">Choose Multiple Images to Upload</label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" name="upload" class="btn btn-primary" style="float:right;" >Upload</button><br>
        </div>  
      </form><br>
    </div>
  </div>
</div>

  <!-- view of uploaded images -->
  <div class="container" id="gallery"></div>

  <!--Edit Multiple image form -->
  <div class='modal' id='exampleModal'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title'>Update Image</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        <div id="editForm">
            เรียบร้อย
        </div>
      </div>    
    </div>
  </div>


<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
</body>
<script type="text/javascript">
$(document).ready(function(){
    $("#submitForm").on("submit", function(e){
    e.preventDefault();

    $.ajax({
    
      url  :window.location.origin+"/index.php/Home/upload1",
      type :"POST",
      cache:false,
      contentType : false, // you can also use multipart/form-data replace of false
      processData : false,
      data: new FormData(this),
      success:function(response){
        $("#success").show();
        $("#multipleFile").val("");
        fetchData();

    // console.log(url);
    // console.log(data);
      }
    });
   
});

  // Fetch Data from Database
  function fetchData(){
    $.ajax({
      url  :window.location.origin+"/index.php/Home/fetch_data",

      type : "POST",
      cache: false,
      success:function(data){
        $("#gallery").html(data);
      }
    });
  }
  fetchData();

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
    if (confirm("Are you sure want to delete this image")) {
      $.ajax({
        url  :window.location.origin+"/index.php/Home/delete",
     
        type : "POST",
        cache:false,
        data:{deleteId:deleteId},
        success:function(data){
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
        $("#exampleModal").modal();
        alert("Image updated successfully");
        fetchData();
        
      }
    });
  });
});

</script>
</html>