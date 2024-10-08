<?php
include "koneksi.php";
$nama = $_POST['nama'];
$passwrod = $_POST['password'];

$login = $mysqli->query("SELECT * FROM  user WHERE nama = '$nama' AND password = '$passwrod'");
if ($login->num_rows > 0) {
    header('location: admin/index.php?ket=admin');
}else {
    header('location: index.php?ket=gagal');

}