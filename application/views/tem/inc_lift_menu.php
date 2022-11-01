 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()?>index.php/Home/profile" class="brand-link">
      <img src="<?php echo base_url()."public/"?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">หน้าหลัก</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img src="<?php echo base_url("/images/profile/".$_SESSION['PIC']);?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a  class="d-block"><?php echo $_SESSION['PERSONNEL_NAME'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$_SESSION['PERSONNEL_SURNAME']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
 
      <!-- </?php if //($_SESSION['level'] === '1' || $_SESSION['level'] === '2'): ?> -->

      <!-- Sidebar Menu -->
      
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php if ($_SESSION['level'] === '1'): ?>
            <li class="nav-item"><!-- บุคคลากรทั้งหมด -->    
                <a href="#" class="nav-link">
                  
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    <i class="right fas fa-angle-left"></i>
                    บุคคลากรทั้งหมด
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                      จัดการข้อมูลตาราง
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url()?>index.php/Home/personnels" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <!-- personnels -->
                          <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                        </a>
                      </li>
                    </ul>
                  </li>         
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                      จัดการข้อมูลที่เกี่ยวข้อง
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">    
                      <li class="nav-item">
                        <a href="<?php echo base_url()?>index.php/Home/personnel_categories" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <!-- personnel_categories -->
                          <p>สายงาน</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url()?>index.php/Home/personnel_statuses" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <!-- personnel_statuses -->
                          <p>สถานะการทำงาน</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url()?>index.php/Home/personnel_types" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <!-- personnel_types -->
                          <p>รูปแบบการทำงาน</p>
                        </a>
                      </li>  
                      <li class="nav-item">
                        <a href="<?php echo base_url()?>index.php/Home/faculties" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <!-- personnel_types -->
                          <p>คณะ</p>
                        </a>
                      </li> 
                      <li class="nav-item">
                        <a href="<?php echo base_url()?>index.php/Home/departments" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <!-- personnel_types -->
                          <p>สาขา</p>
                        </a>
                      </li> 
                    </ul>
                  </li>
                </ul>
            </li>
            <li class="nav-item"><!-- ตำแหน่งผู้บริหาร -->
              <a href="#" class="nav-link">
                
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  ตำแหน่งผู้บริหาร 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลตาราง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/management_positions" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลที่เกี่ยวข้อง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">    
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/managements" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>ประภทตำแหน่งผู้บริหาร</p>
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/faculties" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>คณะ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/departments" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>สาขา</p>
                      </a>
                    </li>  
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item"><!-- ตำแหน่งทางวิชาการ -->
              <a href="#" class="nav-link">
                
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  ตำแหน่งทางวิชาการ
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลตาราง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/academic_positions" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลที่เกี่ยวข้อง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">    
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/academics" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>ประภทตำแหน่งทางวิชาการ</p>
                      </a>
                    </li>        
                  </ul>
                </li>
              </ul>
            </li>
            <?php endif; ?>

            <li class="nav-item"><!-- การให้คำปรึกษา -->

              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  การให้คำปรึกษา
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลตาราง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/individual_counseling_services" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>
              <?php if ($_SESSION['level'] === '1'): ?>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลที่เกี่ยวข้อง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">    
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/counseling_types" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnel_categories -->
                        <p>ประเภทการให้คำปรึกษา</p>
                      </a>
                    </li> 
                  </ul>
                </li>
              </ul>
              <?php endif; ?>
            </li>
            <!-- การลา -->
            <li class="nav-item"><!-- การลา -->

              <a href="#" class="nav-link">
                
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  การลา
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลการลา
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/leaves" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>
              <?php if ($_SESSION['level'] === '1'): ?>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    จัดการข้อมูลที่เกี่ยวข้อง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">       
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/leave_types" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>ประเภทการลา</p>
                      </a>
                    </li>  
                  </ul>
                </li>
              </ul>
              <?php endif; ?>
            </li>
            <li class="nav-header">การบริการและงานวิจัย</li>
            <li class="nav-item"><!-- งานวิจัย -->
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  การบริการ
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    ข้อมูลการบริการ
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/services" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul> 
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    การเข้าร่วมการบริการ
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/service_participants" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>  
            </li>
            <li class="nav-item"><!-- งานวิจัย -->
              <a href="<?php echo base_url()?>index.php/Home/researchs" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>งานวิจัย</p>
              </a>
            </li>
            <li class="nav-header">กิจกรรมและการอบรม</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                กิจกรรม
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    ข้อมูลกิจกรรม
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/activities"  class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    ผู้เข้าร่วมกิจกรรม
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/activity_participants"  class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>  
              <ul class="nav nav-treeview">
                <?php if ($_SESSION['level'] === '1'): ?>

                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    ข้อมูลที่เกี่ยวข้อง
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/activity_types" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>ประเภทกิจกรรม</p> 
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/activity_categories" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <!-- personnels -->
                        <p>หมวดหมู่กิจกรรม</p> 
                      </a>
                    </li>

                  </ul>
                </li> 
                <?php endif; ?>
        
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                การอบรม
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    ข้อมูลการอบรม
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/trainings"  class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>index.php/Home/" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    ผู้เข้าร่วมการอบรม
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Home/training_participants"  class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>แสดง/เพิ่ม/แก้ไข/ลบ</p> 
                      </a>
                    </li>
                  </ul>
                </li>         
              </ul>  
            </li>
    
          
          <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/Home/logout" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>