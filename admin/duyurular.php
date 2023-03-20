<body>
	<center>
	<div id="b-kontrol">
		<a href="admin.php?s=Duyurular&id">
			<div id="bk-new">
				<img id="bkn-icn" src="../img/icons/add.png">
    			<div>Yeni Kayıt</div>
			</div>
		</a>
		<a href="admin.php?s=Duyurular">
			<div id="bk-rel">
				<img id="bkr-icn" src="../img/icons/yenile.png">
    			<div>Tekrar Listele</div>
			</div>
		</a>
	</div>
<?php
if (isset($_GET['id'])) 
{
	$did=$_GET['id'];
	$sql_dyi = " SELECT * FROM duyurular WHERE d_id='$did' ";
	$sqldyi=mysqli_query($conn,$sql_dyi);
	if($dy=mysqli_fetch_assoc($sqldyi))
	{
		$islem = "duyurular_guncel_islem.php";
		$islem_ad = "Güncelle";
		if($dy['d_gun']!="") { $dgun=$dy['d_gun']; } else { $dgun=date('d'); }
		if($dy['d_ay']!="") { $day=$dy['d_ay']; } else { $day=date('M'); }
		if($dy['d_yil']!="") { $dyil=$dy['d_yil']; } else { $dyil=date('y'); }
}
else
{
	$islem="duyurular_ekle_islem.php";
	$islem_ad="Kaydet";
	$dgun=date('d');
	$day=date('M');
	$dyil=date('y');
}
?>
	<div id="be-cv">
		<form method="post" action="<?php echo $islem."?id=$did"; ?>" id="be-form">
			<div>
				<?php
					$oFCKeditor = new FCKeditor('d_resim');
					$oFCKeditor->ToolbarSet = 'melih';
					$oFCKeditor->BasePath = 'fckeditor/';
					$oFCKeditor->Value = $dy['d_resim'];
					$oFCKeditor -> Width = 650; 
					$oFCKeditor -> Height = 50; 
					$oFCKeditor->Create();
				?>
			</div>
			<div id="bef-cv">
				<div id="bef-id">#<?php echo $dy['d_id']; ?></div>
    			<input id="bef-bas" type="text" placeholder="Duyuru Başlığı" name="d_baslik" value="<?php echo $dy['d_baslik']; ?>">
    			<input id="bef-gun" type="text" placeholder="Gün" name="d_gun" value="<?php echo $dgun; ?>">
    			<input id="bef-ay" type="text" placeholder="Ay" name="d_ay" value="<?php echo $day; ?>">
    			<input id="bef-yil" type="text" placeholder="Yıl" name="d_yil" value="<?php echo $dyil; ?>">
    		</div>
    		<div>
    			<?php
					$oFCKeditor = new FCKeditor('d_icerik');
					$oFCKeditor->BasePath = 'fckeditor/';
					$oFCKeditor->Value = $dy['d_icerik'];
					$oFCKeditor -> Height = 250; 
					$oFCKeditor->Create();
				?>
			</div>
    		<div id="bef-bt">
				<a href="admin.php?s=Duyurular">
					<div id="beft-ip">İptal</div>
				</a>
				<input id="beft-ev" type="submit" value="<?php echo $islem_ad; ?>">
			</div>
		</form>
	</div>
<?php
}
$sql_dy = " SELECT * FROM duyurular ";
$sqldy=mysqli_query($conn,$sql_dy);
$i=0;
while($satirdy=mysqli_fetch_assoc($sqldy))
{
?>
	<div id="b-list">
		<div id="bl-res">
			<img id="blr-img" src="../image/<?php echo $satirdy['d_resim']; ?>">
		</div>
		<div id="bl-dat">
			<div id="bld-bas"><?php echo $satirdy['d_baslik']; ?></div>
			<div id="bld-tar">Oluşturma Tarihi: <?php echo $satirdy['d_gun']." ".$satirdy['d_ay']." ".$satirdy['d_yil']; ?></div>
			<div id="bld-ciz"></div>
			<div id="bld-ic"><?php echo $satirdy['d_baslik']; ?></div>
		</div>
		<div id="bl-edt">
    		<a href="admin.php?s=Duyurular&id=<?php echo $satirdy['d_id']; ?>">
    			<div id="ble-edt"></div>
    		</a>
			<a href="duyuru_sil.php?id=<?php echo $satirdy['d_id']; ?>">
				<div id="ble-del"></div>
			</a>
		</div>
		<div id="bl-tar" style="background-color: <?php if($i%2!=0) { echo "#0a0698"; } else { echo "#ff6201"; } ?>;">
			<div id="blt-gun"><?php echo $satirdy['d_gun']; ?></div>
			<div id="blt-ay"><?php echo $satirdy['d_ay']; ?></div>
		</div>
	</div>
<?php
$i=$i+1;
	}
?>
	</center>
</body>