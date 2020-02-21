<?php
//cek apakah ini hasil dari submit dari form Edit atau bukan
if(isset($_POST['update'])){
    include_once("../koneksi.php");
    $id      = $_POST['id'];
    $nama    = $_POST['nama'];
    $hp      = $_POST['hp'];
    $alamat  = $_POST['alamat'];
    $tgabung = $_POST['tgabung'];
    $status  = $_POST['status'];

    //Berikan perintah update
    $sql = "UPDATE anggota SET nama='$nama', hp='$hp', alamat='$alamat', tgabung='$tgabung', status='$status' WHERE id='$id'";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan){
		//var_dump($sql);
        header('location:index.php');
    }else{
		include "index.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Diupdate.")';
        echo '</script>';
    }
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='index.php'>Kembali</a>";
}
?>
