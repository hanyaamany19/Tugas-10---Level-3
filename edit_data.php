<?php
include 'header.php';
?>
<body>
	<div class="container">
		<h2 align="center" style="margin: 30px;">Edit Data</h2>
		<?php
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from produk where id='$id'");
		while($d = mysqli_fetch_array($data)){
		?>

		<form method="POST" action="update.php">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<label>Nama Produk</label>
						<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
						<input type="text" name="nama_produk" class="form-control" value="<?php echo $d['nama_produk']; ?>" required="true">
					</div>
					<div class="form-group">
						<label>Keterangan</label><br>
						<input type="text" name="keterangan" class="form-control" required="true" value="<?php echo $d['keterangan']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" required="true" value="<?php echo $d['harga']; ?>">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="text" name="jumlah" class="form-control" required="true" value="<?php echo $d['jumlah']; ?>">
					</div>

					<div class="form-group">
						<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</div>
			</div>
		</form>
	<?php } ?>
    </div>

<?php
include 'footer.php';
?>
<?php
include 'script.php';
?>
</body>
</html>