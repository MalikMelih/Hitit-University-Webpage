<body>
	<center>
	<div id="b-kontrol">
		<a href="admin.php?s=Sayfalar&id">
			<div id="bk-new">
				<img id="bkn-icn" src="../img/icons/add.png">
    			<div>Yeni Kayıt</div>
			</div>
		</a>
		<a href="admin.php?s=Sayfalar">
			<div id="bk-rel">
				<img id="bkr-icn" src="../img/icons/yenile.png">
    			<div>Tekrar Listele</div>
			</div>
		</a>
	</div>
<?php
if (isset($_GET['id'])) 
{
	$sid=$_GET['id'];
	$sql_syi = " SELECT * FROM sayfalar WHERE s_id='$sid' ";
	$sqlsyi=mysqli_query($conn,$sql_syi);
	if($sy=mysqli_fetch_assoc($sqlsyi))
	{
		$islem = "sayfalar_guncel_islem.php";
		$islem_ad = "Güncelle";
}
else
{
	$islem="sayfalar_ekle_islem.php";
	$islem_ad="Kaydet";
}
?>
	<div id="be-cv">
		<form method="post" action="<?php echo $islem."?id=$sid"; ?>" id="be-form">
			<div id="bef-cv">
				<div id="bef-id">#<?php echo $sy['s_id']; ?></div>
    			<input id="bef-bas" type="text" placeholder="Sayfa Adı" name="s_adi" value="<?php echo $sy['s_adi']; ?>">   			
    		</div>
			<input id="bef-bas" type="text" placeholder="Sayfa Başlığı" name="s_baslik" value="<?php echo $sy['s_baslik']; ?>">
    		<div><?php
			$oFCKeditor = new FCKeditor('s_icerik');
			$oFCKeditor->BasePath = 'fckeditor/';
			$oFCKeditor->Value = $sy['s_icerik'];
			$oFCKeditor -> Height = 250; 
			$oFCKeditor->Create();
			?></div>
    		<div id="bef-bt">
				<a href="admin.php?s=Sayfalar">
					<div id="beft-ip">İptal</div>
				</a>
				<input id="beft-ev" type="submit" value="<?php echo $islem_ad; ?>">
			</div>
		</form>
	</div>
<?php
}
$sql_sy = " SELECT * FROM sayfalar ";
$sqlsy=mysqli_query($conn,$sql_sy);
$i=0;
while($satirsy=mysqli_fetch_assoc($sqlsy))
{
?>
	<div id="b-list">
		<div id="bl-res">
			<img id="blr-img" src="../img/logo.png">
		</div>
		<div id="bl-dat">
			<div id="bld-bas"><?php echo $satirsy['s_adi']; ?></div>
			<div id="bld-ciz"></div>
			<div id="bld-ic"><?php echo $satirsy['s_baslik']; ?></div>
		</div>
		<div id="bl-edt">
    		<a href="admin.php?s=Sayfalar&id=<?php echo $satirsy['s_id']; ?>">
    			<div id="ble-edt"></div>
    		</a>
			<a href="sayfa_sil.php?id=<?php echo $satirsy['s_id']; ?>">
				<div id="ble-del"></div>
			</a>
		</div>
		<div id="bl-tar" style="background-color: <?php if($i%2!=0) { echo "#0a0698"; } else { echo "#ff6201"; } ?>;">
			<div id="blt-gun">ID</div>
			<div id="blt-ay"># <?php echo $satirsy['s_id']; ?></div>
		</div>
	</div>
<?php
$i=$i+1;
	}
?>
	</center>
</body>