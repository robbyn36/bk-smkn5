<div class="col-md-12">
	<h2>Penambahan Point</h2>   
 <?php
	if($_GET['do'] == "add"){ //penambahan point untuk user
	$data_murid = mysql_fetch_array(mysql_query("SELECT * FROM murid WHERE nik = '$_GET[nik]'"));
?> 
	 <form class="form-horizontal" method="POST" action="">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Murid</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Murid" name="nama_murid" value="<?php echo $data_murid['nama'];?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Jurusan</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Jurusan Murid" name="jurusan_murid" value="<?php echo $data_murid['jurusan'];?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kelas" name="kelas_murid "value="<?php echo $data_murid['kelas'];?>" readonly>
    </div>
  </div>
	<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nik</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="NIK Murid" name="nik_murid" value="<?php echo $data_murid['nik'];?>" readonly>
    </div>
  </div>
  <hr>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Pelangan</label>
    <div class="col-sm-8 jenis_pelangaran well">
	<?php
		$sql_pelangaran = mysql_query("SELECT * FROM pelangaran");
		while($data_pelangaran = mysql_fetch_array($sql_pelangaran)){ ?>
		<div class="form-group">
			<div class="col-md-8">
				<input type="text" class="form-control" value="<?php echo $data_pelangaran["nama"]?>" name="id_pelangaran[]" readonly></input>
				</div>
				<div class="col-md-4">
				<input type="number" class="form-control" placeholder="Point" name="point_pelangaran[]" ></input>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-8">
		<textarea rows="6" class="form-control" name="keterangan"></textarea>
	</div>
</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="tambah_point" class="btn btn-info">Tambahkan</button>
    </div>
  </div>
</form>
 <?php }  ?>

 
 <?php
 if(isset($_POST["tambah_point"])){
	 echo "<pre>";
	 print_r($_POST);
	 echo "</pre>";
	 //kode pelangaran di generate secara random untuk agar tidak terduplikat
	 $kode_pelangaran = "BK/SMKN5/".rand("00000000","9999999999");
	 $tanggal = date('d/m/Y');
	 
	 //$tambah_data = mysql_query("INSERT INTO t_pelangaran (kode_pelangaran,nik_murid,created,user,keterangan) 
		//										VALUES ('$kode_pelangaran','$_POST[nik_murid]','$tanggal','Admin','$_POST[keterangan]')");
	 for($i=0;$i<count($_POST['point_pelangaran']);$i++){
		if(empty($_POST['point_pelangaran'][$i])){
			echo " Ini Kosong ".$i;
			echo "ini id ".$_POST['id_pelangaran'][$i]."<br>";
			
			
		}else{
			echo " Ini Berisi ".$i;
			//echo "ini id <b>".$_POST['id_pelangaran'][$i]."</b><br>";
			//var_dump($_POST['id_pelangaran']);
			echo '<pre>';
			print_r($_POST['id_pelangaran'][$i]);
			echo '</pre>';
			$data_pelangaran = $_POST['id_pelangaran'][$i];
			//jika dia berisi maka di input ke database
			mysql_query("INSERT INTO t_detail_pelangaran (id_pelangaran,nik_murid,kode_pelangaran,created) 
										VALUES ('$kode_pelangaran','$_POST[nik_murid]','$data_pelangaran','$tanggal')");
			
			
		}
	 }
 }
 ?>
 
 
 
 
 </div>