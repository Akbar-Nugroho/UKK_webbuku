<?php
include 'functions.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM buku WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='read.php';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='read.php';</script>";
}
?>



<?= template_header('Read') ?>

<div class="content update">
    <h2>Update Buku</h2>
    <form method="POST" action="proses_update.php" enctype="multipart/form-data">
        <label for="id">No</label>
        <label for="judul">Judul</label>
        <input name="id" value="<?php echo $data['id']; ?>" />
        <input type="text" name="judul" value="<?php echo $data['judul']; ?>" />
        <label for="pengarang">Pengarang</label>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>" />
        <input type="text" name="penerbit" required="" value="<?php echo $data['penerbit']; ?>" />
        <label for="tahun">Tahun Terbit</label>
        <label for="gambar">Gambar</label>
        <input type="text" name="tahun" required="" value="<?php echo $data['tahun']; ?>" />
        <p>
            <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 110px;float: left;margin-bottom: 5px;">
            <input type="file" name="gambar" style="width: 290px; height: 110px" />
        </p>
        <input type="submit" value="Update">
    </form>

</div>

<?= template_footer() ?>