<?php
include("../baglanti.php");

$sql=" INSERT INTO sayfalar (s_adi,s_baslik,s_icerik) VALUES ('".$_POST['s_adi']."','".$_POST['s_baslik']."','".$_POST['s_icerik']."')";
mysqli_query($conn,$sql);
header('location:admin.php?s=Sayfalar');

?>