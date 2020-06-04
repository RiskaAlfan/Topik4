<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card">
		  <div class="card-header">
		    Form Tambah Data Mahasiswa
		  </div>
		  <div class="card-body">
		  	<?= validation_errors(); ?>
		   	<form action="" method="post">
			<div class="form-group">
				<div class="form-group">
			    	<label for="nama">Nama</label>
			    	<input type="text" name="nama" class="form-control" id="nama">
			  </div>
			  <div class="form-group">
				<div class="form-group">
			    	<label for="nrp">NRP</label>
			    	<input type="text" name="nrp" class="form-control" id="nrp">
			  </div>
			  <div class="form-group">
				<div class="form-group">
			    	<label for="email">Email</label>
			    	<input type="text" name="email" class="form-control" id="email">
			  </div>
			   <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option value="Manajemen Informatika">Manajemen Informatika</option>
				      <option value="Teknik Informatika">Teknik Informatika</option>
				      <option value="Sistem Informatika">Sistem Informatika</option>
				    </select>
  				</div>
  				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
			</form>
		  </div>
		</div>
			
		

		</div>
	</div>
	

</div>