<?php
include("../baglanti.php");

$sql=" UPDATE baglantilar SET b_adi='".$_POST['b_adi']."' , b_link='".$_POST['b_link']."' WHERE b_id='".$_GET['id']."' ";
mysqli_query($conn,$sql);
header('location:admin.php?s=Baglantilar');

?>