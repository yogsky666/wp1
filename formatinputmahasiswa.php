<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input mahasiswa</title>
</head>

<body>
    <h1>Pengelolaan Data Mahasiswa</h1>
    <form action="hasilolahmahasiswa.php" method="POST">
        Nama : <input type="text" name="nama" size="40"> <br>
        Alamat : <input type="text" name="alamat" size="25"> <br>
        Jenis Kelamin :
        <input type="radio" name="gender">
        <label for="Laki-Laki">Laki-Laki</label>
        <input type="radio" name="gender">
        <label for="Perempuan">Perempuan</label> <br>
        Pekerjaan : <select name="pekerjaan">
            <option value="Pelajar">Pelajar</option>
            <option value="Pegawai Swasta">Pegawai Swasta</option>
            <option value="PNS">PNS</option>
            <option value="Wirausaha">Wirausaha</option>
        </select> <br>
        Hobby :
        <input type="checkbox" name="hoby1" value="Olahraga">
        <label for="Olahraga">Olahraga</label>
        <input type="checkbox" name="hoby2" value="Musik">
        <label for="Musik">Musik</label>
        <input type="checkbox" name="hoby3" value="Jalan-Jalan">
        <label for="Jalan-Jalan">Jalan-Jalan</label> <br>
        <input type="submit" value="kirim">
        <input type="submit" value="batal">
    </form>
</body>

</html>