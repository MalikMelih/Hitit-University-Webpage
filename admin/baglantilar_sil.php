<?php
include("../baglanti.php");

 echo $sql=" DELETE FROM baglantilar WHERE b_id='".$_GET['id']."' ";
 mysqli_query($conn,$sql);
 header('location:admin.php?s=Baglantilar');
?>