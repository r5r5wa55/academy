<html>
 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <?php 
    $this->load->view('tem/inc_css');
  ?>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Live Data Search in Codeigniter using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <?php $this->load->view('tem/inc_head_menu.php')?>
  <?php $this->load->view('tem/inc_lift_menu')?>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">Live Data Search in Codeigniter using Ajax JQuery</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
 </body>
</html>

<?php $this->load->view('tem/inc_modal_center')?>
<?php $this->load->view('tem/inc_js')?>
<script>
  $(document).ready(function(){
    load_data();
    function load_data(query){
      $.ajax({
        url:"<?php echo base_url(); ?>index.php/Home/fetch",
        method:"POST",
        data:{query:query},
        success:function(data){
          $('#result').html(data);
        }
      })
    }
    $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != ''){
        load_data(search);
      }else{
        load_data();
      }
    });
  });
</script>