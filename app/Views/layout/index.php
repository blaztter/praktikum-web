<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAB 5</title>
    
</head>
<body>
    <nav>
        <ul>
            <li><a href="/profilee">Halaman Profile</a></li>
            <li><a href="/experience">Halaman Pengalaman</a></li>
        </ul>
    </nav>
    <?= $this->renderSection('content')?>

    <footer>
        <h2>Dibuat oleh Soraya Nakhbaty</h2>
        <h5>Praktikum Web Programming</h5>
    </footer>
</body>
<script src="https://kit.fontawesome.com/28d0edff48.js" crossorigin="anonymous"></script>
</html>