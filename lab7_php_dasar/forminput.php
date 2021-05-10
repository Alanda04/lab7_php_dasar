<!DOCTYPE html>
<html lang="en">
<body>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
 <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
<?php
$tgl_lahir = "2000-11-04";
$lahir = new DateTime($tgl_lahir);
$hari_ini = new DateTime();
$diff = $hari_ini->diff($lahir);
echo "Tanggal Lahir: ". date('d M Y', strtotime($tgl_lahir)) .'<br />';
echo "Umur: ". $diff->y ." Tahun";
echo " ". $diff->m ." Bulan";
echo " ". $diff->d ." Hari";
?>
<?php
echo 'Karyawan';
?>
</body>
</html>