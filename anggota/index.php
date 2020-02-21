<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Modul Anggota</title>
</head>
<body>
    <a href="../">Home</a> | <a href="tambah.php">Tambah</a>
    <h1>Modul Anggota</h1>
    <table cellspacing=0 cellpadding=5 border=1>
        <tr bgcolor="#ccc">
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Tgl Gabung</th>
            <th>Status</th>
            <th>Pilihan</th>
        </tr>
        <?php
        require_once("../koneksi.php");
        $sql  ="SELECT * FROM anggota";
        $query=mysqli_query($koneksi, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=7>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['nama'] . "</td>";
                    echo "<td>" . $r['hp'] . "</td>";
                    echo "<td>" . $r['alamat'] . "</td>";
                    echo "<td>" . $r['tgabung'] . "</td>";
                    echo "<td>" . $r['status'] . "</td>";
                    //echo '<td>Edit | Hapus</td>'; //ganti bagian ini
                    echo '<td><a href="edit.php?id='.$r['id'].'">Edit</a> | <a href="hapus.php?id='.$r['id'].'" onclick="return confirm(\'Yakin Akan dihapus?\')">Hapus</a></td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
</body>
</html>
