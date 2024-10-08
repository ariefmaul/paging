<?php
include "koneksi.php";
$nama = $_POST['nama'];
$passwrod = $_POST['mail'];

$login = $mysqli->query("SELECT * FROM  user WHERE nama = '$nama' AND e_mail = '$passwrod'");
if ($login->num_rows > 0) {
    header('location: reset/index.php');
}else {
    header('location: lupa_password.php?ket=gagal');

}