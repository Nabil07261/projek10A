<?php

// Fungsi sanitasi
function bersihkan($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$nim            = bersihkan($_POST['nim']);
$nama           = bersihkan($_POST['nama']);
$umur           = bersihkan($_POST['umur']);
$tempat_lahir   = bersihkan($_POST['tempat_lahir']);
$tanggal_lahir  = bersihkan($_POST['tanggal_lahir']);
$nohp          = bersihkan($_POST['nohp']);
$alamat         = bersihkan($_POST['alamat']);
$email          = bersihkan($_POST['email']);

// Sanitasi kota
$kota = bersihkan($_POST['kota']);

// Sanitasi jenis kelamin (radio)
$jk = isset($_POST['jk']) ? bersihkan($_POST['jk']) : "-";

// Sanitasi status kawin
$status = isset($_POST['status']) ? bersihkan($_POST['status']) : "-";

// Sanitasi checkbox hobi
$hobi_list = [];
if (!empty($_POST['hobi'])) {
    foreach ($_POST['hobi'] as $h) {
        $hobi_list[] = bersihkan($h);
    }
}
$hobi_output = implode(", ", $hobi_list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Data POST</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .result-group {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .result-group:last-child {
            border-bottom: none;
        }
        .result-label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
            color: #555;
        }
        .result-value {
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Hasil Input Data Mahasiswa (Metode POST)</h2>

    <div class="result-group">
        <span class="result-label">NIM:</span>
        <span class="result-value"><?= $nim ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Nama:</span>
        <span class="result-value"><?= $nama ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Umur:</span>
        <span class="result-value"><?= $umur ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Tempat Lahir:</span>
        <span class="result-value"><?= $tempat_lahir ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Tanggal Lahir:</span>
        <span class="result-value"><?= $tanggal_lahir ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">No HP:</span>
        <span class="result-value"><?= $nohp ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Alamat:</span>
        <span class="result-value"><?= $alamat ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Kota:</span>
        <span class="result-value">
        <?php
            if ($kota == "Semarang") echo "Semarang";
            elseif ($kota == "Solo") echo "Solo";
            elseif ($kota == "Brebes") echo "Brebes";
            elseif ($kota == "Kudus") echo "Kudus";
            elseif ($kota == "Demak") echo "Demak";
            else echo "Salatiga";
        ?>
        </span>
    </div>

    <div class="result-group">
        <span class="result-label">Jenis Kelamin:</span>
        <span class="result-value"><?= $jk ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Status:</span>
        <span class="result-value"><?= $status ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Hobi:</span>
        <span class="result-value"><?= $hobi_output ?></span>
    </div>

    <div class="result-group">
        <span class="result-label">Email:</span>
        <span class="result-value"><?= $email ?></span>
    </div>
</div>

</body>
</html>
