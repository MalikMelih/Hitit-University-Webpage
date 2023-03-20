<?php
include("../baglanti.php");

$sql=" UPDATE sayfalar SET s_adi='".$_POST['s_adi']."' , s_baslik='".$_POST['s_baslik']."' , s_icerik='".$_POST['s_icerik']."' WHERE s_id='".$_GET['id']."' ";
mysqli_query($conn,$sql);
header('location:admin.php?s=Sayfalar');

?>