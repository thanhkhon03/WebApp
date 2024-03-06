<?php
include('includes/logs/log_user.php');
$total_students = include('manager/manage-student.php');
$total_subjects = include('manager/manage-subjects.php');
$total_class = include('manager/manage-class.php');
$total_excellent_high_avg = include('manager/manage-excellent.php');
session_start();

if (isset($_SESSION['uid']) && (trim($_SESSION['uid']) != '')) {
  #-- kiểm tra vai trò/phân quyền của người dùng --
  switch ($_SESSION['urole']) {
      #-- phân quyền 'quản trị viên' --
    case 'QT':
      include('includes/admin_ui/admin_ui.php');
      break;

    case 'SV':
      include('includes/sinhvien_ui/sinhvien_ui.php');
      break;

    default:
      break;
  }
  echo '<a href="logout.php">Logout</a>';
} else {
?>  

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-- HỆ THỐNG QUẢN LÍ ĐIỂM SINH VIÊN --</title>

    <!-- favico -->
    <link rel="icon" type="image/x-icon" href="img/it-humg-favicon.ico">

    <!-- css -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="css/icheck/skins/line/blue.css">
    <link rel="stylesheet" href="css/icheck/skins/line/red.css">
    <link rel="stylesheet" href="css/icheck/skins/line/green.css">
    <link rel="stylesheet" href="css/main.css" media="screen">

  </head>

  <body class="top-navbar-fixed">
    <!-- html -->
    <div class="main-wrapper">
      <?php include('includes/nav_bar.php'); ?>

      <div class="content-wrapper">
        <div class="content-container">
          <?php include('includes/left_sidebar.php'); ?>
          <div class="main-page" id="main-page">
            <!--== main-page: thanh điều hướng ==-->
            <div class="container-fluid">
              <div class="row page-title-div">
                <div class="col-md-6">
                  <h2 class="title">THÔNG TIN</h2>

                </div>

                <!-- /.col-md-6 text-right -->
              </div>
              <!-- /.row -->
              <div class="row breadcrumb-div">
                <div class="col-md-6">
                  <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li class="active">Thống kê</li>
                    <li><a href="tra_cuu.php"><i class="active"></i>Tra cứu</a></li>
                    <li><a href="admin-students.php"><i class="active"></i>Quản lí</a></li>
                    
                  </ul>
                </div>

              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <!--== main-page: nội dung ==-->
            <section class="section">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat bg-primary" href="manage-student.php">
                      <span class="number counter"><?php echo !empty($total_students) ? $total_students: 0 ; ?></span>
                      <span class="name">SINH VIÊN</span>
                      <span class="bg-icon"><i class="fa fa-users"></i></span>
                    </a>
                    <!-- /.dashboard-stat -->
                  </div>
                  <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat bg-danger" href="DanhSachSinhVien.php">
                      <span class="number counter"><?php echo  !empty($total_subjects) ? $total_subjects: 0 ; ?></span>
                      <span class="name">HỌC PHẦN</span>                     
                    <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                    </a>
                    <!-- /.dashboard-stat -->
                  </div>
                  <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat bg-warning" href="manage-classes.php">
                      <span class="number counter"><?php echo  $total_class;?></span>
                      <span class="name">LỚP CHUYÊN NGHÀNH</span>
                      <span class="bg-icon"><i class="fa fa-bank"></i></span>
                    </a>
                    <!-- /.dashboard-stat -->
                  </div>
                  <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat bg-success" href="manage-results.php">
                      <span class="number counter"><?php echo $total_excellent_high_avg;?></span>
                      <span class="name">SINH VIÊN XUẤT XẮC</span>
                      <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                    </a>
                    <!-- /.dashboard-stat -->
                  </div>
                  <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- /.section -->
          </div>
        </div>
      </div>
    </div>

    <!-- cửa sổ đăng nhập -->
    <?php
    include('includes/logs/login_modal.php');
    ?>


    <!-- js lib -->
    <script src="js/modernizr/modernizr.min.js"></script>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>

    <script src="js/prism/prism.js"></script>
    <script src="js/waypoint/waypoints.min.js"></script>
    <script src="js/counterUp/jquery.counterup.min.js"></script>
    <script src="js/amcharts/amcharts.js"></script>
    <script src="js/amcharts/serial.js"></script>
    <script src="js/amcharts/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
    <script src="js/amcharts/themes/light.js"></script>
    <script src="js/toastr/toastr.min.js"></script>
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/production-chart.js"></script>
    <script src="js/traffic-chart.js"></script>
    <script src="js/task-list.js"></script>
    <script>
      $(function() {
        // Counter for dashboard stats
        $('.counter').counterUp({
          delay: 10,
          time: 1000
        });

        // Welcome notification
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

        toastr["success"]("Chào mừng đăng nhập hệ thống quản lí học tập sinh viên !");
      });
    </script>

    <script>
      function loadContent(url) {
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET", url);
        xhttp.send();
        xhttp.onreadystatechange = (e) => {
          document.getElementById("main-page").innerHTML = xhttp.responseText;
        }
      }
    </script>
  </body>

  </html>
<?php
}
?>