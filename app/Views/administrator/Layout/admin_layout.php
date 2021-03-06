<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title><?= $title ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/admin.css') ?>" rel="stylesheet">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <!-- Custom styles for this template -->

</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="/images/icon.png" class="img-responsive" width="150px"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid mt-3">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/admin">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/view">
                                <span data-feather="user"></span>
                                Admin
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/lowongan">
                                <span data-feather="file"></span>
                                Lowongan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/user">
                                <span data-feather="users"></span>
                                Pelamar
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/jobdesc">
                                <span data-feather="clipboard"></span>
                                Jenis Pekerjaan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/campus">
                                <span data-feather="briefcase"></span>
                                Kampus
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/major">
                                <span data-feather="award"></span>
                                Lulusan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/title">
                                <span data-feather="edit-2"></span>
                                Program Studi
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/cv">
                                <span data-feather="edit-2"></span>
                                List Cv
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>


    <script src="<?= base_url('js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="<?= base_url('js/admin.js') ?>"></script>
</body>

</html>