<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="9.AdminDashboard.css">
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
                        <li><a href="9.AdminDashboard.php" class="active">-    Home</a></li>
                    </ul>
                    <ul>
                        <li><a href="10.ManageAkun.php" >-    Akun</a></li>
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
            <div class="main">
                <div class="head">
                    <h1>Admin Dashboard</h1>
                </div>
                <div class="main2">
                    <a href="10.ManageAkun.php">
                        <div class="akun">
                            <img src="image/Akun.webp" alt="">
                            <p>Manage Akun</p>
                        </div>
                    </a>
                    <a href="11.ManagePostingan.php">
                        <div class="postingan">
                        <img src="image/search.png" alt="">
                        <p>Manage Postingan</p>
                    </div>
                    </a>
                    <a href="12.ManageKategori.php">
                        <div class="kategori">
                        <img src="image/Combined-Shape.svg" alt="">
                        <p>Manage Kategori</p>
                    </div>
                    </a>
                </div>
                <div class="logout">
                    <a href="1.LoginRegister.php">
                        <p>Logout</p>
                    </a>
                </div>
                <div class="main3">
                    <div class="display-akun">
                        <div class="judul1">
                            <p>Akun User :</p>
                            <a href="10.ManageAkun.php">
                                <p>Lihat selengkapnya...</p>
                            </a>
                        </div>
                        <div class="tampilan-akun">
                            <table>
                                <tr>
                                    <th>Profile</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Delete</th>
                                </tr>
                                <tr>
                                    <td><img src="image/Akun.webp" alt=""></td>
                                    <td>TokotokoTowa</td>
                                    <td>••••••••••</td>
                                    <td>tokotokotowa@gmail.com</td>
                                    <td><img src="image/delete.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td><img src="image/Akun.webp" alt=""></td>
                                    <td>TokotokoTowa</td>
                                    <td>••••••••••</td>
                                    <td>tokotokotowa@gmail.com</td>
                                    <td><img src="image/delete.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td><img src="image/Akun.webp" alt=""></td>
                                    <td>TokotokoTowa</td>
                                    <td>••••••••••</td>
                                    <td>tokotokotowa@gmail.com</td>
                                    <td><img src="image/delete.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td><img src="image/Akun.webp" alt=""></td>
                                    <td>TokotokoTowa</td>
                                    <td>••••••••••</td>
                                    <td>tokotokotowa@gmail.com</td>
                                    <td><img src="image/delete.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td><img src="image/Akun.webp" alt=""></td>
                                    <td>TokotokoTowa</td>
                                    <td>••••••••••</td>
                                    <td>tokotokotowa@gmail.com</td>
                                    <td><img src="image/delete.png" alt=""></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="display-postingan">
                        <div class="judul2">
                            <p>Postingan :</p>
                            <a href="11.ManagePostingan.php">
                                <p>Lihat selengkapnya...</p>
                            </a>
                        </div>
                        <div class="pos">
                            <div class="BP">
                                <img src="pos/mogumogu.png" alt="">
                                <img src="pos/donat.jpeg" alt="">
                                <img src="pos/meteorbang.jpeg" alt="">
                                <img src="pos/w4.jpeg" alt="">
                            </div>
                            <div class="BP">
                                <img src="pos/gelas.jpeg" alt="">
                                <a href="13.iPostAdmn.php">
                                    <img src="pos/cool.jpeg" alt="">
                                </a>
                                <img src="pos/suieyes.jpeg" alt="">
                            </div>
                            <div class="BP">
                                <img src="image/2Towa.jpg" alt="">
                                <img src="pos/w2.jpeg" alt="">
                                <img src="pos/luffy.jpeg" alt="">
                            </div>
                            <div class="BP">
                                <img src="pos/rock.jpeg" alt="">
                                <img src="pos/wolf.jpeg" alt="">
                                <img src="pos/rain.jpeg" alt="">
                            </div>
                            <div class="BP">
                                <img src="pos/cat.jpeg" alt="">
                                <img src="pos/w1.jpeg" alt="">
                                <img src="pos/aaacat.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="display-kategori">
                        <div class="judul3">
                            <p>Kategori :</p>
                            <a href="12.ManageKategori.php">
                                <p>Lihat selengkapnya...</p>
                            </a>
                        </div>
                        <div class="Kategori">
                            <div class="hvr">
                                <div class="K1a">
                                    <img src="image/kocheng2.jpeg" alt="">
                                    <p>Animal</p>
                                </div>
                            </div>
                            <div class="hvr">
                                <div class="K2a">
                                    <img src="pos/background.jpeg" alt="">
                                    <p>Background</p>
                                </div>
                            </div>
                            <div class="hvr">
                                <div class="K3a">
                                    <img src="pos/cool.jpeg" alt="">
                                    <p>Cool</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="9.AdminDashboard.js"></script>
</body>
</html>