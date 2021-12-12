<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Reminyak Admin</title>
        <link href="<?= base_url()?>/asset/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav sb-nav-fixed navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Reminyak Admin</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Aplikasi Pegawai</div>
                                <a class="nav-link" href="../Users">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Data Pesanan
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>                         
                                <a class="nav-link" href="../pegawai">
                                    <div class="sb-nav-link-icon" ><i class="fas fa-columns"></i></div>
                                    Data User
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#datauser-submenu" aria-expanded="false" aria-controls="datauser-submenu">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Artikel
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                    <div class="collapse" id="datauser-submenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../TambahArtikel">Tambah Data</a>
                                            <a class="nav-link" href="../artikels">Lihat Data</a>
                                        </nav>
                                    </div>
                                    
                                <a class="nav-link" href="<?= base_url()?>/login/logout">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    Logout
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                        </div>
                    </div>                 
                </nav>