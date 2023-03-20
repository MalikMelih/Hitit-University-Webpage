<?php
include("../baglanti.php");
include("fckeditor/fckeditor.php") ;
session_start();
if(isset($_SESSION['k_adi'])){}else{header('location:index.php');}
if(isset($_GET['s']))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="bos";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hitit University Admin Page</title>
	<link href='css/style.css' rel='stylesheet' type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body id="abody">	
<!-- Üst Menü -->
	<div id="tb">
		<a href="admin.php">
			<div id="tb-logo">
				<img id="tbl-img" src="../img/logo.png">
			</div>
		</a>
		<p id="tb-text">Hitit University Administration Panel</p>		
		<div id="tb-icns">			
			<a href="logout.php"><div id="tbi-log"></div></a>
			<a href="admin.php?s=Baglantilar"><div id="tbi-set"></div></a>
		</div>
	</div>
<!-- Üst Menü Sonu -->

<!-- Sol Menü -->
	<div id="lb">
			<div id="lb-kll">
<?php
$klladi=$_SESSION['k_adi'];
$sql_kl = " SELECT * FROM kullanici WHERE k_adi='$klladi'";
$sqlkl=mysqli_query($conn,$sql_kl);
while($satirkl=mysqli_fetch_assoc($sqlkl))
{
?>
				<div id="lbk-c">
					<img id="lbk-img" src="../img/admin/<?php echo $satirkl['k_resim']; ?>">
				</div>
<?php
}
?>
				<div id="lbk-cv">
					<div id="lbkc-ka"><?php echo $_SESSION['k_adi'];?></div>
					<div id="lbkc-ro">Yönetici</div>
					<!--<div style="float: left;width: 6px;height: 6px;border-radius: 6px;background-color: limegreen;margin-top: 3.5px;margin-right: 5px;"></div>	// Aktif Durumu
					<div style="float: left;color: #545454;display: block;font-size: 10px;font-weight: 600;margin-bottom: 5px;text-align: left;">Aktif</div>-->
				</div>
			</div>
			<div id="lb-menu">
				<a href="admin.php"><div id=""lbm-item>Ana Sayfa</div></a>
				<a href="admin.php?s=Sayfalar"><div id="lbm-item">Sayfalar</div></a>
				<a href="admin.php?s=Haberler"><div id="lbm-item">Haberler</div></a>
				<a href="admin.php?s=Duyurular"><div id="lbm-item">Duyurular</div></a>
				<a href="admin.php?s=Baglantilar"><div id="lbm-item">Bağlantılar</div></a>
				<a href=".."><div id="lbm-back">Siteye Geri Dön</div></a>
			</div>
	</div>
<!-- Sol Menü Sonu -->
	<div id="b-include">
		<div id="bi-text"><?php if($sayfa=="bos"){echo " ";}else{echo "Ana Sayfa / ".$sayfa;} ?></div>
		<?php include( $sayfa.".php");?>
	</div>
<!-- Footer -->
	<div id="footer">
		<div id="f-txt">Hitit University @2019 All Right Reserved</div>
	</div>
<!-- Footer Sonu -->
</body>
</html>