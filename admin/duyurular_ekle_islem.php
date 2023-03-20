<?php
include("../baglanti.php");

$sql=" INSERT INTO duyurular (d_baslik,d_icerik,d_gun,d_ay,d_yil,d_resim) VALUES ('".$_POST['d_baslik']."','".$_POST['d_icerik']."','".$_POST['d_gun']."','".$_POST['d_ay']."','".$_POST['d_yil']."','".$_POST['d_resim']."')";
mysqli_query($conn,$sql);
header('location:admin.php?s=Duyurular');

?>