<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    function ganti_style($tulisan, $kelas) {
        return "<p class='$kelas'>$tulisan</p>";
    }

    $tulisan = "Hello World! Here I come!";
    $kelas = "ganti-style";

    echo ganti_style($tulisan, $kelas);
?>
</body>
</html>