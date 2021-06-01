<div class="container">
	<div class="card mx-auto">
		<div class="card-header">
			History
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped"> 
				<tr>
					<th>No</th>
					<th>Nama Customer</th>
					<th>Nama Hotel</th>
					<th>Jumlah Kamar</th>
					<th>Total Harga</th>
					<th>Rating</th>
				</tr>
				<?php $no=1; foreach ($transaksi as $t) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $t->namadepan ?></td>
						<td><?= $t->nama ?></td>
						<td><?= $t->jumlah_hari ?></td>
						<td>Rp. <?= number_format($t->total_harga,0,',',',') ?></td>
						<td><?= $t->rating ?></td>
	
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>