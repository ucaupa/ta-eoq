<body onLoad="javascript:print()"> 
<div class="panel panel-default">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<h3 align="center">LAPORAN PEMBELIAN</h3>
<hr>
<table border="1" class="table table-striped table-advance table-hover">
<thead>
<tr>						
<thead>
<tr>
<td>KODE PEMBELIAN</td>
<td>TANGGAL PEMBELIAN</td>
<td>KODE OBAT</td>
<td>NAMA OBAT</td>
<td>JUMLAH BELI</td>
<td>HARGA</td>
<td>TOTAL</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "select beli.kd_beli,tgl_beli,jumlah,obat.kd_obat,nm_obat,harga, (jumlah*harga) as total
from beli,obat
where beli.kd_obat=obat.kd_obat";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):
?>
     <tr>
          <td><?php echo $row['kd_beli'] ?></td>
          <td><?php echo $row['tgl_beli'] ?></td>
          <td><?php echo $row['kd_obat'] ?></td>
          <td><?php echo $row['nm_obat'] ?></td>
          <td><?php echo $row['jumlah'] ?></td>
          <td><?php echo $row['harga'] ?></td>
          <td><?php echo $row['total'] ?></td>
       
		
         

      
     </tr>
<?php
endwhile;
?>
</body>
</table>
<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>........., $tgl</td></tr>";
echo "<tr><td>Mengetahui,</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td>Administrator</td></tr>";


?>