var main = {
  add_academics(){
    var ACADEMIC_NAME = $('[name=ACADEMIC_NAME]').val()
    var url = window.location.origin+"/academy/index.php/Home/add_academics";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'ACADEMIC_NAME':ACADEMIC_NAME
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_data_edit(ACADEMIC_ID,ACADEMIC_NAME){
    $('#edit_academics [name=ACADEMIC_NAME]').val(ACADEMIC_NAME);
    $('#edit_academics [name=ACADEMIC_ID]').val(ACADEMIC_ID);
    $('#edit_academics').modal('show');
  },
  edit_academics(){
    var ACADEMIC_NAME = $('#edit_academics [name=ACADEMIC_NAME]').val()
    var ACADEMIC_ID = $('#edit_academics [name=ACADEMIC_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_academics";
    var data = {
      'ACADEMIC_NAME':ACADEMIC_NAME,
      'ACADEMIC_ID':ACADEMIC_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_academics(ACADEMIC_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_academics";
    var data = {
      'ACADEMIC_ID':ACADEMIC_ID
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_activity_categories(){
    var ACTIVITY_CATEGORY_NAME = $('[name=ACTIVITY_CATEGORY_NAME]').val()
    console.log (ACTIVITY_CATEGORY_NAME)
    var url = window.location.origin+"/academy/index.php/Home/add_activity_categories";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'ACTIVITY_CATEGORY_NAME':ACTIVITY_CATEGORY_NAME
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_data_edit(ACADEMIC_ID,ACADEMIC_NAME){
    $('#edit_academics [name=ACADEMIC_NAME]').val(ACADEMIC_NAME);
    $('#edit_academics [name=ACADEMIC_ID]').val(ACADEMIC_ID);
    $('#edit_academics').modal('show');
  },
  get_edit_activity_categories(ACTIVITY_CATEGORY_ID,ACTIVITY_CATEGORY_NAME){
    $('#edit_activity_categories [name=ACTIVITY_CATEGORY_NAME]').val(ACTIVITY_CATEGORY_NAME);
    $('#edit_activity_categories [name=ACTIVITY_CATEGORY_ID ]').val(ACTIVITY_CATEGORY_ID );
    $('#edit_activity_categories').modal('show');
  },
  edit_activity_categories(){
    var ACTIVITY_CATEGORY_NAME	= $('#edit_activity_categories [name=ACTIVITY_CATEGORY_NAME]').val()
    var ACTIVITY_CATEGORY_ID = $('#edit_activity_categories [name=ACTIVITY_CATEGORY_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_activity_categories";
    var data = {
      'ACTIVITY_CATEGORY_NAME':ACTIVITY_CATEGORY_NAME,
      'ACTIVITY_CATEGORY_ID':ACTIVITY_CATEGORY_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_activity_categories(ACTIVITY_CATEGORY_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_activity_categories";
    var data = {
      'ACTIVITY_CATEGORY_ID':ACTIVITY_CATEGORY_ID 
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_activity_types(){
    var ACTIVITY_TYPE_NAME = $('[name=ACTIVITY_TYPE_NAME]').val()
    var url = window.location.origin+"/academy/index.php/Home/add_activity_types";
    // console.log(window.location.origin);
    // return false;
    var data = {
      
      'ACTIVITY_TYPE_NAME':ACTIVITY_TYPE_NAME	
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_activity_types(ACTIVITY_TYPE_ID,ACTIVITY_TYPE_NAME){
    $('#edit_activity_types [name=ACTIVITY_TYPE_NAME]').val(ACTIVITY_TYPE_NAME);
    $('#edit_activity_types [name=ACTIVITY_TYPE_ID]').val(ACTIVITY_TYPE_ID);
    $('#edit_activity_types').modal('show');
  },
  edit_activity_types(){
    var ACTIVITY_TYPE_NAME	= $('#edit_activity_types [name=ACTIVITY_TYPE_NAME]').val()
    var ACTIVITY_TYPE_ID  = $('#edit_activity_types [name=ACTIVITY_TYPE_ID]').val()
    console.log(ACTIVITY_TYPE_NAME),
    console.log(ACTIVITY_TYPE_ID);
    var url = window.location.origin+"/academy/index.php/Home/edit_activity_types";
    var data = {
      'ACTIVITY_TYPE_NAME':ACTIVITY_TYPE_NAME,
      'ACTIVITY_TYPE_ID':ACTIVITY_TYPE_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_activity_types(ACTIVITY_TYPE_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_activity_types";
    var data = {
      'ACTIVITY_TYPE_ID':ACTIVITY_TYPE_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_leave_types(){
    var LEAVE_TYPE = $('[name=LEAVE_TYPE]').val()
    var LEAVE_TYPE_MAX = $('[name=LEAVE_TYPE_MAX]').val()
    console.log (LEAVE_TYPE,LEAVE_TYPE_MAX)
    var url = window.location.origin+"/academy/index.php/Home/add_leave_types";
    // console.log(window.location.origin);
    // return false;
    var data = {
    
      'LEAVE_TYPE':LEAVE_TYPE,
      'LEAVE_TYPE_MAX':LEAVE_TYPE_MAX
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      console.log(resp)
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_leave_types(LEAVE_TYPE_ID,LEAVE_TYPE,LEAVE_TYPE_MAX){
    // console.log(ID_F);
    // console.log(FACULTY_ID);
    // console.log(FACUALTY_NAME_TH);
    // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    $('#edit_leave_types [name=LEAVE_TYPE_ID]').val(LEAVE_TYPE_ID);  
    $('#edit_leave_types [name=LEAVE_TYPE]').val(LEAVE_TYPE);
    $('#edit_leave_types [name=LEAVE_TYPE_MAX]').val(LEAVE_TYPE_MAX);
    $('#edit_leave_types').modal('show'); 
  },
  edit_leave_types(){
    var LEAVE_TYPE_ID = $('#edit_leave_types [name=LEAVE_TYPE_ID]').val()  
    var LEAVE_TYPE = $('#edit_leave_types [name=LEAVE_TYPE]').val()
    var LEAVE_TYPE_MAX = $('#edit_leave_types [name=LEAVE_TYPE_MAX]').val()
    // console.log(LEAVE_TYPE_ID),
    // console.log(LEAVE_TYPE),
    // console.log(LEAVE_TYPE_MAX);
    // return false หยุดการทำงาน 
    var url = window.location.origin+"/academy/index.php/Home/edit_leave_types";
    var data = {
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'LEAVE_TYPE':LEAVE_TYPE,
      'LEAVE_TYPE_MAX':LEAVE_TYPE_MAX
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_leave_types(LEAVE_TYPE_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_leave_types";
    var data = {
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_managements(){
    var MANAGEMENT_NAME = $('[name=MANAGEMENT_NAME]').val()
    var url = window.location.origin+"/academy/index.php/Home/add_managements";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'MANAGEMENT_NAME':MANAGEMENT_NAME
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_managements(MANAGEMENT_ID,MANAGEMENT_NAME){
    $('#edit_managements [name=MANAGEMENT_NAME]').val(MANAGEMENT_NAME);
    $('#edit_managements [name=MANAGEMENT_ID]').val(MANAGEMENT_ID);
    $('#edit_managements').modal('show');
  },
  edit_managements(){
    var MANAGEMENT_NAME	= $('#edit_managements [name=MANAGEMENT_NAME]').val()
    var MANAGEMENT_ID = $('#edit_managements [name=MANAGEMENT_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_managements";
    var data = {
      'MANAGEMENT_NAME':MANAGEMENT_NAME,
      'MANAGEMENT_ID':MANAGEMENT_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_managements(MANAGEMENT_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_managements";
    var data = {
      'MANAGEMENT_ID':MANAGEMENT_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_personnel_categories(){
    var PERSONNEL_CATEGORY_DETAIL = $('[name=PERSONNEL_CATEGORY_DETAIL]').val()
    var url = window.location.origin+"/academy/index.php/Home/add_personnel_categories";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'PERSONNEL_CATEGORY_DETAIL':PERSONNEL_CATEGORY_DETAIL
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_personnel_categories(PERSONNEL_CATEGORY_ID,PERSONNEL_CATEGORY_DETAIL){
    $('#edit_personnel_categories [name=PERSONNEL_CATEGORY_DETAIL]').val(PERSONNEL_CATEGORY_DETAIL);
    $('#edit_personnel_categories [name=PERSONNEL_CATEGORY_ID]').val(PERSONNEL_CATEGORY_ID);
    $('#edit_personnel_categories').modal('show');
  },
  edit_personnel_categories(){
    var PERSONNEL_CATEGORY_DETAIL	= $('#edit_personnel_categories [name=PERSONNEL_CATEGORY_DETAIL]').val()
    var PERSONNEL_CATEGORY_ID = $('#edit_personnel_categories [name=PERSONNEL_CATEGORY_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_personnel_categories";
    var data = {
      'PERSONNEL_CATEGORY_DETAIL':PERSONNEL_CATEGORY_DETAIL,
      'PERSONNEL_CATEGORY_ID':PERSONNEL_CATEGORY_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_personnel_categories(PERSONNEL_CATEGORY_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_personnel_categories";
    var data = {
      'PERSONNEL_CATEGORY_ID':PERSONNEL_CATEGORY_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
 ///
  add_personnel_statuses(){
    var PERSONNEL_STATUS_DETAIL = $('[name=PERSONNEL_STATUS_DETAIL]').val()
    var url = window.location.origin+"/academy/index.php/Home/add_personnel_statuses";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'PERSONNEL_STATUS_DETAIL':PERSONNEL_STATUS_DETAIL
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_personnel_statuses(PERSONNEL_STATUS_ID,PERSONNEL_STATUS_DETAIL){
    $('#edit_personnel_statuses [name=PERSONNEL_STATUS_DETAIL]').val(PERSONNEL_STATUS_DETAIL);
    $('#edit_personnel_statuses [name=PERSONNEL_STATUS_ID]').val(PERSONNEL_STATUS_ID);
    $('#edit_personnel_statuses').modal('show');
  },
  edit_personnel_statuses(){
    var PERSONNEL_STATUS_DETAIL = $('#edit_personnel_statuses [name=PERSONNEL_STATUS_DETAIL]').val()
    var PERSONNEL_STATUS_ID = $('#edit_personnel_statuses [name=PERSONNEL_STATUS_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_personnel_statuses";
    var data = {
      'PERSONNEL_STATUS_DETAIL':PERSONNEL_STATUS_DETAIL,
      'PERSONNEL_STATUS_ID':PERSONNEL_STATUS_ID
    }
    // console.log(PERSONNEL_STATUS_DETAIL);
    // console.log(PERSONNEL_STATUS_ID);
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_personnel_statuses(PERSONNEL_STATUS_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_personnel_statuses";
    var data = {
      'PERSONNEL_STATUS_ID':PERSONNEL_STATUS_ID
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_personnel_types(){
    var PERSONNEL_TYPE_DETAIL = $('[name=PERSONNEL_TYPE_DETAIL]').val()
    console.log (PERSONNEL_TYPE_DETAIL)
    var url = window.location.origin+"/academy/index.php/Home/add_personnel_types";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'PERSONNEL_TYPE_DETAIL':PERSONNEL_TYPE_DETAIL
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_personnel_types(PERSONNEL_TYPE_ID,PERSONNEL_TYPE_DETAIL){
    $('#edit_personnel_types [name=PERSONNEL_TYPE_DETAIL]').val(PERSONNEL_TYPE_DETAIL);
    $('#edit_personnel_types [name=PERSONNEL_TYPE_ID]').val(PERSONNEL_TYPE_ID);
    $('#edit_personnel_types').modal('show');
  },
  edit_personnel_types(){
    var PERSONNEL_TYPE_DETAIL = $('#edit_personnel_types [name=PERSONNEL_TYPE_DETAIL]').val()
    var PERSONNEL_TYPE_ID = $('#edit_personnel_types [name=PERSONNEL_TYPE_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_personnel_types";
    var data = {
      'PERSONNEL_TYPE_DETAIL':PERSONNEL_TYPE_DETAIL,
      'PERSONNEL_TYPE_ID':PERSONNEL_TYPE_ID
    }
    // console.log(PERSONNEL_TYPE_DETAIL);
    // console.log(PERSONNEL_TYPE_ID);
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_personnel_types(PERSONNEL_TYPE_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_personnel_types";
    var data = {
      'PERSONNEL_TYPE_ID':PERSONNEL_TYPE_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
///
  add_faculties(){  
    var FACULTY_ID = $('[name=FACULTY_ID]').val()
    var FACUALTY_NAME_TH = $('[name=FACUALTY_NAME_TH]').val()
    var FACUALTY_NAME_EN = $('[name=FACUALTY_NAME_EN]').val()
    console.log (FACULTY_ID,FACUALTY_NAME_TH,FACUALTY_NAME_EN)
    var url = window.location.origin+"/academy/index.php/Home/add_faculties";
    // console.log(window.location.origin);
    // return false;
    $('input').removeClass('red')
    if(FACULTY_ID==""){
      $('#add_faculties [name=FACULTY_ID]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(FACUALTY_NAME_TH==""){
      $('#add_faculties [name=FACUALTY_NAME_TH]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(FACUALTY_NAME_EN==""){
      $('#add_faculties [name=FACUALTY_NAME_EN]').addClass("red")
      return false;
    }

    var data = {
      'FACULTY_ID':FACULTY_ID,
      'FACUALTY_NAME_TH':FACUALTY_NAME_TH,
      'FACUALTY_NAME_EN':FACUALTY_NAME_EN
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert(resp.ms)
        $('#add_faculties [name='+resp.name+']').addClass("red")
        return false;
      }
    })
  },
  get_edit_faculties(ID_F,FACULTY_ID,FACUALTY_NAME_TH,FACUALTY_NAME_EN){
    // console.log(ID_F);
    // console.log(FACULTY_ID);
    // console.log(FACUALTY_NAME_TH);
    // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    $('#edit_faculties [name=ID_F]').val(ID_F);  
    $('#edit_faculties [name=FACULTY_ID]').val(FACULTY_ID);
    $('#edit_faculties [name=FACUALTY_NAME_TH]').val(FACUALTY_NAME_TH);
    $('#edit_faculties [name=FACUALTY_NAME_EN]').val(FACUALTY_NAME_EN);
    $('#edit_faculties').modal('show'); 
  },
  edit_faculties(){
    var ID_F = $('#edit_faculties [name=ID_F]').val()  
    var FACULTY_ID = $('#edit_faculties [name=FACULTY_ID]').val()
    var FACUALTY_NAME_TH = $('#edit_faculties [name=FACUALTY_NAME_TH]').val()
    var FACUALTY_NAME_EN = $('#edit_faculties [name=FACUALTY_NAME_EN]').val()
    // console.log(ID_F),
    // console.log(FACUALTY_NAME_TH),
    // console.log(FACUALTY_NAME_EN);
    // return false หยุดการทำงาน 
    var url = window.location.origin+"/academy/index.php/Home/edit_faculties";

    $('input').removeClass('red')
    if(FACULTY_ID==""){
      $('#edit_faculties [name=FACULTY_ID]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(FACUALTY_NAME_TH==""){
      $('#edit_faculties [name=FACUALTY_NAME_TH]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(FACUALTY_NAME_EN==""){
      $('#edit_faculties [name=FACUALTY_NAME_EN]').addClass("red")
      return false;
    }

    var data = {
      'ID_F':ID_F,
      'FACULTY_ID':FACULTY_ID,
      'FACUALTY_NAME_TH':FACUALTY_NAME_TH,
      'FACUALTY_NAME_EN':FACUALTY_NAME_EN
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_faculties(ID_F){
    var url = window.location.origin+"/academy/index.php/Home/delete_faculties";
    var data = {
      'ID_F':ID_F 
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
/////
  add_departments(){
    var DEPARTMENT_ID = $('#add_departments [name=DEPARTMENT_ID]').val()
    var DEPARTMENT_NAME_TH = $('#add_departments [name=DEPARTMENT_NAME_TH]').val()
    var DEPARTMENT_NAME_EN = $('#add_departments [name=DEPARTMENT_NAME_EN]').val()
    var FACULTY_ID = $('#add_departments [name=FACULTY_ID] option:selected').val();
    var url = window.location.origin+"/academy/index.php/Home/add_departments";
    // console.log(window.location.origin);
    // return false;
    $('input').removeClass('red')
    if(DEPARTMENT_ID==""){
      $('#add_departments [name=DEPARTMENT_ID]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(DEPARTMENT_NAME_TH==""){
      $('#add_departments [name=DEPARTMENT_NAME_TH]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(DEPARTMENT_NAME_EN==""){
      $('#add_departments [name=DEPARTMENT_NAME_EN]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(FACULTY_ID==""){
      $('#add_departments [name=FACULTY_ID]').addClass("red")
      return false;
    }
    var data = {
      'DEPARTMENT_ID':DEPARTMENT_ID,
      'DEPARTMENT_NAME_TH':DEPARTMENT_NAME_TH,
      'DEPARTMENT_NAME_EN':DEPARTMENT_NAME_EN,
      'FACULTY_ID':FACULTY_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert(resp.ms)
        $('#add_departments [name='+resp.name+']').addClass("red")
        return false;
      }
    })

  },  
  get_edit_departments(ID_DEP,DEPARTMENT_ID,DEPARTMENT_NAME_TH,DEPARTMENT_NAME_EN,FACULTY_ID){
    // console.log(ID_DEP,DEPARTMENT_ID,DEPARTMENT_NAME_TH,DEPARTMENT_NAME_EN,FACULTY_ID)
    $('#edit_departments [name=ID_DEP]').val(ID_DEP);  
    $('#edit_departments [name=DEPARTMENT_ID]').val(DEPARTMENT_ID);
    $('#edit_departments [name=DEPARTMENT_NAME_TH]').val(DEPARTMENT_NAME_TH);
    $('#edit_departments [name=DEPARTMENT_NAME_EN]').val(DEPARTMENT_NAME_EN);
    $('#edit_departments [name=FACULTY_ID] option').each(function(key,value){
      if(FACULTY_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_departments').modal('show'); 
  },
  edit_departments(){
    var ID_DEP = $('#edit_departments [name=ID_DEP]').val()
    var DEPARTMENT_ID = $('#edit_departments [name=DEPARTMENT_ID]').val()
    var DEPARTMENT_NAME_TH = $('#edit_departments [name=DEPARTMENT_NAME_TH]').val()
    var DEPARTMENT_NAME_EN = $('#edit_departments [name=DEPARTMENT_NAME_EN]').val()
    var FACULTY_ID = $('#edit_departments [name=FACULTY_ID] option:selected').val();
    var url = window.location.origin+"/academy/index.php/Home/edit_departments";
    // console.log(window.location.origin);
    // return false;
    $('input').removeClass('red')
    if(DEPARTMENT_ID==""){
      $('#edit_departments [name=DEPARTMENT_ID]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(DEPARTMENT_NAME_TH==""){
      $('#edit_departments [name=DEPARTMENT_NAME_TH]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(DEPARTMENT_NAME_EN==""){
      $('#edit_departments [name=DEPARTMENT_NAME_EN]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
    if(FACULTY_ID==""){
      $('#edit_departments [name=FACULTY_ID]').addClass("red")
      return false;
    }

    var data = {
      'ID_DEP':ID_DEP,
      'DEPARTMENT_ID':DEPARTMENT_ID,
      'DEPARTMENT_NAME_TH':DEPARTMENT_NAME_TH,
      'DEPARTMENT_NAME_EN':DEPARTMENT_NAME_EN,
      'FACULTY_ID':FACULTY_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert(resp.ms)
        $('#edit_departments [name='+resp.name+']').addClass("red")
        return false;
      }
    })

  },
  delete_departments(ID_DEP){
    var url = window.location.origin+"/academy/index.php/Home/delete_departments";
    var data = {
      'ID_DEP':ID_DEP 
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
////
  add_personnels(){
    var PERSONNEL_ID = $('#add_personnels [name=PERSONNEL_ID]').val()
    var PERSONNEL_NAME = $('#add_personnels [name=PERSONNEL_NAME]').val()
    var PERSONNEL_SURNAME = $('#add_personnels [name=PERSONNEL_SURNAME]').val()
    var PERSONNEL_NAME_EN = $('#add_personnels [name=PERSONNEL_NAME_EN]').val()
    var PERSONNEL_SURNAME_EN = $('#add_personnels [name=PERSONNEL_SURNAME_EN]').val()
    var PERSONNEL_EMAIL = $('#add_personnels [name=PERSONNEL_EMAIL]').val()
    var PERSONNEL_MOBILE = $('#add_personnels [name=PERSONNEL_MOBILE]').val()
    var PERSONNEL_PHONE = $('#add_personnels [name=PERSONNEL_PHONE]').val()
    var PERSONNEL_PHONE_EXTENSION = $('#add_personnels [name=PERSONNEL_PHONE_EXTENSION]').val()
    var PERSONNEL_SEX = $('#add_personnels [name=PERSONNEL_SEX]:checked').val()
    var PERSONNEL_CREATE_BY = $('#add_personnels [name=PERSONNEL_CREATE_BY]').val()
    var PERSONNEL_CRETTE_DATE = $('#add_personnels [name=PERSONNEL_CRETTE_DATE]').val()
    var DEPARTMENT_ID =$('#add_personnels [name=DEPARTMENT_ID] option:selected').val();
    var PERSONNEL_CATEGORY_ID =$('#add_personnels [name=PERSONNEL_CATEGORY_ID] option:selected').val();
    var PERSONNEL_STATUS_ID  = $('#add_personnels [name=PERSONNEL_STATUS_ID] option:selected').val();
    var PERSONNEL_TYPE_ID = $('#add_personnels [name=PERSONNEL_TYPE_ID] option:selected').val();
    var PERSONNEL_USERNAME = $('#add_personnels [name=PERSONNEL_USERNAME]').val()
    var PERSONNEL_PASSWORD = $('#add_personnels [name=PERSONNEL_PASSWORD]').val()
    var url = window.location.origin+"/academy/index.php/Home/add_personnels";
    // console.log(PERSONNEL_CRETTE_DATE);
    // console.log(PERSONNEL_PASSWORD);
    // return false
    $('input').removeClass('red')
    if(PERSONNEL_ID==""){
      $('#add_personnels [name=PERSONNEL_ID]').addClass("red")
      return false;
    }
    if(PERSONNEL_USERNAME==""){
      $('#add_personnels [name=PERSONNEL_USERNAME]').addClass("red")
      return false;
    }

    if(PERSONNEL_PASSWORD==""){
      $('#add_personnels [name=PERSONNEL_PASSWORD]').addClass("red")
      return false;
    }
    if(PERSONNEL_NAME==""){
      $('#add_personnels [name=PERSONNEL_NAME]').addClass("red")
      return false;
    }
    if(PERSONNEL_SURNAME==""){
      $('#add_personnels [name=PERSONNEL_SURNAME]').addClass("red")
      return false;
    }
    if(PERSONNEL_NAME_EN==""){
      $('#add_personnels [name=PERSONNEL_NAME_EN]').addClass("red")
      return false;
    }

    if(PERSONNEL_SURNAME_EN==""){
      $('#add_personnels [name=PERSONNEL_SURNAME_EN').addClass("red")
      return false;
    }
    if(PERSONNEL_CRETTE_DATE==""){
      $('#add_personnels [name=PERSONNEL_CRETTE_DATE').addClass("red")
      return false;
    }
    if(PERSONNEL_EMAIL==""){
      $('#add_personnels [name=PERSONNEL_EMAIL]').addClass("red")
      return false;
    }
    if(PERSONNEL_PHONE==""){
      $('#add_personnels [name=PERSONNEL_PHONE]').addClass("red")
      return false;
    }
    if(PERSONNEL_MOBILE==""){
      $('#add_personnels [name=PERSONNEL_MOBILE]').addClass("red")
      return false;
    }
    if(PERSONNEL_PHONE_EXTENSION==""){
      $('#add_personnels [name=PERSONNEL_PHONE_EXTENSION]').addClass("red")
      return false;
    }
    if(PERSONNEL_TYPE_ID==""){
      $('#add_personnels [name=PERSONNEL_TYPE_ID]').addClass("red")
      return false;
    }
    if(PERSONNEL_STATUS_ID==""){
      $('#add_personnels [name=PERSONNEL_STATUS_ID]').addClass("red")
      return false;
    }
    if(PERSONNEL_CATEGORY_ID==""){
      $('#add_personnels [name=PERSONNEL_CATEGORY_ID]').addClass("red")
      return false;
    }
    if(DEPARTMENT_ID==""){
      $('#add_personnels [name=DEPARTMENT_ID]').addClass("red")
      return false;
    }

    var data = {
      'PERSONNEL_ID':PERSONNEL_ID,
      'PERSONNEL_NAME':PERSONNEL_NAME,
      'PERSONNEL_SURNAME':PERSONNEL_SURNAME,
      'PERSONNEL_NAME_EN':PERSONNEL_NAME_EN,
      'PERSONNEL_SURNAME_EN':PERSONNEL_SURNAME_EN,
      'PERSONNEL_EMAIL':PERSONNEL_EMAIL,
      'PERSONNEL_MOBILE':PERSONNEL_MOBILE,
      'PERSONNEL_PHONE':PERSONNEL_PHONE,
      'PERSONNEL_PHONE_EXTENSION':PERSONNEL_PHONE_EXTENSION,
      'PERSONNEL_SEX':PERSONNEL_SEX,
      'PERSONNEL_CREATE_BY':PERSONNEL_CREATE_BY,
      'PERSONNEL_CRETTE_DATE':PERSONNEL_CRETTE_DATE,
      'DEPARTMENT_ID':DEPARTMENT_ID,
      'PERSONNEL_STATUS_ID':PERSONNEL_STATUS_ID,
      'PERSONNEL_TYPE_ID':PERSONNEL_TYPE_ID,
      'PERSONNEL_CATEGORY_ID':PERSONNEL_CATEGORY_ID,
      'PERSONNEL_USERNAME':PERSONNEL_USERNAME,
      'PERSONNEL_PASSWORD':PERSONNEL_PASSWORD
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {

      if(resp.st == 1){
        alert(resp.ms)
        location.reload();
      }else{
        alert(resp.ms)
        $('#add_personnels [name='+resp.name+']').addClass("red")
        return false;
      }
    })
  }, 
  get_edit_personnels(PERSONNEL_ID,PERSONNEL_NAME,PERSONNEL_SURNAME,PERSONNEL_NAME_EN,PERSONNEL_SURNAME_EN,
    PERSONNEL_EMAIL,PERSONNEL_MOBILE,PERSONNEL_PHONE,PERSONNEL_PHONE_EXTENSION,PERSONNEL_SEX,
    PERSONNEL_CREATE_BY,PERSONNEL_CRETTE_DATE,DEPARTMENT_ID,PERSONNEL_TYPE_ID,PERSONNEL_STATUS_ID,
    PERSONNEL_CATEGORY_ID,PERSONNEL_USERNAME,PERSONNEL_PASSWORD){
    // console.log(PERSONNEL_CRETTE_DATE);
    // return false;
    $('#edit_personnels [name=PERSONNEL_ID]').val(PERSONNEL_ID); 
    $('#edit_personnels [name=PERSONNEL_NAME]').val(PERSONNEL_NAME); 
    $('#edit_personnels [name=PERSONNEL_SURNAME]').val(PERSONNEL_SURNAME);
    $('#edit_personnels [name=PERSONNEL_NAME_EN]').val(PERSONNEL_NAME_EN);
    $('#edit_personnels [name=PERSONNEL_SURNAME_EN]').val(PERSONNEL_SURNAME_EN);
    $('#edit_personnels [name=PERSONNEL_EMAIL]').val(PERSONNEL_EMAIL);
    $('#edit_personnels [name=PERSONNEL_MOBILE]').val(PERSONNEL_MOBILE);
    $('#edit_personnels [name=PERSONNEL_PHONE]').val(PERSONNEL_PHONE);
    $('#edit_personnels [name=PERSONNEL_PHONE_EXTENSION]').val(PERSONNEL_PHONE_EXTENSION); 
      
    // $('#edit_personnels [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#edit_personnels [name=PERSONNEL_SEX]').each(function(key,value){
      
      if($(value).val()==PERSONNEL_SEX){
        // console.log($(value).val());
        // console.log(PERSONNEL_SEX);
        $(value).prop( "checked", true );
        
      }
      

    })
    
    $('#edit_personnels [name=PERSONNEL_CREATE_BY]').val(PERSONNEL_CREATE_BY);
    $('#edit_personnels [name=PERSONNEL_CRETTE_DATE]').val(PERSONNEL_CRETTE_DATE);
    $('#edit_personnels [name=DEPARTMENT_ID] option').each(function(key,value){
      if(DEPARTMENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_personnels [name=PERSONNEL_TYPE_ID] option').each(function(key,value){
      if(PERSONNEL_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
       }
    });
    $('#edit_personnels [name=PERSONNEL_STATUS_ID] option').each(function(key,value){
      if(PERSONNEL_STATUS_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_personnels [name=PERSONNEL_CATEGORY_ID] option').each(function(key,value){
      if(PERSONNEL_CATEGORY_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
  
    $('#edit_personnels [name=PERSONNEL_USERNAME]').val(PERSONNEL_USERNAME);
    $('#edit_personnels [name=PERSONNEL_PASSWORD]').val(PERSONNEL_PASSWORD);
    $('#edit_personnels').modal('show'); 
   ;
  }, 
  get_show_personnels(PERSONNEL_ID,PERSONNEL_NAME,PERSONNEL_SURNAME,PERSONNEL_NAME_EN,PERSONNEL_SURNAME_EN,
    PERSONNEL_EMAIL,PERSONNEL_MOBILE,PERSONNEL_PHONE,PERSONNEL_PHONE_EXTENSION,PERSONNEL_SEX,
    PERSONNEL_CREATE_BY,PERSONNEL_CRETTE_DATE,DEPARTMENT_ID,PERSONNEL_TYPE_ID,PERSONNEL_STATUS_ID,
    PERSONNEL_CATEGORY_ID,PERSONNEL_USERNAME,PERSONNEL_PASSWORD){
    // console.log(PERSONNEL_CRETTE_DATE);
    // return false;
    $('#show_personnels [name=PERSONNEL_ID]').val(PERSONNEL_ID); 
    $('#show_personnels [name=PERSONNEL_NAME]').val(PERSONNEL_NAME); 
    $('#show_personnels [name=PERSONNEL_SURNAME]').val(PERSONNEL_SURNAME);
    $('#show_personnels [name=PERSONNEL_NAME_EN]').val(PERSONNEL_NAME_EN);
    $('#show_personnels [name=PERSONNEL_SURNAME_EN]').val(PERSONNEL_SURNAME_EN);
    $('#show_personnels [name=PERSONNEL_EMAIL]').val(PERSONNEL_EMAIL);
    $('#show_personnels [name=PERSONNEL_MOBILE]').val(PERSONNEL_MOBILE);
    $('#show_personnels [name=PERSONNEL_PHONE]').val(PERSONNEL_PHONE);
    $('#show_personnels [name=PERSONNEL_PHONE_EXTENSION]').val(PERSONNEL_PHONE_EXTENSION); 
    // $('#edit_personnels [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#show_personnels [name=PERSONNEL_SEX]').each(function(key,value){
      
      if($(value).val()==PERSONNEL_SEX){
        // console.log($(value).val());
        // console.log(PERSONNEL_SEX);
        $(value).prop( "checked", true );
        
      }
      

    })
    
    $('#show_personnels .PERSONNEL_CREATE_BY').text(PERSONNEL_CREATE_BY); 

  
    $('#show_personnels [name=PERSONNEL_CRETTE_DATE]').val(PERSONNEL_CRETTE_DATE);
    $('#show_personnels [name=DEPARTMENT_ID] option').each(function(key,value){
      if(DEPARTMENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#show_personnels [name=PERSONNEL_TYPE_ID] option').each(function(key,value){
      if(PERSONNEL_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
       }
    });
    $('#show_personnels [name=PERSONNEL_STATUS_ID] option').each(function(key,value){
      if(PERSONNEL_STATUS_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#show_personnels [name=PERSONNEL_CATEGORY_ID] option').each(function(key,value){
      if(PERSONNEL_CATEGORY_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#show_personnels [name=PERSONNEL_USERNAME]').val(PERSONNEL_USERNAME);
    $('#show_personnels [name=PERSONNEL_PASSWORD]').val(PERSONNEL_PASSWORD);
    $('#show_personnels').modal('show'); 
  }, 
  edit_personnels(){
    var PERSONNEL_ID = $('#edit_personnels [name=PERSONNEL_ID]').val()
    var PERSONNEL_NAME = $('#edit_personnels [name=PERSONNEL_NAME]').val()
    var PERSONNEL_SURNAME = $('#edit_personnels [name=PERSONNEL_SURNAME]').val()
    var PERSONNEL_NAME_EN = $('#edit_personnels [name=PERSONNEL_NAME_EN]').val()
    var PERSONNEL_SURNAME_EN = $('#edit_personnels [name=PERSONNEL_SURNAME_EN]').val()
    var PERSONNEL_EMAIL = $('#edit_personnels [name=PERSONNEL_EMAIL]').val()
    var PERSONNEL_MOBILE = $('#edit_personnels [name=PERSONNEL_MOBILE]').val()
    var PERSONNEL_PHONE = $('#edit_personnels [name=PERSONNEL_PHONE]').val()
    var PERSONNEL_PHONE_EXTENSION = $('#edit_personnels [name=PERSONNEL_PHONE_EXTENSION]').val()
    var PERSONNEL_SEX = $('#edit_personnels [name=PERSONNEL_SEX]:checked').val()
    var PERSONNEL_CREATE_BY = $('#edit_personnels [name=PERSONNEL_CREATE_BY]').val()
    var PERSONNEL_CRETTE_DATE = $('#edit_personnels [name=PERSONNEL_CRETTE_DATE]').val()
    var PERSONNEL_USERNAME = $('#edit_personnels [name=PERSONNEL_USERNAME]').val()
    var PERSONNEL_PASSWORD = $('#edit_personnels [name=PERSONNEL_PASSWORD]').val()
    var PERSONNEL_STATUS_ID = $('#edit_personnels [name=PERSONNEL_STATUS_ID] option:selected').val();
    var PERSONNEL_TYPE_ID = $('#edit_personnels [name=PERSONNEL_TYPE_ID] option:selected').val();
    var PERSONNEL_CATEGORY_ID = $('#edit_personnels [name=PERSONNEL_CATEGORY_ID] option:selected').val();
    var DEPARTMENT_ID = $('#edit_personnels [name=DEPARTMENT_ID] option:selected').val();
    var url = window.location.origin+"/academy/index.php/Home/edit_personnels";
    // console.log(window.location.origin);
    // return false;
    $('input').removeClass('red')
    if(PERSONNEL_ID==""){
      $('#edit_personnels [name=PERSONNEL_ID]').addClass("red")
      return false;
    }
    if(PERSONNEL_USERNAME==""){
      $('#edit_personnels [name=PERSONNEL_USERNAME]').addClass("red")
      return false;
    }

    if(PERSONNEL_PASSWORD==""){
      $('#edit_personnels [name=PERSONNEL_PASSWORD]').addClass("red")
      return false;
    }
    if(PERSONNEL_NAME==""){
      $('#edit_personnels [name=PERSONNEL_NAME]').addClass("red")
      return false;
    }
    if(PERSONNEL_SURNAME==""){
      $('#edit_personnels [name=PERSONNEL_SURNAME]').addClass("red")
      return false;
    }
    if(PERSONNEL_NAME_EN==""){
      $('#edit_personnels [name=PERSONNEL_NAME_EN]').addClass("red")
      return false;
    }

    if(PERSONNEL_SURNAME_EN==""){
      $('#edit_personnels [name=PERSONNEL_SURNAME_EN').addClass("red")
      return false;
    }
    if(PERSONNEL_CRETTE_DATE==""){
      $('#edit_personnels [name=PERSONNEL_CRETTE_DATE').addClass("red")
      return false;
    }
    if(PERSONNEL_EMAIL==""){
      $('#edit_personnels [name=PERSONNEL_EMAIL]').addClass("red")
      return false;
    }
    if(PERSONNEL_PHONE==""){
      $('#edit_personnels [name=PERSONNEL_PHONE]').addClass("red")
      return false;
    }
    if(PERSONNEL_MOBILE==""){
      $('#edit_personnels [name=PERSONNEL_MOBILE]').addClass("red")
      return false;
    }
    if(PERSONNEL_PHONE_EXTENSION==""){
      $('#edit_personnels [name=PERSONNEL_PHONE_EXTENSION]').addClass("red")
      return false;
    }
   
    var data = {
      'PERSONNEL_ID':PERSONNEL_ID,
      'PERSONNEL_NAME':PERSONNEL_NAME,
      'PERSONNEL_SURNAME':PERSONNEL_SURNAME,
      'PERSONNEL_NAME_EN':PERSONNEL_NAME_EN,
      'PERSONNEL_SURNAME_EN':PERSONNEL_SURNAME_EN,
      'PERSONNEL_EMAIL':PERSONNEL_EMAIL,
      'PERSONNEL_MOBILE':PERSONNEL_MOBILE,
      'PERSONNEL_PHONE':PERSONNEL_PHONE,
      'PERSONNEL_PHONE_EXTENSION':PERSONNEL_PHONE_EXTENSION,
      'PERSONNEL_SEX':PERSONNEL_SEX,
      'PERSONNEL_CREATE_BY':PERSONNEL_CREATE_BY,
      'PERSONNEL_CRETTE_DATE':PERSONNEL_CRETTE_DATE,
      'PERSONNEL_USERNAME':PERSONNEL_USERNAME,
      'PERSONNEL_CREATE_BY':PERSONNEL_CREATE_BY,
      'PERSONNEL_CRETTE_DATE':PERSONNEL_CRETTE_DATE,
      'PERSONNEL_USERNAME':PERSONNEL_USERNAME,
      'PERSONNEL_PASSWORD':PERSONNEL_PASSWORD,
      'PERSONNEL_STATUS_ID':PERSONNEL_STATUS_ID,
      'PERSONNEL_TYPE_ID':PERSONNEL_TYPE_ID,
      'PERSONNEL_CATEGORY_ID':PERSONNEL_CATEGORY_ID,
      'DEPARTMENT_ID':DEPARTMENT_ID
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_personnels(PERSONNEL_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_personnels";
    var data = {
      'PERSONNEL_ID':PERSONNEL_ID 
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  /////
  add_management_positions(){
  
    var MANAGEMENT_ID = $('#add_management_positions [name=MANAGEMENT_ID] option:selected').val();
    var PERSONNEL_ID = $('#add_management_positions [name=PERSONNEL_ID] option:selected').val();
    var DEPARTMENT_ID = $('#add_management_positions [name=DEPARTMENT_ID] option:selected').val();
    var url = window.location.origin+"/academy/index.php/Home/add_management_positions";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'MANAGEMENT_ID':MANAGEMENT_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'DEPARTMENT_ID':DEPARTMENT_ID
    }
  
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  }, 
  get_edit_management_positions(MANAGEMENT_POSITION_ID,MANAGEMENT_ID,PERSONNEL_ID,DEPARTMENT_ID){
    // console.log(MANAGEMENT_POSITION_ID);
    // console.log(MANAGEMENT_ID);
    // console.log(PERSONNEL_ID);
    // console.log(DEPARTMENT_ID);
    // return false;
    $('#edit_management_positions [name=MANAGEMENT_POSITION_ID]').val(MANAGEMENT_POSITION_ID);  

    $('#edit_management_positions [name=MANAGEMENT_ID] option').each(function(key,value){
      if(MANAGEMENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_management_positions [name=PERSONNEL_ID] option').each(function(key,value){
      if(PERSONNEL_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_management_positions [name=DEPARTMENT_ID] option').each(function(key,value){
      if(DEPARTMENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
  
    $('#edit_management_positions').modal('show'); 
  },
  edit_management_positions(){
    var MANAGEMENT_ID = $('#edit_management_positions [name=MANAGEMENT_ID] option:selected').val();
    var PERSONNEL_ID = $('#edit_management_positions [name=PERSONNEL_ID] option:selected').val();
    var DEPARTMENT_ID = $('#edit_management_positions [name=DEPARTMENT_ID] option:selected').val();
    var MANAGEMENT_POSITION_ID = $('#edit_management_positions [name=MANAGEMENT_POSITION_ID]').val()

    var url = window.location.origin+"/academy/index.php/Home/edit_management_positions";
    // console.log(MANAGEMENT_ID),
    // console.log(PERSONNEL_ID);
    // console.log(DEPARTMENT_ID);
    // return false 
    // console.log(window.location.origin);
    // return false;
    var data = {
      'MANAGEMENT_POSITION_ID':MANAGEMENT_POSITION_ID,
      'MANAGEMENT_ID':MANAGEMENT_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'DEPARTMENT_ID':DEPARTMENT_ID
    }
    // console.log(data);
    // return false;
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_management_positions(MANAGEMENT_POSITION_ID){
    //  console.log(MANAGEMENT_POSITION_ID);
    // return false 
    var url = window.location.origin+"/academy/index.php/Home/delete_management_positions";
    var data = {
      'MANAGEMENT_POSITION_ID':MANAGEMENT_POSITION_ID 
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
  add_academic_positions(){
    var ACADEMIC_ID = $('#add_academic_positions [name=ACADEMIC_ID] option:selected').val();
    var PERSONNEL_ID = $('#add_academic_positions [name=PERSONNEL_ID] option:selected').val();
    var url = window.location.origin+"/academy/index.php/Home/add_academic_positions";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'ACADEMIC_ID':ACADEMIC_ID,
      'PERSONNEL_ID':PERSONNEL_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
  
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
     
  },
  get_edit_academic_positions(ACADEMIC_POSITION_ID,ACADEMIC_ID,PERSONNEL_ID){
    // console.log(MANAGEMENT_POSITION_ID);
    // console.log(MANAGEMENT_ID);
    // console.log(PERSONNEL_ID);
    // console.log(DEPARTMENT_ID);
    // return false;
    $('#edit_academic_positions [name=ACADEMIC_POSITION_ID]').val(ACADEMIC_POSITION_ID);  

    $('#edit_academic_positions [name=ACADEMIC_ID] option').each(function(key,value){
      if(ACADEMIC_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_academic_positions [name=PERSONNEL_ID] option').each(function(key,value){
      if(PERSONNEL_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_academic_positions').modal('show'); 
  },
  edit_academic_positions(){
    var ACADEMIC_POSITION_ID = $('#edit_academic_positions [name=ACADEMIC_POSITION_ID]').val()
    var ACADEMIC_ID = $('#edit_academic_positions [name=ACADEMIC_ID] option:selected').val();
    var PERSONNEL_ID = $('#edit_academic_positions [name=PERSONNEL_ID] option:selected').val();

    var url = window.location.origin+"/academy/index.php/Home/edit_academic_positions";
    // console.log(MANAGEMENT_ID),
    // console.log(PERSONNEL_ID);
    // console.log(DEPARTMENT_ID);
    // return false 
    // console.log(window.location.origin);
    // return false;
    var data = {
      'ACADEMIC_POSITION_ID':ACADEMIC_POSITION_ID,
      'ACADEMIC_ID':ACADEMIC_ID,
      'PERSONNEL_ID':PERSONNEL_ID
    }
    // console.log(data);
    // return false;
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_academic_positions(ACADEMIC_POSITION_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_academic_positions";
    var data = {
      'ACADEMIC_POSITION_ID':ACADEMIC_POSITION_ID 
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
  add_counseling_types(){
    var COUNSELING_NAME = $('[name=COUNSELING_NAME]').val()
    console.log (COUNSELING_NAME)
    var url = window.location.origin+"/academy/index.php/Home/add_counseling_types";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'COUNSELING_NAME':COUNSELING_NAME
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_counseling_types(COUNSELING_TYPE_ID,COUNSELING_NAME){
    $('#edit_counseling_types [name=COUNSELING_NAME]').val(COUNSELING_NAME);
    $('#edit_counseling_types [name=COUNSELING_TYPE_ID]').val(COUNSELING_TYPE_ID);
    $('#edit_counseling_types').modal('show');
  },
  edit_counseling_types(){
    var COUNSELING_NAME = $('#edit_counseling_types [name=COUNSELING_NAME]').val()
    var COUNSELING_TYPE_ID = $('#edit_counseling_types [name=COUNSELING_TYPE_ID]').val()
    var url = window.location.origin+"/academy/index.php/Home/edit_counseling_types";
    var data = {
      'COUNSELING_NAME':COUNSELING_NAME,
      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('แก้ใขสำเร็จ')
        location.reload();
      }else{
        alert('เเก้ไขไม่สำเร็จ')
      }
    })
  },
  delete_counseling_types(COUNSELING_TYPE_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_counseling_types";
    var data = {
      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
    ///
  add_individual_counseling_services(){
    var ADVISOR_ID =$('#add_individual_counseling_services [name=ADVISOR_ID] option:selected').val();
    var STUDENT_ID =$('#add_individual_counseling_services [name=STUDENT_ID] option:selected').val();
    var COUNSELING_TYPE_ID =$('#add_individual_counseling_services [name=COUNSELING_TYPE_ID] option:selected').val();

    var COUNSELING_PROBLEM = $('#add_individual_counseling_services [name=COUNSELING_PROBLEM]').val()
    var COUNSELING_DETAIL = $('#add_individual_counseling_services [name=COUNSELING_DETAIL]').val()
    var COUNSELING_SOLVE = $('#add_individual_counseling_services [name=COUNSELING_SOLVE  ]').val()
    var COUNSELING_RESULT = $('#add_individual_counseling_services [name=COUNSELING_RESULT]').val()
    var COUNSELING_CREATE_DATE = $('#add_individual_counseling_services [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_DATE = $('#add_individual_counseling_services [name=COUNSELING_DATE]').val()
    var STUDEN_DATE = $('#add_individual_counseling_services [name=STUDEN_DATE]').val()
    
    var url = window.location.origin+"/academy/index.php/Home/add_individual_counseling_services";
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE);
    // console.log(STUDEN_DATE);
    // return false
    
    $('input').removeClass('red')
    if(ADVISOR_ID==""){
      $('#add_individual_counseling_services [name=ADVISOR_ID]').addClass("red")
      return false;
    }
    if(STUDENT_ID==""){
      $('#add_individual_counseling_services [name=STUDENT_ID]').addClass("red")
      return false;
    }

    if(COUNSELING_TYPE_ID==""){
      $('#add_individual_counseling_services [name=COUNSELING_TYPE_ID]').addClass("red")
      return false;
    }
    if(COUNSELING_CREATE_DATE==""){
      $('#add_individual_counseling_services [name=COUNSELING_CREATE_DATE').addClass("red")
      return false;
    }
    if(COUNSELING_PROBLEM==""){
      $('#add_individual_counseling_services [name=COUNSELING_PROBLEM]').addClass("red")
      return false;
    }
    if(COUNSELING_DETAIL==""){
      $('#add_individual_counseling_services [name=COUNSELING_DETAIL]').addClass("red")
      return false;
    }
    if(COUNSELING_SOLVE==""){
      $('#add_individual_counseling_services [name=COUNSELING_SOLVE]').addClass("red")
      return false;
    }

    if(COUNSELING_RESULT==""){
      $('#add_individual_counseling_services [name=COUNSELING_RESULT').addClass("red")
      return false;
    }
  
    if(COUNSELING_DATE==""){
      $('#add_individual_counseling_services [name=COUNSELING_DATE]').addClass("red")
      return false;
    }
    if(STUDEN_DATE==""){
      $('#add_individual_counseling_services [name=STUDEN_DATE]').addClass("red")
      return false;
    }
    
  

    var data = {
      'ADVISOR_ID':ADVISOR_ID,
      'STUDENT_ID':STUDENT_ID,
      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID,
      'COUNSELING_PROBLEM':COUNSELING_PROBLEM,
      'COUNSELING_DETAIL':COUNSELING_DETAIL,
      'COUNSELING_SOLVE':COUNSELING_SOLVE,
      'COUNSELING_RESULT':COUNSELING_RESULT,
      'COUNSELING_CREATE_DATE':COUNSELING_CREATE_DATE,
      'COUNSELING_DATE':COUNSELING_DATE,
      'STUDEN_DATE':STUDEN_DATE
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {

      if(resp.st == 1){
        alert(resp.ms)
        location.reload();
      }else{
        alert(resp.ms)
        $('#add_individual_counseling_services [name='+resp.name+']').addClass("red")
        return false;
      }
    })
  }, 
  get_edit_individual_counseling_services(INDIVIDUAL_COUNSELING_ID,ADVISOR_ID,STUDENT_ID,COUNSELING_TYPE_ID,COUNSELING_PROBLEM,COUNSELING_DETAIL,
    COUNSELING_SOLVE,COUNSELING_RESULT,COUNSELING_CREATE_DATE,COUNSELING_DATE,STUDEN_DATE){
    //   console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);

    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE);
    // console.log(STUDEN_DATE);
    // return false
    $('#edit_individual_counseling_services [name=INDIVIDUAL_COUNSELING_ID]').val(INDIVIDUAL_COUNSELING_ID);

    $('#edit_individual_counseling_services [name=ADVISOR_ID] option').each(function(key,value){
      if(ADVISOR_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_individual_counseling_services [name=STUDENT_ID] option').each(function(key,value){
      if(STUDENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_individual_counseling_services [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      if(COUNSELING_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });

    $('#edit_individual_counseling_services [name=COUNSELING_PROBLEM]').val(COUNSELING_PROBLEM);
    $('#edit_individual_counseling_services [name=COUNSELING_DETAIL]').val(COUNSELING_DETAIL);
    $('#edit_individual_counseling_services [name=COUNSELING_SOLVE]').val(COUNSELING_SOLVE);
    $('#edit_individual_counseling_services [name=COUNSELING_RESULT]').val(COUNSELING_RESULT);
    $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE]').val(COUNSELING_CREATE_DATE);
    $('#edit_individual_counseling_services [name=COUNSELING_DATE]').val(COUNSELING_DATE);
    $('#edit_individual_counseling_services [name=STUDEN_DATE]').val(STUDEN_DATE); 
    $('#edit_individual_counseling_services').modal('show'); 
   ;
  },
  edit_individual_counseling_services(){

    var INDIVIDUAL_COUNSELING_ID = $('#edit_individual_counseling_services [name=INDIVIDUAL_COUNSELING_ID]').val()

    var ADVISOR_ID = $('#edit_individual_counseling_services [name=ADVISOR_ID] option:selected').val();
    var STUDENT_ID = $('#edit_individual_counseling_services [name=STUDENT_ID] option:selected').val();
    var COUNSELING_TYPE_ID = $('#edit_individual_counseling_services [name=COUNSELING_TYPE_ID] option:selected').val();
    
    var COUNSELING_PROBLEM = $('#edit_individual_counseling_services [name=COUNSELING_SOLVE]').val()
    var COUNSELING_DETAIL = $('#edit_individual_counseling_services [name=COUNSELING_DETAIL]').val()
    var COUNSELING_SOLVE = $('#edit_individual_counseling_services [name=COUNSELING_SOLVE]').val()
    var COUNSELING_RESULT = $('#edit_individual_counseling_services [name=COUNSELING_RESULT]').val()
    var COUNSELING_CREATE_DATE = $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_DATE = $('#edit_individual_counseling_services [name=COUNSELING_DATE]').val()
    var STUDEN_DATE = $('#edit_individual_counseling_services [name=STUDEN_DATE]').val()
  
  

    var url = window.location.origin+"/academy/index.php/Home/edit_individual_counseling_services";

    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);

    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE);
    // console.log(STUDEN_DATE);
    // return false;

    $('input').removeClass('red')

    if(COUNSELING_CREATE_DATE==""){
      $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE').addClass("red")
      return false;
    }
    if(COUNSELING_DATE==""){
      $('#edit_individual_counseling_services [name=COUNSELING_DATE]').addClass("red")
      return false;
    }
    if(STUDEN_DATE==""){
      $('#edit_individual_counseling_services [name=STUDEN_DATE]').addClass("red")
      return false;
    }

   
    var data = {
      
      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID,
      'ADVISOR_ID':ADVISOR_ID,
      'STUDENT_ID':STUDENT_ID,
      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID,

      'COUNSELING_PROBLEM':COUNSELING_PROBLEM,
      'COUNSELING_DETAIL':COUNSELING_DETAIL,
      'COUNSELING_SOLVE':COUNSELING_SOLVE,
      'COUNSELING_RESULT':COUNSELING_RESULT,
      'COUNSELING_CREATE_DATE':COUNSELING_CREATE_DATE,
      'COUNSELING_DATE':COUNSELING_DATE,
      'STUDEN_DATE':STUDEN_DATE
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_individual_counseling_services(INDIVIDUAL_COUNSELING_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_individual_counseling_services";
    var data = {
      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ////
  add_services(){
    var SERVICE_TITLE = $('#add_services [name=SERVICE_TITLE]' ).val();
    var SERVICE_PLACE = $('#add_services [name=SERVICE_PLACE]').val();
    var SERVICE_OWNER = $('#add_services [name=SERVICE_OWNER]').val();
    var PARTICIPANT_TYPE = $('#add_services [name=PARTICIPANT_TYPE]').val();
    var PARTICIPANT = $('#add_services [name=PARTICIPANT]').val();
    var TOTAL_PARTICIPANT = $('#add_services [name=TOTAL_PARTICIPANT]').val();
    var TOTAL_HOUR = $('#add_services [name=TOTAL_HOUR]').val();
    var SERVICE_START_DATE = $('#add_services [name=SERVICE_START_DATE]').val();
    var SERVICE_END_DATE = $('#add_services [name=SERVICE_END_DATE]').val();
    var FILE_DOCUMENT = $('#add_services [name=FILE_DOCUMENT]').val();
  
    var url = window.location.origin+"/academy/index.php/Home/add_services";
    // console.log(FILE_DOCUMENT);
    // return false;
    var data = {
      'SERVICE_TITLE':SERVICE_TITLE,
      'SERVICE_PLACE':SERVICE_PLACE,
      'SERVICE_OWNER':SERVICE_OWNER,
      'PARTICIPANT_TYPE':PARTICIPANT_TYPE,
      'PARTICIPANT':PARTICIPANT,
      'TOTAL_PARTICIPANT':TOTAL_PARTICIPANT,
      'TOTAL_HOUR':TOTAL_HOUR,
      'SERVICE_START_DATE':SERVICE_START_DATE,
      'SERVICE_END_DATE':SERVICE_END_DATE,
      'FILE_DOCUMENT':FILE_DOCUMENT
    }
   
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  }, 
  get_edit_services(SERVICE_ID,SERVICE_TITLE,SERVICE_PLACE,SERVICE_OWNER,PARTICIPANT_TYPE,PARTICIPANT,
    TOTAL_PARTICIPANT,TOTAL_HOUR,SERVICE_START_DATE,SERVICE_END_DATE,FILE_DOCUMENT){
    //   console.log(SERVICE_ID);
    // console.log(SERVICE_TITLE);
    // console.log(SERVICE_PLACE);
    // console.log(SERVICE_OWNER);
    // console.log(PARTICIPANT_TYPE);
    // console.log(PARTICIPANT);
    // console.log(TOTAL_PARTICIPANT);
    // console.log(TOTAL_HOUR);
    // console.log(SERVICE_START_DATE);
    // console.log(SERVICE_END_DATE);
    // console.log(FILE_DOCUMENT);
    // return false
    $('#edit_services [name=SERVICE_ID]').val(SERVICE_ID);
    $('#edit_services [name=SERVICE_TITLE]').val(SERVICE_TITLE);
    $('#edit_services [name=SERVICE_PLACE]').val(SERVICE_PLACE);
    $('#edit_services [name=SERVICE_OWNER]').val(SERVICE_OWNER);
    $('#edit_services [name=PARTICIPANT_TYPE]').val(PARTICIPANT_TYPE);
    $('#edit_services [name=PARTICIPANT]').val(PARTICIPANT);
    $('#edit_services [name=TOTAL_PARTICIPANT]').val(TOTAL_PARTICIPANT);
    $('#edit_services [name=TOTAL_HOUR]').val(TOTAL_HOUR);
    $('#edit_services [name=SERVICE_START_DATE]').val(SERVICE_START_DATE);
    $('#edit_services [name=SERVICE_END_DATE]').val(SERVICE_END_DATE);
    $('#edit_services [name=FILE_DOCUMENT]').val(FILE_DOCUMENT);
    $('#edit_services').modal('show'); 
   ;
  },
  edit_services(){

    var SERVICE_ID = $('#edit_services [name=SERVICE_ID]').val()
    var SERVICE_TITLE = $('#edit_services [name=SERVICE_TITLE]').val()
    var SERVICE_PLACE = $('#edit_services [name=SERVICE_PLACE]').val()
    var SERVICE_OWNER = $('#edit_services [name=SERVICE_OWNER]').val()
    var PARTICIPANT_TYPE = $('#edit_services [name=PARTICIPANT_TYPE]').val()
    var PARTICIPANT = $('#edit_services [name=PARTICIPANT]').val()
    var TOTAL_PARTICIPANT = $('#edit_services [name=TOTAL_PARTICIPANT]').val()
    var TOTAL_HOUR = $('#edit_services [name=TOTAL_HOUR]').val()
    var SERVICE_START_DATE = $('#edit_services [name=SERVICE_START_DATE]').val()
    var SERVICE_END_DATE = $('#edit_services [name=SERVICE_END_DATE]').val()
    var FILE_DOCUMENT = $('#edit_services [name=FILE_DOCUMENT]').val()
  

    var url = window.location.origin+"/academy/index.php/Home/edit_services";
       //   console.log(SERVICE_ID);
    // console.log(SERVICE_TITLE);
    // console.log(SERVICE_PLACE);
    // console.log(SERVICE_OWNER);
    // console.log(PARTICIPANT_TYPE);
    // console.log(PARTICIPANT);
    // console.log(TOTAL_PARTICIPANT);
    // console.log(TOTAL_HOUR);
    // console.log(SERVICE_START_DATE);
    // console.log(SERVICE_END_DATE);
    // console.log(FILE_DOCUMENT);
    // return false
  

    // $('input').removeClass('red')

    // if(COUNSELING_CREATE_DATE==""){
    //   $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE').addClass("red")
    //   return false;
    // }
    // if(COUNSELING_DATE==""){
    //   $('#edit_individual_counseling_services [name=COUNSELING_DATE]').addClass("red")
    //   return false;
    // }
    // if(STUDEN_DATE==""){
    //   $('#edit_individual_counseling_services [name=STUDEN_DATE]').addClass("red")
    //   return false;
    // }

   
    var data = {
      
      'SERVICE_ID':SERVICE_ID,
      'SERVICE_TITLE':SERVICE_TITLE,
      'SERVICE_PLACE':SERVICE_PLACE,
      'SERVICE_OWNER':SERVICE_OWNER,

      'PARTICIPANT_TYPE':PARTICIPANT_TYPE,
      'PARTICIPANT':PARTICIPANT,
      'TOTAL_PARTICIPANT':TOTAL_PARTICIPANT,
      'TOTAL_HOUR':TOTAL_HOUR,
      'SERVICE_START_DATE':SERVICE_START_DATE,
      'SERVICE_END_DATE':SERVICE_END_DATE,
      'FILE_DOCUMENT':FILE_DOCUMENT
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_services(SERVICE_ID ){
    var url = window.location.origin+"/academy/index.php/Home/delete_services";
    var data = {
      'SERVICE_ID':SERVICE_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
  add_service_participants(){
   
    var SERVICE_ID = $('#add_service_participants [name=SERVICE_ID] option:selected').val();
    var PERSONNEL_ID = $('#add_service_participants [name=PERSONNEL_ID] option:selected').val();
    var TOTAL_HOUR_SERVICE_P = $('#add_service_participants [name=TOTAL_HOUR_SERVICE_P]').val();
    var SERVICE_P_START_DATE = $('#add_service_participants [name=SERVICE_P_START_DATE]').val();
    var SERVICE_P_END_DATE = $('#add_service_participants [name=SERVICE_P_END_DATE]').val();
  
  
    var url = window.location.origin+"/academy/index.php/Home/add_service_participants";
    // //    $('input').removeClass('red')
    $('input').removeClass('red')
    if(SERVICE_ID==""){
      $('#add_service_participants [name=SERVICE_ID]').addClass("red")
      return false;
    }
    if(PERSONNEL_ID==""){
      $('#add_service_participants [name=PERSONNEL_ID]').addClass("red")
      return false;
    }
    if(SERVICE_P_START_DATE==""){
      $('#add_service_participants [name=SERVICE_P_START_DATE]').addClass("red")
      return false;
    }
    if(SERVICE_P_END_DATE==""){
      $('#add_service_participants [name=SERVICE_P_END_DATE]').addClass("red")
      return false;
    }
    if(TOTAL_HOUR_SERVICE_P==""){
      $('#add_service_participants [name=TOTAL_HOUR_SERVICE_P]').addClass("red")
      return false;
    }
    // console.log(SERVICE_ID);
    // console.log(PERSONNEL_ID);
    // console.log(TOTAL_HOUR_SERVICE_P);
    // console.log(SERVICE_P_START_DATE);
    // console.log(SERVICE_P_END_DATE);
    // return false;
    
    var data = {
      'SERVICE_ID':SERVICE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'TOTAL_HOUR_SERVICE_P':TOTAL_HOUR_SERVICE_P,
      'SERVICE_P_START_DATE':SERVICE_P_START_DATE,
      'SERVICE_P_END_DATE':SERVICE_P_END_DATE
    }
   
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {

      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  }, 
  get_edit_service_participants(ID,SERVICE_ID,PERSONNEL_ID,TOTAL_HOUR_SERVICE_P,SERVICE_P_START_DATE,SERVICE_P_END_DATE){
    // console.log(ID);
    // console.log(SERVICE_ID);
    // console.log(PERSONNEL_ID);
    // console.log(TOTAL_HOUR);
    // console.log(SERVICE_P_START_DATE);
    // console.log(SERVICE_P_END_DATE);
    // return false


    $('#edit_service_participants [name=ID]').val(ID);
    $('#edit_service_participants [name=SERVICE_ID]').val(SERVICE_ID);
    $('#edit_service_participants [name=PERSONNEL_ID]').val(PERSONNEL_ID);
    $('#edit_service_participants [name=TOTAL_HOUR_SERVICE_P]').val(TOTAL_HOUR_SERVICE_P);
    $('#edit_service_participants [name=SERVICE_P_START_DATE]').val(SERVICE_P_START_DATE);
    $('#edit_service_participants [name=SERVICE_P_END_DATE]').val(SERVICE_P_END_DATE);
    $('#edit_service_participants').modal('show'); 
   ;
  },
  edit_service_participants(){

    var ID = $('#edit_service_participants [name=ID]').val()
    var SERVICE_ID = $('#edit_service_participants [name=SERVICE_ID] option:selected').val()
    var PERSONNEL_ID = $('#edit_service_participants [name=PERSONNEL_ID] option:selected').val()
    var TOTAL_HOUR_SERVICE_P = $('#edit_service_participants [name=TOTAL_HOUR_SERVICE_P]').val()
    var SERVICE_P_START_DATE = $('#edit_service_participants [name=SERVICE_P_START_DATE]').val()
    var SERVICE_P_END_DATE = $('#edit_service_participants [name=SERVICE_P_END_DATE]').val()

  

    var url = window.location.origin+"/academy/index.php/Home/edit_service_participants";
    // console.log(ID);
    // console.log(SERVICE_ID);
    // console.log(PERSONNEL_ID);
    // console.log(TOTAL_HOUR);
    // console.log(SERVICE_START_DATE);
    // console.log(SERVICE_END_DATE);
    // return false
  

    // $('input').removeClass('red')

    // if(COUNSELING_CREATE_DATE==""){
    //   $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE').addClass("red")
    //   return false;
    // }
    // if(COUNSELING_DATE==""){
    //   $('#edit_individual_counseling_services [name=COUNSELING_DATE]').addClass("red")
    //   return false;
    // }
    // if(STUDEN_DATE==""){
    //   $('#edit_individual_counseling_services [name=STUDEN_DATE]').addClass("red")
    //   return false;
    // }

   
    var data = {

      'ID':ID,
      'SERVICE_ID':SERVICE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'TOTAL_HOUR_SERVICE_P':TOTAL_HOUR_SERVICE_P,

      'SERVICE_P_START_DATE':SERVICE_P_START_DATE,
      'SERVICE_P_END_DATE':SERVICE_P_END_DATE
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_service_participants(ID ){
    var url = window.location.origin+"/academy/index.php/Home/delete_service_participants";
    var data = {
      'ID':ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
  add_activities(){

    var ACTIVITY_TYPE_ID = $('#add_activities [name=ACTIVITY_TYPE_ID]').val();
    var ACTIVITY_CATEGORY_ID = $('#add_activities [name=ACTIVITY_CATEGORY_ID]').val();
    var ACTIVITY_NAME = $('#add_activities [name=ACTIVITY_NAME]').val();
    var ACTIVITY_DATE = $('#add_activities [name=ACTIVITY_DATE]').val();
    var ACTIVITY_PLACE = $('#add_activities [name=ACTIVITY_PLACE]').val();
    var ACTIVITY_DETAIL = $('#add_activities [name=ACTIVITY_DETAIL]').val();
    var ACTIVITY_OWNER_ID = $('#add_activities [name=ACTIVITY_OWNER_ID]').val();
    var ACTIVITIES_FILE = $('#add_activities [name=ACTIVITIES_FILE]').val();
  
    var url = window.location.origin+"/academy/index.php/Home/add_activities";
    $('input').removeClass('red')
        
    if(ACTIVITY_NAME==""){
      $('#add_activities [name=ACTIVITY_NAME]').addClass("red")
      return false;
    }
    if(ACTIVITY_DATE==""){
      $('#add_activities [name=ACTIVITY_DATE]').addClass("red")
      return false;
    }
    if(ACTIVITY_TYPE_ID==""){
      $('#add_activities [name=ACTIVITY_TYPE_ID]').addClass("red")
      return false;
    }
    if(ACTIVITY_CATEGORY_ID==""){
      $('#add_activities [name=ACTIVITY_CATEGORY_ID]').addClass("red")
      return false;
    }
    if(ACTIVITY_PLACE==""){
      $('#add_activities [name=ACTIVITY_PLACE]').addClass("red")
      return false;
    }
    if(ACTIVITY_DETAIL==""){
      $('#add_activities [name=ACTIVITY_DETAIL]').addClass("red")
      return false;
    }
    if(ACTIVITY_OWNER_ID==""){
      $('#add_activities [name=ACTIVITY_OWNER_ID]').addClass("red")
      return false;
    }
    // console.log(ACTIVITY_TYPE_ID);
    // console.log(ACTIVITY_CATEGORY_ID);
    // console.log(ACTIVITY_NAME);
    // console.log(ACTIVITY_DATE);
    // console.log(ACTIVITY_PLACE);
    // console.log(ACTIVITY_DETAIL);
    // console.log(ACTIVITY_OWNER_ID);
    // console.log(ACTIVITIES_FILE);

    // return false;
    var data = {
  
      'ACTIVITY_TYPE_ID':ACTIVITY_TYPE_ID,
      'ACTIVITY_CATEGORY_ID':ACTIVITY_CATEGORY_ID,
      'ACTIVITY_NAME':ACTIVITY_NAME,
      'ACTIVITY_DATE':ACTIVITY_DATE,
      'ACTIVITY_PLACE':ACTIVITY_PLACE,
      'ACTIVITY_DETAIL':ACTIVITY_DETAIL,
      'ACTIVITY_OWNER_ID':ACTIVITY_OWNER_ID,
      'ACTIVITIES_FILE':ACTIVITIES_FILE
    }
   
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_activities(ACTIVITY_ID,ACTIVITY_TYPE_ID,ACTIVITY_CATEGORY_ID,ACTIVITY_NAME,ACTIVITY_DATE,
    ACTIVITY_PLACE,ACTIVITY_DETAIL,ACTIVITY_OWNER_ID,ACTIVITIES_FILE){

          // console.log(ACTIVITY_ID);
          // console.log(ACTIVITY_TYPE_ID);
          // console.log(ACTIVITY_CATEGORY_ID);
          // console.log(ACTIVITY_NAME);
          // console.log(ACTIVITY_DATE);
          // console.log(ACTIVITY_PLACE);
          // console.log(ACTIVITY_DETAIL);
          // console.log(ACTIVITY_OWNER_ID);
          // console.log(ACTIVITIES_FILE);

          // return false;


    $('#edit_activities [name=ACTIVITY_ID]').val(ACTIVITY_ID);
    $('#edit_activities [name=ACTIVITY_TYPE_ID]').val(ACTIVITY_TYPE_ID);
    $('#edit_activities [name=ACTIVITY_CATEGORY_ID]').val(ACTIVITY_CATEGORY_ID);
    $('#edit_activities [name=ACTIVITY_NAME]').val(ACTIVITY_NAME);
    $('#edit_activities [name=ACTIVITY_DATE]').val(ACTIVITY_DATE);
    $('#edit_activities [name=ACTIVITY_PLACE]').val(ACTIVITY_PLACE);
    $('#edit_activities [name=ACTIVITY_DETAIL]').val(ACTIVITY_DETAIL);
    $('#edit_activities [name=ACTIVITY_OWNER_ID]').val(ACTIVITY_OWNER_ID);
    $('#edit_activities [name=ACTIVITIES_FILE]').val(ACTIVITIES_FILE);

    $('#edit_activities').modal('show'); 
   ;
  },
  edit_activities(){

    var ACTIVITY_ID = $('#edit_activities [name=ACTIVITY_ID]').val()
    var ACTIVITY_TYPE_ID = $('#edit_activities [name=ACTIVITY_TYPE_ID]').val()
    var ACTIVITY_CATEGORY_ID = $('#edit_activities [name=ACTIVITY_CATEGORY_ID]').val()
    var ACTIVITY_NAME = $('#edit_activities [name=ACTIVITY_NAME]').val()
    var ACTIVITY_DATE = $('#edit_activities [name=ACTIVITY_DATE]').val()
    var ACTIVITY_PLACE = $('#edit_activities [name=ACTIVITY_PLACE]').val()
    var TOTAL_PARTICIPANT = $('#edit_activities [name=TOTAL_PARTICIPANT]').val()
    var ACTIVITY_DETAIL = $('#edit_activities [name=ACTIVITY_DETAIL]').val()
    var ACTIVITY_OWNER_ID = $('#edit_activities [name=ACTIVITY_OWNER_ID]').val()
    var ACTIVITIES_FILE = $('#edit_activities [name=ACTIVITIES_FILE]').val()
  

    var url = window.location.origin+"/academy/index.php/Home/edit_activities";

          // console.log(ACTIVITY_ID);
          // console.log(ACTIVITY_TYPE_ID);
          // console.log(ACTIVITY_CATEGORY_ID);
          // console.log(ACTIVITY_NAME);
          // console.log(ACTIVITY_DATE);
          // console.log(ACTIVITY_PLACE);
          // console.log(ACTIVITY_DETAIL);
          // console.log(ACTIVITY_OWNER_ID);
          // console.log(ACTIVITIES_FILE);

          // return false;

   
    var data = {
      
      'ACTIVITY_ID':ACTIVITY_ID,
      'ACTIVITY_TYPE_ID':ACTIVITY_TYPE_ID,
      'ACTIVITY_CATEGORY_ID':ACTIVITY_CATEGORY_ID,
      'ACTIVITY_NAME':ACTIVITY_NAME,

      'ACTIVITY_DATE':ACTIVITY_DATE,
      'ACTIVITY_PLACE':ACTIVITY_PLACE,
      'ACTIVITY_DETAIL':ACTIVITY_DETAIL,
      'ACTIVITY_OWNER_ID':ACTIVITY_OWNER_ID,
      'ACTIVITIES_FILE':ACTIVITIES_FILE
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_activities(ACTIVITY_ID ){
    var url = window.location.origin+"/academy/index.php/Home/delete_activities";
    var data = {
      'ACTIVITY_ID':ACTIVITY_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
  add_trainings(){

    var TRAINING_TITLE = $('#add_trainings [name=TRAINING_TITLE]').val();
    var TRAINING_PLACE = $('#add_trainings [name=TRAINING_PLACE]').val();
    var TRAINING_OWNER = $('#add_trainings [name=TRAINING_OWNER]').val();
    var TRAINING_COMMENT = $('#add_trainings [name=TRAINING_COMMENT]').val();
    var TOTAL_HOUR_TRAINING = $('#add_trainings [name=TOTAL_HOUR_TRAINING]').val();
    var TRAINING_START_DATE = $('#add_trainings [name=TRAINING_START_DATE]').val();
    var TRAINING_END_DATE = $('#add_trainings [name=TRAINING_END_DATE]').val();
    var FILE_TAINING = $('#add_trainings [name=FILE_TAINING]').val();
  
    var url = window.location.origin+"/academy/index.php/Home/add_trainings";
  
 

    // console.log(TRAINING_TITLE);
    // console.log(TRAINING_PLACE);
    // console.log(TRAINING_OWNER);
    // console.log(TRAINING_COMMENT);
    // console.log(TOTAL_HOUR_TRAINING);
    // console.log(TRAINING_START_DATE);
    // console.log(TRAINING_END_DATE);
    // console.log(FILE_TAINING);


    // return false;
    var data = {
  
      'TRAINING_TITLE':TRAINING_TITLE,
      'TRAINING_PLACE':TRAINING_PLACE,
      'TRAINING_OWNER':TRAINING_OWNER,
      'TRAINING_COMMENT':TRAINING_COMMENT,
      'TOTAL_HOUR_TRAINING':TOTAL_HOUR_TRAINING,
      'TRAINING_START_DATE':TRAINING_START_DATE,
      'TRAINING_END_DATE':TRAINING_END_DATE,
      'FILE_TAINING':FILE_TAINING
    }
   
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_trainings(TRAINING_ID,TRAINING_TITLE,TRAINING_PLACE,TRAINING_OWNER,TRAINING_COMMENT,TOTAL_HOUR_TRAINING,
    TRAINING_START_DATE,TRAINING_END_DATE,FILE_TAINING){

    // console.log(TRAINING_ID);
    // console.log(TRAINING_TITLE);
    // console.log(TRAINING_PLACE);
    // console.log(TRAINING_OWNER);
    // console.log(TRAINING_COMMENT);
    // console.log(TOTAL_HOUR_TRAINING);
    // console.log(TRAINING_START_DATE);
    // console.log(TRAINING_END_DATE);
    // console.log(FILE_TAINING);

    //       return false;

    $('#edit_trainings [name=TRAINING_ID]').val(TRAINING_ID);
    $('#edit_trainings [name=TRAINING_TITLE]').val(TRAINING_TITLE);
    $('#edit_trainings [name=TRAINING_PLACE]').val(TRAINING_PLACE);
    $('#edit_trainings [name=TRAINING_OWNER]').val(TRAINING_OWNER);
    $('#edit_trainings [name=TRAINING_COMMENT]').val(TRAINING_COMMENT);
    $('#edit_trainings [name=TOTAL_HOUR_TRAINING]').val(TOTAL_HOUR_TRAINING);
    $('#edit_trainings [name=TRAINING_START_DATE]').val(TRAINING_START_DATE);
    $('#edit_trainings [name=TRAINING_END_DATE]').val(TRAINING_END_DATE);
    $('#edit_trainings [name=FILE_TAINING]').val(FILE_TAINING);

    $('#edit_trainings').modal('show'); 
   ;
  },
  edit_trainings(){

    var TRAINING_ID = $('#edit_trainings [name=TRAINING_ID]').val()
    var TRAINING_TITLE = $('#edit_trainings [name=TRAINING_TITLE]').val()
    var TRAINING_PLACE = $('#edit_trainings [name=TRAINING_PLACE]').val()
    var TRAINING_OWNER = $('#edit_trainings [name=TRAINING_OWNER]').val()
    var TRAINING_COMMENT = $('#edit_trainings [name=TRAINING_COMMENT]').val()
    var TOTAL_HOUR_TRAINING = $('#edit_trainings [name=TOTAL_HOUR_TRAINING]').val()
    var TRAINING_START_DATE = $('#edit_trainings [name=TRAINING_START_DATE]').val()
    var TRAINING_END_DATE = $('#edit_trainings [name=TRAINING_END_DATE]').val()
    var FILE_TAINING = $('#edit_trainings [name=FILE_TAINING]').val()
  

    var url = window.location.origin+"/academy/index.php/Home/edit_trainings";

    // console.log(TRAINING_ID);
    // console.log(TRAINING_TITLE);
    // console.log(TRAINING_PLACE);
    // console.log(TRAINING_OWNER);
    // console.log(TRAINING_COMMENT);
    // console.log(TOTAL_HOUR_TRAINING);
    // console.log(TRAINING_START_DATE);
    // console.log(TRAINING_END_DATE);
    // console.log(FILE_TAINING);

    //       return false;

   
    var data = {
      
      'TRAINING_ID':TRAINING_ID,
      'TRAINING_TITLE':TRAINING_TITLE,
      'TRAINING_PLACE':TRAINING_PLACE,
      'TRAINING_OWNER':TRAINING_OWNER,

      'TRAINING_COMMENT':TRAINING_COMMENT,
      'TOTAL_HOUR_TRAINING':TOTAL_HOUR_TRAINING,
      'TRAINING_START_DATE':TRAINING_START_DATE,
      'TRAINING_END_DATE':TRAINING_END_DATE,
      'FILE_TAINING':FILE_TAINING
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_trainings(TRAINING_ID){
    var url = window.location.origin+"/academy/index.php/Home/delete_trainings";
    var data = {
      'TRAINING_ID':TRAINING_ID  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
  add_activity_participants(){

    var ACTIVITY_ID = $('#add_activity_participants [name=ACTIVITY_ID]').val();
    var PERSONNEL_ID = $('#add_activity_participants [name=PERSONNEL_ID]').val();
   
  
    var url = window.location.origin+"/academy/index.php/Home/add_activity_participants";
    // console.log(ACTIVITY_ID);
    // console.log(PERSONNEL_ID);


    // return false;
    var data = {
  
      'ACTIVITY_ID':ACTIVITY_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
    }
   
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  get_edit_activity_participants(ACTIVITY_ID,PERSONNEL_ID,ID_ACTIVITY_PARTICIPANTS){

          // console.log(ACTIVITY_ID);
          // console.log(PERSONNEL_ID);
          // console.log(ID_ACTIVITY_PARTICIPANTS );

          // return false;

    $('#edit_activity_participants [name=ACTIVITY_ID] option').each(function(key,value){
      if(ACTIVITY_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_activity_participants [name=PERSONNEL_ID] option').each(function(key,value){
      if(PERSONNEL_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_activity_participants [name=ID_ACTIVITY_PARTICIPANTS]').val(ID_ACTIVITY_PARTICIPANTS);

  

    $('#edit_activity_participants').modal('show'); 
   ;
  },
  edit_activity_participants(){

    var ACTIVITY_ID = $('#edit_activity_participants [name=ACTIVITY_ID] option:selected').val()
    var PERSONNEL_ID = $('#edit_activity_participants [name=PERSONNEL_ID] option:selected').val()
    var ID_ACTIVITY_PARTICIPANTS = $('#edit_activity_participants [name=ID_ACTIVITY_PARTICIPANTS]').val()



  

    var url = window.location.origin+"/academy/index.php/Home/edit_activity_participants";

          // console.log(ACTIVITY_ID);
          // console.log(PERSONNEL_ID);
          // console.log(ID_ACTIVITY_PARTICIPANTS);
   

          // return false;

   
    var data = {
      
      'ACTIVITY_ID':ACTIVITY_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'ID_ACTIVITY_PARTICIPANTS':ID_ACTIVITY_PARTICIPANTS
    }

    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert('บันทึกไม่สำเร็จ')
      }
    })
  },
  delete_activity_participants(ID_ACTIVITY_PARTICIPANTS){
    var url = window.location.origin+"/academy/index.php/Home/delete_activity_participants";
    var data = {
      'ID_ACTIVITY_PARTICIPANTS':ID_ACTIVITY_PARTICIPANTS  
    }
    var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
    if(confirm("ยืนยันการลบ") === false){
      return false;
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
      },
    }).done(function(resp) {
      if(resp.st == 1){
        alert('ลบสำเร็จ')
        location.reload();
      }else{
        alert('ลบไม่สำเร็จ')
      }
    })
  },
  ///
 
  
  ///
  checkcountinput(obj){
    var num = $(obj).val(); // เก็บตัวแปลเข้า num
    num = num.replace(/ /g, '');   ///ลบspacebar
    if(num.length>6){
        var num_replace = num.slice(0,6);  ///รีเซ็ทเมือจำนวนถึง 6 slice(0,6)การตัดข้อความตั้งแต่่ตัวที่ 1+6
        console.log(num_replace);
        $(obj).val(num_replace) ///ยัดค่าเข้าตัวมันเอง
    }
    var element = obj  
    element.value = element.value.replace(/[^0-9]/gi, "");  
    // $(obj).val(element.value = element.value.replace(/[^0-9]/gi, ""));

  }
}
