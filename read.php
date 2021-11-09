<?php
include 'functions.php';
// Connect to MySQL database
?>

<?= template_header('Administrator') ?>

<div class="content read">
    <h2>Halaman Admin</h2>
    <a href="create.php" class="create-contact">Tambah Buku</a>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Judul</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td>Create At</td>
                <td>Update At</td>
                <td>Gambar</td>
                <td>Actions</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
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
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['pengarang'] ?>...</td>
                    <td><?php echo $row['penerbit'] ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><?php echo $row['update_at'] ?></td>
                    <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
                    <td class="actions">
                        <a href="update.php?id=<?= $row['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>

                </tr>

            <?php
                $no++; //untuk nomor urut terus bertambah 1
            }
            ?>
        </tbody>
    </table>

</div>

<?= template_footer() ?>