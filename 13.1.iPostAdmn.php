<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="13.1.iPostAdmn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="admn">
                        <img src="image/Logo.png" alt="" class="icon">
                        <p class="description-header">Admin Dashboard</p>
                </div>


            </div>
            <div class="main">
                <div class="list-item">
                    <ul>
                        <li><a href="9.AdminDashboard.php">-    Home</a></li>
                    </ul>
                    <ul>
                        <li><a href="10.ManageAkun.php">-    Akun</a></li>
                    </ul>
                    <ul>
                        <li><a href="11.ManagePostingan.php">-    Postingan</a></li>
                    </ul>
                    <ul>
                        <li><a href="12.ManageKategori.php">-    Kategori</a></li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="main-content">
                <div class="head">
                    <h1>Manage Postingan</h1>
                </div>
                <div class="info">
                    <div class="no1">
                        <div class="left">
                            <div class="AU">
                                <img class="acc" src="image/Akun.webp" alt="">
                                <p>Username</p>
                            </div>
                            <img class="illus" src="pos/cool.jpeg" alt="">
                        </div>
                        <div class="right">
                            <div class="hapuspos">
                                <img src="image/white delete.png" alt="">
                                <p>Hapus Postingan</p>
                            </div>
                            <div class="info2">
                                <p class="judul">Cool Dekstop Background</p>
                                <img src="image/download.png" alt="">
                                <img src="image/bookmark.png" alt="">
                            </div>
                            <div class="kategori">
                                <p>#Epic</p>
                                <p>#Background</p>
                                <p>#Cool</p>
                            </div>
                            <p class="Deskripsi">
                                Here is dekstop background for anyone who needs!
                            </p>
                        </div>
                    </div>
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
                                    <p>thanks!</p>
                                    <div class="balas">
                                        <img src="image/reply.png" alt="">
                                        <p>reply</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cmn2">
                                <img src="image/Akun.webp" alt="">
                                <div class="ucmn">
                                    <p>Cool Art!</p>
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

    <script src="13.1.iPostAdmn.js"></script>
</body>
</html>