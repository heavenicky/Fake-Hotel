<!DOCTYPE html>
<head></head>
<html lang="en">
<title>Admin</title>
<script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</head>
<body>
	<div class="container">
		<?= $this->session->flashdata('message');  ?>
		<table id="myTable" class="table table-striped table-bordered" style="width:100%; margin-top: 20px;">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama Hotel</th>
					<th scope="col">Harga</th>
					<th scope="col">Jumlah Kamar</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($hotel as $p){?>
					<tr>
						<td><?php echo $p->id ?></td>
						<td><?php echo $p->nama ?></td>
						<td><?php echo $p->harga ?></td>
						<td><?php echo $p->jumlah_kamar ?> </td>
						<td>
				<?php echo anchor('admin/hapus/'.$p->id,'<button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>'); ?>	
				<?php echo anchor('admin/ubah/'.$p->id,'<button class="btn btn-warning"><i class="fas fa-edit"></i></button>'); ?>		
						</td>
					</tr>
				<?php }?>

			</tbody>
			
		</table>
	</div>
</body>
</html>