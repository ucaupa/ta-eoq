<?php
include "Config/koneksi.php";

$kd = $_POST['kd'];
$nm = $_POST['nm'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];

$input = "INSERT INTO admin (`kd_admin`, `nm_lengkap`, `alamat`, `notlp`, `username`, `password`) VALUES('$kd', '$nm', '$alamat', '$telp', '$username', '$password')";
$hasil = mysqli_query($konek, $input);

//print(mysqli_error($konek));die;
if ($hasil) {
    echo "<script type='text/javascript'>alert('Data Berhasil Disimpan...!!!');</script>";
    echo "<script>location.href='user.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('Data Gagal Disimpan...!!!');</script>";
    echo "<script>location.href='user_input.php'</script>";
}
?>