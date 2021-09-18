<?php

use PhpParser\Node\Stmt\Echo_;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ilham Tanjung Kurniawan TA">
    <meta name="generator" content="Hugo 0.80.0">
    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


</head>

<body>

    <header>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">e-Rekrutmen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/page/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/page/job_vacancies">Job Vacancie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/page/contact">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/page/faq">FAQ</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a class="btn btn-outline-primary my-2 my-sm-0 mr-2" href="/login">Login</a>
                    <a class="btn btn-outline-primary my-2 my-sm-0 mr-2" href="/register">Register</a>
                </form>
            </div>
        </nav>
    </header>

    <main role="main">
        <!--CONTENT-->
        <?= $this->renderSection('content') ?>

        </div>


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2021 e-Rekrutmen Codeigniter 4 by Ilham Tanjung Kurniawan || ITB Stikom Bali &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    <script src="<?= base_url('js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>


</body>

</html>