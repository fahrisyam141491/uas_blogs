<h2>Tambah Data Artikel</h2> 
<form method="POST" action="proses/crud/save.php" enctype="multipart/form-data"> 
	<table> 
		<tr> 
			<td>Judul</td> 
			<td><input type="text" name="judul"></input></td> 
		</tr> 
		<tr> 
			<td>Konten</td> 
			<td><input type="text" name="konten"></td> 
		</tr> 
		<tr> 
			<td>Penulis</td> 
			<td><textarea type="text" name="penulis"></textarea></td> 
		</tr> 
		<tr> 
			<td></td> 
			<td><button type="submit">Simpan</button></td> 
		</tr> 
	</table> 
</form>