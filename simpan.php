<?php

include('koneksi.php');

if(isset($_POST['nama'])){
    $nama =$_POST['nama'];
    $nim = $_POST['nim'];
    $notlp = $_POST['notlp'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO mahasiswa VALUES ('id','$nama','$nim','$notlp','$tgl','$alamat')";
    if(mysqli_query($conn,$sql)){
        echo "Berhasil Memasukan Data";
    }
    else{
        echo "Error Memasukan Data".mysqli_error($conn);
    }
}

?>