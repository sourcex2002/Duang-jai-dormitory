<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
<?php require('../../connect/connect.php');
  $SQL = "SELECT * FROM building where UseFlag !=0";
  $stmt = $con->query($SQL);
  $i = 0;
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  
  Document Title
  =============================================
  -->
  <title>Titan | Multipurpose HTML5 Template</title>
  <!--  
  Favicons
  =============================================
  -->
  <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../assets/images/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!--  
  Stylesheets
  =============================================
  
  -->
  <!-- Default stylesheets-->
  <link href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template specific stylesheets-->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="../assets/lib/animate.css/animate.css" rel="stylesheet">
  <link href="../assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
  <link href="../assets/lib/flexslider/flexslider.css" rel="stylesheet">
  <link href="../assets/lib/owl.carousel/dist/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/lib/owl.carousel/dist/../assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="../assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
  <link href="../assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
  <!-- Main stylesheet and color file-->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link id="color-scheme" href="../assets/css/colors/default.css" rel="stylesheet">
</head>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
              <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="../homepage.php">Duangjai</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown" href="../rentroom/../rentroom/rentroom.php" data="dropdown">จองห้องพัก</a>
              </li>

              <li class="dropdown"><a class="dropdown" href="../checkout/../checkout/checkout.php" data="dropdown">คืนห้องพัก</a>
              </li>

              <li class="dropdown"><a class="dropdown" href="../payment/payment.php" data="dropdown">ชำระเงิน</a>
              </li>

              <li class="dropdown"><a class="dropdown" href="../news/../news/news.php" data="dropdown">ข่าวสาร</a>
              </li>

              <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown">บริการ</a>
                  <ul class="dropdown-menu">
                      <li><a href="../service_duangjai/repair_service">บริการซ่อมบำรุง</a></li>
                      <li><a href="../service_duangjai/clean_service.php">บริการทำความสะอาด</a></li>
              </li>
            </ul>
        </div>
        </div>
      </nav>
      <div class="main">
        <section class="module bg-dark-30 about-page-header" data-background="../assets/images/repair_service.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Repair Service</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h4 class="font-alt mb-0">บริการซ่อมบำรุง</h4>
              <hr class="divider-w mt-10 mb-20">
              <form class="form" role="form">
                <div class="row">
                  <div class="col-md-6">
                    <label>ชื่อ</label>
                    <input class="form-control input-lg" type="text" placeholder="ชื่อ" />
                  </div>
                  <div class="col-md-6">
                    <label>นามสกุล</label>
                    <input class="form-control input-lg" type="text" placeholder="นามสกุล" />
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group ">
                      <label>กรุณาเลือกตึก</label>
                      <select class="form-control input-lg" id="building_ID" name="building_ID" style="width: 100%;">
                        <option value="0">----กรุณาเลือก----</option>
                        <?php
                              $SQL = "SELECT building_name FROM building WHERE UseFlag != 0";
                              $stmt = $con->prepare($SQL);
                              $stmt->execute();

                              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $building_name = $row['building_name'];
                                ?>
                                <option ><?= $building_name ?></option>
                                <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>เลขห้อง</label>
                    <input class="form-control input-lg" type="text" placeholder="เลขห้อง" />
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="date1">วันที่ดำเนินการ</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="icon-calendar"></i></div>
                        <input class="form-control input-lg" id="date1" type="date" name="date1"
                          placeholder="dd/mm/yyyy" required="" />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="date2">เวลา</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="icon-calendar"></i></div>
                        <input class="form-control input-lg" type="time" id="appt" name="appt" min="09:00" max="18:00"
                          required />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="date2">เพิ่มรูปภาพ</label>
                    <input class="form-control input-lg" type="file" placeholder="เพิ่มรูปภาพ" />
                  </div>
                  <div class="form-group">
                  <label for="date2">กรอกรายละเอียด</label>
                    <textarea class="form-control" rows="7" placeholder="รายละเอียด"></textarea>
                  </div>
                  <button class="btn btn-b btn-round btn-block" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <div class="module-small bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="widget">
                                    <h5 class="widget-title font-alt">เกี่ยวกับหอพักดวงใจ</h5>
                                    <p>หอพักดวงใจ 125/55 หมู่ 6 ถ.เอกชัย ต.บางบอน แขวงบางบอน กรุงเทพมหานคร </p>
                                    <p>เบอร์โทรศัพท์ 096-290-5276 ป้าหนู
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider-d">
                <!-- <footer class="footer bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="../homepage_admin.php">TitaN</a>, All
                                    Rights
                                    Reserved</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer> -->
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="../assets/lib/jquery/dist/jquery.js"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/lib/wow/dist/wow.js"></script>
    <script src="../assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="../assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="../assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="../assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="../assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/lib/smoothscroll.js"></script>
    <script src="../assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="../assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>