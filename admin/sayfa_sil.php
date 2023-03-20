<?php
include("../baglanti.php");

 echo $sql=" DELETE FROM sayfalar WHERE s_id='".$_GET['id']."' ";
 mysqli_query($conn,$sql);
 header('location:admin.php?s=Sayfalar');
?>