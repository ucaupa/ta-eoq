<?php
include "Config/koneksi.php";

$username = $_POST['user'];
$pass     = $_POST['ps'];


$login= "SELECT * FROM admin WHERE username='$username' AND password='$pass'    ";
$hasil=mysqli_query($konek,$login);
$ketemu=mysqli_num_rows($hasil);
$data=mysqli_fetch_array($hasil);

if ($ketemu > 0){
  session_start();
  
  $_SESSION['namauser']     = $data['username'];
  $_SESSION['passuser']     = $data['password'];


	echo "<script type='text/javascript'>
   
      </script>";
echo "<script>location.href='hal_admin.php'</script>";

  }
else{
echo "<script type='text/javascript'>
      alert('Maaf Username & Password Salah...!!!');
      </script>";
echo "<script>location.href='login.php'</script>";
}
?>
