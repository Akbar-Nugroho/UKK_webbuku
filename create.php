<?php
include 'functions.php';
?>


<?= template_header('Create') ?>

<div class="content update">
    <h2>Tambah Buku</h2>
    <form method="POST" action="proses_create.php" enctype="multipart/form-data">
        <label for="id">No</label>
        <label for="judul">Judul</label>
        <input type="text" name="id" value="auto">
        <input type="text" name="judul" required="">
        <label for="pengarang">Pengarang</label>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="pengarang" />
        <input type="text" name="penerbit" required="" />
        <label for="tahun">Tahun Terbit</label>
        <label for="gambar">Gambar</label>
        <input type="text" name="tahun" required="" />
        <input type="file" name="gambar" />
        <input type="submit" value="Tambah">
    </form>

</div>

<?= template_footer() ?>