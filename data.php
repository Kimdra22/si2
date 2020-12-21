<?php

include('koneksi.php');


$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $link_delete = "<a class='hapusData' href='delete.php?id=".$row['id']."'>Delete</a>";
        $link_update = "<a class='updateData' href='update.php?id=".$row['id']."' id='".$row['id']."' nama='".$row['nama']."' nim='".$row['nim']."'
        notlp='".$row['notlp']."' tgl='".$row['tgl']."' alamat='".$row['alamat']."' >Update</a>";
        
        echo"<tr><td>".$row['id'].
        "</td><td>".$row['nama'].
        "</td><td>"."".$row['nim'].
        "</td><td>"."".$row['notlp'].
        "</td><td>"."".$row['tgl'].
        "</td><td>".$row['alamat'].
        "</td><td>"
        .$link_update." | ".$link_delete."</td></tr>";

    }
}

?>