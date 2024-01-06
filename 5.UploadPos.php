<?php

include "0.koneksi1.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $kategori = implode(", ", $_POST["kategori"]); 
    $nama_berkas = $_FILES["ilustrasi"]["name"];
    $lokasi_berkas = $_FILES["ilustrasi"]["tmp_name"];

    $direktori_simpan = "upload/"; 

    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

    if (empty($username)) {
        echo "Error: Username pengguna tidak ditemukan.";
        exit;
    }

    if (move_uploaded_file($lokasi_berkas, $direktori_simpan . $nama_berkas)) {
        $sql = "INSERT INTO postingan (judul, deskripsi, kategori, nama_berkas, username) VALUES (?, ?, ?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssss", $judul, $deskripsi, $kategori, $nama_berkas, $username);  
            if ($stmt->execute()) {
                echo "Unggahan berhasil disimpan.";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error saat mengunggah berkas.";
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Library - Unggah Postingan</title>
    <link rel="stylesheet" href="5.UploadPoss.css">
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
                <img class="akun" src="image/Akun.webp" alt="Akun">
            </a>
            <p class="jdl">Untuk Anda</p>
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

    <div class="Box">
        <form action="5.UploadPos.php" method="POST" enctype="multipart/form-data">
            <div class="K2">
                <div class="illus">
                    <label for="ilustrasi">Pilih Ilustrasi</label>
                    <input type="file" id="ilustrasi" name="ilustrasi" accept="image/*" required>
                </div>
                <div class="Deskripsi">
                    <label for="deskripsi">Tambahkan Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
                </div>
            </div>
            <div class="Judul">
                <label for="judul">Tambahkan Judul:</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            <div class="Kategori">
                <p>Tambah Kategori</p>
                <div class="checkboxes">
                    <label for="Animal"><input type="checkbox" id="Animal" name="kategori[]" value="Animal">Animal</label>
                    <label for="Background"><input type="checkbox" id="Background" name="kategori[]" value="Background">Background</label>
                    <label for="Cool"><input type="checkbox" id="Cool" name="kategori[]" value="Cool">Cool</label>
                    <label for="Design"><input type="checkbox" id="Design" name="kategori[]" value="Design">Design</label>
                    <label for="Epic"><input type="checkbox" id="Epic" name="kategori[]" value="Epic">Epic</label>
                    <label for="Forest"><input type="checkbox" id="Forest" name="kategori[]" value="Forest">Forest</label>
                    <label for="Gaming"><input type="checkbox" id="Gaming" name="kategori[]" value="Gaming">Gaming</label>
                    <label for="Horror"><input type="checkbox" id="Horror" name="kategori[]" value="Horror">Horror</label>
                    <label for="Inovation"><input type="checkbox" id="Inovation" name="kategori[]" value="Inovation">Inovation</label>
                    <label for="Japanese"><input type="checkbox" id="Japanese" name="kategori[]" value="Japanese">Japanese</label>
                    <label for="Kids"><input type="checkbox" id="Kids" name="kategori[]" value="Kids">Kids</label>
                    <label for="Lifestyle"><input type="checkbox" id="Lifestyle" name="kategori[]" value="Lifestyle">Lifestyle</label>
                    <label for="Meme"><input type="checkbox" id="Meme" name="kategori[]" value="Meme">Meme</label>
                    <label for="Nature"><input type="checkbox" id="Nature" name="kategori[]" value="Nature">Nature</label>
                    <label for="Ocean"><input type="checkbox" id="Ocean" name="kategori[]" value="Ocean">Ocean</label>
                    <label for="Photography"><input type="checkbox" id="Photography" name="kategori[]" value="Photography">Photography</label>
                    <label for="Quotes"><input type="checkbox" id="Quotes" name="kategori[]" value="Quotes">Quotes</label>
                    <label for="Robotic"><input type="checkbox" id="Robotic" name="kategori[]" value="Robotic">Robotic</label>
                    <label for="Sport"><input type="checkbox" id="Sport" name="kategori[]" value="Sport">Sport</label>
                    <label for="Technology"><input type="checkbox" id="Technology" name="kategori[]" value="Technology">Technology</label>
                    <label for="Urban"><input type="checkbox" id="Urban" name="kategori[]" value="Urban">Urban</label>
                    <label for="Vintage"><input type="checkbox" id="Vintage" name="kategori[]" value="Vintage">Vintage</label>
                    <label for="Writing"><input type="checkbox" id="Writing" name="kategori[]" value="Writing">Writing</label>
                    <label for="X"><input type="checkbox" id="X" name="kategori[]" value="X">X</label>
                    <label for="Youth"><input type="checkbox" id="Youth" name="kategori[]" value="Youth">Youth</label>
                    <label for="Zen"><input type="checkbox" id="Zen" name="kategori[]" value="Zen">Zen</label>
                    <label for="Anime"><input type="checkbox" id="Anime" name="kategori[]" value="Anime">Anime</label>
                </div>
            </div>
            <div class="upload">
                <button type="submit" class="btn">Upload</button>
            </div>
        </form>
    </div>

    <script src="5.UploadPos.js"></script>
</body>
</html>
