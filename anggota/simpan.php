<?php
//cek apakah ini hasil dari submit dari form atau langsung buka file
if(isset($_POST['simpan'])){
    include_once("../koneksi.php");
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $tgabung = $_POST['tgabung'];
    $status = $_POST['status'];

    //Berikan perintah simpan
    $sql = "INSERT INTO anggota SET nama='$nama', hp='$hp', alamat='$alamat', tgabung='$tgabung', status='$status'";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan){
        header('location:index.php');
    }else{
		include "index.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='index.php'>Kembali</a>";
}
?>
