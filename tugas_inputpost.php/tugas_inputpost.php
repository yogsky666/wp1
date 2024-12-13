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

        pre {
            font-weight: 900;
            color: #F2E5BF;
            height: 40px;
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
        }

        input {
            height: 32px;
            background-color: #FFEADD;
        }

        textarea {
            height: 60px;
            background-color: #FFEADD;
        }
    </style>
</head>

<body>
    <h1 align="center">Isi Data Dibawah Ini</h1> <br>
    <form action="report_informasi_post.php" method="POST">
        <pre>
            Nama                    :   <input type="text" name="nama" size="40" maxlength="30"> <br>
            Alamat                  :   <textarea name="adress" size="40" maxlength="50"></textarea> <br>
            Tempat Lahir        :   <input type="text" name="tempat_lahir" size="40" maxlength="15"> <br>
            Tanggal Lahir       :   <input type="date" name="tanggal"> <br>
            Jenis Kelamin       :   <input type="radio" name="jk" value="Laki-Laki">Laki-Laki<input type="radio" name="jk" value="Perempuan">Perempuan <br>
            Pendidikan          :   <select name="pendidikan">
                <option value="sd">Pilih</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA/SLTA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select> <br>
            <input type="submit" value="Submit"><input type="reset" value="cancel">
        </pre>
    </form>
</body>

</html>