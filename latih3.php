<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Penyisipan PHP pada HTML</title>
    <style>
        h2{
            text-align: center;
        } 
    </style>
</head>
<body>
<h2>Nabil Labqino</h2>
<h2>A12.2024.07261</h2>
    Kapal Asing, Silahkan identifikasikan diri Anda! <br>
        <?php
        // Berikut ini adalah inisiasi beberapa variabel
        $namad = "Bejo ";
        $namat = "Noto ";
        $namab = "Negoro";
        ?>
        <b>ini adalah kapal federasi planet USS Enterprise. <br>
        <?php
            print("Saya $namad, $namat, $namab,kapten kapal.</b>");
            echo "<br>";
            print("$namad, $namat, $namab");
            echo "<br>";
        echo "saya ", $namad,$namat,$namab ;
        ?>

</body>
</html>