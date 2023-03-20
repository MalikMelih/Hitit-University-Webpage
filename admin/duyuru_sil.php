<?php
include("../baglanti.php");

 echo $sql=" DELETE FROM duyurular WHERE d_id='".$_GET['id']."' ";
 mysqli_query($conn,$sql);
 header('location:admin.php?s=Duyurular');
?>