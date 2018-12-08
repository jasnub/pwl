<?php
include("koneksi.php");
$sql = "SELECT * FROM biodata WHERE id = ".$_GET['id'];
$hasil = mysqli_query($con, $sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysqli_fetch_assoc($hasil);

echo "ID : ".$data['id'];
echo "<br />";
echo "Nama : ".$data['nama'];
echo "<br />";
echo "Alamat : ".$data['alamat'];

?>

<p>[ <a href="tampil_biodata.php">Tampil Data</a> ] </p>