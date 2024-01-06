<?php
session_start();
include "0.koneksi1.php";

if (isset($_SESSION['username'])) {
    $nama_pengguna = $_SESSION['username'];
    
    $sql = "SELECT username, password FROM akun WHERE username = '$nama_pengguna'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $password = $row['password'];
        }
    } else {
        echo "Akun tidak ditemukan.";
    }
    
    $conn->close();
} else {
    header("Location: 1.LoginRegister.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library</title>
    <link rel="stylesheet" href="4.Profile.css">
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
            <p class="judul">Untuk Anda</p>
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

    <div class="Container">
        <img class="Profile" src="image/Akun.webp" alt="Profile">
        <div class="Info">
            <div class="Username">
                <p><?php echo $username; ?></p>
            </div>
            <div class="Password">
                <p>********</p>
            </div>
            <a href="6.Bookmark.php" class="link">
                <div class="Bookmark">
                    <img src="image/bmk.png" alt="">
                    <p>Bookmark Saya</p>
                </div>
            </a>
        </div>
        <a href="1.LoginRegister.php">
            <button type="button">Logout</button>
        </a>
    </div>
    <div class="info2">
        <p>Postingan Saya :</p>
        <a href="5.UploadPos.php" class="upload">
            <img src="image/upload.png" alt="upload">
        </a>
        <img src="image/delete.png" alt="delete">
    </div>
    <div class="Postingan-saya">
        <div class="BP" id="BP1">
            <img src="pos/w1.jpeg" alt="">
            <img src="pos/japanese.jpeg" alt="">
            <a href="8.2.iPost.php">
                <img src="pos/meteorbang.jpeg" alt="">
            </a>
        </div>
        <div class="BP" id="BP2">
            <img src="pos/background.jpeg" alt="">
            <img src="pos/w5.jpeg" alt="">
            <img src="pos/ocean.jpeg" alt="">
        </div>
        <div class="BP" id="BP3">
            <img src="pos/w2.jpeg" alt="">
            <img src="pos/nature.jpeg" alt="">
            <img src="pos/bebek.jpeg" alt="">
        </div>
        <div class="BP" id="BP4">
            <img src="pos/gaming.jpeg" alt="">
            <img src="pos/aaacat.jpeg" alt="">
            <img src="pos/rain.jpeg" alt="">
        </div>
        <div class="BP" id="BP5">
            <img src="pos/cool.jpeg" alt="">
            <img src="pos/holow.jpeg" alt="">
            <img src="pos/cyberpunk.jpeg" alt="">
        </div>
        <div class="BP" id="BP6">
            <img src="pos/w4.jpeg" alt="">
            <img src="pos/wolf.jpeg" alt="">
            <img src="pos/w6.jpeg" alt="">
        </div>
    </div>
    
    <script src="4.Profile.js"></script>
</body>
</html>