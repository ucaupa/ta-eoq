<?php
include "Config/koneksi.php";

$ko = $_POST['ko'];
$kp = $_POST['kp'];
$bs = $_POST['bs'];
$bp = $_POST['bp'];


$input ="INSERT INTO eoq VALUES('','$ko','$kp','$bs','$bp')";
$hasil = mysqli_query($konek,$input);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
	  
	   echo "<script>location.href='proses_eoq.php'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gaga Disimpan
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='proses_eoq.php'</script>";
}
?>