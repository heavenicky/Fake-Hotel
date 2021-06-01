<div class="container">
	<div class="card">
		<div class="card-header">
			Booking Hotel
		</div>
		<?php foreach($detail as $d) : ?>
			<form method="POST" action="<?= base_url('user/tambah_booking') ?>">
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">ID User</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="text" name="id" class="form-control" value="<?= $user['id'] ?>" readonly>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Nama Hotel</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="text" name="nama" class="form-control" value="<?= $d->nama ?>" readonly>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Sisa Kamar</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="text" name="sisa" class="form-control" value="<?= $d->jumlah_kamar ?>" readonly>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Harga</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="text" name="harga" class="form-control" value="<?= $d->harga ?>" readonly>
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Jumlah Hari</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="number" name="hari" class="form-control" style="width: 796px" required min="1">
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Jumlah Kamar</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="number" name="kamar" class="form-control" style="width: 796px" required min="1" max="<?= $d->jumlah_kamar ?>"> 
				</div>
				<div class="form-group">
					<label style="display: block; text-align: left; margin-top: 10px;">Rating</label>
					<input type="hidden" name="id_hotel" value="<?= $d->id ?>">
					<input type="number" name="rating" class="form-control" style="width: 796px" required min="1" max="5">
				</div>
				<button type="submit" style="btn btn-warning">Booking</button>
			</form>
		<?php endforeach; ?>
	</div>
</div>