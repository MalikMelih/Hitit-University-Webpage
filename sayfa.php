<?php
	include("baglanti.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hitit Üniversitesi Teknik Bilimler MYO</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>

	<div id="body">
		<div id="tbanner">
			<img id="tb-social" src="img/icons/youtube.png">
			<img id="tb-social" src="img/icons/facebook.png">
			<img id="tb-social" src="img/icons/twitter.png">
			<div id="tb-lang">
    			<div id="tbl">EN</div>
				<div id="tbl">TR</div>
    		</div>
			<div id="tb-link">EYBS</div>
			<div id="tb-link">HUBIS</div>
			<div id="tb-link">öğr-e-posta</div>
			<div id="tb-link">e-posta</div>
		</div>
		<div id="banner">
			<a href=".">
				<img id="bimg" src="img/bg/banner.png">
			</a>
			<div id="btext">TEKNİK BİLİMLER MESLEK YÜKSEKOKULU</div>
		</div>

		<div id="menu">
			<a href=".">
				<div id="mhome">
					<img id="mhicn" src="img/icons/home.png">
				</div>
			</a>
<?php
$sql_sy = " SELECT * FROM Sayfalar ";
$sqlsy=mysqli_query($conn,$sql_sy);
$i=0;
while($satirsy=mysqli_fetch_assoc($sqlsy))
{
?>
			<a href="sayfa.php?i=sayfalar&id=<?php echo "s_id=".$satirsy['s_id']; ?>">
				<div id="mlink">
					<div><?php echo $satirsy['s_adi']; ?></div>
				</div>
			</a>
<?php
}
echo "</div>";
$sql_text = " SELECT * FROM ".$_GET['i']." WHERE ".$_GET['id']."";
$sql=mysqli_query($conn,$sql_text);
while($satir=mysqli_fetch_row($sql))
{
?>
		<div id="sgb">
			<div id="sgbs"></div>
			<div id="sgbg">
				<div id="bgc">
					<div id="bgca"><?php echo $satir[1]; ?></div>
						<?php if (isset($satir[4])) {?>
							<div id="bgct">
								<img id="bgctr" src="img/icons/takvim.png"><?php echo $satir[4]." ".$satir[5]." ".$satir[6]; ?>
							</div>
						<?php } ?>
					</div>
				<div id="sgbtext"><?php echo $satir[2]; ?></div>
			</div>
		</div>
<?php
}
?>

		<div id="f-img"></div>

		<div id="footer">
			<div>Teknik Bilimler Meslek Yüksekokulu &#9679; Meslek Yüksekokulu Kampüsü Gazi Caddesi No: 99 Çorum</div>
		</div>

	</div>
</body>
</html>