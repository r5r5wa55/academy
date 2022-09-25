var main = {

  add_academics(){
    var ACADEMIC_NAME = $('[name=ACADEMIC_NAME]').val()
    // console.log($('[name=ACADEMIC_NAME]').val());
    // return false;
    var url = window.location.origin+"/index.php/Home/add_academics";
    // console.log(url);
    // return false;
    var data = {
      'ACADEMIC_NAME':ACADEMIC_NAME 
    }
    // console.log(ACADEMIC_NAME);
    // return false;
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
        // console.log(data);
        // return false;
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
    var url = window.location.origin+"/index.php/Home/edit_academics";
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
    var url = window.location.origin+"/index.php/Home/delete_academics";
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
  //
  add_activity_categories(){
    var ACTIVITY_CATEGORY_NAME = $('[name=ACTIVITY_CATEGORY_NAME]').val()
    console.log (ACTIVITY_CATEGORY_NAME)
    var url = window.location.origin+"/index.php/Home/add_activity_categories";
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
    var url = window.location.origin+"/index.php/Home/edit_activity_categories";
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
    var url = window.location.origin+"/index.php/Home/delete_activity_categories";
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
    var url = window.location.origin+"/index.php/Home/add_activity_types";
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
    var url = window.location.origin+"/index.php/Home/edit_activity_types";
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
    var url = window.location.origin+"/index.php/Home/delete_activity_types";
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
    var LEAVE_TYPE = $('[name=LEAVE_TYPE]').val();
    var LEAVE_TYPE_MAX = $('[name=LEAVE_TYPE_MAX]').val();

    var PERSONNEL_SEX = $('[name=PERSONNEL_SEX_leave_type]:checked').val();
    var HALF_ONE = $('[name=HALF_ONE_leave_type]:checked').val();

    // console.log (HALF_ONE)
    // console.log (PERSONNEL_SEX)
    // return false;
    var url = window.location.origin+"/index.php/Home/add_leave_types";
    // console.log(window.location.origin);

    var data = {
    
      'LEAVE_TYPE':LEAVE_TYPE,
      'LEAVE_TYPE_MAX':LEAVE_TYPE_MAX,
      'PERSONNEL_SEX':PERSONNEL_SEX,
      'HALF_ONE':HALF_ONE
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
  get_edit_leave_types(LEAVE_TYPE_ID,LEAVE_TYPE,LEAVE_TYPE_MAX,PERSONNEL_SEX,HALF_ONE){
    // console.log(ID_F);
    // console.log(FACULTY_ID);
    // console.log(PERSONNEL_SEX);
    // console.log(HALF_ONE); 
    // return false;
    $('#edit_leave_types [name=LEAVE_TYPE_ID]').val(LEAVE_TYPE_ID);  
    $('#edit_leave_types [name=LEAVE_TYPE]').val(LEAVE_TYPE);
    $('#edit_leave_types [name=LEAVE_TYPE_MAX]').val(LEAVE_TYPE_MAX);
    

    $('#edit_leave_types [name=PERSONNEL_SEX_leave_edit]').each(function(key,value){
      
      if($(value).val()==PERSONNEL_SEX){
        // console.log($(value).val());
        // console.log(PERSONNEL_SEX);
        $(value).prop( "checked", true );    
      }
    })
    $('#edit_leave_types [name=HALF_ONE_leave_edit]').each(function(key,value){
      if($(value).val()==HALF_ONE){
        // console.log($(value).val());
        // console.log(HALF_ONE);
        $(value).prop( "checked", true ); 
      }
    })
    $('#edit_leave_types').modal('show'); 



  },
  edit_leave_types(){
    var LEAVE_TYPE_ID = $('#edit_leave_types [name=LEAVE_TYPE_ID]').val()  
    var LEAVE_TYPE = $('#edit_leave_types [name=LEAVE_TYPE]').val()
    var LEAVE_TYPE_MAX = $('#edit_leave_types [name=LEAVE_TYPE_MAX]').val()
    var PERSONNEL_SEX = $('#edit_leave_types [name=PERSONNEL_SEX_leave_edit]:checked').val()
    var HALF_ONE = $('#edit_leave_types [name=HALF_ONE_leave_edit]:checked').val()
    // console.log(LEAVE_TYPE_ID),
    // console.log(PERSONNEL_SEX),
    // console.log(HALF_ONE);
    // return false  
    var url = window.location.origin+"/index.php/Home/edit_leave_types";
    var data = {
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'LEAVE_TYPE':LEAVE_TYPE,
      'LEAVE_TYPE_MAX':LEAVE_TYPE_MAX,
      'PERSONNEL_SEX':PERSONNEL_SEX,
      'HALF_ONE':HALF_ONE
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
    var url = window.location.origin+"/index.php/Home/delete_leave_types";
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
      if(resp.st == 2){
        alert('ไม่สามารถได้ เนื่องจากมีข้อมูลอยู่ในตารางอื่น')
        location.reload();
      }else{
        alert('ลบสำเร็จ')
        location.reload();
      }
    })
  },
///
  add_managements(){
    var MANAGEMENT_NAME = $('[name=MANAGEMENT_NAME]').val()
    var url = window.location.origin+"/index.php/Home/add_managements";
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
    var url = window.location.origin+"/index.php/Home/edit_managements";
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
    var url = window.location.origin+"/index.php/Home/delete_managements";
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
    var url = window.location.origin+"/index.php/Home/add_personnel_categories";
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
    var url = window.location.origin+"/index.php/Home/edit_personnel_categories";
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
    var url = window.location.origin+"/index.php/Home/delete_personnel_categories";
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
    var url = window.location.origin+"/index.php/Home/add_personnel_statuses";
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
    var url = window.location.origin+"/index.php/Home/edit_personnel_statuses";
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
    var url = window.location.origin+"/index.php/Home/delete_personnel_statuses";
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
    var url = window.location.origin+"/index.php/Home/add_personnel_types";
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
    var url = window.location.origin+"/index.php/Home/edit_personnel_types";
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
    var url = window.location.origin+"/index.php/Home/delete_personnel_types";
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
    var url = window.location.origin+"/index.php/Home/add_faculties";
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
    var url = window.location.origin+"/index.php/Home/edit_faculties";

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
    var url = window.location.origin+"/index.php/Home/delete_faculties";
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
    var url = window.location.origin+"/index.php/Home/add_departments";
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
    var url = window.location.origin+"/index.php/Home/edit_departments";
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
    var url = window.location.origin+"/index.php/Home/delete_departments";
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
    var personnel_sex = $('#add_personnels [name=personnel_sex]:checked').val()
    var PERSONNEL_CREATE_BY = $('#add_personnels [name=PERSONNEL_CREATE_BY]').val()
    var PERSONNEL_CRETTE_DATE = $('#add_personnels [name=PERSONNEL_CRETTE_DATE]').val()
    var DEPARTMENT_ID =$('#add_personnels [name=DEPARTMENT_ID] option:selected').val();
    var PERSONNEL_CATEGORY_ID =$('#add_personnels [name=PERSONNEL_CATEGORY_ID] option:selected').val();
    var PERSONNEL_STATUS_ID  = $('#add_personnels [name=PERSONNEL_STATUS_ID] option:selected').val();
    var PERSONNEL_TYPE_ID = $('#add_personnels [name=PERSONNEL_TYPE_ID] option:selected').val();
    var PERSONNEL_USERNAME = $('#add_personnels [name=PERSONNEL_USERNAME]').val()
    var PERSONNEL_PASSWORD = $('#add_personnels [name=PERSONNEL_PASSWORD]').val()
    var level = $('#add_personnels [name=level]').val()
    var PERSONNEL_CREATE_BY = $('#add_personnels [name=PERSONNEL_CREATE_BY]').val()
    var PERSONNEL_LINE = $('#add_personnels [name=PERSONNEL_LINE]').val()
    var PERSONNEL_FACEBOOK = $('#add_personnels [name=PERSONNEL_FACEBOOK]').val()



    var url = window.location.origin+"/index.php/Home/add_personnels";
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
    if(PERSONNEL_LINE	==""){
      $('#add_personnels [name=PERSONNEL_LINE	]').addClass("red")
      return false;
    }
    if(PERSONNEL_FACEBOOK==""){
      $('#add_personnels [name=PERSONNEL_FACEBOOK]').addClass("red")
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
    if(level==""){
      $('#add_personnels [name=level]').addClass("red")
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
      'personnel_sex':personnel_sex,
      'PERSONNEL_CREATE_BY':PERSONNEL_CREATE_BY,
      'PERSONNEL_CRETTE_DATE':PERSONNEL_CRETTE_DATE,
      'DEPARTMENT_ID':DEPARTMENT_ID,
      'PERSONNEL_STATUS_ID':PERSONNEL_STATUS_ID,
      'PERSONNEL_TYPE_ID':PERSONNEL_TYPE_ID,
      'PERSONNEL_CATEGORY_ID':PERSONNEL_CATEGORY_ID,
      'PERSONNEL_USERNAME':PERSONNEL_USERNAME,
      'PERSONNEL_PASSWORD':PERSONNEL_PASSWORD,
      'PERSONNEL_CREATE_BY':PERSONNEL_CREATE_BY,
      'level':level,
      'PERSONNEL_LINE':PERSONNEL_LINE,
      'PERSONNEL_FACEBOOK':PERSONNEL_FACEBOOK
  
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
      // console.log(resp.ms);
      // return false;
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
    PERSONNEL_EMAIL,PERSONNEL_MOBILE,PERSONNEL_PHONE,PERSONNEL_PHONE_EXTENSION,PERSONNEL_SEX,PERSONNEL_CREATE_BY,
    PERSONNEL_CRETTE_DATE,DEPARTMENT_ID,PERSONNEL_TYPE_ID,PERSONNEL_STATUS_ID,
    PERSONNEL_CATEGORY_ID,PERSONNEL_USERNAME,PERSONNEL_PASSWORD,level,PIC,PERSONNEL_LINE,PERSONNEL_FACEBOOK){


      
   
    // console.log(PIC);
    // return false;


    // absPath = $('#img1').attr('src');
    // console.log(filename);
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
    $('#edit_personnels [name=PERSONNEL_CREATE_BY]').val(PERSONNEL_CREATE_BY); 

    // $('#edit_personnels [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#edit_personnels [name=PERSONNEL_SEX]').each(function(key,value){
      
      if($(value).val()==PERSONNEL_SEX){
        // console.log($(value).val());
        // console.log(PERSONNEL_SEX);
        $(value).prop( "checked", true );
        
      }
      

    })
    
    $('#edit_personnels [name=PERSONNEL_CRETTE_DATE]').val(PERSONNEL_CRETTE_DATE);

    $('#edit_personnels [name=DEPARTMENT_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(DEPARTMENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_personnels [name=PERSONNEL_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(PERSONNEL_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
       }
    });
    $('#edit_personnels [name=PERSONNEL_STATUS_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(PERSONNEL_STATUS_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_personnels [name=PERSONNEL_CATEGORY_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(PERSONNEL_CATEGORY_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
  
    $('#edit_personnels [name=level] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(level === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
 
    $('#edit_personnels [name=PERSONNEL_USERNAME]').val(PERSONNEL_USERNAME);
    $('#edit_personnels [name=PERSONNEL_PASSWORD]').val(PERSONNEL_PASSWORD);
    $('#edit_personnels [name=level]').val(level);
    $('#edit_personnels [name=PERSONNEL_LINE]').val(PERSONNEL_LINE);
    $('#edit_personnels [name=PERSONNEL_FACEBOOK]').val(PERSONNEL_FACEBOOK);

    $('#edit_personnels [name=PERSONNEL_FACEBOOK]').val(PERSONNEL_FACEBOOK);
    var img = location.origin+"/images/profile/"+PIC;
    // console.log&
    // http://academy.com/images/profile/Daeng-Phra-Khanong-2022-แดงพระโขนง-170x250.png
    $('#edit_personnels .img-profile-edit').attr('src',img);
    // $('#edit_personnels [name=PIC]').attr(PIC);
    // $('#img1').attr(PIC);
    
    $('#edit_personnels').modal('show'); 
   ;
  }, 
  get_show_personnels(PERSONNEL_ID,PERSONNEL_NAME,PERSONNEL_SURNAME,PERSONNEL_NAME_EN,PERSONNEL_SURNAME_EN,
    PERSONNEL_EMAIL,PERSONNEL_MOBILE,PERSONNEL_PHONE,PERSONNEL_PHONE_EXTENSION,PERSONNEL_SEX,PERSONNEL_CREATE_BY,
    PERSONNEL_CRETTE_DATE,DEPARTMENT_ID,PERSONNEL_TYPE_ID,PERSONNEL_STATUS_ID,
    PERSONNEL_CATEGORY_ID,PERSONNEL_USERNAME,PERSONNEL_PASSWORD,level,PIC,PERSONNEL_LINE,PERSONNEL_FACEBOOK){

    if(PERSONNEL_SEX == '1'){
      PERSONNEL_SEX = 'ชาย'
    }else{
      PERSONNEL_SEX = 'หญิง'
    }

    
    if(level == '1'){
      level = 'ผู้ใช้'
    }else{
      level = 'แอดมิน'
    }
    
    // // absPath = $('#img1').attr('src');
    // console.log(PERSONNEL_SEX);
    // return false;
    // $('#<%=PERSONNEL_ID.ClientID%>').val(PERSONNEL_ID);
    $("#show_personnels #PERSONNEL_ID").text(PERSONNEL_ID);

    $('#show_personnels [name=PERSONNEL_NAME]').text(PERSONNEL_NAME); 
    $('#show_personnels [name=PERSONNEL_SURNAME]').text(PERSONNEL_SURNAME);
    $('#show_personnels [name=PERSONNEL_NAME_EN]').text(PERSONNEL_NAME_EN);
    $('#show_personnels [name=PERSONNEL_SURNAME_EN]').text(PERSONNEL_SURNAME_EN);
    $('#show_personnels [name=PERSONNEL_LINE]').text(PERSONNEL_LINE);
    $('#show_personnels [name=PERSONNEL_FACEBOOK]').text(PERSONNEL_FACEBOOK);
    $('#show_personnels [name=PERSONNEL_SEX]').text(PERSONNEL_SEX);
    $('#show_personnels [name=PERSONNEL_EMAIL]').text(PERSONNEL_EMAIL);
    $('#show_personnels [name=PERSONNEL_MOBILE]').text(PERSONNEL_MOBILE);
    $('#show_personnels [name=PERSONNEL_PHONE]').text(PERSONNEL_PHONE);
    $('#show_personnels [name=PERSONNEL_PHONE_EXTENSION]').text(PERSONNEL_PHONE_EXTENSION);
    $('#show_personnels [name=level]').text(level);
   

 
   

    // $('#edit_personnels [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);

    
    $('#show_personnels [name=PERSONNEL_CRETTE_DATE]').val(PERSONNEL_CRETTE_DATE);

    $('#show_personnels [name=DEPARTMENT_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(DEPARTMENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#show_personnels [name=PERSONNEL_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(PERSONNEL_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
       }
    });
    $('#show_personnels [name=PERSONNEL_STATUS_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(PERSONNEL_STATUS_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#show_personnels [name=PERSONNEL_CATEGORY_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(PERSONNEL_CATEGORY_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
  
    $('#show_personnels [name=level] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(level === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#show_personnels [name=PERSONNEL_USERNAME]').val(PERSONNEL_USERNAME);
    $('#show_personnels [name=PERSONNEL_PASSWORD]').val(PERSONNEL_PASSWORD);
    $('#show_personnels [name=level]').val(level);


    $('#show_personnels [name=PERSONNEL_FACEBOOK]').val(PERSONNEL_FACEBOOK);
    var img = location.origin+"/images/profile/"+PIC;

    // console.log&
    // http://academy.com/images/profile/Daeng-Phra-Khanong-2022-แดงพระโขนง-170x250.png
    $('#show_personnels .img-profile-edit').attr('src',img);
    // $('#edit_personnels [name=PIC]').attr(PIC);
    // $('#img1').attr(PIC);
    
    $('#show_personnels').modal('show'); 
   ;
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
    var PERSONNEL_LINE = $('#edit_personnels [name=PERSONNEL_LINE]').val();
    var PERSONNEL_FACEBOOK = $('#edit_personnels [name=PERSONNEL_FACEBOOK]').val();
    var url = window.location.origin+"/index.php/Home/edit_personnels";
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
      'PERSONNEL_PASSWORD':PERSONNEL_PASSWORD,
      'PERSONNEL_STATUS_ID':PERSONNEL_STATUS_ID,
      'PERSONNEL_TYPE_ID':PERSONNEL_TYPE_ID,
      'PERSONNEL_CATEGORY_ID':PERSONNEL_CATEGORY_ID,
      'DEPARTMENT_ID':DEPARTMENT_ID,
      'PERSONNEL_LINE':PERSONNEL_LINE,
      'PERSONNEL_FACEBOOK':PERSONNEL_FACEBOOK
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
      // console.log(resp);
      // return false;
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert(resp.ms)
        $('#add_personnels [name='+resp.name+']').addClass("red")
        return false;
      }
    })
  },
  delete_personnels(PERSONNEL_ID){
    var url = window.location.origin+"/index.php/Home/delete_personnels";
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
    var DEPARTMENT_ID = $('[name=DEPARTMENT_ID]').attr('data-id-department_id');

    // let DEPARTMENT_ID = myAnchor.getAttribute("target");
    
    // console.log(MANAGEMENT_ID);
    // console.log(PERSONNEL_ID);
    // console.log(DEPARTMENT_ID);
    // return false;
    


  
    var url = window.location.origin+"/index.php/Home/add_management_positions";
    // console.log(window.location.origin);
    // return false;
    var data = {
      'MANAGEMENT_ID':MANAGEMENT_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'DEPARTMENT_ID':DEPARTMENT_ID
    }
    // console.log(data);
    // console.log(DEPARTMENT_ID);
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
  get_edit_management_positions(MANAGEMENT_POSITION_ID,MANAGEMENT_ID,PERSONNEL_ID,DEPARTMENT_ID){
    
    // console.log($('.abc').attr('data-tes'));
    $('#edit_management_positions [name=MANAGEMENT_POSITION_ID]').val(MANAGEMENT_POSITION_ID);  
 

    $('#edit_management_positions [name=MANAGEMENT_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if( Number(MANAGEMENT_ID) === Number($(value).val())){
        // $(value).attr('test','2'); 
        // console.log($(value).attr('test'));
        $(value).attr("selected","selected")
      }
    });
    
    $('#edit_management_positions [name=PERSONNEL_ID] option').each(function(key,value){
      $(value).removeAttr('selected'); 
      if(PERSONNEL_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });

    $('#edit_management_positions [name=DEPARTMENT_ID] option').each(function(key,value){
      $(value).removeAttr('selected'); 
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

    var url = window.location.origin+"/index.php/Home/edit_management_positions";
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
    var url = window.location.origin+"/index.php/Home/delete_management_positions";
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
    var url = window.location.origin+"/index.php/Home/add_academic_positions";
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
      $(value).removeAttr('selected');
      if(ACADEMIC_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_academic_positions [name=PERSONNEL_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
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

    var url = window.location.origin+"/index.php/Home/edit_academic_positions";
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
    var url = window.location.origin+"/index.php/Home/delete_academic_positions";
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
  add_researchsnseling_types(){
    var COUNSELING_NAME = $('[name=COUNSELING_NAME]').val()
    console.log (COUNSELING_NAME)
    var url = window.location.origin+"/index.php/Home/add_counseling_types";
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
    var url = window.location.origin+"/index.php/Home/edit_counseling_types";
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
    var url = window.location.origin+"/index.php/Home/delete_counseling_types";
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
  add_individual_counseling_services_student(){




    var ADVISOR_ID =$('#add_individual_counseling_services [name=ADVISOR_ID] option:selected').val();
    var STUDENT_ID =$('#add_individual_counseling_services [name=STUDENT_ID]').val();
    var COUNSELING_TYPE_ID =$('#add_individual_counseling_services [name=COUNSELING_TYPE_ID] option:selected').val();
    var COUNSELING_CREATE_DATE = $('#add_individual_counseling_services [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_PROBLEM = $('#add_individual_counseling_services [name=COUNSELING_PROBLEM]').val()
    var CONTACT = $('#add_individual_counseling_services [name=CONTACT]').val()

    
    var STUDEN_DATE_START = $('#add_individual_counseling_services [name=STUDEN_DATE_START]').val()
    var STUDEN_DATE_END = $('#add_individual_counseling_services [name=STUDEN_DATE_END  ]').val()

    
    var url = window.location.origin+"/index.php/Home/add_individual_counseling_services_student";
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(CONTACT);
    // console.log(STUDEN_DATE_START);
    // console.log(STUDEN_DATE_END);
    // return false;
    
    // $('input').removeClass('red')
    // if(ADVISOR_ID==""){
    //   $('#add_individual_counseling_services [name=ADVISOR_ID]').addClass("red")
    //   return false;
    // }
    // if(STUDENT_ID==""){
    //   $('#add_individual_counseling_services [name=STUDENT_ID]').addClass("red")
    //   return false;
    // }


    
  

    var data = {
      'ADVISOR_ID':ADVISOR_ID,
      'STUDENT_ID':STUDENT_ID,
      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID,
      'COUNSELING_PROBLEM':COUNSELING_PROBLEM,
      'COUNSELING_CREATE_DATE':COUNSELING_CREATE_DATE,
      'CONTACT':CONTACT,
      'STUDEN_DATE_START':STUDEN_DATE_START,
      'STUDEN_DATE_END':STUDEN_DATE_END
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
  /// 
  add_individual_counseling_services(){




    var ADVISOR_ID =$('#add_individual_counseling_services [name=ADVISOR_ID]').val();
    var STUDENT_ID =$('#add_individual_counseling_services [name=STUDENT_ID] option:selected').val();
    var COUNSELING_TYPE_ID =$('#add_individual_counseling_services [name=COUNSELING_TYPE_ID] option:selected').val();
    var COUNSELING_PROBLEM = $('#add_individual_counseling_services [name=COUNSELING_PROBLEM]').val()
    var COUNSELING_DETAIL = $('#add_individual_counseling_services [name=COUNSELING_DETAIL]').val()
    var COUNSELING_SOLVE = $('#add_individual_counseling_services [name=COUNSELING_SOLVE  ]').val()
    var COUNSELING_RESULT = $('#add_individual_counseling_services [name=COUNSELING_RESULT]').val()
    var COUNSELING_CREATE_DATE = $('#add_individual_counseling_services [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_DATE = $('#add_individual_counseling_services [name=COUNSELING_DATE]').val()
    var STUDEN_DATE = $('#add_individual_counseling_services [name=STUDEN_DATE]').val()
    
    var url = window.location.origin+"/index.php/Home/add_individual_counseling_services";
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
    if(ADVISOR_ID==""){
      $('#add_individual_counseling_services [name=ADVISOR_ID]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
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
    $('input').removeClass('red')
    if(COUNSELING_PROBLEM==""){
      $('#add_individual_counseling_services [name=COUNSELING_PROBLEM]').addClass("red")
      return false;
    }
    $('input').removeClass('red')
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
    $('#edit_individual_counseling_services [name=ADVISOR_ID]').val(ADVISOR_ID);
    $('#edit_individual_counseling_services [name=STUDENT_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(STUDENT_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_individual_counseling_services [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
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
    var ADVISOR_ID = $('#edit_individual_counseling_services [name=ADVISOR_ID]').val();
    var STUDENT_ID = $('#edit_individual_counseling_services [name=STUDENT_ID] option:selected').val();
    var COUNSELING_TYPE_ID = $('#edit_individual_counseling_services [name=COUNSELING_TYPE_ID] option:selected').val();
    var COUNSELING_PROBLEM = $('#edit_individual_counseling_services [name=COUNSELING_PROBLEM]').val()
    var COUNSELING_DETAIL = $('#edit_individual_counseling_services [name=COUNSELING_DETAIL]').val()
    var COUNSELING_SOLVE = $('#edit_individual_counseling_services [name=COUNSELING_SOLVE]').val()
    var COUNSELING_RESULT = $('#edit_individual_counseling_services [name=COUNSELING_RESULT]').val()
    var COUNSELING_CREATE_DATE = $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_DATE = $('#edit_individual_counseling_services [name=COUNSELING_DATE]').val()
    var STUDEN_DATE = $('#edit_individual_counseling_services [name=STUDEN_DATE]').val()
  
  

    var url = window.location.origin+"/index.php/Home/edit_individual_counseling_services";

  
    // console.log(COUNSELING_TYPE_ID);
    // console.log(url);
    // return false;

    $('input').removeClass('red')
    if(ADVISOR_ID==""){
      $('#edit_individual_counseling_services [name=ADVISOR_ID').addClass('red')
      return false;
    }
    if(STUDENT_ID==""){
      $('#edit_individual_counseling_services [name=STUDENT_ID]').addClass("red")
      return false;
    }
    
    if(COUNSELING_TYPE_ID==""){
      $('#edit_individual_counseling_services [name=COUNSELING_TYPE_ID').addClass("red")
      return false;
    }

    if(COUNSELING_PROBLEM == ""){
      $('#edit_individual_counseling_services [name=COUNSELING_PROBLEM]').addClass('red')
      return false;
    }
    if(COUNSELING_DETAIL==""){
      $('#edit_individual_counseling_services [name=COUNSELING_DETAIL]').addClass('red')
      return false;
    }

    if(COUNSELING_SOLVE==""){
      $('#edit_individual_counseling_services [name=COUNSELING_SOLVE]').addClass('red')
      return false;
    }
    if(COUNSELING_RESULT==""){
      $('#edit_individual_counseling_services [name=COUNSELING_RESULT]').addClass('red')
      return false;
    }

    if(COUNSELING_CREATE_DATE==""){
      $('#edit_individual_counseling_services [name=COUNSELING_CREATE_DATE]').addClass('red')
      return false;
    }


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
    var url = window.location.origin+"/index.php/Home/delete_individual_counseling_services";
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
    var SERVICE_START_DATE = $('#add_services [name=SERVICE_START_DATE]').val();
    var SERVICE_END_DATE = $('#add_services [name=SERVICE_END_DATE]').val();
    // console.log(SERVICE_START_DATE);
    // console.log(SERVICE_END_DATE);
    // return false;
    var data = {
      'SERVICE_START_DATE':SERVICE_START_DATE,
      'SERVICE_END_DATE':SERVICE_END_DATE
    }
    if(SERVICE_START_DATE > SERVICE_END_DATE){
    

      var datas = confirm("ข้อมูลเวลาในการเริ่มการบริการวิชาการไม่ตรงกับข้อกำหนด");
      if(confirm("ยืนยันข้อมูล") === false){
        return false;
      }

      var SERVICE_TITLE = $('#add_services [name=SERVICE_TITLE]' ).val();
      var SERVICE_PLACE = $('#add_services [name=SERVICE_PLACE]').val();
      var SERVICE_OWNER = $('#add_services [name=SERVICE_OWNER]').val();
      var PARTICIPANT_TYPE = $('#add_services [name=PARTICIPANT_TYPE]').val();
      var PARTICIPANT = $('#add_services [name=PARTICIPANT]').val();
      var TOTAL_PARTICIPANT = $('#add_services [name=TOTAL_PARTICIPANT]').val();
      var TOTAL_HOUR = $('#add_services [name=TOTAL_HOUR]').val();
      var SERVICE_START_DATE = $('#add_services [name=SERVICE_START_DATE]').val();
      var SERVICE_END_DATE = $('#add_services [name=SERVICE_END_DATE]').val();
    
    
      var url = window.location.origin+"/index.php/Home/add_services";




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
        'SERVICE_END_DATE':SERVICE_END_DATE
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

      

      
    }else{
      var SERVICE_TITLE = $('#add_services [name=SERVICE_TITLE]' ).val();
      var SERVICE_PLACE = $('#add_services [name=SERVICE_PLACE]').val();
      var SERVICE_OWNER = $('#add_services [name=SERVICE_OWNER]').val();
      var PARTICIPANT_TYPE = $('#add_services [name=PARTICIPANT_TYPE]').val();
      var PARTICIPANT = $('#add_services [name=PARTICIPANT]').val();
      var TOTAL_PARTICIPANT = $('#add_services [name=TOTAL_PARTICIPANT]').val();
      var TOTAL_HOUR = $('#add_services [name=TOTAL_HOUR]').val();
      var SERVICE_START_DATE = $('#add_services [name=SERVICE_START_DATE]').val();
      var SERVICE_END_DATE = $('#add_services [name=SERVICE_END_DATE]').val();
    
    
      var url = window.location.origin+"/index.php/Home/add_services";




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
        'SERVICE_END_DATE':SERVICE_END_DATE
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
      
    }

    
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
    $('#edit_services [name=edit_SERVICE_START_DATE]').val(SERVICE_START_DATE);
    $('#edit_services [name=edit_SERVICE_END_DATE]').val(SERVICE_END_DATE);
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
    var SERVICE_START_DATE = $('#edit_services [name=edit_SERVICE_START_DATE]').val()
    var SERVICE_END_DATE = $('#edit_services [name=edit_SERVICE_END_DATE]').val()
  

    var url = window.location.origin+"/index.php/Home/edit_services";
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
    // console.log(SERVICE_START_DATE);
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
      'SERVICE_END_DATE':SERVICE_END_DATE
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
    var url = window.location.origin+"/index.php/Home/delete_services";
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

  upload_file_services(obj){
    var files = $(obj)[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, ['pdf']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ PDF"
      }else{
        form_data.append("files[]", files[count]);

      }
    }

    // form_data.append('RESEARCH_ID', $('[name=RESEARCH_ID]').val());
    form_data.append('SERVICE_ID', $(obj).attr('data-id-SERVICE_ID'));

    
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload_file_services",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        // console.log(data);
        // return false;
        if(data.st == 1){
          location.reload();
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },

  show_service_participants_pic(ID){
   



    // console.log(ID);
    // return false  ; 
    
    var url = window.location.origin+"/index.php/Home/show_service_participants_pic?ID=".ID;


   
  }, 
  

  get_show_services_img(obj){
   
    var imgsrc = $(obj).attr('src'); 
    var img = location.origin+imgsrc;
    // console.log(imgsrc);
    // console.log(img);
    // return false;
    // var url = window.location.origin+"/index.php/Home/show_service_participants_pic?ID=".ID;
    $('#myModal .img-profile-edit').attr('src',img);
    $('#myModal').modal('show'); 
  

  }, 
  
  save_img_show_service_participants_pic(obj){


    var files = $(obj)[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, [  'pdf']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ PDF"
      }else{
        form_data.append("files[]", files[count]);

      }
    }
    // console.log($_FIEL);
    // return false;
    // form_data.append('RESEARCH_ID', $('[name=RESEARCH_ID]').val());
    form_data.append('RESEARCH_ID', $(obj).attr('data-id-RESEARCH_ID'));

    
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload_file_researchs",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        // console.log(data);
        // return false;
        if(data.st == 1){
          location.reload();
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },
  ///
  add_service_participants(){
   
    var SERVICE_ID = $('#add_service_participants [name=SERVICE_ID] option:selected').val();
    var PERSONNEL_ID = $('#add_service_participants [name=PERSONNEL_ID] option:selected').val();
    var TOTAL_HOUR_SERVICE_P = $('#add_service_participants [name=TOTAL_HOUR_SERVICE_P]').val();
    var SERVICE_P_START_DATE = $('#add_service_participants [name=SERVICE_P_START_DATE]').val();
    var SERVICE_P_END_DATE = $('#add_service_participants [name=SERVICE_P_END_DATE]').val();
  
  
    var url = window.location.origin+"/index.php/Home/add_service_participants";
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
    $('#edit_service_participants [name=edit_SERVICE_P_START_DATE]').val(SERVICE_P_START_DATE);
    $('#edit_service_participants [name=edit_SERVICE_P_END_DATE]').val(SERVICE_P_END_DATE);
    $('#edit_service_participants').modal('show'); 
   ;
  },
  edit_service_participants(){

    var ID = $('#edit_service_participants [name=ID]').val()
    var SERVICE_ID = $('#edit_service_participants [name=SERVICE_ID] option:selected').val()
    var PERSONNEL_ID = $('#edit_service_participants [name=PERSONNEL_ID] option:selected').val()
    var TOTAL_HOUR_SERVICE_P = $('#edit_service_participants [name=TOTAL_HOUR_SERVICE_P]').val()
    var SERVICE_P_START_DATE = $('#edit_service_participants [name=edit_SERVICE_P_START_DATE]').val()
    var SERVICE_P_END_DATE = $('#edit_service_participants [name=edit_SERVICE_P_END_DATE]').val()

  

    var url = window.location.origin+"/index.php/Home/edit_service_participants";
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
  delete_service_participants(ID){
    var url = window.location.origin+"/index.php/Home/delete_service_participants";
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
  
    var url = window.location.origin+"/index.php/Home/add_activities";
    $('input').removeClass('red')
    if(ACTIVITY_OWNER_ID==""){
      $('#add_activities [name=ACTIVITY_OWNER_ID]').addClass("red")
      return false;
    }
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
  

    var url = window.location.origin+"/index.php/Home/edit_activities";

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
    var url = window.location.origin+"/index.php/Home/delete_activities";
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

  upload_file_activities(obj){
    var files = $(obj)[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, [  'pdf']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ PDF"
      }else{
        form_data.append("files[]", files[count]);

      }
    }

    // form_data.append('RESEARCH_ID', $('[name=RESEARCH_ID]').val());
    form_data.append('ACTIVITY_ID', $(obj).attr('data-id-ACTIVITY_ID'));

    
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload_file_activities",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        // console.log(data);
        // return false;
        if(data.st == 1){
          location.reload();
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },

  

  ///
  add_trainings(){

    var TRAINING_TITLE = $('#add_trainings [name=TRAINING_TITLE]').val();
    var TRAINING_PLACE = $('#add_trainings [name=TRAINING_PLACE]').val();
    var TRAINING_OWNER = $('#add_trainings [name=TRAINING_OWNER]').val();
    var TOTAL_HOUR_TRAINING = $('#add_trainings [name=TOTAL_HOUR_TRAINING]').val();
    var TRAINING_START_DATE = $('#add_trainings [name=TRAINING_START_DATE]').val();
    var TRAINING_END_DATE = $('#add_trainings [name=TRAINING_END_DATE]').val();
  
    var url = window.location.origin+"/index.php/Home/add_trainings";
  
 

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
      'TOTAL_HOUR_TRAINING':TOTAL_HOUR_TRAINING,
      'TRAINING_START_DATE':TRAINING_START_DATE,
      'TRAINING_END_DATE':TRAINING_END_DATE
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
  get_edit_trainings(TRAINING_ID,TRAINING_TITLE,TRAINING_PLACE,TRAINING_OWNER,TOTAL_HOUR_TRAINING,
    TRAINING_START_DATE,TRAINING_END_DATE){

    // console.log(TRAINING_ID);
    // console.log(TRAINING_TITLE);
    // console.log(TRAINING_PLACE);
    // console.log(TRAINING_OWNER);
  
    // console.log(TOTAL_HOUR_TRAINING);
    // console.log(TRAINING_START_DATE);
    // console.log(TRAINING_END_DATE);
    // console.log(FILE_TAINING);

          // return false;

    $('#edit_trainings [name=TRAINING_ID]').val(TRAINING_ID);
    $('#edit_trainings [name=TRAINING_TITLE]').val(TRAINING_TITLE);
    $('#edit_trainings [name=TRAINING_PLACE]').val(TRAINING_PLACE);
    $('#edit_trainings [name=TRAINING_OWNER]').val(TRAINING_OWNER);

    $('#edit_trainings [name=TOTAL_HOUR_TRAINING]').val(TOTAL_HOUR_TRAINING);
    $('#edit_trainings [name=TRAINING_START_DATE]').val(TRAINING_START_DATE);
    $('#edit_trainings [name=TRAINING_END_DATE]').val(TRAINING_END_DATE);
  

    $('#edit_trainings').modal('show'); 
   ;
  },
  edit_trainings(){

    var TRAINING_ID = $('#edit_trainings [name=TRAINING_ID]').val()
    var TRAINING_TITLE = $('#edit_trainings [name=TRAINING_TITLE]').val()
    var TRAINING_PLACE = $('#edit_trainings [name=TRAINING_PLACE]').val()
    var TRAINING_OWNER = $('#edit_trainings [name=TRAINING_OWNER]').val()
  
    var TOTAL_HOUR_TRAINING = $('#edit_trainings [name=TOTAL_HOUR_TRAINING]').val()
    var TRAINING_START_DATE = $('#edit_trainings [name=TRAINING_START_DATE]').val()
    var TRAINING_END_DATE = $('#edit_trainings [name=TRAINING_END_DATE]').val()

  

    var url = window.location.origin+"/index.php/Home/edit_trainings";

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
      'TOTAL_HOUR_TRAINING':TOTAL_HOUR_TRAINING,
      'TRAINING_START_DATE':TRAINING_START_DATE,
      'TRAINING_END_DATE':TRAINING_END_DATE
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
    var url = window.location.origin+"/index.php/Home/delete_trainings";
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

  upload_file_trainings(obj){
    var files = $(obj)[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, ['pdf']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ PDF"
      }else{
        form_data.append("files[]", files[count]);

      }
    }

    // form_data.append('RESEARCH_ID', $('[name=RESEARCH_ID]').val());
    form_data.append('TRAINING_ID', $(obj).attr('data-id-TRAINING_ID'));

    
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload_file_trainings",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        // console.log(data);
        // return false;
        if(data.st == 1){
          location.reload();
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },



  ///
  add_activity_participants(){

    var ACTIVITY_ID = $('#add_activity_participants [name=ACTIVITY_ID]').val();
    var PERSONNEL_ID = $('#add_activity_participants [name=PERSONNEL_ID]').val();
   
  
    var url = window.location.origin+"/index.php/Home/add_activity_participants";
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



  

    var url = window.location.origin+"/index.php/Home/edit_activity_participants";

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
    var url = window.location.origin+"/index.php/Home/delete_activity_participants";
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


  show_activity_participants_pic(ID){
   



    // console.log(ID);
    // return false  ; 
    
    var url = window.location.origin+"/index.php/Home/show_activity_participants_pic?ID=".ID;


   
  }, 
  ///
  add_training_participants(){

    var TRAINING_ID = $('#add_training_participants [name=TRAINING_ID]').val();
    var TRAINING_BUDGET = $('#add_training_participants [name=TRAINING_BUDGET]').val();
    var TRAINING_RESULT = $('#add_training_participants [name=TRAINING_RESULT]').val();
    var TRAINING_EVALUATION_RESULT = $('#add_training_participants [name=TRAINING_EVALUATION_RESULT]').val();
    var TRAINING_ASSESSOR_ID = $('#add_training_participants [name=TRAINING_ASSESSOR_ID]').val();
    var PERSONNEL_ID = $('#add_training_participants [name=PERSONNEL_ID]').val();
   
  
    var url = window.location.origin+"/index.php/Home/add_training_participants";
    // console.log(TRAINING_ID);
    // console.log(TRAINING_BUDGET);
    // console.log(TRAINING_RESULT);
    // console.log(TRAINING_EVALUATION_RESULT);
    // console.log(TRAINING_ASSESSOR_ID);
    // console.log(PERSONNEL_ID);


    // return false;
    var data = {
  
      'TRAINING_ID':TRAINING_ID,
      'TRAINING_BUDGET':TRAINING_BUDGET,
      'TRAINING_RESULT':TRAINING_RESULT,
      'TRAINING_EVALUATION_RESULT':TRAINING_EVALUATION_RESULT,
      'TRAINING_ASSESSOR_ID':TRAINING_ASSESSOR_ID,
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
  get_edit_training_participants(ID_TRAINING_PARTICIPANTS,TRAINING_ID,TRAINING_BUDGET,
    TRAINING_RESULT,TRAINING_EVALUATION_RESULT,TRAINING_ASSESSOR_ID,PERSONNEL_ID){

  

    // console.log(ID_TRAINING_PARTICIPANTS);
    // console.log(TRAINING_ID);
    // console.log(TRAINING_BUDGET );3
    // console.log(TRAINING_RESULT);
    // console.log(TRAINING_EVALUATION_RESULT);
    // console.log(TRAINING_ASSESSOR_ID );
    // console.log(PERSONNEL_ID);


    // return false;
  $('#edit_training_participants [name=TRAINING_ID] option').each(function(key,value){
    $(value).removeAttr('selected');
    if(TRAINING_ID === $(value).val()){
    $(value).attr("selected","selected")
  }
  });
  $('#edit_training_participants [name=PERSONNEL_ID] option').each(function(key,value){
    $(value).removeAttr('selected');
    if(PERSONNEL_ID === $(value).val()){
    $(value).attr("selected","selected")
  }
  });
  $('#edit_training_participants [name=TRAINING_ASSESSOR_ID] option').each(function(key,value){
    $(value).removeAttr('selected');
    if(TRAINING_ASSESSOR_ID === $(value).val()){
    $(value).attr("selected","selected")
    }
  });
    $('#edit_training_participants [name=ID_TRAINING_PARTICIPANTS]').val(ID_TRAINING_PARTICIPANTS);
    $('#edit_training_participants [name=TRAINING_BUDGET]').val(TRAINING_BUDGET);
    $('#edit_training_participants [name=TRAINING_RESULT]').val(TRAINING_RESULT);
    $('#edit_training_participants [name=TRAINING_EVALUATION_RESULT]').val(TRAINING_EVALUATION_RESULT);



    $('#edit_training_participants').modal('show'); 
    ;
  },
  edit_training_participants(){



    // console.log(ID_TRAINING_PARTICIPANTS);
    // console.log(TRAINING_ID);
    // console.log(TRAINING_BUDGET );
    // console.log(TRAINING_RESULT);
    // console.log(TRAINING_EVALUATION_RESULT);
    // console.log(TRAINING_ASSESSOR_ID);
    // console.log(PERSONNEL_ID);
  

          // return false;

    var ID_TRAINING_PARTICIPANTS = $('#edit_training_participants [name=ID_TRAINING_PARTICIPANTS]').val()

    
    
    var TRAINING_ID = $('#edit_training_participants [name=TRAINING_ID] option:selected').val()
    var TRAINING_BUDGET = $('#edit_training_participants [name=TRAINING_BUDGET]').val()
    var TRAINING_RESULT = $('#edit_training_participants [name=TRAINING_RESULT]').val()
    var TRAINING_EVALUATION_RESULT = $('#edit_training_participants [name=TRAINING_EVALUATION_RESULT]').val()
    var TRAINING_ASSESSOR_ID = $('#edit_training_participants [name=TRAINING_ASSESSOR_ID] option:selected').val()
    var PERSONNEL_ID = $('#edit_training_participants [name=PERSONNEL_ID] option:selected').val()




    var url = window.location.origin+"/index.php/Home/edit_training_participants";

       

   
    var data = {
      
      'ID_TRAINING_PARTICIPANTS':ID_TRAINING_PARTICIPANTS,
      'TRAINING_ID':TRAINING_ID,
      'TRAINING_BUDGET':TRAINING_BUDGET,
      'TRAINING_RESULT':TRAINING_RESULT,
      'TRAINING_EVALUATION_RESULT':TRAINING_EVALUATION_RESULT,
      'TRAINING_ASSESSOR_ID':TRAINING_ASSESSOR_ID,
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
  delete_training_participants(ID_TRAINING_PARTICIPANTS){
    var url = window.location.origin+"/index.php/Home/delete_training_participants";
    var data = {
      'ID_TRAINING_PARTICIPANTS':ID_TRAINING_PARTICIPANTS  
    }
    // console.log(ID_TRAINING_PARTICIPANTS);
    // return false;
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
  check_login(){
    var ADMIN_USER = $('[name=ADMIN_USER]').val(); 
    var ADMIN_PASS = $('[name=ADMIN_PASS]').val();
    var level = $('[name=level]').val();
  
    var url = window.location.origin+"/index.php/Home/check_login";
    // console.log(ADMIN_USER);
    // console.log(ADMIN_PASS);
    // console.log(level);
    // return false;
    var data = {
      'ADMIN_USER':ADMIN_USER,
      'ADMIN_PASS':ADMIN_PASS,
      'level':level
    }
      // console.log(data);
      //    return false;
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
      // console.log(resp);
      // return false;
      if(resp.st == 1){
        window.location.href = location.origin+"/index.php/Home/profile"
      }else{
       
        alert(resp.msg);
      }
    })
  },
  //
  add_leaves(){


    
    var PERSONNEL_ID = $('#add_leaves [name=PERSONNEL_ID]').val();
    var WRITE_DATE = $('#add_leaves [name=WRITE_DATE]').val();
    var LAST_LEAVE_TYPE_ID = $('#add_leaves [name=LAST_LEAVE_TYPE_ID]').attr('data-id-leave_type_id');
    var LAST_LEAVE_TYPE_MAX = $('#add_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val();
    var LAST_LEAVE_TOAL = $('#add_leaves [name=LAST_LEAVE_TOAL]').val();
    var LAST_LEAVE_START_DATE = $('#add_leaves [name=LAST_LEAVE_START_DATE]').val();
    var LAST_LEAVE_END_DATE = $('#add_leaves [name=LAST_LEAVE_END_DATE]').val();
    var LEAVE_TOAL = $('#add_leaves [name=LEAVES_NUMBER_PLUS]').val();
 
    var LEAVE_TYPE_ID = $('#add_leaves [name=LEAVE_TYPE_ID] option:selected').val();
    var LEAVE_START_DATE = $('#add_leaves [name=LEAVE_START_DATE]').val();
    var LEAVE_END_DATE = $('#add_leaves [name=LEAVE_END_DATE]').val();
    var OFFICER = $('#add_leaves [name=OFFICER] option:selected').val();
    var SUPERVISOR_ID = $('#add_leaves [name=SUPERVISOR_ID] option:selected').val();
    var WRITE_PLACE = $('#add_leaves [name=WRITE_PLACE]').val();
    var CONFINED = $('#add_leaves [name=CONFINED]:checked').val();
    
    
    var LEAVE_HALF_DATE = $('#add_leaves [name=LEAVE_HALF_DATE]').val();
    var HALF_ONE = $('#add_leaves [name=HALF_ONE]:checked').val();

    var myCheck =  $('#add_leaves [name=myCheck]:checked').val();

    
    if(myCheck === undefined){
      var myCheck = (null == undefined);
    }

    // console.log(PERSONNEL_ID)
    // console.log(WRITE_DATE)
    // console.log(LAST_LEAVE_TYPE_ID)
    // console.log(LAST_LEAVE_TYPE_MAX_SHOW)
    // console.log(LAST_LEAVE_TOAL)
    // console.log(LAST_LEAVE_START_DATE)
    // console.log(LAST_LEAVE_END_DATE)

    // console.log(LEAVE_TYPE_ID)
    // console.log(LEAVE_TOAL)
    // console.log(LEAVE_START_DATE)
    // console.log(LEAVE_END_DATE)
    // console.log(OFFICER)
    // console.log(SUPERVISOR_ID)
    // console.log(WRITE_PLACE)
    // console.log(CONFINED)
    // console.log(LEAVE_HALF_DATE)
    // console.log(HALF_ONE)

    // console.log(LAST_LEAVE_END_DATE)
   
  
    // console.log(LEAVE_HALF_DATE)
    // console.log(myCheck)
    // return false;

    var url = window.location.origin+"/index.php/Home/add_leaves";








    // $('input').removeClass('red')
    // if(PERSONNEL_ID==""){
    //   $('#add_leaves [name=PERSONNEL_ID]').addClass("red")
    //   return false;
    // }
    // if(LEAVE_TYPE_ID==""){
    //   $('#add_leaves [name=LEAVE_TYPE_ID]').addClass("red")
    //   return false;
    // }
   

 

    
    var data = {

  
      'PERSONNEL_ID':PERSONNEL_ID,
      'WRITE_DATE':WRITE_DATE,
      'LAST_LEAVE_TYPE_ID':LAST_LEAVE_TYPE_ID,
      'LAST_LEAVE_TYPE_MAX':LAST_LEAVE_TYPE_MAX,
      'LAST_LEAVE_TOAL':LAST_LEAVE_TOAL,
      'LAST_LEAVE_START_DATE':LAST_LEAVE_START_DATE,
      'LAST_LEAVE_END_DATE':LAST_LEAVE_END_DATE,
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'LEAVE_TOAL':LEAVE_TOAL,
      'LEAVE_START_DATE':LEAVE_START_DATE,
      'LEAVE_END_DATE':LEAVE_END_DATE,
      'OFFICER':OFFICER,
      'SUPERVISOR_ID':SUPERVISOR_ID,
      'WRITE_PLACE':WRITE_PLACE,
      'CONFINED':CONFINED,
      'LEAVE_HALF_DATE':LEAVE_HALF_DATE,
      'HALF_ONE':HALF_ONE,
      'myCheck':myCheck
      
      
      
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


  




  get_edit_leaves(LEAVE_ID,LEAVE_TYPE_ID,WRITE_DATE,LEAVE_START_DATE,LEAVE_END_DATE,MY_CHECK,
    LAST_LEAVE_TYPE_ID,OFFICER,SUPERVISOR_ID,PERSONNEL_ID,LEAVE_TOAL){

      
  
      var startDate = new Date(LEAVE_START_DATE);
      var currentDate = new Date(LEAVE_END_DATE);
      var days = Math.floor((currentDate - startDate) /(24 * 60 * 60 * 1000));
      var aDay = 24 * 60 * 60 * 1000,
  
      daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;
   
      if(MY_CHECK != 'on' && startDate != '' && currentDate != '' ){
        daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;
      }else{
        daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1-0.5;
      }
      
      

      // // console.log(startDate);
      // // console.log($('#LEAVE_START_DATE').val());
      // console.log(daysDiff);
      // console.log(MY_CHECK);
      // return false;



    var url = window.location.origin+"/index.php/Home/get_edit_leaves";

    var data = {
      
      'LEAVE_ID':LEAVE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'SUPERVISOR_ID':SUPERVISOR_ID,
      'OFFICER':OFFICER,
      'WRITE_DATE':WRITE_DATE,
      'LAST_LEAVE_TYPE_ID':LAST_LEAVE_TYPE_ID,
      'daysDiff':daysDiff,
      'LEAVE_TOAL':LEAVE_TOAL
      
      
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
        // console.log(resp)
    
        // return false;
        var HALF_DATE = document.getElementById("HALF_DATE_edit");

        if(resp.LAST_LEAVE_TYPE_ID != ""){
          $("#edit_leaves [name=myCheck_edit]").removeAttr('checked');

          $('#edit_leaves [name=LEAVE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_ID);

          $('#edit_leaves [name=PERSONNEL_ID]').val(resp.LEAVE_TYPE_ID.PERSONNEL_ID);
          $('#edit_leaves [name=WRITE_DATE]').val(resp.LEAVE_TYPE_ID.WRITE_DATE);
          $('#edit_leaves [name=LAST_LEAVE_TYPE_ID]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_ID);
          $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_MAX);
          $('#edit_leaves [name=LAST_LEAVE_TOAL]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TOAL);
          $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_START_DATE);
          $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_END_DATE);
          
  
          $('#edit_leaves [name=LEAVE_TYPE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_ID);
          $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_MAX);
          $('#edit_leaves [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL);
          $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(resp.LEAVE_TOAL);
          $('#edit_leaves [name=edit_LEAVE_START_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_START_DATE);
          $('#edit_leaves [name=edit_LEAVE_END_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_END_DATE);
          $('#edit_leaves [name=OFFICER]').val(resp.LEAVE_TYPE_ID.OFFICER);
          $('#edit_leaves [name=SUPERVISOR_ID]').val(resp.LEAVE_TYPE_ID.SUPERVISOR_ID);
          $('#edit_leaves [name=WRITE_PLACE]').val(resp.LEAVE_TYPE_ID.WRITE_PLACE);
          $('#edit_leaves [name=edit_LEAVE_HALF_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_HALF_DATE);



          if(resp.LEAVE_TYPE_ID.MY_CHECK === "on"){
           
            $('#edit_leaves [name=myCheck_edit]').prop('checked',true);
            HALF_DATE.style.display = "block";
          }else{

            $('#edit_leaves [name=myCheck_edit]').prop('checked',false);
            HALF_DATE.style.display = "none" ;
          }
        
   
  
          $('#edit_leaves [name=CONFINED]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.CONFINED){
              // console.log($(value).val());
              // console.log(resp.LEAVE_TYPE_ID.CONFINED);
              $(value).prop( "checked", true);
            }
          });
          $('#edit_leaves [name=HALF_ONE]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.HALF_ONE){
              $(value).prop( "checked", true); 
            }
          });
          
        }else{
          $("#edit_leaves [name=myCheck_edit]").removeAttr('checked');
          $('#edit_leaves [name=LEAVE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_ID);
          $('#edit_leaves [name=PERSONNEL_ID]').val(resp.LEAVE_TYPE_ID.PERSONNEL_ID);
          $('#edit_leaves [name=WRITE_DATE]').val(resp.LEAVE_TYPE_ID.WRITE_DATE);
          $('#edit_leaves [name=LAST_LEAVE_TYPE_ID]').val('');
          $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val('0');
          $('#edit_leaves [name=LAST_LEAVE_TOAL]').val('0');
          $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val('ยังไม่ได้ทำรายการ');
          $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val('ยังไม่ได้ทำรายการ');
          
          

          
          $('#edit_leaves [name=LEAVE_TYPE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_ID);
          $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_MAX);
          $('#edit_leaves [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL);
          $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(resp.LEAVE_TOAL);
          $('#edit_leaves [name=edit_LEAVE_START_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_START_DATE);
          $('#edit_leaves [name=edit_LEAVE_END_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_END_DATE);
          $('#edit_leaves [name=OFFICER]').val(resp.LEAVE_TYPE_ID.OFFICER);
          $('#edit_leaves [name=SUPERVISOR_ID]').val(resp.LEAVE_TYPE_ID.SUPERVISOR_ID);
          $('#edit_leaves [name=WRITE_PLACE]').val(resp.LEAVE_TYPE_ID.WRITE_PLACE);
          $('#edit_leaves [name=edit_LEAVE_HALF_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_HALF_DATE);

          
       
          if(resp.LEAVE_TYPE_ID.MY_CHECK === "on"){
           
            $('#edit_leaves [name=myCheck_edit]').prop('checked',true);
            HALF_DATE.style.display = "block";
          }else{
            
            $('#edit_leaves [name=myCheck_edit]').prop('checked',false);
            HALF_DATE.style.display = "none" ;
          }
        

  
          $('#edit_leaves [name=CONFINED]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.CONFINED){
              $(value).prop( "checked", true);
            }
          });
          $('#edit_leaves [name=HALF_ONE]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.HALF_ONE){
              $(value).prop( "checked", true); 
            }
          });
        }

        $('#edit_leaves').modal('show'); 
    })
    

 
    // $('#edit_leaves').modal('show'); 
   ;
  }, 
  


  add_get_edit_leaves_approve(LEAVE_ID,LEAVE_TYPE_ID,WRITE_DATE,LEAVE_START_DATE,LEAVE_END_DATE,MY_CHECK,
    LAST_LEAVE_TYPE_ID,OFFICER,SUPERVISOR_ID,PERSONNEL_ID,LEAVE_TOAL){

      
      
      var startDate = new Date(LEAVE_START_DATE);
      var currentDate = new Date(LEAVE_END_DATE);
      var days = Math.floor((currentDate - startDate) /(24 * 60 * 60 * 1000));
      var aDay = 24 * 60 * 60 * 1000,
  
      daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;
   
      if(MY_CHECK != 'on' && startDate != '' && currentDate != '' ){
        daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;
      }else{
        daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1-0.5;
      }
      
      

      // // console.log(startDate);
      // // console.log($('#LEAVE_START_DATE').val());
      // console.log(daysDiff);
      // console.log(MY_CHECK);
      // return false;



    var url = window.location.origin+"/index.php/Home/get_edit_leaves";

    var data = {
      
      'LEAVE_ID':LEAVE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'SUPERVISOR_ID':SUPERVISOR_ID,
      'OFFICER':OFFICER,
      'WRITE_DATE':WRITE_DATE,
      'LAST_LEAVE_TYPE_ID':LAST_LEAVE_TYPE_ID,
      'daysDiff':daysDiff,
      'LEAVE_TOAL':LEAVE_TOAL
      
      
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
        // console.log(resp)
    
        // return false;
        var HALF_DATE = document.getElementById("HALF_DATE_edit");

        if(resp.LAST_LEAVE_TYPE_ID != ""){
          $("#add_edit_leaves_approve [name=myCheck_edit]").removeAttr('checked');

          $('#add_edit_leaves_approve [name=LEAVE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_ID);

          $('#add_edit_leaves_approve [name=PERSONNEL_ID]').val(resp.LEAVE_TYPE_ID.PERSONNEL_ID);
          $('#add_edit_leaves_approve [name=WRITE_DATE]').val(resp.LEAVE_TYPE_ID.WRITE_DATE);
          $('#add_edit_leaves_approve [name=LAST_LEAVE_TYPE_ID]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_ID);
          $('#add_edit_leaves_approve [name=LAST_LEAVE_TYPE_MAX_SHOW]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_MAX);
          $('#add_edit_leaves_approve [name=LAST_LEAVE_TOAL]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TOAL);
          $('#add_edit_leaves_approve [name=LEAVE_START_DATE]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_START_DATE);
          $('#add_edit_leaves_approve [name=LAST_LEAVE_END_DATE]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_END_DATE);
          
  
          $('#add_edit_leaves_approve [name=LEAVE_TYPE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_ID);
          $('#add_edit_leaves_approve [name=LEAVE_TYPE_MAX_SHOW]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_MAX);
          $('#add_edit_leaves_approve [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL);
          $('#add_edit_leaves_approve [name=LEAVES_NUMBER_PLUS]').val(resp.LEAVE_TOAL);
          $('#add_edit_leaves_approve [name=LEAVE_START_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_START_DATE);
          $('#add_edit_leaves_approve [name=LEAVE_END_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_END_DATE);
          $('#add_edit_leaves_approve [name=OFFICER]').val(resp.LEAVE_TYPE_ID.OFFICER);
          $('#add_edit_leaves_approve [name=SUPERVISOR_ID]').val(resp.LEAVE_TYPE_ID.SUPERVISOR_ID);
          $('#add_edit_leaves_approve [name=WRITE_PLACE]').val(resp.LEAVE_TYPE_ID.WRITE_PLACE);
          $('#add_edit_leaves_approve [name=LEAVE_HALF_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_HALF_DATE);



          

          if(resp.LEAVE_TYPE_ID.MY_CHECK === "on"){
           
            $('#add_edit_leaves_approve [name=myCheck]').prop('checked',true);
            HALF_DATE.style.display = "block";
          }else{
            $('#add_edit_leaves_approve [name=myCheck]').prop('checked',false);
            HALF_DATE.style.display = "none" ;
          }
        
   
          
          $('#add_edit_leaves_approve [name=CONFINED]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.CONFINED){
              // console.log($(value).val());
              // console.log(resp.LEAVE_TYPE_ID.CONFINED);
              $(value).prop( "checked", true);
            }
          });
          $('#add_edit_leaves_approve [name=HALF_ONE]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.HALF_ONE){
              $(value).prop( "checked", true); 
            }
          });


   

          
        }else{
          $("#add_edit_leaves_approve [name=myCheck_edit]").removeAttr('checked');
          $('#add_edit_leaves_approve [name=LEAVE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_ID);
          $('#add_edit_leaves_approve [name=PERSONNEL_ID]').val(resp.LEAVE_TYPE_ID.PERSONNEL_ID);
          $('#add_edit_leaves_approve [name=WRITE_DATE]').val(resp.LEAVE_TYPE_ID.WRITE_DATE);
          $('#add_edit_leaves_approve [name=LAST_LEAVE_TYPE_ID]').val('');
          $('#add_edit_leaves_approve [name=LAST_LEAVE_TYPE_MAX_SHOW]').val('0');
          $('#add_edit_leaves_approve [name=LAST_LEAVE_TOAL]').val('0');
          $('#add_edit_leaves_approve [name=LAST_LEAVE_START_DATE]').val('ยังไม่ได้ทำรายการ');
          $('#add_edit_leaves_approve [name=LAST_LEAVE_END_DATE]').val('ยังไม่ได้ทำรายการ');
          
          

          
          $('#add_edit_leaves_approve [name=LEAVE_TYPE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_ID);
          $('#add_edit_leaves_approve [name=LEAVE_TYPE_MAX_SHOW]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_MAX);
          $('#add_edit_leaves_approve [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL);
          $('#add_edit_leaves_approve [name=LEAVES_NUMBER_PLUS]').val(resp.LEAVE_TOAL);
          $('#add_edit_leaves_approve [name=LEAVE_START_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_START_DATE);
          $('#add_edit_leaves_approve [name=LEAVE_END_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_END_DATE);
          $('#add_edit_leaves_approve [name=OFFICER]').val(resp.LEAVE_TYPE_ID.OFFICER);
          $('#add_edit_leaves_approve [name=SUPERVISOR_ID]').val(resp.LEAVE_TYPE_ID.SUPERVISOR_ID);
          $('#add_edit_leaves_approve [name=WRITE_PLACE]').val(resp.LEAVE_TYPE_ID.WRITE_PLACE);
          $('#add_edit_leaves_approve [name=LEAVE_HALF_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_HALF_DATE);

          
       
          if(resp.LEAVE_TYPE_ID.MY_CHECK === "on"){
           
            $('#add_edit_leaves_approve [name=myCheck]').prop('checked',true);
            HALF_DATE.style.display = "block";
          }else{
            
            $('#add_edit_leaves_approve [name=myCheck]').prop('checked',false);
            HALF_DATE.style.display = "none" ;
          }
        
          
  
          $('#add_edit_leaves_approve [name=CONFINED]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.CONFINED){
              $(value).prop( "checked", true);
            }
          });
          $('#add_edit_leaves_approve [name=HALF_ONE]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.HALF_ONE){
              $(value).prop( "checked", true); 
            }
          });
        }

        $('#add_edit_leaves_approve').modal('show'); 
    })
    

 
    // $('#edit_leaves').modal('show'); 
   ;
  }, 




  update_leaves_approve(){
      
    var LEAVE_ID = $('#add_edit_leaves_approve [name=LEAVE_ID]').val()
    var SUPERVISOR_OPINION = $('#add_edit_leaves_approve [name=SUPERVISOR_OPINION]').val()
    var SUPERVISOR_STATUS = $('#add_edit_leaves_approve [name=SUPERVISOR_STATUS]:checked').val()

    
    // console.log(LEAVE_ID);
    // console.log(SUPERVISOR_OPINION);
    // console.log(SUPERVISOR_STATUS);
    // return false;
  
  
    var url = window.location.origin+"/index.php/Home/update_leaves_approve";
  // console.log(FACUALTY_NAME_TH);
  // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    var data = {
      'LEAVE_ID':LEAVE_ID,
      'SUPERVISOR_OPINION':SUPERVISOR_OPINION,
      'SUPERVISOR_STATUS':SUPERVISOR_STATUS
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
        // console.log(data);
        // return false;
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
  


  get_show_leaves(LEAVE_ID,LEAVE_TYPE_ID,WRITE_PLACE,WRITE_DATE,LEAVE_START_DATE,LEAVE_END_DATE,
    LEAVE_TOAL,LAST_LEAVE_TYPE_ID,LAST_LEAVE_START_DATE,LAST_LEAVE_END_DATE,LAST_LEAVE_TOAL,OFFICER,
    SUPERVISOR_ID,PERSONNEL_ID,CONFINED,LAST_LEAVE_TYPE_MAX,LEAVE_HALF_DATE,HALF_ONE){
      
    // console.log(LEAVE_ID)
    // console.log(LEAVE_TYPE_ID)
    // console.log(WRITE_PLACE)
    // console.log(WRITE_DATE)
    // console.log(LEAVE_START_DATE)
    // console.log(LEAVE_END_DATE)
    // console.log(LEAVE_TOAL)
    // console.log(LAST_LEAVE_TYPE_ID)
    // console.log(LAST_LEAVE_START_DATE)
    // console.log(LAST_LEAVE_END_DATE)
    // console.log(LAST_LEAVE_TOAL)
    // console.log(OFFICER)
    // console.log(SUPERVISOR_ID)
    // console.log(PERSONNEL_ID)
    // console.log(CONFINED)
    // console.log(LEAVE_HALF_DATE)
    // console.log(HALF_ONE)
    // console.log(LAST_LEAVE_TYPE_MAX_SHOW)
 



    // return false;

  
    // console.log(LEAVE_TOAL)
 

   
  
 
   
    // console.log(LEAVE_HALF_DATE)
    // console.log(HALF_ONE)
    

    $('#get_show_leaves [name=LEAVE_ID]').val(LEAVE_ID);
  

    $('#get_show_leaves [name=LEAVE_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(LEAVE_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_leaves [name=LAST_LEAVE_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(LAST_LEAVE_TYPE_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#get_show_leaves [name=WRITE_PLACE]').val(WRITE_PLACE);
    $('#get_show_leaves [name=WRITE_DATE]').val(WRITE_DATE);
    $('#get_show_leaves [name=LAST_LEAVE_START_DATE]').val(LAST_LEAVE_START_DATE);
    $('#get_show_leaves [name=LAST_LEAVE_END_DATE]').val(LAST_LEAVE_END_DATE);
    $('#get_show_leaves [name=edit_LEAVE_START_DATE]').val(LEAVE_START_DATE);
    $('#get_show_leaves [name=edit_LEAVE_END_DATE]').val(LEAVE_END_DATE);

    $('#get_show_leaves [name=OFFICER] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(OFFICER === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#get_show_leaves [name=SUPERVISOR_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(SUPERVISOR_ID === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#get_show_leaves [name=CONFINED]').each(function(key,value){
      
      if($(value).val()==CONFINED){
        // console.log($(value).val());
        // console.log(PERSONNEL_SEX);
        $(value).prop( "checked", true );
        
      }
    })
    $('#get_show_leaves [name=LAST_LEAVE_TYPE_MAX]').val(LAST_LEAVE_TYPE_MAX);
    

    $('#get_show_leaves [name=WRITE_PLACE]').val(WRITE_PLACE);
    $('#get_show_leaves [name=WRITE_DATE]').val(WRITE_DATE);
   


 
    $('#get_show_leaves').modal('show'); 
   ;
  }, 

  


  edit_leaves(){


    var LEAVE_ID = $('#edit_leaves [name=LEAVE_ID]').val()
    var PERSONNEL_ID = $('#edit_leaves [name=PERSONNEL_ID]').val()
    var WRITE_DATE = $('#edit_leaves [name=WRITE_DATE]').val()
    var LAST_LEAVE_TYPE_ID = $('#edit_leaves [name=LAST_LEAVE_TYPE_ID]').val()
    var LAST_LEAVE_TYPE_MAX = $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val()
    var LAST_LEAVE_TOAL = $('#edit_leaves [name=LAST_LEAVE_TOAL]').val()
    var LAST_LEAVE_START_DATE = $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val()
    var LAST_LEAVE_END_DATE = $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val()
    var LEAVE_TYPE_ID = $('#edit_leaves [name=LEAVE_TYPE_ID] option:selected').val()
    var LEAVE_TOAL = $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val()
    var edit_LEAVE_START_DATE = $('#edit_leaves [name=edit_LEAVE_START_DATE]').val()
    var edit_LEAVE_END_DATE = $('#edit_leaves [name=edit_LEAVE_END_DATE]').val()
    var OFFICER = $('#edit_leaves [name=OFFICER] option:selected').val()
    var SUPERVISOR_ID = $('#edit_leaves [name=SUPERVISOR_ID] option:selected').val()
    var WRITE_PLACE = $('#edit_leaves [name=WRITE_PLACE]').val()
    var CONFINED = $('#edit_leaves [name=CONFINED]:checked').val()


    
    var myCheck_edit = $('#edit_leaves [name=myCheck_edit]:checked').val()
    var edit_LEAVE_HALF_DATE = $('#edit_leaves [name=edit_LEAVE_HALF_DATE]').val()
    var HALF_ONE = $('#edit_leaves [name=HALF_ONE]:checked').val()

    if(myCheck_edit === undefined){
      var myCheck_edit = (null == undefined);
    }
    


      // console.log(LEAVE_ID);
      // console.log(PERSONNEL_ID);
      // console.log(WRITE_DATE);

      // console.log(LAST_LEAVE_TYPE_ID);
      // console.log(LAST_LEAVE_TYPE_MAX);
      // console.log(LAST_LEAVE_TOAL);
      // console.log(LAST_LEAVE_START_DATE);
      // console.log(LAST_LEAVE_END_DATE);
      // console.log(LEAVE_TYPE_ID);
      // console.log(LEAVE_TOAL);

      // console.log(edit_LEAVE_START_DATE);
      // console.log(edit_LEAVE_END_DATE);
      // console.log(OFFICER);
      // console.log(SUPERVISOR_ID);
      // console.log(WRITE_PLACE);
      // console.log(CONFINED);
      // console.log(myCheck_edit);
      // console.log(edit_LEAVE_HALF_DATE);
      // console.log(HALF_ONE);
      // return false;



    var url = window.location.origin+"/index.php/Home/edit_leaves";

       

   
    var data = {
    
      'LEAVE_ID':LEAVE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'WRITE_DATE':WRITE_DATE,
      'LAST_LEAVE_TYPE_ID':LAST_LEAVE_TYPE_ID,
      'LAST_LEAVE_TYPE_MAX':LAST_LEAVE_TYPE_MAX,
      'LAST_LEAVE_TOAL':LAST_LEAVE_TOAL,
      'LAST_LEAVE_START_DATE':LAST_LEAVE_START_DATE,
      'LAST_LEAVE_END_DATE':LAST_LEAVE_END_DATE,
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'LEAVE_TOAL':LEAVE_TOAL,
      'edit_LEAVE_START_DATE':edit_LEAVE_START_DATE,
      'edit_LEAVE_END_DATE':edit_LEAVE_END_DATE,
      

      'OFFICER':OFFICER,
      'SUPERVISOR_ID':SUPERVISOR_ID,
      'WRITE_PLACE':WRITE_PLACE,
      'CONFINED':CONFINED,
      'myCheck_edit':myCheck_edit,
      'edit_LEAVE_HALF_DATE':edit_LEAVE_HALF_DATE,
      'HALF_ONE':HALF_ONE
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
  delete_leaves(LEAVE_ID){
    // console.log(LEAVE_ID);
    // return false;
    var url = window.location.origin+"/index.php/Home/delete_leaves";
    var data = {
      'LEAVE_ID':LEAVE_ID  
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
  },
  checkcountinputphone(obj){
    var num = $(obj).val(); // เก็บตัวแปลเข้า num
    num = num.replace(/ /g, '');   ///ลบspacebar
    if(num.length>10){
        var num_replace = num.slice(0,10);  ///รีเซ็ทเมือจำนวนถึง 6 slice(0,6)การตัดข้อความตั้งแต่่ตัวที่ 1+6
        console.log(num_replace);
        $(obj).val(num_replace) ///ยัดค่าเข้าตัวมันเอง
    }
    var element = obj  
    element.value = element.value.replace(/[^0-9]/gi, "");  
    // $(obj).val(element.value = element.value.replace(/[^0-9]/gi, ""));
  },
  /// 


  get_edit_profile(PERSONNEL_ID,PERSONNEL_NAME,PERSONNEL_SURNAME,PERSONNEL_NAME_EN,PERSONNEL_SURNAME_EN,
    PERSONNEL_EMAIL,PERSONNEL_MOBILE,PERSONNEL_PHONE,PERSONNEL_PHONE_EXTENSION,PERSONNEL_SEX,PERSONNEL_CREATE_BY,
    PERSONNEL_CRETTE_DATE,DEPARTMENT_ID,PERSONNEL_TYPE_ID,PERSONNEL_STATUS_ID,
    PERSONNEL_CATEGORY_ID,PERSONNEL_USERNAME,PERSONNEL_PASSWORD,level){

    // console.log(PERSONNEL_ID);
    // console.log(PERSONNEL_NAME);
    // console.log(PERSONNEL_SURNAME);
    // console.log(PERSONNEL_NAME_EN);
    // console.log(PERSONNEL_SURNAME_EN);
    // console.log(PERSONNEL_EMAIL);
    // console.log(PERSONNEL_MOBILE);
    // console.log(PERSONNEL_PHONE);
    // return false;
    $('#edit_profile [name=PERSONNEL_ID]').val(PERSONNEL_ID); 
    // console.log();
    // return false;
    $('#edit_profile [name=PERSONNEL_NAME]').val(PERSONNEL_NAME); 
    $('#edit_profile [name=PERSONNEL_SURNAME]').val(PERSONNEL_SURNAME);
    $('#edit_profile [name=PERSONNEL_NAME_EN]').val(PERSONNEL_NAME_EN);
    $('#edit_profile [name=PERSONNEL_SURNAME_EN]').val(PERSONNEL_SURNAME_EN);
    $('#edit_profile [name=PERSONNEL_EMAIL]').val(PERSONNEL_EMAIL);
    $('#edit_profile [name=PERSONNEL_MOBILE]').val(PERSONNEL_MOBILE);
    $('#edit_profile [name=PERSONNEL_PHONE]').val(PERSONNEL_PHONE);
    $('#edit_profile [name=PERSONNEL_PHONE_EXTENSION]').val(PERSONNEL_PHONE_EXTENSION); 

    // $('#edit_profile [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#edit_profile [name=PERSONNEL_SEX]').each(function(key,value){
      
      if($(value).val()==PERSONNEL_SEX){
        // console.log($(value).val());
        // console.log(PERSONNEL_SEX);
        $(value).prop( "checked", true );
        
      }
      

    });
    
    $('#edit_profile [name=PERSONNEL_CRETTE_DATE]').val(PERSONNEL_CRETTE_DATE);



 
    $('#edit_profile [name=PERSONNEL_USERNAME]').val(PERSONNEL_USERNAME);
    $('#edit_profile [name=PERSONNEL_PASSWORD]').val(PERSONNEL_PASSWORD);
   


 
    $('#edit_profile').modal('show'); 
   ;
  }, 
  edit_profile(){





    var PERSONNEL_NAME = $('#edit_profile [name=PERSONNEL_NAME]').val()
    var PERSONNEL_SURNAME = $('#edit_profile [name=PERSONNEL_SURNAME]').val()
    var PERSONNEL_NAME_EN = $('#edit_profile [name=PERSONNEL_NAME_EN]').val()
    var PERSONNEL_SURNAME_EN = $('#edit_profile [name=PERSONNEL_SURNAME_EN]').val()
    var PERSONNEL_EMAIL = $('#edit_profile [name=PERSONNEL_EMAIL]').val()
    var PERSONNEL_MOBILE = $('#edit_profile [name=PERSONNEL_MOBILE]').val()
    var PERSONNEL_PHONE = $('#edit_profile [name=PERSONNEL_PHONE]').val()
    var PERSONNEL_PHONE_EXTENSION = $('#edit_profile [name=PERSONNEL_PHONE_EXTENSION]').val()
    var PERSONNEL_SEX = $('#edit_profile [name=PERSONNEL_SEX]:checked').val()
    var PERSONNEL_USERNAME = $('#edit_profile [name=PERSONNEL_USERNAME]').val()
    var PERSONNEL_PASSWORD = $('#edit_profile [name=PERSONNEL_PASSWORD]').val()
 
    var url = window.location.origin+"/index.php/Home/edit_profile";
    // console.log(window.location.origin);
    // return false;
  
    if(PERSONNEL_USERNAME==""){
      $('#edit_profile [name=PERSONNEL_USERNAME]').addClass("red")
      return false;
    }

    if(PERSONNEL_PASSWORD==""){
      $('#edit_profile [name=PERSONNEL_PASSWORD]').addClass("red")
      return false;
    }
    if(PERSONNEL_NAME==""){
      $('#edit_profile [name=PERSONNEL_NAME]').addClass("red")
      return false;
    }
    if(PERSONNEL_SURNAME==""){
      $('#edit_profile [name=PERSONNEL_SURNAME]').addClass("red")
      return false;
    }
    if(PERSONNEL_NAME_EN==""){
      $('#edit_profile [name=PERSONNEL_NAME_EN]').addClass("red")
      return false;
    }

    if(PERSONNEL_SURNAME_EN==""){
      $('#edit_profile [name=PERSONNEL_SURNAME_EN').addClass("red")
      return false;
    }
    if(PERSONNEL_EMAIL==""){
      $('#edit_profile [name=PERSONNEL_EMAIL]').addClass("red")
      return false;
    }
    if(PERSONNEL_PHONE==""){
      $('#edit_profile [name=PERSONNEL_PHONE]').addClass("red")
      return false;
    }
    if(PERSONNEL_MOBILE==""){
      $('#edit_profile [name=PERSONNEL_MOBILE]').addClass("red")
      return false;
    }
    if(PERSONNEL_PHONE_EXTENSION==""){
      $('#edit_profile [name=PERSONNEL_PHONE_EXTENSION]').addClass("red")
      return false;
    }
    //    console.log(PERSONNEL_ID);
    // console.log(PERSONNEL_NAME);
    // console.log(PERSONNEL_SURNAME);
    // console.log(PERSONNEL_NAME_EN);
    // console.log(PERSONNEL_SURNAME_EN);
    // console.log(PERSONNEL_EMAIL);
    // console.log(PERSONNEL_MOBILE);
    // console.log(PERSONNEL_PHONE);
    // return false;

    var data = {
      'PERSONNEL_NAME':PERSONNEL_NAME,
      'PERSONNEL_SURNAME':PERSONNEL_SURNAME,
      'PERSONNEL_NAME_EN':PERSONNEL_NAME_EN,
      'PERSONNEL_SURNAME_EN':PERSONNEL_SURNAME_EN,
      'PERSONNEL_EMAIL':PERSONNEL_EMAIL,
      'PERSONNEL_MOBILE':PERSONNEL_MOBILE,
      'PERSONNEL_PHONE':PERSONNEL_PHONE,
      'PERSONNEL_PHONE_EXTENSION':PERSONNEL_PHONE_EXTENSION,
      'PERSONNEL_SEX':PERSONNEL_SEX,
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
      // console.log(resp);
      // return false;
      if(resp.st == 1){
        alert('บันทึกสำเร็จ')
        location.reload();
      }else{
        alert(resp.ms)
        $('#add_personnels [name='+resp.name+']').addClass("red")
        return false;
      }
    })
  },
  
 
  
  add_service_participants_pic(){
    var PIC_GARRY = $('#add_service_participants_pic [name=ACTIVITY_ID]').val();
    var CREATE_BY_SE = $('#add_service_participants_pic [name=PERSONNEL_ID]').val();
   
  
    var url = window.location.origin+"/index.php/Home/add_activity_participants";
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

  upload_img(){
    var files = $('#files')[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','pdf','csv']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ภาพ"
      }else{
        form_data.append("files[]", files[count]);
      }
    }
    form_data.append('SERVICE_ID', $('[name=SERVICE_ID]').val());
    // console.log(SERVICE_ID);
    // return false
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        if(data.st == 1){
          $('#uploaded_images').html(data.html)
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },
  open_add_service_participants_pic(SERVICE_ID){
    $('[name=SERVICE_ID]').val(SERVICE_ID);
    $.ajax({
      url:window.location.origin+"/index.php/Home/get_img_SERVICE",
      method:"POST",
      dataType : 'JSON',
      data:{'SERVICE_ID':SERVICE_ID},
      cache : false,
      beforeSend:function(){
        $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
      },
    }).done(function(data) {
      if(data.st == 1){
        $('#uploaded_images').html(data.html)
        $('#add_service_participants_pic').modal('show')
      }else{
        $('#uploaded_images').html(data.html)
        $('#add_service_participants_pic').modal('show')
      }
    })

   
  },
  upload_img_profile(){
    var files = $('#files')[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','pdf','csv']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ภาพ"
      }else{
        form_data.append("files[]", files[count]);
      }
    }
    form_data.append('PERSONNEL_ID', $('[name=PERSONNEL_ID]').val());
    // console.log(form_data);
    // return false
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload_profile",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        // console.log(data);
        // return false;
        if(data.st == 1){
          location.reload();
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },


  add_admin_login(){
    var ADMIN_ID = $('#add_admin_login [name=ADMIN_ID] option:selected').val();
    var level = $('#add_admin_login [name=level] option:selected').val();
    // console.log(ADMIN_ID);
    // console.log(PERSONNEL_ID);
    // return false;

    var url = window.location.origin+"/index.php/Home/add_admin_login";
 
    var data = {
      'ADMIN_ID':ADMIN_ID,
      'level':level
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

  ///
  add_researchs(){

        var level = $('#add_researchs [name=level]').val();
        var RESEARCH_TITLE_TH = $('#add_researchs [name=RESEARCH_TITLE_TH]').val();
        var RESEARCH_TITLE_EN = $('#add_researchs [name=RESEARCH_TITLE_EN]').val();
        var RESEARCH_ABSTRACT_TH = $('#add_researchs [name=RESEARCH_ABSTRACT_TH]').val();
        var RESEARCH_ABSTRACT_EN = $('#add_researchs [name=RESEARCH_ABSTRACT_EN]').val();
        var RESEARCH_TYPE  = $('#add_researchs [name=RESEARCH_TYPE]').val();
        var RESEARCH_BUDGETT = $('#add_researchs [name=RESEARCH_BUDGETT]').val();
        var RESEARCH_START_DATE = $('#add_researchs [name=RESEARCH_START_DATE]').val();
        var RESEARCH_END_DATE = $('#add_researchs [name=RESEARCH_END_DATE]').val();

        var RESEARCHER_ID = $('#add_researchs [name=RESEARCHER_ID]').val();
        
        var RESEARCHER_TYPE = $('#add_researchs [name=RESEARCHER_TYPE] option:selected').val();  
        var url = window.location.origin+"/index.php/Home/add_researchs";
      

        var data = {
          'level':level,
          'RESEARCH_TITLE_TH':RESEARCH_TITLE_TH,
          'RESEARCH_TITLE_EN':RESEARCH_TITLE_EN,
          'RESEARCH_ABSTRACT_TH':RESEARCH_ABSTRACT_TH,
          'RESEARCH_ABSTRACT_EN':RESEARCH_ABSTRACT_EN,
          'RESEARCH_TYPE':RESEARCH_TYPE,
          'RESEARCH_BUDGETT':RESEARCH_BUDGETT,
          'RESEARCH_START_DATE':RESEARCH_START_DATE,
          'RESEARCH_END_DATE':RESEARCH_END_DATE,
          'RESEARCHER_ID':RESEARCHER_ID,
          'RESEARCHER_TYPE':RESEARCHER_TYPE
        }

     
     
      
        // console.log(level);
        // console.log(RESEARCH_TITLE_TH);
      
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
  upload_file_researchs(obj){

    // console.log($_F);
    // return false;
    var files = $(obj)[0].files;
    var error = '';
    var form_data = new FormData();
    for(var count = 0; count<files.length; count++){
      var name = files[count].name;
      var extension = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, [  'pdf']) == -1){
        error += "ไฟล์ที่เลือกไม่ใช่ไฟล์ PDF"
      }else{
        form_data.append("files[]", files[count]);

      }
    }

    // form_data.append('RESEARCH_ID', $('[name=RESEARCH_ID]').val());
    form_data.append('RESEARCH_ID', $(obj).attr('data-id-RESEARCH_ID'));

    
    if(error == ''){
      $.ajax({
        url:window.location.origin+"/index.php/Home/upload_file_researchs",
        method:"POST",
        data:form_data,
        contentType:false,
        dataType : 'JSON',
        cache:false,
        processData:false,
        beforeSend:function(){
          $('#uploaded_images').html("<label class='text-succes'>Uploading...</label>");
        },
      }).done(function(data) {
        // console.log(data);
        // return false;
        if(data.st == 1){
          location.reload();
        }else{
          alert('sud')
        }
        
      })
    }else{
      alert(error);
    }
  },
  
  get_edit_researchs(RESEARCH_ID,RESEARCH_TITLE_TH,RESEARCH_TITLE_EN,RESEARCH_ABSTRACT_TH,RESEARCH_ABSTRACT_EN,
    RESEARCH_TYPE,RESEARCH_BUDGETT,RESEARCH_START_DATE,RESEARCH_END_DATE,RESEARCHER_ID,
    RESEARCHER_TYPE){
    // console.log(PERSONNEL_CRETTE_DATE);
    // return false;





    $('#edit_researchs [name=RESEARCH_ID]').val(RESEARCH_ID); 
    $('#edit_researchs [name=RESEARCH_TITLE_TH]').val(RESEARCH_TITLE_TH); 
    $('#edit_researchs [name=RESEARCH_TITLE_EN]').val(RESEARCH_TITLE_EN);
    $('#edit_researchs [name=RESEARCH_ABSTRACT_TH]').val(RESEARCH_ABSTRACT_TH);
    $('#edit_researchs [name=RESEARCH_ABSTRACT_EN]').val(RESEARCH_ABSTRACT_EN);
    $('#edit_researchs [name=RESEARCH_BUDGETT]').val(RESEARCH_BUDGETT);
    $('#edit_researchs [name=RESEARCH_START_DATE]').val(RESEARCH_START_DATE);
    $('#edit_researchs [name=RESEARCH_END_DATE]').val(RESEARCH_END_DATE); 
    // $('#edit_personnels [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    
    // $('input').removeClass('red')
    // if(PERSONNEL_ID==""){
    //   $('#edit_personnels [name=PERSONNEL_ID]').addClass("red")
    //   return false;
    // }
    
    
    $('#edit_researchs [name=RESEARCHER_TYPE] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(RESEARCHER_TYPE === $(value).val()){
        $(value).attr("selected","selected")
      }
    });
    $('#edit_researchs [name=RESEARCHER_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(RESEARCHER_ID === $(value).val()){
        $(value).attr("selected","selected")
       }
    });
    $('#edit_researchs [name=RESEARCH_TYPE] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(RESEARCH_TYPE === $(value).val()){
        $(value).attr("selected","selected")
      }
    });


 
    $('#edit_researchs').modal('show'); 
   ;
  }, 
  edit_researchs(){
    var RESEARCH_ID = $('#edit_researchs [name=RESEARCH_ID]').val()
    var RESEARCH_TITLE_TH = $('#edit_researchs [name=RESEARCH_TITLE_TH]').val();
    var RESEARCH_TITLE_EN = $('#edit_researchs [name=RESEARCH_TITLE_EN]').val();
    var RESEARCH_ABSTRACT_TH = $('#edit_researchs [name=RESEARCH_ABSTRACT_TH]').val();
    var RESEARCH_ABSTRACT_EN = $('#edit_researchs [name=RESEARCH_ABSTRACT_EN]').val()
    var RESEARCH_BUDGETT = $('#edit_researchs [name=RESEARCH_BUDGETT]').val()
    var RESEARCH_START_DATE = $('#edit_researchs [name=RESEARCH_START_DATE]').val()
    var RESEARCH_END_DATE = $('#edit_researchs [name=RESEARCH_END_DATE]').val()
    var RESEARCHER_TYPE = $('#edit_researchs [name=RESEARCHER_TYPE] option:selected').val()
    var RESEARCHER_ID = $('#edit_researchs [name=RESEARCHER_ID]').val()
    var RESEARCH_TYPE = $('#edit_researchs [name=RESEARCH_TYPE] option:selected').val()
  
  

    var url = window.location.origin+"/index.php/Home/edit_researchs";

    
    // console.log(RESEARCH_ID);
    // console.log(RESEARCHER_ID);
    // return false;


    var data = {
      'RESEARCH_ID':RESEARCH_ID,
      'RESEARCH_TITLE_TH':RESEARCH_TITLE_TH,
      'RESEARCH_TITLE_EN':RESEARCH_TITLE_EN,
      'RESEARCH_ABSTRACT_TH':RESEARCH_ABSTRACT_TH,
      'RESEARCH_ABSTRACT_EN':RESEARCH_ABSTRACT_EN,
      'RESEARCH_BUDGETT':RESEARCH_BUDGETT,
      'RESEARCH_START_DATE':RESEARCH_START_DATE,
      'RESEARCH_END_DATE':RESEARCH_END_DATE,
      'RESEARCHER_TYPE':RESEARCHER_TYPE,
      'RESEARCHER_ID':RESEARCHER_ID,
      'RESEARCH_TYPE':RESEARCH_TYPE
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
  delete_researchs(RESEARCH_ID){
    var url = window.location.origin+"/index.php/Home/delete_researchs";
    var data = {
      'RESEARCH_ID':RESEARCH_ID  
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

  get_last_leave_type_onchange(obj){
      var LEAVE_TYPE_ID = $(obj).val(); 
      var url = window.location.origin+"/index.php/Home/getleaves";
      // console.log(LEAVE_TYPE_ID);
    
      // return false;
      var data = {
        'LEAVE_TYPE_ID':LEAVE_TYPE_ID
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
        // console.log(resp);
        console.log(resp);
        
        // console.log(resp.leave_types.LEAVE_TYPE_MAX);
        // return false;
        if(resp.leaves == null){
          $('#add_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.leave_types.LEAVE_TYPE_MAX).val();
          $('#add_leaves [name=LEAVE_TOAL]').val('0').val();
    
          $('#add_leaves [name=detailed_pattern]').val(resp.leave_types.LEAVE_TYPE).val();
       
      
        }else{
          $('#add_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.leave_types.LEAVE_TYPE_MAX).val();
          $('#add_leaves [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL).val();
          // $('#add_leaves [name=LEAVES_NUMBER_USE]').val('resp.leaves.LEAVES_NUMBER_USE').val();
          // $('#add_leaves [name=LEAVES_NUMBER_PLUS]').Number($('[name=LEAVE_TOAL]').val()) + Number($('[name=LEAVES_NUMBER_USE]').val());
          // $('#add_leaves [name=LEAVES_NUMBER_PLUS]').val(Number($('[name=LEAVE_TYPE_MAX_SHOW]').val()) - Number($('[name=LEAVE_TOAL]').val())).val();
          $('#add_leaves [name=detailed_pattern]').val(resp.leave_types.LEAVE_TYPE).val();
          



        }
    
      
          // Number($('[name=LEAVE_TOAL]').val()) + Number($('[name=LEAVES_NUMBER_USE]').val())
       
      })
  },
  
  
  
  get_edit_last_leave_type_onchange(obj){
    var LEAVE_TYPE_ID = $(obj).val(); 
    var url = window.location.origin+"/index.php/Home/getleaves";
    // console.log(LEAVE_TYPE_ID);
  
    // return false;
    var data = {
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID
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
      console.log(resp);
      $("#edit_leaves").on('hidden.bs.modal', function () {
        $(this).data('bs.modal', null);
      });
      if(resp.leaves == null){
        $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.leave_types.LEAVE_TYPE_MAX).val();
        $('#edit_leaves [name=LEAVE_TOAL]').val('0').val();
      
      }else{
        $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.leave_types.LEAVE_TYPE_MAX).val();
        $('#edit_leaves [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL).val();
  
      }
  
    
        // Number($('[name=LEAVE_TOAL]').val()) + Number($('[name=LEAVES_NUMBER_USE]').val())
     
    })
  },
  get_last_leave_type_name(PERSONNEL_ID){
    
   
    // console.log(PERSONNEL_ID);
    // return false;
    // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    var url = window.location.origin+"/index.php/Home/get_last_leave_type_name";
  //
    var data = {
      'PERSONNEL_ID':PERSONNEL_ID
    }
    // console.log(PERSONNEL_ID);
    // return false;
    // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
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
        // console.log(resp);
        // return false
      if(resp.leaves == null){
        $('#add_leaves [name=LAST_LEAVE_TYPE_ID]').val('ยังไม่มีการทำรายการ').val();
        $('#add_leaves [name=LEAVE_TYPE_MAX_SHOW]').val('0').val();
        $('#add_leaves [name=LAST_LEAVE_TOAL]').val('0').val();
        $('#add_leaves [name=LEAVES_NUMBER_SHOW]').val('0').val();
        $('#add_leaves [name=LAST_LEAVE_START_DATE]').val('ยังไม่มีการทำรายการ').val();
        $('#add_leaves [name=LAST_LEAVE_END_DATE]').val('ยังไม่มีการทำรายการ').val()
        $('#add_leaves [name=CONFINED]').each(function(key,value){
          if($(value).val()==1){
            $(value).prop( "checked", true);
          }
        });
        $('#add_leaves [name=HALF_ONE]').each(function(key,value){
          if($(value).val()==1){
            $(value).prop( "checked", true); 
          }
        })


      }else{
        
        // $('#add_leaves [name=LAST_LEAVE_TYPE_ID]').attr(resp.leaves.LEAVE_TYPE_ID).val();
        $('#add_leaves [name=LAST_LEAVE_TYPE_ID]').attr('data-id-leave_type_id',resp.leaves.LEAVE_TYPE_ID).val();
        $('#add_leaves [name=LEAVE_TYPE]').val(resp.leaves.LEAVE_TYPE).val();
        $('#add_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val(resp.leaves.LEAVE_TYPE_MAX).val();
        $('#add_leaves [name=LAST_LEAVE_TOAL]').val(resp.leaves.LEAVE_TOAL).val();
        // $('#add_leaves [name=LAST_LEAVES_NUMBER_SHOW]').val(Number($('[name=LAST_LEAVE_TYPE_MAX_SHOW]').val()) - Number($('[name=LAST_LEAVE_TOAL]').val())).val();
        $('#add_leaves [name=LAST_LEAVE_START_DATE]').val(resp.leaves.LEAVE_START_DATE).val();
        $('#add_leaves [name=LAST_LEAVE_END_DATE]').val(resp.leaves.LEAVE_END_DATE).val();

        $('#add_leaves [name=CONFINED]').each(function(key,value){
          if($(value).val()==1){
            $(value).prop( "checked", true); 
          }
        });
    
        $('#add_leaves [name=HALF_ONE]').each(function(key,value){
          if($(value).val()==1){
            $(value).prop( "checked", true); 
          }
        })

 
        // Number($('[name=LEAVE_TOAL]').val()) + Number($('[name=LEAVES_NUMBER_USE]').val())

      }
  
      // console.log(resp.leaves);
      // return false
      
        // $('#add_leaves [name=LEAVES_NUMBER_USE]').val(resp.leaves.LEAVES_NUMBER_USE).val();
   
  
      $('#add_leaves').modal('show');
      
     
    })
  },

  last_leave_end_date_onchange(obj){
    var LEAVE_START_DATE = ($('#LEAVE_START_DATE').val());
    var LEAVE_END_DATE = ($('#LEAVE_END_DATE').val());
    var LEAVE_HALF_DATE = ($('#LEAVE_HALF_DATE').val());


  



  
      
    var url = window.location.origin+"/index.php/Home/last_leave_end_date_onchange";
  // console.log(FACUALTY_NAME_TH);
  // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    var data = {
      'LEAVE_START_DATE':LEAVE_START_DATE,
      'LEAVE_END_DATE':LEAVE_END_DATE,
      'LEAVE_HALF_DATE':LEAVE_HALF_DATE
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
      // return false;
   
        $('#add_leaves [name=LEAVES_NUMBER_PLUS]').val(resp.intWorkDay).val();
     
 
   
   
    })



  
  },


  last_edit_leave_end_date_onchange(obj){

    var LEAVE_START_DATE = ($('#edit_LEAVE_START_DATE').val());
    var LEAVE_END_DATE = ($('#edit_LEAVE_END_DATE').val());
    var LEAVE_HALF_DATE = ($('#edit_LEAVE_HALF_DATE').val());


    // var startDate = new Date($('#LEAVE_START_DATE').val());
    // var currentDate = new Date($('#LEAVE_END_DATE').val());
    // var days = Math.floor((currentDate - startDate) /(24 * 60 * 60 * 1000));
    // var aDay = 24 * 60 * 60 * 1000, daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;

    // console.log(LEAVE_START_DATE);
    // console.log(LEAVE_END_DATE);
    // return false;
      
    var url = window.location.origin+"/index.php/Home/last_edit_leave_end_date_onchange";
  // console.log(FACUALTY_NAME_TH);
  // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    var data = {
      'LEAVE_START_DATE':LEAVE_START_DATE,
      'LEAVE_END_DATE':LEAVE_END_DATE,
      'LEAVE_HALF_DATE':LEAVE_HALF_DATE
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


      $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(resp.intWorkDay).val();
    })
    // console.log(resp.intWorkDay)
    // return false;
    
  },

  

  get_mangement_positions_onchange(obj){

    var DEPARTMENT_ID = $('option:selected', obj).attr('data-id-department_id');
    // console.log(obj);
    // console.log(DEPARTMENT_ID);
    // return false;


    var url = window.location.origin+"/index.php/Home/get_mangement_positions_onchange";
  // console.log(FACUALTY_NAME_TH);
  // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    var data = {
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
      
      // console.log(resp.departments.DEPARTMENT_ID);
      if(resp.departments == null){
        $('#add_management_positions [name=DEPARTMENT_ID]').val('ไม่มีข้อมูลที่ตรงกัน').val();
     
      }else{
        $('#add_management_positions [name=DEPARTMENT_ID]').attr('data-id-department_id',resp.departments.DEPARTMENT_ID).val();
        $('#add_management_positions [name=DEPARTMENT_ID]').val(resp.departments.DEPARTMENT_NAME_TH).val();
      }
  
    
      
     
    })
  },



  get_leaves_approve(LEAVE_ID,LEAVE_TYPE_ID,WRITE_DATE,LEAVE_START_DATE,LEAVE_END_DATE,MY_CHECK,
    LAST_LEAVE_TYPE_ID,OFFICER,SUPERVISOR_ID,PERSONNEL_ID){

      
      
      var startDate = new Date(LEAVE_START_DATE);
      var currentDate = new Date(LEAVE_END_DATE);
      var days = Math.floor((currentDate - startDate) /(24 * 60 * 60 * 1000));
      var aDay = 24 * 60 * 60 * 1000,
  
      daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;
   
      if(MY_CHECK != 'on' && startDate != '' && currentDate != '' ){
        daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1;
      }else{
        daysDiff = parseInt((currentDate.getTime()-startDate.getTime())/aDay,10)+1-0.5;
      }
      
      

      // console.log(startDate);
      // console.log($('#LEAVE_START_DATE').val());
      // console.log(daysDiff);
      // console.log(MY_CHECK);
      // return false;



    var url = window.location.origin+"/index.php/Home/get_edit_leaves";

    var data = {
      
      'LEAVE_ID':LEAVE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'SUPERVISOR_ID':SUPERVISOR_ID,
      'OFFICER':OFFICER,
      'WRITE_DATE':WRITE_DATE,
      'LAST_LEAVE_TYPE_ID':LAST_LEAVE_TYPE_ID,
      'daysDiff':daysDiff
      
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
        // console.log(resp)
        // console.log(resp.LEAVE_TYPE_ID.MY_CHECK)
        // console.log(resp)
        // return false;
        var HALF_DATE = document.getElementById("HALF_DATE_edit");

        if(resp.LAST_LEAVE_TYPE_ID != ""){
          $("#edit_leaves [name=myCheck_edit]").removeAttr('checked');

          $('#edit_leaves [name=LEAVE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_ID);

          $('#edit_leaves [name=PERSONNEL_ID]').val(resp.LEAVE_TYPE_ID.PERSONNEL_ID);
          $('#edit_leaves [name=WRITE_DATE]').val(resp.LEAVE_TYPE_ID.WRITE_DATE);
          $('#edit_leaves [name=LAST_LEAVE_TYPE_ID]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_ID);
          $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_MAX);
          $('#edit_leaves [name=LAST_LEAVE_TOAL]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_TOAL);
          $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_START_DATE);
          $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val(resp.LAST_LEAVE_TYPE_ID.LAST_LEAVE_END_DATE);
          
  
          $('#edit_leaves [name=LEAVE_TYPE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_ID);
          $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_MAX);
          $('#edit_leaves [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL);
          $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(resp.daysDiff);
          $('#edit_leaves [name=edit_LEAVE_START_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_START_DATE);
          $('#edit_leaves [name=edit_LEAVE_END_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_END_DATE);
          $('#edit_leaves [name=OFFICER]').val(resp.LEAVE_TYPE_ID.OFFICER);
          $('#edit_leaves [name=SUPERVISOR_ID]').val(resp.LEAVE_TYPE_ID.SUPERVISOR_ID);
          $('#edit_leaves [name=WRITE_PLACE]').val(resp.LEAVE_TYPE_ID.WRITE_PLACE);
          $('#edit_leaves [name=edit_LEAVE_HALF_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_HALF_DATE);



          if(resp.LEAVE_TYPE_ID.MY_CHECK === "on"){
           
            $('#edit_leaves [name=myCheck_edit]').prop('checked',true);
            HALF_DATE.style.display = "block";
          }else{

            $('#edit_leaves [name=myCheck_edit]').prop('checked',false);
            HALF_DATE.style.display = "none" ;
          }
        
   
  
          $('#edit_leaves [name=CONFINED]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.CONFINED){
              // console.log($(value).val());
              // console.log(resp.LEAVE_TYPE_ID.CONFINED);
              $(value).prop( "checked", true);
            }
          });
          $('#edit_leaves [name=HALF_ONE]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.HALF_ONE){
              $(value).prop( "checked", true); 
            }
          });
          
        }else{
          $("#edit_leaves [name=myCheck_edit]").removeAttr('checked');
          $('#edit_leaves [name=LEAVE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_ID);
          $('#edit_leaves [name=PERSONNEL_ID]').val(resp.LEAVE_TYPE_ID.PERSONNEL_ID);
          $('#edit_leaves [name=WRITE_DATE]').val(resp.LEAVE_TYPE_ID.WRITE_DATE);
          $('#edit_leaves [name=LAST_LEAVE_TYPE_ID]').val('');
          $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val('0');
          $('#edit_leaves [name=LAST_LEAVE_TOAL]').val('0');
          $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val('ยังไม่ได้ทำรายการ');
          $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val('ยังไม่ได้ทำรายการ');
          
          

          
          $('#edit_leaves [name=LEAVE_TYPE_ID]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_ID);
          $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.LEAVE_TYPE_ID.LEAVE_TYPE_MAX);
          $('#edit_leaves [name=LEAVE_TOAL]').val(resp.NUM_LEAVE_TOAL);
          $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(resp.daysDiff);
          $('#edit_leaves [name=edit_LEAVE_START_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_START_DATE);
          $('#edit_leaves [name=edit_LEAVE_END_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_END_DATE);
          $('#edit_leaves [name=OFFICER]').val(resp.LEAVE_TYPE_ID.OFFICER);
          $('#edit_leaves [name=SUPERVISOR_ID]').val(resp.LEAVE_TYPE_ID.SUPERVISOR_ID);
          $('#edit_leaves [name=WRITE_PLACE]').val(resp.LEAVE_TYPE_ID.WRITE_PLACE);
          $('#edit_leaves [name=edit_LEAVE_HALF_DATE]').val(resp.LEAVE_TYPE_ID.LEAVE_HALF_DATE);

          
       
          if(resp.LEAVE_TYPE_ID.MY_CHECK === "on"){
           
            $('#edit_leaves [name=myCheck_edit]').prop('checked',true);
            HALF_DATE.style.display = "block";
          }else{
            
            $('#edit_leaves [name=myCheck_edit]').prop('checked',false);
            HALF_DATE.style.display = "none" ;
          }
        

  
          $('#edit_leaves [name=CONFINED]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.CONFINED){
              $(value).prop( "checked", true);
            }
          });
          $('#edit_leaves [name=HALF_ONE]').each(function(key,value){
            if($(value).val()==resp.LEAVE_TYPE_ID.HALF_ONE){
              $(value).prop( "checked", true); 
            }
          });
        }

        $('#edit_leaves').modal('show'); 
    })
    

 
    // $('#edit_leaves').modal('show'); 
   ;
  }, 

//   get_leaves_approve(LEAVE_ID,PERSONNEL_ID){
      
 
//   // console.log(obj);
//   // console.log(DEPARTMENT_ID);
//   // return false;


//   var url = window.location.origin+"/index.php/Home/get_leaves_approve";
// // console.log(FACUALTY_NAME_TH);
// // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
//   var data = {
//     'LEAVE_ID':LEAVE_ID,
//     'PERSONNEL_ID':PERSONNEL_ID
//   }
//   $.ajax({
//     url : url,
//     method : 'POST',
//     dataType : 'JSON',
//     data:data,
//     cache : false,
//     beforeSend: function(jqXHR, settings) {
//       delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
//     },
//   }).done(function(resp) {
//     console.log(resp);
//     $("#edit_leaves").on('hidden.bs.modal', function () {
//       $(this).data('bs.modal', null);
//     });

//     if(resp.leaves_LAST_LEAVE_TYPE_ID != null){
//       $('#edit_leaves [name=LEAVE_ID]').val(resp.leaves_LAST_LEAVE_TYPE_ID.LEAVE_ID).val();
//       $('#edit_leaves [name=PERSONNEL_ID]').val(resp.leaves_LAST_LEAVE_TYPE_ID.PERSONNEL_ID).val();
//       $('#edit_leaves [name=WRITE_DATE]').val(resp.leaves_LAST_LEAVE_TYPE_ID.WRITE_DATE).val();
      
//       $('#edit_leaves [name=LAST_LEAVE_TYPE_ID] option').each(function(key,value){
//         $(value).removeAttr('selected');
//         if(resp.leaves_LAST_LEAVE_TYPE_ID.LAST_LEAVE_TYPE_ID === $(value).val()){
//           $(value).attr("selected","selected")
//         }
//       });
//       $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val(resp.leaves_LAST_LEAVE_TYPE_ID.LEAVE_TYPE_MAX).val();
//       $('#edit_leaves [name=LAST_LEAVE_TOAL]').val(resp.leaves_LAST_LEAVE_TYPE_ID.LAST_LEAVE_TOAL).val();
//       $('#edit_leaves [name=LAST_LEAVES_NUMBER_SHOW]').val(Number($('[name=LAST_LEAVE_TYPE_MAX_SHOW]').val()) - Number($('[name=LAST_LEAVE_TOAL]').val())).val();
//       $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val(resp.leaves_LAST_LEAVE_TYPE_ID.LAST_LEAVE_START_DATE).val();
//       $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val(resp.leaves_LAST_LEAVE_TYPE_ID.LAST_LEAVE_END_DATE).val();
      
      
//       $('#edit_leaves [name=LEAVE_TYPE_ID] option').each(function(key,value){
//         $(value).removeAttr('selected');
//         if(resp.leaves_LEAVE_TYPE_ID.LEAVE_TYPE_ID === $(value).val()){
//           $(value).attr("selected","selected")
//         }
//       });
//       $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_TYPE_MAX).val();
//       $('#edit_leaves [name=LEAVE_TOAL]').val(resp.leaves_LEAVE_TYPE_ID.LEAVES_NUMBER_USE).val();
//       $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(Number($('[name=LEAVE_TYPE_MAX_SHOW]').val()) - Number($('[name=LEAVE_TOAL]').val())).val();
//       $('#edit_leaves [name=LEAVE_START_DATE]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_START_DATE).val();
//       $('#edit_leaves [name=LEAVE_END_DATE]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_END_DATE).val();
//       $('#edit_leaves [name=WRITE_PLACE]').val(resp.leaves_LEAVE_TYPE_ID.WRITE_PLACE).val();
      
//       $('#edit_leaves').modal('show');
      
//     }else{
//       $('#edit_leaves [name=LEAVE_ID]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_ID).val();
//       $('#edit_leaves [name=PERSONNEL_ID]').val(resp.leaves_LEAVE_TYPE_ID.PERSONNEL_ID).val();
//       $('#edit_leaves [name=WRITE_DATE]').val(resp.leaves_LEAVE_TYPE_ID.WRITE_DATE).val();
//       $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val('ยังไม่มีการทำรายการ').val();
//       $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val('ยังไม่มีการทำรายการ').val();
      
      
//       $('#edit_leaves [name=LEAVE_TYPE_ID] option').each(function(key,value){
//         $(value).removeAttr('selected');
//         if(resp.leaves_LEAVE_TYPE_ID.LEAVE_TYPE_ID === $(value).val()){
//           $(value).attr("selected","selected")
//         }
//       });
//       $('#edit_leaves [name=LEAVE_TYPE_MAX_SHOW]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_TYPE_MAX).val();
//       $('#edit_leaves [name=LEAVE_TOAL]').val(resp.leaves_LEAVE_TYPE_ID.LEAVES_NUMBER_USE).val();
//       $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val(Number($('[name=LEAVE_TYPE_MAX_SHOW]').val()) - Number($('[name=LEAVE_TOAL]').val())).val();
//       $('#edit_leaves [name=LEAVE_START_DATE]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_START_DATE).val();
//       $('#edit_leaves [name=LEAVE_END_DATE]').val(resp.leaves_LEAVE_TYPE_ID.LEAVE_END_DATE).val();
//       $('#edit_leaves [name=WRITE_PLACE]').val(resp.leaves_LEAVE_TYPE_ID.WRITE_PLACE).val();
   
//       $('#edit_leaves').modal('show');
//     }

//   })
  
//   },
 


  add_edit_leaves_approve(){


    var LEAVE_ID = $('#edit_leaves [name=LEAVE_ID]').val()
    var PERSONNEL_ID = $('#edit_leaves [name=PERSONNEL_ID]').val()
    var WRITE_DATE = $('#edit_leaves [name=WRITE_DATE]').val()
    var LAST_LEAVE_TYPE_ID = $('#edit_leaves [name=LAST_LEAVE_TYPE_ID]').val()
    var LAST_LEAVE_TYPE_MAX = $('#edit_leaves [name=LAST_LEAVE_TYPE_MAX_SHOW]').val()
    var LAST_LEAVE_TOAL = $('#edit_leaves [name=LAST_LEAVE_TOAL]').val()
    var LAST_LEAVE_START_DATE = $('#edit_leaves [name=LAST_LEAVE_START_DATE]').val()
    var LAST_LEAVE_END_DATE = $('#edit_leaves [name=LAST_LEAVE_END_DATE]').val()
    var LEAVE_TYPE_ID = $('#edit_leaves [name=LEAVE_TYPE_ID] option:selected').val()
    var LEAVE_TOAL = $('#edit_leaves [name=LEAVES_NUMBER_PLUS]').val()
    var edit_LEAVE_START_DATE = $('#edit_leaves [name=edit_LEAVE_START_DATE]').val()
    var edit_LEAVE_END_DATE = $('#edit_leaves [name=edit_LEAVE_END_DATE]').val()
    var OFFICER = $('#edit_leaves [name=OFFICER] option:selected').val()
    var SUPERVISOR_ID = $('#edit_leaves [name=SUPERVISOR_ID] option:selected').val()
    var WRITE_PLACE = $('#edit_leaves [name=WRITE_PLACE]').val()


    
    var myCheck_edit = $('#edit_leaves [name=myCheck_edit]:checked').val()
    var edit_LEAVE_HALF_DATE = $('#edit_leaves [name=edit_LEAVE_HALF_DATE]').val()
    var HALF_ONE = $('#edit_leaves [name=HALF_ONE]:checked').val()
  
    if(myCheck_edit === undefined){
      var myCheck_edit = (null == undefined);
    }
    


      // console.log(LEAVE_ID);
      // console.log(PERSONNEL_ID);
      // console.log(WRITE_DATE);

      // console.log(LAST_LEAVE_TYPE_ID);
      // console.log(LAST_LEAVE_TYPE_MAX);
      // console.log(LAST_LEAVE_TOAL);
      // console.log(LAST_LEAVE_START_DATE);
      // console.log(LAST_LEAVE_END_DATE);
      // console.log(LEAVE_TYPE_ID);
      // console.log(LEAVE_TOAL);

      // console.log(edit_LEAVE_START_DATE);
      // console.log(edit_LEAVE_END_DATE);
      // console.log(OFFICER);
      // console.log(SUPERVISOR_ID);
      // console.log(WRITE_PLACE);
     
      // console.log(myCheck_edit);
      // console.log(edit_LEAVE_HALF_DATE);
      // console.log(HALF_ONE);
      // return false;



    var url = window.location.origin+"/index.php/Home/add_edit_leaves_approve";

      

  
    var data = {
    
      'LEAVE_ID':LEAVE_ID,
      'PERSONNEL_ID':PERSONNEL_ID,
      'WRITE_DATE':WRITE_DATE,
      'LAST_LEAVE_TYPE_ID':LAST_LEAVE_TYPE_ID,
      'LAST_LEAVE_TYPE_MAX':LAST_LEAVE_TYPE_MAX,
      'LAST_LEAVE_TOAL':LAST_LEAVE_TOAL,
      'LAST_LEAVE_START_DATE':LAST_LEAVE_START_DATE,
      'LAST_LEAVE_END_DATE':LAST_LEAVE_END_DATE,
      'LEAVE_TYPE_ID':LEAVE_TYPE_ID,
      'LEAVE_TOAL':LEAVE_TOAL,
      'edit_LEAVE_START_DATE':edit_LEAVE_START_DATE,
      'edit_LEAVE_END_DATE':edit_LEAVE_END_DATE,
      

      'OFFICER':OFFICER,
      'SUPERVISOR_ID':SUPERVISOR_ID,
      'WRITE_PLACE':WRITE_PLACE,
     
      'myCheck_edit':myCheck_edit,
      'edit_LEAVE_HALF_DATE':edit_LEAVE_HALF_DATE,
      'HALF_ONE':HALF_ONE
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

  
  add_edit_leaves_approve_supervisor(){
      
    var LEAVE_ID = $('#edit_leaves [name=LEAVE_ID]').val()
    var SUPERVISOR_OPINION = $('#edit_leaves [name=SUPERVISOR_OPINION]').val()
    var SUPERVISOR_STATUS = $('#edit_leaves [name=SUPERVISOR_STATUS]:checked').val()

    
    // console.log(LEAVE_ID);
    // console.log(SUPERVISOR_OPINION);
    // console.log(SUPERVISOR_STATUS);
    // return false;
  
  
    var url = window.location.origin+"/index.php/Home/add_edit_leaves_approve_supervisor";
  // console.log(FACUALTY_NAME_TH);
  // console.log(FACUALTY_NAME_EN); ไว้เรีบกดู
    var data = {
      'LEAVE_ID':LEAVE_ID,
      'SUPERVISOR_OPINION':SUPERVISOR_OPINION,
      'SUPERVISOR_STATUS':SUPERVISOR_STATUS
    }
    $.ajax({
      url : url,
      method : 'POST',
      dataType : 'JSON',
      data:data,
      cache : false,
      beforeSend: function(jqXHR, settings) {
        delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
        // console.log(data);
        // return false;
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
    

  check_login_student(){
    var ADMIN_USER = $('[name=ADMIN_USER]').val(); 
    var ADMIN_PASS = $('[name=ADMIN_PASS]').val();
    var level = $('[name=level]').val();
  
    var url = window.location.origin+"/index.php/Home/check_login_student";
    // console.log(ADMIN_USER);
    // console.log(ADMIN_PASS);
    // console.log(level);
    // return false;
    var data = {
      'ADMIN_USER':ADMIN_USER,
      'ADMIN_PASS':ADMIN_PASS,
      'level':level
    }
      // console.log(data);
      //    return false;
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
      // console.log(resp);
      // return false;
      if(resp.st == 1){
        window.location.href = location.origin+"/index.php/Home/profile_student"
      }else{
       
        alert(resp.msg);
      }
    })
  },


  ///profile_student
  show_individual_counseling_service(INDIVIDUAL_COUNSELING_ID,ADVISOR_ID,STUDENT_ID,COUNSELING_TYPE_ID,COUNSELING_PROBLEM,
    COUNSELING_DETAIL,COUNSELING_SOLVE,COUNSELING_RESULT,COUNSELING_CREATE_DATE,COUNSELING_DATE_START,COUNSELING_DATE_END,
    STUDEN_DATE_START,STUDEN_DATE_END,CONTACT,STUDEN_DATE_CONF_START,DETAIL_NOT,INDIVIDUAL_COUNSELING_STATUS){



    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    // console.log(STUDEN_DATE_END);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);

    // return false;
     
    $('#show_individual_counseling_service_show [name=STUDENT_ID]').val(STUDENT_ID); 

    $('#show_individual_counseling_service_show [name=INDIVIDUAL_COUNSELING_ID]').val(INDIVIDUAL_COUNSELING_ID); 
    $('#show_individual_counseling_service_show [name=COUNSELING_CREATE_DATE]').val(COUNSELING_CREATE_DATE)
    $('#show_individual_counseling_service_show [name=STUDEN_DATE_START]').val(STUDEN_DATE_START)
    $('#show_individual_counseling_service_show [name=STUDEN_DATE_END]').val(STUDEN_DATE_END)
    $('#show_individual_counseling_service_show [name=COUNSELING_PROBLEM]').val(COUNSELING_PROBLEM)
    $('#show_individual_counseling_service_show [name=CONTACT]').val(CONTACT)
    
    $('#show_individual_counseling_service_show [name=COUNSELING_DETAIL]').val(COUNSELING_DETAIL)
    $('#show_individual_counseling_service_show [name=COUNSELING_SOLVE]').val(COUNSELING_SOLVE)
    $('#show_individual_counseling_service_show [name=COUNSELING_RESULT]').val(COUNSELING_RESULT)

    
    $('#show_individual_counseling_service_show [name=DETAIL_NOT]').val(DETAIL_NOT)
    $('#show_individual_counseling_service_show [name=STUDEN_DATE_CONF_START]').val(STUDEN_DATE_CONF_START)
    // $('#edit_profile [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#show_individual_counseling_service_show [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(COUNSELING_TYPE_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });
    $('#show_individual_counseling_service_show [name=ADVISOR_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(ADVISOR_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });

   
    

 
    $('#show_individual_counseling_service_show').modal('show'); 
   ;
  }, 


  ///individual_counseling_services_status
  show_individual_counseling_service_status(INDIVIDUAL_COUNSELING_ID,ADVISOR_ID,STUDENT_ID,COUNSELING_TYPE_ID,COUNSELING_PROBLEM,
    COUNSELING_DETAIL,COUNSELING_SOLVE,COUNSELING_RESULT,COUNSELING_CREATE_DATE,COUNSELING_DATE_START,COUNSELING_DATE_END,
    STUDEN_DATE_START,STUDEN_DATE_END,CONTACT,INDIVIDUAL_COUNSELING_STATUS){



    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    // console.log(STUDEN_DATE_END);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);

    // return false;


    $('#show_individual_counseling_service [name=INDIVIDUAL_COUNSELING_ID]').val(INDIVIDUAL_COUNSELING_ID); 
    $('#show_individual_counseling_service [name=COUNSELING_CREATE_DATE]').val(COUNSELING_CREATE_DATE)
    $('#show_individual_counseling_service [name=STUDEN_DATE_START]').val(STUDEN_DATE_START)
    $('#show_individual_counseling_service [name=STUDEN_DATE_END]').val(STUDEN_DATE_END)
    $('#show_individual_counseling_service [name=COUNSELING_PROBLEM]').val(COUNSELING_PROBLEM)
    $('#show_individual_counseling_service [name=CONTACT]').val(CONTACT)
    $('#show_individual_counseling_service [name=COUNSELING_DATE_START]').val(COUNSELING_DATE_START)
    $('#show_individual_counseling_service [name=COUNSELING_DATE_END]').val(COUNSELING_DATE_END)
    // $('#edit_profile [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#show_individual_counseling_service [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(COUNSELING_TYPE_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });
    $('#show_individual_counseling_service [name=ADVISOR_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(ADVISOR_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });

   
    

 
    $('#show_individual_counseling_service').modal('show'); 
   ;
  },

  edit_status_individual_counseling_services(){


    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);

    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);

    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);

    // console.log(STUDEN_DATE_END);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);

     

    var INDIVIDUAL_COUNSELING_ID = $('#show_individual_counseling_service [name=INDIVIDUAL_COUNSELING_ID]').val()
    var ADVISOR_ID = $('#show_individual_counseling_service [name=ADVISOR_ID] option:selected').val();
    var STUDENT_ID = $('#show_individual_counseling_service [name=STUDENT_ID]').val()
    var COUNSELING_TYPE_ID = $('#show_individual_counseling_service [name=COUNSELING_TYPE_ID] option:selected').val();

  
    var COUNSELING_PROBLEM = $('#show_individual_counseling_service [name=COUNSELING_PROBLEM]').val()
    var COUNSELING_DETAIL = $('#show_individual_counseling_service [name=COUNSELING_DETAIL]').val()

    var COUNSELING_CREATE_DATE = $('#show_individual_counseling_service [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_DATE_START = $('#show_individual_counseling_service [name=COUNSELING_DATE_START]').val();
    var COUNSELING_DATE_END = $('#show_individual_counseling_service [name=COUNSELING_DATE_END]').val()

    var STUDEN_DATE_START = $('#show_individual_counseling_service [name=STUDEN_DATE_START]').val();
    var STUDEN_DATE_END = $('#show_individual_counseling_service [name=STUDEN_DATE_END]').val()
    var CONTACT = $('#show_individual_counseling_service [name=CONTACT]').val()

    var url = window.location.origin+"/index.php/Home/edit_status_individual_counseling_services";



    $('input').removeClass('red')
    if(COUNSELING_DATE_START==""){
      $('#show_individual_counseling_service [name=COUNSELING_DATE_START').addClass('red')
      return false;
    } 
    if(COUNSELING_DATE_END==""){
      $('#show_individual_counseling_service [name=COUNSELING_DATE_END').addClass('red')
      return false;
    } 
    if(COUNSELING_DETAIL==""){
      $('#show_individual_counseling_service [name=COUNSELING_DETAIL').addClass('red')
      return false;
    } 
    
      
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_CREATE_DATE);

    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    // console.log(COUNSELING_CREATE_DATE);
    // return false

   
    var data = {
      
      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID,
      'ADVISOR_ID':ADVISOR_ID,
      'STUDENT_ID':STUDENT_ID,
      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID,
      'COUNSELING_PROBLEM':COUNSELING_PROBLEM,
      'COUNSELING_DETAIL':COUNSELING_DETAIL,
      'COUNSELING_CREATE_DATE':COUNSELING_CREATE_DATE,

      'COUNSELING_DATE_START':COUNSELING_DATE_START,
      'COUNSELING_DATE_END':COUNSELING_DATE_END,
      'STUDEN_DATE_START':STUDEN_DATE_START,
      'STUDEN_DATE_END':STUDEN_DATE_END,
      'CONTACT':CONTACT
      
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



  conf_individual_counseling_service_studen(INDIVIDUAL_COUNSELING_ID,ADVISOR_ID,STUDENT_ID,COUNSELING_TYPE_ID,COUNSELING_PROBLEM,
    COUNSELING_DETAIL,COUNSELING_SOLVE,COUNSELING_RESULT,COUNSELING_CREATE_DATE,COUNSELING_DATE_START,COUNSELING_DATE_END,
    STUDEN_DATE_START,STUDEN_DATE_END,CONTACT,INDIVIDUAL_COUNSELING_STATUS,STUDEN_DATE_CONF_START,STUDEN_DATE_CONF_END,){

      
      
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    // console.log(STUDEN_DATE_CONF_END);
    // console.log(COUNSELING_TYPE_ID);

    // return false;
     

    $('#conf_individual_counseling_service_studen [name=INDIVIDUAL_COUNSELING_ID]').val(INDIVIDUAL_COUNSELING_ID); 
    $('#conf_individual_counseling_service_studen [name=COUNSELING_CREATE_DATE]').val(COUNSELING_CREATE_DATE)
    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_START]').val(STUDEN_DATE_START)
    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_END]').val(STUDEN_DATE_END)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_PROBLEM]').val(COUNSELING_PROBLEM)
    $('#conf_individual_counseling_service_studen [name=CONTACT]').val(CONTACT)
    
    $('#conf_individual_counseling_service_studen [name=COUNSELING_DETAIL]').val(COUNSELING_DETAIL)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_SOLVE]').val(COUNSELING_SOLVE)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_RESULT]').val(COUNSELING_RESULT)
     
    $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_START]').val(COUNSELING_DATE_START)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_END]').val(COUNSELING_DATE_END)

    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_CONF_START]').val(STUDEN_DATE_CONF_START)
    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_CONF_END]').val(STUDEN_DATE_CONF_END)
    
    
    // $('#edit_profile [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#conf_individual_counseling_service_studen [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(COUNSELING_TYPE_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });
    $('#conf_individual_counseling_service_studen [name=ADVISOR_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(ADVISOR_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });

   
    

 
    $('#conf_individual_counseling_service_studen').modal('show'); 
   ;
  }, 
  update_conf_individual_counseling_service_studen(){



     

    
    var INDIVIDUAL_COUNSELING_ID = $('#conf_individual_counseling_service_studen [name=INDIVIDUAL_COUNSELING_ID]').val()
    var ADVISOR_ID = $('#conf_individual_counseling_service_studen [name=ADVISOR_ID] option:selected').val();
    var STUDENT_ID = $('#conf_individual_counseling_service_studen [name=STUDENT_ID]').val()
    var COUNSELING_TYPE_ID = $('#conf_individual_counseling_service_studen [name=COUNSELING_TYPE_ID] option:selected').val();


    var INDIVIDUAL_COUNSELING_STATUS = $('#conf_individual_counseling_service_studen [name=INDIVIDUAL_COUNSELING_STATUS]:checked').val()
    

    var DETAIL_NOT = $('#conf_individual_counseling_service_studen [name=DETAIL_NOT]').val()




    var COUNSELING_CREATE_DATE = $('#conf_individual_counseling_service_studen [name=COUNSELING_CREATE_DATE]').val()
    var COUNSELING_DATE_START = $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_START]').val();
    var COUNSELING_DATE_END = $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_END]').val()

    var STUDEN_DATE_START = $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_START]').val();
    var STUDEN_DATE_END = $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_END]').val()

    var STUDEN_DATE_CONF_START = $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_CONF_START]').val();
    var STUDEN_DATE_CONF_END = $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_END]').val()
    
    var url = window.location.origin+"/index.php/Home/update_conf_individual_counseling_service_studen";

    
    
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);
    // console.log(DETAIL_NOT);

    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    
    // console.log(STUDEN_DATE_END);
    // console.log(STUDEN_DATE_CONF_START);
    // console.log(STUDEN_DATE_CONF_END);
 

  
    // return false;
    // $('input').removeClass('red')
    // if(COUNSELING_DATE_START==""){
    //   $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_START').addClass('red')
      // return false;
    // } 

    
      
 

   
    var data = {
      
      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID,
      'ADVISOR_ID':ADVISOR_ID,
      'STUDENT_ID':STUDENT_ID,

      'COUNSELING_TYPE_ID':COUNSELING_TYPE_ID,
      'INDIVIDUAL_COUNSELING_STATUS':INDIVIDUAL_COUNSELING_STATUS,
      'DETAIL_NOT':DETAIL_NOT,

      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID,
      'ADVISOR_ID':ADVISOR_ID,
      'STUDENT_ID':STUDENT_ID,

      'COUNSELING_CREATE_DATE':COUNSELING_CREATE_DATE,
      'COUNSELING_DATE_START':COUNSELING_DATE_START,
      'COUNSELING_DATE_END':COUNSELING_DATE_END,
  
      'STUDEN_DATE_START':STUDEN_DATE_START,
      'STUDEN_DATE_END':STUDEN_DATE_END,
      'STUDEN_DATE_CONF_START':STUDEN_DATE_CONF_START,
      'STUDEN_DATE_CONF_END':STUDEN_DATE_CONF_END
      
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
  
  


  conf_teacher_individual_counseling_service_studen(INDIVIDUAL_COUNSELING_ID,ADVISOR_ID,STUDENT_ID,COUNSELING_TYPE_ID,COUNSELING_PROBLEM,
    COUNSELING_DETAIL,COUNSELING_SOLVE,COUNSELING_RESULT,COUNSELING_CREATE_DATE,COUNSELING_DATE_START,COUNSELING_DATE_END,
    STUDEN_DATE_START,STUDEN_DATE_END,CONTACT,INDIVIDUAL_COUNSELING_STATUS,STUDEN_DATE_CONF_START,STUDEN_DATE_CONF_END){

      
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    // console.log(STUDEN_DATE_CONF_END);
    // console.log(COUNSELING_TYPE_ID);

    // return false;
     

    $('#conf_individual_counseling_service_studen [name=INDIVIDUAL_COUNSELING_ID]').val(INDIVIDUAL_COUNSELING_ID); 
    $('#conf_individual_counseling_service_studen [name=COUNSELING_CREATE_DATE]').val(COUNSELING_CREATE_DATE)
    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_START]').val(STUDEN_DATE_START)
    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_END]').val(STUDEN_DATE_END)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_PROBLEM]').val(COUNSELING_PROBLEM)
    $('#conf_individual_counseling_service_studen [name=CONTACT]').val(CONTACT)
    
    $('#conf_individual_counseling_service_studen [name=COUNSELING_DETAIL]').val(COUNSELING_DETAIL)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_SOLVE]').val(COUNSELING_SOLVE)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_RESULT]').val(COUNSELING_RESULT)
     

    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_CONF_START]').val(STUDEN_DATE_CONF_START)
    $('#conf_individual_counseling_service_studen [name=STUDEN_DATE_CONF_END]').val(STUDEN_DATE_CONF_END)
    

    
    $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_START]').val(COUNSELING_DATE_START)
    $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_END]').val(COUNSELING_DATE_END)
    
    // $('#edit_profile [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#conf_individual_counseling_service_studen [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(COUNSELING_TYPE_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });
    $('#conf_individual_counseling_service_studen [name=ADVISOR_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(ADVISOR_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });

   
    

 
    $('#conf_individual_counseling_service_studen').modal('show'); 
   ;
  }, 
  

  update_conf_teacher_individual_counseling_service_studen(){

    var INDIVIDUAL_COUNSELING_ID = $('#conf_individual_counseling_service_studen [name=INDIVIDUAL_COUNSELING_ID]').val()

    var INDIVIDUAL_COUNSELING_STATUS = $('#conf_individual_counseling_service_studen [name=INDIVIDUAL_COUNSELING_STATUS]:checked').val()
  
    var url = window.location.origin+"/index.php/Home/update_conf_teacher_individual_counseling_service_studen";

    
    
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);
    // console.log(DETAIL_NOT);

    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    
    // console.log(STUDEN_DATE_END);
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);
 

  
    // return false;
    // $('input').removeClass('red')
    // if(COUNSELING_DATE_START==""){
    //   $('#conf_individual_counseling_service_studen [name=COUNSELING_DATE_START').addClass('red')
      // return false;
    // } 

    
      
 

   
    var data = {
      
     
      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID,
      'INDIVIDUAL_COUNSELING_STATUS':INDIVIDUAL_COUNSELING_STATUS
      
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


  get_conseling_result_st(INDIVIDUAL_COUNSELING_ID,ADVISOR_ID,STUDENT_ID,COUNSELING_TYPE_ID,COUNSELING_PROBLEM,
    COUNSELING_DETAIL,COUNSELING_SOLVE,COUNSELING_RESULT,COUNSELING_CREATE_DATE,COUNSELING_DATE_START,COUNSELING_DATE_END,
    STUDEN_DATE_START,STUDEN_DATE_END,CONTACT,INDIVIDUAL_COUNSELING_STATUS,STUDEN_DATE_CONF_START,STUDEN_DATE_CONF_END){

      
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(COUNSELING_PROBLEM);
    // console.log(COUNSELING_DETAIL);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
   
    // console.log(COUNSELING_TYPE_ID);

    // return false;
     

    $('#individual_counseling_filnel [name=INDIVIDUAL_COUNSELING_ID]').val(INDIVIDUAL_COUNSELING_ID); 
    $('#individual_counseling_filnel [name=COUNSELING_CREATE_DATE]').val(COUNSELING_CREATE_DATE)
    $('#individual_counseling_filnel [name=STUDEN_DATE_START]').val(STUDEN_DATE_START)
    $('#individual_counseling_filnel [name=STUDEN_DATE_END]').val(STUDEN_DATE_END)
    $('#individual_counseling_filnel [name=COUNSELING_PROBLEM]').val(COUNSELING_PROBLEM)
    $('#individual_counseling_filnel [name=CONTACT]').val(CONTACT)
    
    $('#individual_counseling_filnel [name=COUNSELING_DETAIL]').val(COUNSELING_DETAIL)
    $('#individual_counseling_filnel [name=COUNSELING_SOLVE]').val(COUNSELING_SOLVE)
    $('#individual_counseling_filnel [name=COUNSELING_RESULT]').val(COUNSELING_RESULT)
     

    $('#individual_counseling_filnel [name=STUDEN_DATE_CONF_START]').val(STUDEN_DATE_CONF_START)
    $('#individual_counseling_filnel [name=STUDEN_DATE_CONF_END]').val(STUDEN_DATE_CONF_END)
    
    
    
    $('#individual_counseling_filnel [name=COUNSELING_DATE_START]').val(COUNSELING_DATE_START)
    $('#individual_counseling_filnel [name=COUNSELING_DATE_END]').val(COUNSELING_DATE_END)
    $('#individual_counseling_filnel [name=STUDEN_DATE_CONF_START]').val(STUDEN_DATE_CONF_START)

    
    // $('#edit_profile [name=PERSONNEL_SEX]').val(PERSONNEL_SEX);
    $('#individual_counseling_filnel [name=COUNSELING_TYPE_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(COUNSELING_TYPE_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });
    $('#individual_counseling_filnel [name=ADVISOR_ID] option').each(function(key,value){
      $(value).removeAttr('selected');
      if(ADVISOR_ID === $(value).val()){
      $(value).attr("selected","selected")
    }
    });

   
    

 
    $('#individual_counseling_filnel').modal('show'); 
   ;
  }, 

  update_individual_counseling_filnel(){

    var INDIVIDUAL_COUNSELING_ID = $('#individual_counseling_filnel [name=INDIVIDUAL_COUNSELING_ID]').val()
    var COUNSELING_SOLVE = $('#individual_counseling_filnel [name=COUNSELING_SOLVE]').val()
    var COUNSELING_RESULT = $('#individual_counseling_filnel [name=COUNSELING_RESULT]').val()
    var url = window.location.origin+"/index.php/Home/update_individual_counseling_filnel";

    
    
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(ADVISOR_ID);
    // console.log(STUDENT_ID);
    // console.log(COUNSELING_TYPE_ID);
    // console.log(INDIVIDUAL_COUNSELING_STATUS);
    // console.log(DETAIL_NOT);

    // console.log(COUNSELING_CREATE_DATE);
    // console.log(COUNSELING_DATE_START);
    // console.log(COUNSELING_DATE_END);
    // console.log(STUDEN_DATE_START);
    
    // console.log(INDIVIDUAL_COUNSELING_ID);
    // console.log(COUNSELING_SOLVE);
    // console.log(COUNSELING_RESULT);
 

  
    // return false;


    $('input').removeClass('red')
    if(COUNSELING_SOLVE==""){
      $('#individual_counseling_filnel [name=COUNSELING_SOLVE').addClass('red')
      return false;
    } 
    if(COUNSELING_RESULT==""){
      $('#individual_counseling_filnel [name=COUNSELING_RESULT').addClass('red')
      return false;
    } 

    
      
 

   
    var data = {
      
     
      'INDIVIDUAL_COUNSELING_ID':INDIVIDUAL_COUNSELING_ID,
      'COUNSELING_SOLVE':COUNSELING_SOLVE,
      'COUNSELING_RESULT':COUNSELING_RESULT
      
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
  
  

 

  

}


