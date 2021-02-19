<?php
session_start(); 
if( ! isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<?php include("config.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>pengembalian</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="dashboard.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="dashboard.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Dashboard" href="dashboard.php" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li>
                            <a title="Stok Alat" href="data-alat.php" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Alat</span></a>
                        </li>
                        <li>
                            <a title="Pengguna RFID" href="data-pengguna.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Pengguna</span></a>
                        </li>
                        <li>
                            <a title="Peminjaman Alat" href="data-peminjaman.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Peminjaman</span></a>
                        </li>
                        <li>
                            <a title="Pengembalian Alat" href="data-pengembalian.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Pengembalian</span></a>
                        </li>
                        <li>
                            <a title="Tambah Peminjaman" href="tambah-peminjaman.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Tambah Peminjaman</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="margin-bottom: 64px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/smk.png" alt="" />
                                                        <span class="admin-name">Admin</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="#">
                                                                <span class="edu-icon edu-locked author-log-ic"></span>Log Out
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <ul class="breadcome-menu">
                                    <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Data Peminjaman Alat</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>List Data Pengembalian Alat</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>ID</th>
                                                    <th>Kode RFID</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>ID Peminjaman</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Kembali</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <?php
                                                $sql = "SELECT pengembalian.id, pengembalian.id_peminjaman, peminjaman.kode_rfid, rfid.nama, rfid.kelas, peminjaman.tanggal as tanggal_pinjam, pengembalian.tanggal as tanggal_kembali from pengembalian join peminjaman on peminjaman.id=pengembalian.id_peminjaman join rfid on rfid.kode_rfid=peminjaman.kode_rfid";
                                                    $query = mysqli_query($conn, $sql);
                                                $no=0;
                                                while($peminjaman = mysqli_fetch_array($query)){
                                                $no++;
                                                echo "<tr>";
                                                    echo "<td>".$no."</td>";
                                                    echo "<td>".$peminjaman['id']."</td>";
                                                    echo "<td>".$peminjaman['kode_rfid']."</td>";
                                                    echo "<td>".$peminjaman['nama']."</td>";
                                                    echo "<td>".$peminjaman['kelas']."</td>";
                                                    echo "<td>".$peminjaman['id_peminjaman']."</td>";
                                                    echo "<td>".$peminjaman['tanggal_pinjam']."</td>";
                                                    echo "<td>".$peminjaman['tanggal_kembali']."</td>";
                                            ?>
                                                </tr>
                                            <?php 
                                                }
                                            ?>  
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS -->
    <script src="js/tab.js"></script>
    <!-- plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- main JS -->
    <script src="js/main.js"></script>
</body>

</html>