<section class="section">
	<div class="container">

		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Kode Obat</th>
					<th>Nama Obat</th>
					<th>Golongan</th>
					<th>Stok</th>
					<th>Harga Satuan</th>
					<th>Tanggal Kadaluarsa</th>
				</tr>
			</thead>

			<?php
				$no=1;
				foreach($obat as $o){
			?>
			<tbody>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $o->kd_obat ?></td>
					<td><?php echo $o->nama_obat ?></td>
					<td><?php echo $o->golongan ?></td>
					<td><?php echo $o->stok_obat ?></td>
					<td><?php echo $o->harga_satuan ?></td>
					<td><?php echo $o->tgl_kadaluarsa ?></td>
				</tr>
			</tbody>
			<?php }	?>
		</table>

	</div>
</section>