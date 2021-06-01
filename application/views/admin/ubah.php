<div class="container">
	<div class="card">
		<div class="card-header">
			Edit Hotel
		</div>
		<?php foreach($detail as $d) : ?>
			<form method="POST" action="<?= base_url('admin/update_hotel') ?>">
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">ID Hotel</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="text" name="id" class="form-control" value="<?= $d->id ?>" readonly>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Nama Hotel</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="text" name="nama" class="form-control" value="<?= $d->nama ?>" required>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Sisa Kamar</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="number" name="sisa" class="form-control" value="<?= $d->jumlah_kamar ?>" required min="0" style="width: 796px">
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Harga</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="number" name="harga" class="form-control" value="<?= $d->harga ?>" required min="1" style="width: 796px">
				</div>
	
				
				<button type="submit" style="btn btn-warning">Update</button>
			</form>
		<?php endforeach; ?>
	</div>
</div>