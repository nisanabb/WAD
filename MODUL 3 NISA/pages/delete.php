<?php
include('../config/connector.php');

$id = $_GET['id_mobil'];

// BISAAAAA
$sql = "DELETE FROM users WHERE id_mobil = $id";

if (mysqli_query($connect, $sql)) {
                echo "Record deleted successfully";
        } else {
                        echo "Error deleting record: " . mysqli_error($connect);
                }    