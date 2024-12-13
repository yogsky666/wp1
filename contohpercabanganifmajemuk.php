<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Percabangan HTML IF ELSE</title>
</head>

<body>
    <?php
    $nilai = 200;


    if (($nilai >= 0) && ($nilai < 50)) {
        echo "Grade E";
    } else if (($nilai >= 50) && ($nilai < 60)) {
        echo "Grade D";
    } else if (($nilai >= 60) && ($nilai < 75)) {
        echo "Grade C";
    } else if (($nilai >= 75) && ($nilai < 85)) {
        echo "Grade B";
    } else if (($nilai >= 85) && ($nilai < 100)) {
        echo "Grade A";
    } else {
        echo "Nilai anda tidak diketahui";
    }
    ?>
</body>

</html>