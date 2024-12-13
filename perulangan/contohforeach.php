<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Perulangan Foreach</title>
</head>

<body>
    Menggunakan Foreach
    <br>
    <?php
    $warna = array("merah", "biru", "hijau", "Kuning");
    foreach ($warna as $nilai) {
        echo "$nilai <br>";
    }
    ?>
</body>

</html>