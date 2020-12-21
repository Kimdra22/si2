<?php

include('koneksi.php');


$sql = "DELETE FROM pajak WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn,$sql);


?>