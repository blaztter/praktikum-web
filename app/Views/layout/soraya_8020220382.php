<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portofolio Website</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>My website</title>
</head>
<body>
<div class ="navbar">
    <div class="navbar-icon">
        <i class="fa-solid fa-circle-user fa 2x1"></i>
    </div>
        <div class="navbar-page">
            <ul type='none'>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/portofolio">Portofolio</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
    </div>
        <div class="navbar-sosmed">
            <ul type='none'>
                 <li><i class="fa-brands fa-linkedin"></i></li>
                 <li><i class="fa-brands fa-instagram"></i></li>
                 <li><i class="fa-brands fa-facebook"></i></li>
                 <li><i class="fa-brands fa-whatsapp fa-bounce"></i></li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <h1><b>Soraya Nakhbaty</b></h1><br>
        <span class ="description">
        Mahasiswa PMM 4 UNISSULA Teknik Informatika Angkatan 2022
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>
</html>
