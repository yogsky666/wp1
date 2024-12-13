<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh 07</title>
</head>

<body>
    <?php
    // Konstanta untuk nilai judul
    define("Judul", "Hitungan Luas Lingkaran");

    // Konstanta untuk nilai *phii
    define("PHI", 3.14);

    $r = 10;

    $luas = PHI * $r * $r;
    ?>

    <pre>
        <?= Judul ?> <br>
        Jari-jari       = <?= $r ?> <br>
        Luas Lingkaran  = <?= $luas ?>
    </pre>
</body>

</html>