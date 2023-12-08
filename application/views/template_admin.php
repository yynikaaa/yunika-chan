<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul_halaman ?></title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/elaadmin/') ?>assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/elaadmin/') ?>assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <script src="https://cdn.tiny.cloud/1/4gt9hug1z6we21ngn8sour2oc4iwh7dqsw26h0igzxu5uedp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php $menu = $this->uri->segment(2); ?>
                    <li class="<?php if ($menu == 'home') {
                                    echo "active";
                                } ?>">
                        <a href="<?= site_url('admin/home') ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="<?php if ($menu == 'caraousel') {
                                    echo "active";
                                } ?>">
                        <a href="<?= site_url('admin/caraousel') ?>"><i class="menu-icon fa fa-cogs"></i>Caraousel</a>
                    </li>
                    <li class="<?php if ($menu == 'kategori') {
                                    echo "active";
                                } ?>">
                        <a href="<?= site_url('admin/kategori') ?>"><i class="menu-icon fa fa-table"></i>Kategori
                            Konten</a>
                    </li>
                    <li class="<?php if ($menu == 'konten') {
                                    echo "active";
                                } ?>">
                        <a href="<?= site_url('admin/konten') ?>"><i class="menu-icon fa fa-folder-open"></i>Konten</a>
                    </li>
                    <?php if ($this->session->userdata('level') == 'Admin') { ?>
                        <li class="<?php if ($menu == 'konfigurasi') {
                                        echo "active";
                                    } ?>">
                            <a href="konfigurasi"> <i class="menu-icon fa fa-edit"></i>Konfigurasi</a>
                        </li>
                    <?php } ?>
                    <?php if ($this->session->userdata('level') == 'Admin') { ?>
                        <li class="<?php if ($menu == 'user') {
                                        echo "active";
                                    } ?>">
                            <a href="<?= site_url('admin/user') ?>"> <i class="menu-icon fa fa-users"></i>User</a>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= site_url('home') ?>"><img src="<?= base_url('assets/elaadmin/') ?>/images/mmm.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?= base_url('assets/elaadmin/') ?>/images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/elaadmin/') ?>/images/nezu.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <li>
                                <a class="dropdown-item">
                                    <div class="d-flex">

                                        <div class="nav-link ">
                                            <strong><span class="fw-medium d-block">
                                                    <?= $this->session->userdata('nama') ?>
                                                </span></strong>
                                            <small class="text-muted"><?= $this->session->userdata('level') ?></small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    <i class="bx bx-cog me-2"></i>
                                    <span class="align-middle">Password</span>
                                </a>
                            </li>

                            <li>
                                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>

                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?= $contents; ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <!-- <canvas id="TrafficChart"></canvas>   -->
                                    <div id="traffic-chart" class="traffic-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid pt-4 px-4">
        <div class="footer-inner bg-grey">
            <div class="row">
                <div class="col-sm-11 text-right">
                    Designed by <a href="#">yynika</a>
                </div>
            </div>
        </div>
    </div>
    <!-- </footer> -->
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?= base_url('assets/elaadmin/') ?>assets/js/main.js"></script>


    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url('assets/elaadmin/') ?>assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="<?= base_url('assets/elaadmin/') ?>assets/js/init/fullcalendar-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $('#menghilang').delay('slow').slideDown('slow').delay(700).slideUp(500);
    </script>


    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
        });
    </script>

</body>

</html>