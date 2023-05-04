<?php
include "Config/koneksi.php";

$kd = $_POST['kd'];
$nm = $_POST['nm'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$username = $_POST['username'];

$update = "UPDATE admin SET nm_lengkap = '$nm', alamat = '$alamat', notlp = '$telp', username = '$username' WHERE kd_admin = '$kd'";
$hasil = mysqli_query($konek, $update);

if ($hasil) {
    echo "<script type='text/javascript'>alert('Data Berhasil DiUpdate...!!!');</script>";
    echo "<script>location.href='user.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('Data Gagal DiUpdate...!!!');</script>";
    echo "<script>location.href='user_edit.php'</script>";
}
?>


