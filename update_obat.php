<?php
include "Config/koneksi.php";   

$kd= $_GET['kd'];
$nm = $_GET['nm'];
$jn = $_GET['jn'];
$hg = $_GET['hg'];
$st = $_GET['st'];


$update ="UPDATE obat set  nm_obat ='$nm',
                           jenis_obat='$jn',
                           harga='$hg',
                           stok ='$st'
							 
				      where kd_obat ='$kd'";
$hasil=mysqli_query($konek,$update);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil DiUpdate...!!!');
      </script>";
	  
	   echo "<script>location.href='obat.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gagal DiUpdate
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='edit_obat.php'</script>";
}
?>


