<body>
	<center>
	<div id="b-kontrol">
		<a href="admin.php?s=Baglantilar&id">
			<div id="bk-new">
				<img id="bkn-icn" src="../img/icons/add.png">
    			<div>Yeni Kayıt</div>
			</div>
		</a>
		<a href="admin.php?s=Baglantilar">
			<div id="bk-rel">
				<img id="bkr-icn" src="../img/icons/yenile.png">
    			<div>Tekrar Listele</div>
			</div>
		</a>
	</div>
<?php
if (isset($_GET['id'])) 
{
	$bid=$_GET['id'];
	$sql_bi = " SELECT * FROM baglantilar WHERE b_id='$bid' ";
	$sqlbi=mysqli_query($conn,$sql_bi);
	if($bi=mysqli_fetch_assoc($sqlbi))
	{
		$islem = "baglantilar_guncel_islem.php";
		$islem_ad = "Güncelle";
}
else
{
	$islem="baglantilar_ekle_islem.php";
	$islem_ad="Kaydet";
}
?>
	<div id="b1">
		<form id="be-form" method="post" action="<?php echo $islem."?id=$bid"; ?>" >
			<div id="b2">
				<input id="bef-bas" type="text" placeholder="Bağlantı Adı:" name="b_adi" value="<?php echo $bi['b_adi']; ?>">
			</div>
			<div id="b2">
				<input id="bef-bas" type="text" placeholder="Link:" name="b_link" value="<?php echo $bi['b_link']; ?>">
			</div>

			<a href="admin.php?s=Baglantilar">
					<div id="beft-ip">İptal</div>
				</a>
			<input id="beft-ev" type="submit" value="<?php echo $islem_ad; ?>">
		</form>
	</div>
<?php
}
?>

		<div id="b3">
			<div id="b4">
				<div id="b5">ID</div>
				<div id="b6">Bağlantı Adı:</div>
				<div id="b6">Link:</div>
				<div id="b5">Düzenle</div>
				<div id="b5">Sil</div>
			</div>
<?php
$sql_dy = " SELECT * FROM baglantilar ";
$sqldy=mysqli_query($conn,$sql_dy);
$i=0;
while($satirhb=mysqli_fetch_assoc($sqldy))
{
?>
			<div id="b7">
				<div id="b5"><?php echo $satirhb['b_id']; ?></div>
				<div id="b6"><?php echo $satirhb['b_adi']; ?></div>
				<div id="b6"><?php echo $satirhb['b_link']; ?></div>
				<div id="b5"><a href="admin.php?s=baglantilar&id=<?php echo $satirhb['b_id']; ?>">Düzenle</a></div>
				<div id="b5"><a href="baglantilar_sil.php?id=<?php echo $satirhb['b_id']; ?>">Sil</a></div>
			</div>
<?php
}
?>
			<div id="b8">
				<a href="">Listeyi Yenile</a>
			</div>
		</div>
</body>