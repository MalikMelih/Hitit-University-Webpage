<?php
include("../baglanti.php");

 echo $sql=" DELETE FROM haberler WHERE h_id='".$_GET['id']."' ";
 mysqli_query($conn,$sql);
 header('location:admin.php?s=Haberler');
?>