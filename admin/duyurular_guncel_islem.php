<?php
include("../baglanti.php");

$sql=" UPDATE duyurular SET d_baslik='".$_POST['d_baslik']."' , d_icerik='".$_POST['d_icerik']."' , d_gun='".$_POST['d_gun']."' , d_ay='".$_POST['d_ay']."' , d_yil='".$_POST['d_yil']."' , d_resim='".$_POST['d_resim']."' WHERE d_id='".$_GET['id']."' ";
mysqli_query($conn,$sql);
header('location:admin.php?s=Duyurular');

?>