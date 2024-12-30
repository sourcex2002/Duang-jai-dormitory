<!DOCTYPE html>
<html lang="en">

<head>
<?php require('../../connect/connect.php'); ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../homepage_admin.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="../homepage_admin.php">
          <i class="bi bi-grid"></i>
          <span>ปฏิทินงาน</span>
        </a>
      </li><!-- End calendar  Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link " href="dashboard.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../rentroom/rentroom.php">
          <i class="bi bi-grid"></i>
          <span>จองห้องพัก</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../checkout/check_out.php">
          <i class="bi bi-grid"></i>
          <span>คืนห้องพัก</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../payment/invoice.php">
          <i class="bi bi-grid "></i>
          <span>ทำใบแจ้งหนี้</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#news-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>ข่าวสาร</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="news-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../news/news.php">
              <i class="bi bi-circle"></i><span>ข้อมูลข่าวสาร</span>
            </a>
          </li>
          <li>
            <a href="../news/add_news.php">
              <i class="bi bi-circle"></i><span>เพิ่มข้อมูล</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>บริการ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="service-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href=../repair_service/repair.php>
              <i class="bi bi-circle"></i><span>ซ่อมบำรุง</span>
            </a>
          </li>
          <li>
            <a href="../clean_service/clean.php">
              <i class="bi bi-circle"></i><span>ทำความสะอาด</span>
            </a>
          </li>
          <!-- <li>
            <a href="../homepage_admin.php">
              <i class="bi bi-circle"></i><span>ปฏิทินงาน</span>
            </a>
          </li> -->
        </ul>
      </li><!-- End service Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#info-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>ข้อมูล</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="info-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../member/member.php">
              <i class="bi bi-circle"></i><span>ข้อมูลผู้เช่า</span>
            </a>
          </li>
          <li>
            <a href="employee.php">
              <i class="bi bi-circle"></i><span>ข้อมูลพนักงาน</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#register-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>สมัครสมาชิก</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="register-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../member/register_member.php">
              <i class="bi bi-circle"></i><span>สมัครสมาชิกผู้เช่า</span>
            </a>
          </li>
          <li>
            <a href="../employee/register_employee.php">
              <i class="bi bi-circle"></i><span>สมัครสมาชิกพนักงาน</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../homepage_admin.php">Home</a></li>
          <li class="breadcrumb-item active">สมัครสมาชิกพนักงาน</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  </main><!-- End #main -->

  <main id="main" class="main">
    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">สมัครพนักงาน</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" action="employee_pcs.php" method="post">
                <div class="col-md-6">
                  <label for="firstname_emp" class="form-label">ชื่อ</label>
                  <input type="text" class="form-control" id="firstname_emp" name="firstname_emp">
                </div>
                <div class="col-md-6">
                  <label for="lastname_emp" class="form-label">นามสกุล</label>
                  <input type="text" class="form-control" id="lastname_emp" name="lastname_emp">
                </div>
                <div class="col-12">
                  <label for="position_emp" class="form-label">ตำแหน่ง</label>
                  <input type="text" class="form-control" id="position_emp" name="position_emp">
                </div>
                <div class="col-12">
                  <label for="address_emp" class="form-label">ที่อยู่</label>
                  <input type="text" class="form-control" id="address_emp" name="address_emp">
                </div>
                <div class="col-md-6">
                  <label for="tel_emp" class="form-label">เบอร์โทรศัพท์</label>
                  <input type="text" class="form-control" id="tel_emp" name="tel_emp">
                </div>
                <div class="col-md-6">
                  <label for="cardID_emp" class="form-label">รหัสบัตรประชาชน</label>
                  <input type="text" class="form-control" id="cardID_emp" name="cardID_emp">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">ยืนยัน</button>
                  <button type="reset" class="btn btn-secondary">ยกเลิก</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
       
      </div>
    </section>

  </main><!-- End #main -->



  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
  $(document).ready(function() {
    $("#myForm").submit(function(e) {
      e.preventDefault(); // ป้องกันฟอร์มที่จะ submit โดยปกติ

      var formData = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "employee_pcs.php",
        data: formData,
        success: function(response) {
          alert(response); // แสดงข้อความที่ได้รับจากไฟล์ PHP
        },
        error: function(error) {
          console.log(error); // แสดง error ใน Console กรณีที่เกิดข้อผิดพลาด
        }
      });
    });
  });
</script>
</body>

</html>