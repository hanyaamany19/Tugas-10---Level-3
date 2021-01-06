<?php
include 'header.php';
?>
<body>
	<div class="container">
		<h2 align="center" style="margin: 30px;">CRUD Menggunakan PHP &amp; MySQLi</h2>

		<a href="tambah_data.php">
			<button style="margin-bottom: 20px;" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data </button>
		</a>

		<table id="example" class="table table-striped table-bordered" style="width:100%">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>Nama Produk</td>
	    			<td>Keterangan</td>
	    			<td>Harga</td>
	    			<td>Jumlah</td>
	    			<td>Action</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $data = mysqli_query($koneksi,"SELECT * FROM produk");
			        while($d = mysqli_fetch_array($data)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_produk']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
						<td><?php echo $d['harga']; ?></td>
						<td><?php echo $d['jumlah']; ?></td>
						<td>
							<!-- base64_encode berguna untuk enkripsi id jadi nanti akan mengubah urlnya menjadi tulisan acak -->
							<a href="edit_data.php?id=<?php echo $d['id']; ?>">
								<button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit </button>
							</a>
							<a href="hapus_data.php?id=<?php echo $d['id']; ?>">
								<button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
							</a>
						</td>
					</tr>
			    <?php } ?>
	    	</tbody>
	    </table>
    </div>

<?php
include 'footer.php';
?>
<?php
include 'script.php';
?>
</body>
</html>