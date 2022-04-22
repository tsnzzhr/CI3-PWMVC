<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Asisten.in</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/script.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= site_url('home');?>"><img src="<?= base_url();?>assets/img/title.png" width="200" height="35"></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= site_url('program');?>">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('partnership');?>">Partnership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('tentang');?>">Tentang</a>
                    </li>
                </ul>
                <form class="d-flex input-group w-auto">
                    <input type="search" class="form-control" placeholder="Cari Program.." aria-label="Search" />
                    <button class="btn btn-outline-secondary" type="button" data-mdb-ripple-color="dark">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>