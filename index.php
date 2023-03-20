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
<?php
$sql_ln = " SELECT * FROM Baglantilar ";
$sqlln=mysqli_query($conn,$sql_ln);
while($satirln=mysqli_fetch_assoc($sqlln))
{
?>
			<a href="<?php echo $satirln['b_link']; ?>">
				<div id="tb-link"><?php echo $satirln['b_adi']; ?></div>
			</a>
<?php
}
?>
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
?>
		</div>

		<div id="bdb">
			<img id="bdb-img" src="img/Haberler/hab1.jpg">
		</div>

		<div id="bdmc">
			
			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab1.jpg">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab2.png">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab1.jpg">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab2.png">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab1.jpg">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab2.png">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab1.jpg">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab2.png">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab1.jpg">
			</div>

			<div id="bdm">
				<img id="bdm-img" src="img/Haberler/hab2.png">
			</div>

		</div>

		<div id="dhc">
			
			<div id="dt">
				<div id="dhh">
					<div id="db">Duyurular</div>
					<div id="dd">Tümü</div>
				</div>
<?php
$sql_dy = " SELECT * FROM Duyurular ORDER BY d_id DESC LIMIT 5;";
$sqldy=mysqli_query($conn,$sql_dy);
while($satirdy=mysqli_fetch_assoc($sqldy))
{
?>
				<a href="sayfa.php?i=duyurular&id=<?php echo "d_id=".$satirdy['d_id']; ?>">
					<div id="dtg">
						<div id="dhtt">
							<div id="dhttg"><?php echo $satirdy['d_gun']; ?></div>
							<div id="dhtta"><?php echo $satirdy['d_ay']; ?></div>
						</div>
						<div id="dti">
							<div><?php echo $satirdy['d_baslik']; ?></div>
						</div>
					</div>
				</a>
<?php
}
?>
			</div>

			<div id="ht">
				<div id="dhh">
					<div id="hb">Haberler</div>
					<div id="hd">Tümü</div>
				</div>
<?php
$sql_hb = " SELECT * FROM Haberler ORDER BY h_id DESC LIMIT 5;";
$sqlhb=mysqli_query($conn,$sql_hb);
while($satirhb=mysqli_fetch_assoc($sqlhb))
{
?>
			<a href="sayfa.php?i=haberler&id=<?php echo "h_id=".$satirhb['h_id']; ?>">
				<div id="htg">
					<div id="dhtt">
						<div id="dhttg"><?php echo $satirhb['h_gun']; ?></div>
						<div id="dhtta"><?php echo $satirhb['h_ay']; ?></div>
					</div>
					<div id="hti">
						<div><?php echo $satirhb['h_baslik']; ?></div>
					</div>
				</div>
			</a>
<?php
}
?>
			</div>

		</div>
		<div id="sbc">
			<div id="sbcd">
				<input type="text" id="sbcdt" placeholder="DUYURU VE HABERLERDE ARA...">
    			<div id="sbcdi">
    				<img id="sbcdi-icn" src="img/icons/search.png">
    			</div>
			</div>
		</div>

		<div id="f-img"></div>

		<div id="footer">
			<div>Teknik Bilimler Meslek Yüksekokulu &#9679; Meslek Yüksekokulu Kampüsü Gazi Caddesi No: 99 Çorum</div>
		</div>

	</div>

</body>
</html>