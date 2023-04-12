<?php
include "Config/koneksi.php";

$kd = $_POST['kd'];
$tgl = $_POST['tgl'];
$ko = $_POST['ko'];
$jm = $_POST['jm'];

$input ="INSERT INTO beli VALUES('$kd','$tgl','$ko','$jm')";
$hasil = mysqli_query($konek,$input);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
	  
	   echo "<script>location.href='pembelian.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gaga Disimpan
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='input_pembelian.php'</script>";
}
?>