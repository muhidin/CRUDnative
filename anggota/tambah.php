<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Anggota Perpustakaan</title>
</head>
<body>
    <h1>Modul Tambah Anggota</h1>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama *</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" size="50" required></td>
            </tr>
            <tr>
                <td>HandPhone</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="50" rows="5" placeholder="Tulis alamat lengkap anda disini"></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Gabung</td>
                <td><input type="date" name="tgabung"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="radio" name="status" value="Aktif" checked>Aktif
                <input type="radio" name="status" value="Non aktif">Non aktif</td>
            </tr>
            <tr>
                <td><input type="reset"</td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>