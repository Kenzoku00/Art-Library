<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="3.Kategorii.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <img class="logo" src="image/Logo.png" alt="Logo">
            <h2 class="AL">ArtLibrary</h2>
            <nav class="nav-bar">
                <ul class="nav_links">
                    <li><a href="2.Home.php">Home</a></li>
                    <li><a href="3.Kategori.php" class="active">Kategori</a></li>
                </ul>
            </nav>
            <div class="search-box">
                <i class="search-icon"><img src="image/search.png" class="search-icon" alt="Search"></i>
                <input type="search" placeholder="Search here">
            </div>
            <a href="4.Profile.php">
                <img class="akun" src="image/Akun.webp" alt="akun">
            </a>
            <p class="judul">Kategori</p>
        </div>
    </header>

    <div class="navbar-bottom">
        <a href="2.Home.php">
            <img src="image/home-2-line.svg" alt="">
        </a>
        <a href="2.1Search.php">
            <img src="image/search-line.svg" alt="">
        </a>
        <a href="3.Kategori.php">
            <img src="image/katgr.svg" alt="">
        </a>
        <a href="4.Profile.php">
            <img src="image/Akun.webp" alt="">
        </a>
    </div>

    <div class="box">
        <div class="Kategori">
            <div class="K1a">
                <img src="image/tes2.svg" alt="">
            </div>
            <div class="K2a">
                <img src="image/k-background.svg" alt="">
            </div>
            <div class="K3a">
                <img src="image/k-cool.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-design2.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-epic2.svg" alt="">
            </div>
            <a href="7.KForest.php">
                <div class="K3" id="forest">
                    <img src="image/k-forest2.svg" alt="">
                </div>
            </a>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-gaming.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-horror.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-inovation.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-japanese.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-kids.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-lifestyle.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-meme.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-nature.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-ocean.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-photography.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-quotes.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-robotic.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-sport.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-technology.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-urban.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-vintage.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-writing.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-x.svg" alt="">
            </div>
        </div>
        <div class="Kategori">
            <div class="K1">
                <img src="image/k-youth.svg" alt="">
            </div>
            <div class="K2">
                <img src="image/k-zen.svg" alt="">
            </div>
            <div class="K3">
                <img src="image/k-anime.svg" alt="">
            </div>
        </div>
    </div>
    
    <script src="3.Kategori.js"></script>
</body>
</html>