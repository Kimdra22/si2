<?php

include('koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$notlp = $_POST['notlp'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];

$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', notlp='$notlp', tgl='$tgl', alamat='$alamat' WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn,$sql);


?>