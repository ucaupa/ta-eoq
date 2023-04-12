<body onLoad="javascript:print()"> 
<div class="panel panel-default">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<h3 align="center">LAPORAN ANALISA EOQ</h3>
<hr>
<table border="1" class="table table-striped table-advance table-hover">
<thead>
<tr>						
<thead>
<tr>
<td>KODE OBAT</td>
<td>NAMA OBAT</td>
<td>KEBUTUHAN PERTAHUN</td>
<td>BIAYA SIMPAN</td>
<td>BIAYA PESAN</td>
<td>JUMLAH PEMESANAN YANG ECONOMIS</td>
<td>INTERVAL WAKTU PEMESANAN</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "select eoq.id,k_tahun,b_simpan,b_pesan,obat.kd_obat,nm_obat
from eoq,obat
where eoq.kd_obat=obat.kd_obat";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):


?>

     <tr>
          <td><?php echo $row['kd_obat'] ?></td>
          <td><?php echo $row['nm_obat'] ?></td>
          <td><?php echo $a = $row['k_tahun'] ?></td>
          <td><?php echo $b = $row['b_simpan'] ?></td>
          <td><?php echo $c = $row['b_pesan'] ?></td>
		  <?php $d  =  sqrt(2*($c*$a)/$b)  ?>
		  <?php $e  = (sqrt((2*$c)/($b*$a))*365) ?>
		  <?php  $d= number_format($d); ?>
		  <?php  $e= number_format($e); ?>
          <td><?php echo $d ?> Unit</td>
          <td><?php echo $e ?> Hari</td>
       
		
         

      
     </tr>
<?php
endwhile;
?>
</body>
</table>
<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Padang, $tgl</td></tr>";
echo "<tr><td>Mengetahui,</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td>Administrator</td></tr>";


?>