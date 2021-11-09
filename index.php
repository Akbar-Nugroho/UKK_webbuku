<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?= template_header('Home') ?>
<div class="content">
	<h2>Home</h2>
</div>

<?php
// jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
$query = "SELECT * FROM buku ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);
//mengecek apakah ada error ketika menjalankan query
if (!$result) {
	die("Query Error: " . mysqli_errno($koneksi) .
		" - " . mysqli_error($koneksi));
}

//buat perulangan untuk element tabel dari data mahasiswa
$no = 1; //variabel untuk membuat nomor urut
// hasil query akan disimpan dalam variabel $data dalam bentuk array
// kemudian dicetak dengan perulangan while
while ($row = mysqli_fetch_assoc($result)) {


?>

	<div class="content">
		<div class="thumbnails">
			<article class="location-listing">
				<a class="location-title" href="#"></a>
				<div class="location-image">
					<a href="">
						<img src="gambar/<?php echo $row['gambar']; ?>">
						<b class="thumbnails-f">
							<?php echo $row['judul']; ?>
						</b>
					</a>
				</div>
			</article>
		</div>

	</div>

<?php
	$no++; //untuk nomor urut terus bertambah 1
}
?>

<?= template_footer() ?>