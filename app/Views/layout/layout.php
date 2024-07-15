<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAB 4</title>
    <link rel="stylesheet" type ="text/css" href="/css/style.css">
</head>
<body>
    <header>
        <!-- Header Anda -->
         <h1>Soraya Nakhbaty</h1>
    </header>     

    <nav>
        <!-- Navigasi Anda-->
         <ul>
            <li><a href="/profile">Halaman profile</li>
            <li><a href="/experience">Halaman pengalaman</li>
         </ul>

    </nav>

    <main>
        <!--Konten Utama akan dirender di sini -->
        <?= $this->renderSection('content')?>
    </main>

    <footer>
        <!--footer anda-->
        <p>Dibuat oleh Soraya</p>
    </footer>
</body>
</html>