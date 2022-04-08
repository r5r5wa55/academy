<div class="modal  fade" id="add_academics" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล ตารางวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="ACADEMIC_NAME" placeholder="ชื่ออาจารย์">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_academics();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_academics" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล ตารางวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="ACADEMIC_NAME" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="ACADEMIC_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_academics();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_academics" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล ตารางวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="ACADEMIC_NAME" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="ACADEMIC_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_academics();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_activity_categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล กิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่อกิจกรรม</label>
          <input type="text" class="form-control"  name="ACTIVITY_CATEGORY_NAME" placeholder="กิจกรรม">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_activity_categories();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_activity_categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล activity_categories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="ACTIVITY_CATEGORY_NAME" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="ACTIVITY_CATEGORY_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_activity_categories();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_activity_types" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล activity_types</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="ACTIVITY_TYPE_NAME" placeholder="ชื่ออาจารย์">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_activity_types();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_activity_types" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล activity_types</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="ACTIVITY_TYPE_NAME" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="ACTIVITY_TYPE_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_activity_types();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_leave_types" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล leave_types</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">leave_types</label>
          <input type="text" class="form-control m-2 p-2" name="LEAVE_TYPE" placeholder="ชื่อคณะ">
          <input type="text" class="form-control m-2 p-2" name="LEAVE_TYPE_MAX" placeholder="ชื่อคณะภาษาอังกฤษ">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_leave_types();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_leave_types" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล leave_types</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">leave_types</label>
          <input type="text" class="form-control"  name="LEAVE_TYPE" placeholder="ชื่อคณะ">
          <input type="text" class="form-control"  name="LEAVE_TYPE_MAX" placeholder="จำนวนการลา">
          
          <input type="hidden"   name="LEAVE_TYPE_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_leave_types();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_managements" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล managements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">managements</label>
          <input type="text" class="form-control"  name="MANAGEMENT_NAME" placeholder="ชื่ออาจารย์">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_managements();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_managements" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล managements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">managements</label>
          <input type="text" class="form-control"  name="MANAGEMENT_NAME" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="MANAGEMENT_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_managements();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_personnel_categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล สายงาน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">สายงาน</label>
          <input type="text" class="form-control"  name="PERSONNEL_CATEGORY_DETAIL" placeholder="สายงาน">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_personnel_categories();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_personnel_categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล สายงาน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">สายงาน</label>
          <input type="text" class="form-control"  name="PERSONNEL_CATEGORY_DETAIL" placeholder="สายงาน">
          <input type="hidden"   name="PERSONNEL_CATEGORY_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_personnel_categories();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_personnel_statuses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล personnel_statuses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="PERSONNEL_STATUS_DETAIL" placeholder="ชื่ออาจารย์">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_personnel_statuses();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_personnel_statuses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล ตารางวิชาการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="PERSONNEL_STATUS_DETAIL" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="PERSONNEL_STATUS_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_personnel_statuses();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_personnel_types" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล personnel_statuses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="PERSONNEL_TYPE_DETAIL" placeholder="ชื่ออาจารย์">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_personnel_types();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_personnel_types" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล personnel_types</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่ออาจารย์</label>
          <input type="text" class="form-control"  name="PERSONNEL_TYPE_DETAIL" placeholder="ชื่ออาจารย์">
          <input type="hidden"   name="PERSONNEL_TYPE_ID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_personnel_types();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  fade" id="add_faculties" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล ตารางคณะ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ตารางคณะ</label>
          <input type="text" class="form-control m-2 p-2"  name="FACULTY_ID" placeholder="ไอดีคณะ"> 
          <input type="text" class="form-control m-2 p-2" name="FACUALTY_NAME_TH" placeholder="ชื่อคณะ">
          <input type="text" class="form-control m-2 p-2" name="FACUALTY_NAME_EN" placeholder="ชื่อคณะภาษาอังกฤษ">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.add_faculties();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_faculties" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูล คณะ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput">ชื่อคณะ</label>
          <input type="text" class="form-control"  name="FACULTY_ID" placeholder="ชื่อคณะ">
          <input type="text" class="form-control"  name="FACUALTY_NAME_TH" placeholder="ชื่อคณะ">
          <input type="text" class="form-control"  name="FACUALTY_NAME_EN" placeholder="ชื่อคณะ">
          <input type="hidden"   name="ID_F">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="main.edit_faculties();">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>

