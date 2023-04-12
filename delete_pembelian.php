<?php
include "Config/koneksi.php";
$id = $_GET['id'];
$hapus="DELETE FROM beli where kd_beli='$id'";
$hasil = mysqli_query($konek,$hapus);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Dihapus...!!!');
      </script>";
echo "<script>location.href='pembelian.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gaga Dihapus
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='pembelian.php'</script>";
}
?>

