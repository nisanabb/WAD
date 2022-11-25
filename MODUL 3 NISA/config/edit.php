<?php

include('connector.php');


if (isset($_POST['simpan'])){
    $idMobil = $_POST['id_mobil'];
    $namaMobil = $_POST['nama_mobil'];
    $namaPemilik = $_POST['pemilik_mobil'];
    $merk = $_POST['merk_mobil'];
    $tglBeli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES["foto_mobil"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../asset/images/" . $foto;
    move_uploaded_file($temp, '../asset/images/'.$foto);
    $pembayaran = $_POST['status_pembayaran'];

    $id = $_GET['id_mobil'];
        
    $query = "UPDATE users SET nama_mobil='$namaMobil', pemilik_mobil='$namaPemilik', merk_mobil='$merk', tanggal_beli='tglBeli', deskripsi='$deskripsi',
    foto_mobil='$foto', status_pembayaran='$pembayaran' WHERE id_mobil='$idMobil'";

    if (mysqli_query($connect, $sql)){
                    echo "data berhasil dirubah";
                }else {
                    echo "Data Gagal Ditambahkan";
                }
}
?>


