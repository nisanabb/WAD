<?php
require '../config.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/ListCar-Nisa.php?message=delete");
} else {
  echo "Gagal";
}
