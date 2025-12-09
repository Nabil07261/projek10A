<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input POST</title>
</head>
<body>

<h2>Data yang Dikirim dengan Metode POST</h2>

<?php
    echo "NIM : " . $_POST['nim'] . "<br>";
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Tempat Lahir : " . $_POST['tempat_lahir'] . "<br>";
    echo "Tanggal Lahir : " . $_POST['tanggal_lahir'] . "<br>";
    echo "Alamat : " . $_POST['alamat'] . "<br><br>";

    // Kota
    $kota = $_POST['kota'];
    echo "Kota : " . $kota . "<br>";

    // Jenis Kelamin
    echo "Jenis Kelamin : " . $_POST['jk'] . "<br>";

    // Tambahan
    echo "No HP : " . $_POST['nohp'] . "<br>";
    echo "Umur : " . $_POST['umur'] . " Tahun<br>";
    echo "Status : " . $_POST['status'] . "<br>";

    // Hobi (checkbox)
    echo "Hobi : ";
    if (!empty($_POST['hobi'])) {
        echo implode(", ", $_POST['hobi']);
    } else {
        echo "Tidak ada hobi yang dipilih";
    }

    echo "<br><br>Email : " . $_POST['email'] . "<br>";
?>

</body>
</html>
