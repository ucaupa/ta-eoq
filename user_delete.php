<?php
include "Config/koneksi.php";
$id = $_GET['id'];

$hapus = "DELETE FROM admin where kd_admin = '$id'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil) {
    echo "<script type='text/javascript'>alert('Data Berhasil Dihapus...!!!');</script>";
    echo "<script>location.href='user.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('Data Gagal Dihapus...!!!');</script>";
    echo "<script>location.href='user.php'</script>";
}
?>

