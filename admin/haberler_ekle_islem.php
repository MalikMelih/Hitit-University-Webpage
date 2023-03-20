<?php
include("../baglanti.php");

echo $sql=" INSERT INTO haberler (h_baslik,h_icerik,h_gun,h_ay,h_yil,h_resim) VALUES ('".$_POST['h_baslik']."','".$_POST['h_icerik']."','".$_POST['h_gun']."','".$_POST['h_ay']."','".$_POST['h_yil']."','".$_POST['h_resim']."')";
mysqli_query($conn,$sql);
header('location:admin.php?s=Haberler');

?>