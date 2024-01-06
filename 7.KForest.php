<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="7.KForestt.css">
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
                    <li><a href="3.Kategori.php">Kategori</a></li>
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

    <div class="Forest">
        <p>Forest</p>
    </div>
    
    <div class="PForest">
        <div class="BP" id="BP1">
            <img src="forest/forest.jpeg" alt="">
            <img src="forest/forest1.jpeg" alt="">
            <img src="forest/forest2.jpeg" alt="">
            <a href="8.3.iPost.php">
                <img src="forest/forest18.jpeg" alt="">
            </a>
            <img src="forest/forest19.jpeg" alt="">
            <div class="h-pos">
                <img src="forest/forest6.jpeg" alt="">
                <img src="forest/forest7.jpeg" alt="">
                <img src="forest/forest8.jpeg" alt="">
                <img src="forest/forest22.jpeg" alt="">
                <img src="forest/forest23.jpeg" alt="">
                <img src="forest/forest12.jpeg" alt="">
                <img src="forest/forest13.jpeg" alt="">
                <img src="forest/forest14.jpeg" alt="">
                <img src="forest/forest26.jpeg" alt="">
                <img src="forest/forest27.jpeg" alt="">
            </div>
        </div>
        <div class="BP" id="BP2">
            <img src="forest/forest3.jpeg" alt="">
            <img src="forest/forest4.jpeg" alt="">
            <img src="forest/forest5.jpeg" alt="">
            <img src="forest/forest20.jpeg" alt="">
            <img src="forest/forest21.jpeg" alt="">
            <div class="h-pos">
                <img src="forest/forest9.jpeg" alt="">
                <img src="forest/forest10.jpeg" alt="">
                <img src="forest/forest11.jpeg" alt="">
                <img src="forest/forest24.jpeg" alt="">
                <img src="forest/forest25.jpeg" alt="">
                <img src="forest/forest15.jpeg" alt="">
                <img src="forest/forest16.jpeg" alt="">
                <img src="forest/forest17.jpeg" alt="">
                <img src="forest/forest28.jpeg" alt="">
                <img src="forest/forest29.jpeg" alt="">
            </div>
        </div>
        <div class="BP" id="BP3">
            <img src="forest/forest6.jpeg" alt="">
            <img src="forest/forest7.jpeg" alt="">
            <img src="forest/forest8.jpeg" alt="">
            <img src="forest/forest22.jpeg" alt="">
            <img src="forest/forest23.jpeg" alt="">
        </div>
        <div class="BP" id="BP4">
            <img src="forest/forest9.jpeg" alt="">
            <img src="forest/forest10.jpeg" alt="">
            <img src="forest/forest11.jpeg" alt="">
            <img src="forest/forest24.jpeg" alt="">
            <img src="forest/forest25.jpeg" alt="">
        </div>
        <div class="BP" id="BP5">
            <img src="forest/forest12.jpeg" alt="">
            <img src="forest/forest13.jpeg" alt="">
            <img src="forest/forest14.jpeg" alt="">
            <img src="forest/forest26.jpeg" alt="">
            <img src="forest/forest27.jpeg" alt="">
        </div>
        <div class="BP" id="BP6">
            <img src="forest/forest15.jpeg" alt="">
            <img src="forest/forest16.jpeg" alt="">
            <img src="forest/forest17.jpeg" alt="">
            <img src="forest/forest28.jpeg" alt="">
            <img src="forest/forest29.jpeg" alt="">
        </div>
    </div>
    
    <script src="7.KForest.js"></script>
</body>
</html>