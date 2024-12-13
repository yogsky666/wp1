<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bina Sarana Informatika</title>
    <style>
        body {
            background-color: #257180;
        }

        h1 {
            color: #F2E5BF;
        }

        h3 {
            padding: 16px;
            padding-top: 0;
            padding-bottom: 0;
        }

        table {
            background-color: white;
        }
    </style>
</head>

<body>
    <h1 align="center">Data Registrasi</h1> <br>
    <table align="center" border="1" width="70%">
        <tr>
            <td>
                <h3>Nama</h3>
            </td>
            <td>
                <?= $_POST['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Alamat</h3>
            </td>
            <td>
                <?= $_POST['adress'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Tempat Lahir</h3>
            </td>
            <td>
                <?= $_POST['tempat_lahir'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Tanggal Lahir</h3>
            </td>
            <td>
                <?= $_POST['tanggal'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Jenis Kelamin</h3>
            </td>
            <td>
                <?= $_POST['jk'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Pendidikan</h3>
            </td>
            <td>
                <?= $_POST['pendidikan'] ?>
            </td>
        </tr>
    </table>
</body>

</html>