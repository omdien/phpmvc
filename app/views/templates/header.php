<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman <?= $data['judul']; ?> </title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about/index/saya/maling/21">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/pegawai">Pegawai</a>
                </li>
            </ul>
            </div>
        </div>
  </div> 
</nav>