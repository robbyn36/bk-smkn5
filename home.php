<div class="col-md-12">
 <h2>Daftar Murid</h2>   
    <p class=>Tambah Data Murid Baru <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Di Sini</button></p>
</div>
<table id="dataTables-example" class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th>Id</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>jenis kelamin</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
		<?php
			$sql_murid = mysql_query("SELECT * FROM murid");
			$no = 1;
			while ($data_murid = mysql_fetch_array($sql_murid)) {?>
			<tr>
				<td><?php echo $no++; ?></td>	
				<td><?php echo $data_murid["nik"]; ?></td>	
				<td><?php echo $data_murid["nama"]; ?></td>	
				<td><?php echo $data_murid["kelas"]; ?></td>	
				<td><?php echo $data_murid["jurusan"]; ?></td>	
				<td><?php echo $data_murid["jk"]; ?></td>	
				<td>
					<!-- <button href="" class="btn btn-info glyphicon glyphicon glyphicon-edit"></button> -->
					<a href="index.php?go=action&do=add" target="parent">+Point</a>
					<button href="" class="btn btn-info glyphicon glyphicon-search"></button>
				</td>	
			</tr>
			<?php }
		?>
</tbody>
</table>

<!--  Modals-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Siswa Baru</h4>
            </div>	
            <div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nik</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="inputEmail3" placeholder="" name="nik">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPassword3" placeholder="" name="nama">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPassword3" placeholder="" name="kelas">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPassword3" placeholder="" name="jurusan">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPassword3" placeholder="" name="jenis_kelamin">
						</div>
					</div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
 <!-- End Modals-->