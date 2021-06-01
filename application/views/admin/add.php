<div class="card">
	<div class="card-body">
		<form method="post" action="<?= base_url('admin/addmobil') ?>" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Nama Hotel</label>
					<input type="text" name="nama" class="form-control">
					<?= form_error('nama', ' <small class="text-danger pl-3" style=" display: block; text-align: left">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Harga</label>
					<input type="text" name="harga" class="form-control" >
					<?= form_error('harga', ' <small class="text-danger pl-3" style=" display: block; text-align: left">', '</small>'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Jumlah Kamar</label>
					<input type="text" name="jumlah" class="form-control" >
					<?= form_error('jumlah', ' <small class="text-danger pl-3" style=" display: block; text-align: left">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Foto</label>
					<input type="file" name="foto">
					<?= form_error('foto', ' <small class="text-danger pl-3" style=" display: block; text-align: left">', '</small>'); ?>
				</div>
				<button type="submit" class="btn btn-primary" style="display: block; text-align: left; margin-top: 10px;">Add</button>
			</div>
		</div>
		</form>
	</div>
</div>