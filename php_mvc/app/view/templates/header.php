<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
    <!-- <a class="navbar-brand text-white" href="<?php echo BASE_URL; ?>">Fachri</a> -->
    <img src="<?php echo BASE_URL; ?>/img/smkn.png" alt="" width="50" class="rounded-circle">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="position-absolute top-15 start-50 translate-middle-x">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?php echo BASE_URL; ?>/home">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?php echo BASE_URL; ?>/guru">Data Guru </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?php echo BASE_URL; ?>/siswa">Data Siswa </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Program Keahlian
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>/user/profile">About</a>
        </li>
      </ul>
    </div>
    </div>
    </div>
</nav>
</body>