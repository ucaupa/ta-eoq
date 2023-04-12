<?php
include "Config/koneksi.php";

$no = $_POST['no'];
$tgl = $_POST['tgl'];
$ko = $_POST['ko'];
$jm = $_POST['jm'];


$input ="INSERT INTO penjualan VALUES('$no','$tgl','$ko','$jm')";
$hasil = mysqli_query($konek,$input);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
	  
	   echo "<script>location.href='penjulan.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gaga Disimpan
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='input_penjualan.php'</script>";
}
?>