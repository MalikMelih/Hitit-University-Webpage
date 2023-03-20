<?php
include("../baglanti.php");

$sql=" INSERT INTO baglantilar (b_adi,b_link) VALUES ('".$_POST['b_adi']."','".$_POST['b_link']."')";
mysqli_query($conn,$sql);
header('location:admin.php?s=Baglantilar');

?>