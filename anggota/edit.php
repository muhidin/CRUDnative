<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Anggota Perpustakaan</title>
</head>
<body>
    <h1>Modul Edit Anggota</h1>
<?php
//buat variabe $id ambil dari umpan GET
$id=$_GET['id'];
//panggil koneksi database
include "../koneksi.php";
//cari anggota berdasarkan id dari umpan GET
$sql="SELECT * FROM anggota WHERE id='$id'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama *</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" size="50" value="<?php echo$r['nama'];?>" required></td>
            </tr>
            <tr>
                <td>HandPhone</td>
                <td><input type="text" value="<?php echo$r['hp'];?>" name="hp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="50" rows="5" placeholder="Tulis alamat lengkap anda disini"><?php echo$r['alamat'];?></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Gabung</td>
                <td><input type="date" name="tgabung" value="<?php echo$r['tgabung'];?>"></td>
            </tr>
            <tr>
                <td>Status</td>
					<td><input type="radio" name="status" value="Aktif" <?php if($r['status']=='Aktif') echo " checked";?> />Aktif &nbsp;&nbsp;
					<input type="radio" name="status" value="Non Aktif" <?php if($r['status']=='Non Aktif') echo " checked";?> />Non Aktif</td>
            </tr>
            <tr>
				<td><input type="hidden" name="id" value="<?php echo$r['id'];?>">
                <input type="reset"</td>
                <td><input type="submit" value="Update" name="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
