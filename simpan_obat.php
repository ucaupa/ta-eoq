<?php
include "Config/koneksi.php";

$kd = $_POST['kd'];
$nm = $_POST['nm'];
$jn = $_POST['jn'];
$hg = $_POST['hg'];
$st = $_POST['st'];

$input ="INSERT INTO obat VALUES('$kd','$nm','$jn','$hg','$st')";
$hasil = mysqli_query($konek,$input);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
	  
	   echo "<script>location.href='obat.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gaga Disimpan
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='input_obat.php'</script>";
}
?>