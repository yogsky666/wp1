<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Percabangan HTML IF ELSE</title>
</head>

<body>
    <?php
    $nilai = 40;


    if ($nilai >= 60) {
        echo "Nilai anda = $nilai. Selamat, anda Lulus!";
    } else {
        echo "Nilai anda = $nilai. Maaf, anda Tidak Lulus!";
    }
    ?>
</body>

</html>