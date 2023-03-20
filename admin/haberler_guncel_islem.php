<?php
include("../baglanti.php");

$sql=" UPDATE haberler SET h_baslik='".$_POST['h_baslik']."' , h_icerik='".$_POST['h_icerik']."' , h_gun='".$_POST['h_gun']."' , h_ay='".$_POST['h_ay']."' , h_yil='".$_POST['h_yil']."' , h_resim='".$_POST['h_resim']."' WHERE h_id='".$_GET['id']."' ";
mysqli_query($conn,$sql);
header('location:admin.php?s=Haberler');

?>