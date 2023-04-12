<?php
include "./Config/koneksi.php";   

$id = $_GET['idb'];
$nmb = $_GET['nmb'];
$ket = $_GET['ket'];


$update ="UPDATE tbkategori set  namakat='$nmb', ketkat='$ket'
							 
				      where idkat ='$id'";
$hasil=mysqli_query($konek,$update);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil DiUpdate...!!!');
      </script>";
	  
	   echo "<script>location.href='add_kategori.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gagal DiUpdate
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='add_kategori.php'</script>";
}
?>


