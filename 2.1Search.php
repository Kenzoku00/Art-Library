<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="2.1Searchh.css">
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
                    <li><a href="2.Home.php" class="active">Home</a></li>
                    <li><a href="3.Kategori.php">Kategori</a></li>
                </ul>
            </nav>
            
            <a href="4.Profile.php">
                <img class="akun" src="image/Akun.webp" alt="akun">
            </a>
            <p class="judul">Search</p>
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

    <div class="search-box">
        <i class="search-icon"><img src="image/search.png" class="search-icon" alt="Search"></i>
        <input type="search" placeholder="Search here">
    </div>

    <div class="postingan">
        <div class="BP" id="BP1">
            <a href="8.iPost.php">
                <img src="pos/mogumogu.png" alt="">
            </a>
            <img src="pos/donat.jpeg" alt="">
            <a href="8.2.iPost.php">
                <img src="pos/meteorbang.jpeg" alt="">
            </a>
            <img src="pos/w4.jpeg" alt="">
            <img src="pos/bebek.jpeg" alt="">
            <a href="8.iPost.php">
                <img src="pos/mogumogu.png" alt="">
            </a>
            <img src="pos/donat.jpeg" alt="">
            <a href="8.2.iPost.php">
                <img src="pos/meteorbang.jpeg" alt="">
            </a>
            <img src="pos/w4.jpeg" alt="">
            <img src="pos/bebek.jpeg" alt="">
            <a href="8.iPost.php">
                <img src="pos/mogumogu.png" alt="">
            </a>
            <img src="pos/donat.jpeg" alt="">
            <a href="8.2.iPost.php">
                <img src="pos/meteorbang.jpeg" alt="">
            </a>
            <img src="pos/w4.jpeg" alt="">
            <img src="pos/bebek.jpeg" alt="">
            <a href="8.iPost.php">
                <img src="pos/mogumogu.png" alt="">
            </a>
            <img src="pos/donat.jpeg" alt="">
            <a href="8.2.iPost.php">
                <img src="pos/meteorbang.jpeg" alt="">
            </a>
            <img src="pos/w4.jpeg" alt="">
            <img src="pos/bebek.jpeg" alt="">
        </div>
        <div class="BP" id="BP2">
            <img src="pos/gelas.jpeg" alt="">
            <img src="pos/cool.jpeg" alt="">
            <img src="pos/suieyes.jpeg" alt="">
            <img src="pos/tsunami.jpeg" alt="">
            <img src="pos/w5.jpeg" alt="">
            <img src="pos/gelas.jpeg" alt="">
            <img src="pos/cool.jpeg" alt="">
            <img src="pos/suieyes.jpeg" alt="">
            <img src="pos/tsunami.jpeg" alt="">
            <img src="pos/w5.jpeg" alt="">
            <img src="pos/gelas.jpeg" alt="">
            <img src="pos/cool.jpeg" alt="">
            <img src="pos/suieyes.jpeg" alt="">
            <img src="pos/tsunami.jpeg" alt="">
            <img src="pos/w5.jpeg" alt="">
            <img src="pos/gelas.jpeg" alt="">
            <img src="pos/cool.jpeg" alt="">
            <img src="pos/suieyes.jpeg" alt="">
            <img src="pos/tsunami.jpeg" alt="">
            <img src="pos/w5.jpeg" alt="">
        </div>
    </div>
    
    
    <script src="2.Home.js"></script>
</body>
</html>