<a href="<?php echo base_url('mahasiswa') ?>">Mahasiswa</a>
<br>
<table style="margin-top: 20px;">
	<form method="post" action="<?php echo base_url('mahasiswa/prosesEdit') ?>">
		
		<tr>
			<td>NIM : </td>
			<td><input type="text" name="nim" value="<?php echo $dataMhs[0]->nim ?>"></td>
		</tr>
		<tr>
			<td>Nama : </td>
			<td><input type="text" name="nama" value="<?php echo $dataMhs[0]->nama ?>"></td>
		</tr>
		<tr>
			<td>Tanggal lahir : </td>
			<td><input type="date" name="tgl_lahir" value="<?php echo $dataMhs[0]->tgl_lahir ?>"></td>
		</tr>
		<tr>
			<td>IPK : </td>
			<td><input type="varchar" name="ipk" value="<?php echo $dataMhs[0]->ipk ?>"></td>
		</tr>
		<tr>
			<td>Kelas : </td>
			<td>
				<select name="kelas">
					<option selected value="D3MI-41-01">D3MI-41-01</option>
					<option value="D3MI-41-02">D3MI-41-02</option>	
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
			<button type="submit">Submit</button>
			</td>
		</tr>
	</form>
</table>
