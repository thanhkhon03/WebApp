<div class="left-sidebar bg-black-300 box-shadow ">
  <div class="sidebar-content">
    <div class="user-info closed">
      <img src="img/guest.png" alt="ERROR!" class="img-circle profile-img" width="90px" height="90px">
      <h6 class="title">GUEST</h6>
      <small class="info">Khách</small><br>
      <small class="info"></small>
    </div>
    <!-- /.user-info -->

    <div class="sidebar-nav">
      <ul class="side-nav color-gray">
        <!-- CATEGORY: THỐNG KÊ -->
        <li class="nav-header">
          <span class="">THỐNG KÊ</span>
        </li>
        <li>
          <a href="dashboard.php"><i class="fa fa-bar-chart-o"></i><span>Thống Kê</span></a>
        </li>
        <!-- END -->


        <!-- CATEGORY: QUẢN LÍ -->
        <li class="nav-header">
          <span class="">QUẢN LÍ</span>
        </li>
        <!-- THỰC ĐƠN: QUản lí sinh viên -->
        <li class="has-children">
          <a href="manage-students.php"><i class="fa fa-book"></i> <span>Quản lí sinh viên</span> <i class="fa fa-angle-right arrow"></i></a>
          <ul class="child-nav">
            <li><a href="create-students.php"><i class="fa fa-plus-square-o"></i> <span>Thêm mới sinh viên</span></a></li>
            <li><a href="update-students.php"><i class="fa fa-edit"></i> <span>Cập nhật thông tin</span></a></li>
            <li><a href="delete_students.php"><i class="fa fa fa-server"></i> <span>Xóa</span></a></li>
          </ul>
        </li>
        <!-- end -->

        <!-- THỰC ĐƠN: QUản lí học phần -->
        <li class="has-children">
          <a href="#"><i class="fa fa-book"></i> <span>Quản lí học phần</span> <i class="fa fa-angle-right arrow"></i></a>
          <ul class="child-nav">
            <li><a href="create-subject.php"><i class="fa fa-plus-square-o"></i> <span>Thêm học phần mới</span></a></li>
            <li><a href="manage-subjects.php"><i class="fa fa-edit"></i> <span>Cập nhật thông tin học phần</span></a></li>
            <li><a href="add-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Tìm kiếm học phần </span></a></li>
            <li><a href="delete_subjects.php"><i class="fa fa-newspaper-o"></i> <span>Xóa học phần </span></a></li>
          </ul>
        </li>
        <!-- end -->

        <!-- THỰC ĐƠN: Quản lí điểm học phần -->
        <li class="has-children">
          <a href="#"><i class="fa fa-book"></i> <span>Quản lí điểm học phần</span> <i class="fa fa-angle-right arrow"></i></a>
          <ul class="child-nav">
            <li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Nhập điểm</span></a></li>
            <li><a href="manage-students.php"><i class="fa fa fa-server"></i><span>Cập nhật điểm</span></a></li>
          </ul>
        </li>
        <!-- end -->

        <!-- THỰC ĐƠN: Quản lí tệp tin -->
        <li class="has-children">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Quản lí tệp tin</span>
            <i class="fa fa-angle-right arrow"></i>
          </a>
          <ul class="child-nav">
            <li><a href="uploads.php"><i class="fa fa-upload"></i> <span>Tải lên</span></a></li>
            <li><a href="downloads.php"><i class="fa fa fa-download"></i> <span>Tải xuống</span></a></li>
          </ul>
        </li>
        <!-- end -->
        <!-- END -->

        <!-- CATEGORY: TRA CỨU -->
        <li class="nav-header">
          <span class="">TRA CỨU</span>
        </li>
        <li class="has-children">
          <a href="#"><i class="fa fa-info-circle"></i> <span>Tra cứu kết quả học tập</span> <i class="fa fa-angle-right arrow"></i></a>
          <ul class="child-nav">
            <li><a href="ketqua_tracuu.php"><i class="fa fa-bars"></i> <span>Tra cứu theo mã sinh viên</span></a></li>
            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Tra cứu theo lớp chuyên nghành</span></a></li>
          </ul>
        </li>
        <!-- END -->

        <!-- CATEGORY: THIẾT LẬP -->
        <li class="nav-header">
          <span class="">THIẾT LẬP</span>
        </li>
        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span>Đổi mật khẩu</span></a></li>
        <!-- END -->
      </ul>
    </div>
    <!-- /.sidebar-nav -->
  </div>
  <!-- /.sidebar-content -->
</div>