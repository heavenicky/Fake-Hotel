 <div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-body">
			<?php foreach($detail as $d) : ?>
				<div class="row">
					<div class="col-md-6">
						<img style="width: 500px; height: 377px;" src="<?= base_url('assets/images/hotel/'.$d->gambar) ?>">
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<th>Merk</th>
								<td><?= $d->nama ?></td>
							</tr>
							<tr>
								<th>Harga</th>
								<td><?= $d->harga ?></td>
							</tr>
							<tr>
								<th>Jumlah Kamar Kosong</th>
								<td><?= $d->jumlah_kamar ?></td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div> 