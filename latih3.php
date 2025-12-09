<!DOCTYPE html>
<html>
<head>
    <title>Test Penyisipan PHP Pada HTML</title>
</head>
<body>
Kapal Asing, Silakan identifikasikan diri Anda! <br>

<?php
// Berikut ini adalah inisiasi beberapa variabel
$namad = "Bejo";
$namat = "Noto";
$namab = "Negoro";
?>

<b>Ini adalah kapal Federasi Planet USS Enterprise.<br></b>

<?php
    print("<b>Saya $namad, $namat, $namab, kapten kapal.</b><br>");
    print("$namad, $namat, $namab");
    
    echo "<br>";
    echo "Saya ", $namad, " ", $namat, " ", $namab;
?>
</body>
</html>
<!-- error karena fungsi print tidak ada kurung() nya dan untuk memanggil variabel harus menggunakan " " -->