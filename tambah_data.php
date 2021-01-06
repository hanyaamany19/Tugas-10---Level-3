<?php
include 'header.php';
?>
<body>
	<div class="container">
		<h2 align="center" style="margin: 30px;">Tambah Data</h2>

		<form method="POST" action="tambah_data_action.php">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" id="nama_produk" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Keterangan</label><br>
						<input type="text" name="keterangan" id="keterangan" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" id="harga" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="text" name="jumlah" id="jumlah" class="form-control" required="true">
					</div>

					<div class="form-group">
						<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</div>
			</div>
		</form>
    </div>

<?php
include 'footer.php';
?>
<?php
include 'script.php';
?>
</body>
</html>