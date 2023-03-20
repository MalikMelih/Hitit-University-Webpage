<body>
	<center>
	<div id="b-kontrol">
		<a href="admin.php?s=Haberler&id">
			<div id="bk-new">
				<img id="bkn-icn" src="../img/icons/add.png">
    			<div>Yeni Kayıt</div>
			</div>
		</a>
		<a href="admin.php?s=Haberler">
			<div id="bk-rel">
				<img id="bkr-icn" src="../img/icons/yenile.png">
    			<div>Tekrar Listele</div>
			</div>
		</a>
	</div>
<?php
if (isset($_GET['id'])) 
{
	$hid=$_GET['id'];
	$sql_hbi = " SELECT * FROM haberler WHERE h_id='$hid' ";
	$sqlhbi=mysqli_query($conn,$sql_hbi);
	if($hb=mysqli_fetch_assoc($sqlhbi))
	{
		$islem = "haberler_guncel_islem.php";
		$islem_ad = "Güncelle";
		if($hb['h_gun']!="") { $hgun=$hb['h_gun']; } else { $hgun=date('d'); }
		if($hb['h_ay']!="") { $hay=$hb['h_ay']; } else { $hay=date('M'); }
		if($hb['h_yil']!="") { $hyil=$hb['h_yil']; } else { $hyil=date('y'); }
}
else
{
	$islem="haberler_ekle_islem.php";
	$islem_ad="Kaydet";
	$hgun=date('d');
	$hay=date('M');
	$hyil=date('y');
}
?>
	<div id="be-cv">
		<form method="post" action="<?php echo $islem."?id=$hid"; ?>" id="be-form">
			<div>
				<?php
					$oFCKeditor = new FCKeditor('h_resim');
					$oFCKeditor->ToolbarSet = 'melih';
					$oFCKeditor->BasePath = 'fckeditor/';
					$oFCKeditor->Value = $hb['h_resim'];
					$oFCKeditor -> Width = 650;  
					$oFCKeditor -> Height = 50; 
					$oFCKeditor->Create();
				?>
			</div>
			<div id="bef-cv">
				<div id="bef-id">#<?php echo $hb['h_id']; ?></div>
    			<input id="bef-bas" type="text" placeholder="Haber Başlığı" name="h_baslik" value="<?php echo $hb['h_baslik']; ?>">
    			<input id="bef-gun" type="text" placeholder="Gün" name="h_gun" value="<?php echo $hgun; ?>">
    			<input id="bef-ay" type="text" placeholder="Ay" name="h_ay" value="<?php echo $hay; ?>">
    			<input id="bef-yil" type="text" placeholder="Yıl" name="hyil" value="<?php echo $hyil; ?>">
    		</div>
    		<div>
    			<?php
					$oFCKeditor = new FCKeditor('h_icerik');
					$oFCKeditor->BasePath = 'fckeditor/';
					$oFCKeditor->Value = $hb['h_icerik'];
					$oFCKeditor -> Height = 250; 
					$oFCKeditor->Create();
				?>
			</div>
    		<div id="bef-bt">
				<a href="admin.php?s=Haberler">
					<div id="beft-ip">İptal</div>
				</a>
				<input id="beft-ev" type="submit" value="<?php echo $islem_ad; ?>">
			</div>
		</form>
	</div>
<?php
}
$sql_dy = " SELECT * FROM haberler ";
$sqldy=mysqli_query($conn,$sql_dy);
$i=0;
while($satirhb=mysqli_fetch_assoc($sqldy))
{
?>
	<div id="b-list">
		<div id="bl-res">
			<img id="blr-img" src="../image/<?php echo $satirhb['h_resim']; ?>">
		</div>
		<div id="bl-dat">
			<div id="bld-bas"><?php echo $satirhb['h_baslik']; ?></div>
			<div id="bld-tar">Oluşturma Tarihi: <?php echo $satirhb['h_gun']." ".$satirhb['h_ay']." ".$satirhb['h_yil']; ?></div>
			<div id="bld-ciz"></div>
			<div id="bld-ic"><?php echo $satirhb['h_baslik']; ?></div>
		</div>
		<div id="bl-edt">
    		<a href="admin.php?s=Haberler&id=<?php echo $satirhb['h_id']; ?>">
    			<div id="ble-edt"></div>
    		</a>
			<a href="haberler_sil.php?id=<?php echo $satirhb['h_id']; ?>">
				<div id="ble-del"></div>
			</a>
		</div>
		<div id="bl-tar" style="background-color: <?php if($i%2!=0) { echo "#0a0698"; } else { echo "#ff6201"; } ?>;">
			<div id="blt-gun"><?php echo $satirhb['h_gun']; ?></div>
			<div id="blt-ay"><?php echo $satirhb['h_ay']; ?></div>
		</div>
	</div>
<?php
$i=$i+1;
	}
?>
	</center>
</body>