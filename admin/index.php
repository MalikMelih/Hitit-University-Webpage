<?php
include("../baglanti.php");
session_start();
if(isset($_SESSION['ht_id']))
{
	$sql_hata = " SELECT * FROM hatalar WHERE ht_id='".$_SESSION['ht_id']."' ";
	$sqlht=mysqli_query($conn,$sql_hata);
	if($satirht=mysqli_fetch_assoc($sqlht))
	{
}
?>
<!DOCTYPE html>
<html id="html">
<head>
	<title>Hitit University Admin Page Login</title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet' type="text/css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<div id="ic">
    <div id="ic-c">		
		<div id="ic-cl"></div>
		<form method="post" id="ic-cf" action="kontrol.php">
			<input id="ic-cftb" type="text" placeholder="Kullanıcı Adı:" id="k_adi" name="k_adi">
			<input id="ic-cftb" type="password" placeholder="Şifre:" id="k_sifre" name="k_sifre">
			<input id="ic-cfbt" type="submit" value="Giriş Yap">
		</form>
		<a href="..">
			<div id="ic-cs">Siteye Dön</div>
		</a>
	</div>
</div>
<div id="ht" style="<?php if(($_SESSION['ht_id'])!="0"){ echo "display: block;"; } else{ echo "display: none;"; } ?>">
	<div id="ht-icn"></div>
	<div id="ht-txt"><?php echo $satirht['ht_icerik']; ?></div>
</div>
<!-- Footer -->
	<div id="footer">		
		<div id="f-txt">Hitit University @2019 All Right Reserved</div>
	</div>
<!-- Footer Sonu -->
</body>
</html>
<?php
}
$_SESSION['ht_id']="0";
?>