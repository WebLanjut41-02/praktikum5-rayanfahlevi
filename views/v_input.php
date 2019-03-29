<a href="">Mahasiswa</a>
<br>
<table style="margin-top: 20px;">
	<form method="post" action="<?php echo base_url('mahasiswa/prosesInput') ?>">
		
		<tr>
			<td>NIM : </td>
			<td><input type="text" name="nim" placeholder="NIM"></td>
		</tr>
		<tr>
			<td>Nama : </td>
			<td><input type="text" name="nama" placeholder="Nama"></td>
		</tr>
		<tr>
			<td>Tanggal lahir : </td>
			<td><input type="date" name="tgl_lahir" placeholder="Tanggal lahir"></td>
		</tr>
		<tr>
			<td>IPK : </td>
			<td><input type="varchar" name="ipk" placeholder="IPK"></td>
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
