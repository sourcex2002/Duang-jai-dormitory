<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <?php require('../../connect/connect.php');
    $SQL = "SELECT * FROM news where UseFlag !=0";
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
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                        data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button><a class="navbar-brand" href="../homepage.php">Duangjai</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a class="dropdown" href="../rentroom/rentroom.php"
                                data="dropdown">จองห้องพัก</a>
                        </li>

                        <li class="dropdown"><a class="dropdown" href="../checkout/checkout.php"
                                data="dropdown">คืนห้องพัก</a>
                        </li>

                        <li class="dropdown"><a class="dropdown" href="../payment/payment.php"
                                data="dropdown">ชำระเงิน</a>
                        </li>

                        <li class="dropdown"><a class="dropdown" href="../news/news.php" data="dropdown">ข่าวสาร</a>
                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">บริการ</a>
                            <ul class="dropdown-menu">
                                <li><a href="../service_duangjai/repair_service.php">บริการซ่อมบำรุง</a></li>
                                <li><a href="../service_duangjai/clean_service.php">บริการทำความสะอาด</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="module bg-dark-30 about-page-header" data-background="../assets/images/news.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt mb-0">News</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="module-medium" id="demos">
            <div class="container">


                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $date = $row["date"];
                    $N_header = $row["N_header"];
                    $N_information = $row["N_information"];

                    $useflag = $row["useflag"];

                    ?>
                </div>
            </section>

                <div class="container">
                    <div class="row">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <div>วันที่แจ้งข่าวสาร : <?php echo $date ?></div>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div>หัวข้อ : <?php echo $N_header ?></div>
                                            <?php echo $N_information ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            <?php
                }
                ?>

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
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
        </div>
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