<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="8.iPostt.css">
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
            <p class="jdl">Detail Postingan</p>
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

    <div class="info">
        <div class="left">
            <div class="AU">
                <img class="acc" src="image/Akun.webp" alt="">
                <p>Username</p>
            </div>
            <img class="illus" src="pos/mogumogu.png" alt="">
            <div class="info2">
                <p class="Judul">Salute Cat Woman With Glitched Bakground</p>
                <div class="bd-btn">
                    <img src="image/download.png" alt="">
                    <img src="image/bookmark.png" alt="">
                </div>  
            </div>
            <div class="kategori">
                <p>#Animal</p>
                <p>#Japanese</p>
                <p>#Anime</p>
            </div>
            <p class="Deskripsi">Halo! saya menggambar ini menggunakan 
                Adobe Illustrator. Saya menggambarnya
                100 hari 99 malam, semoga anda suka 
                dengan karya saya.
            </p>
        </div>
        <div class="right">
            <div class="Komentar">
                <p class="cmn">Comment</p>
            <div class="komen-inp">
                <img src="image/Akun.webp" alt="">
                <input type="text">
                <div class="show-cmn">
                    <P>Show all comment</P>
                    <img src="image/arrow.png" alt="">
                </div>
                <div class="cmn2">
                    <img src="image/Akun.webp" alt="">
                    <div class="ucmn">
                        <p>Gambar ini bagus!</p>
                        <div class="balas">
                            <img src="image/reply.png" alt="">
                            <p>reply</p>
                        </div>
                    </div>
                </div>
                <div class="cmn2">
                    <img src="image/Akun.webp" alt="">
                    <div class="ucmn">
                        <p>Mogu mogu~</p>
                        <div class="balas">
                            <img src="image/reply.png" alt="">
                            <p>reply</p>
                        </div>
                    </div>
                </div>
                <div class="cmn2">
                    <img src="image/Akun.webp" alt="">
                    <div class="ucmn">
                        <p>Cool Artstyle!</p>
                        <div class="balas">
                            <img src="image/reply.png" alt="">
                            <p>reply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="8.iPost.js"></script>
</body>
</html>