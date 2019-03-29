<a href="<?php echo base_url('mahasiswa/input') ?>">Input data</a>
<table border="solid 1px" style="margin-top: 20px;">
	<form>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<TH>Tanggal lahir</TH>
			<th>IPK</th>
			<th>Kelas</th>
			<th>Edit</th>
		</tr>
		<?php foreach ($data as $ms): ?>
			
		<tr>
			<td><?php echo $ms->nim ?></td>
			<td><?php echo $ms->nama ?></td>
			<td><?php echo $ms->tgl_lahir ?></td>
			<td><?php echo $ms->ipk ?></td>
			<td><?php echo $ms->kelas ?></td>
			<td><a href="<?php echo base_url() ?>mahasiswa/editData?nim=<?php echo $ms->nim ?>">EDIT</a></td>
		</tr>
		<?php endforeach ?>
	</form>

<?php echo $hal ;?>
</table>
<br>