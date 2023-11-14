<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
    <h1>Menggunakan variable</h1>
    <?php
        $nim = "312210290";
        $nama = 'Muhammad albedri';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
    <h1>Predefine variable</h1>
    <?php
        echo 'Selamat Datang ' . $_GET["nama"];
    ?>
</body>
</html>
