<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.

?>

<?= template_header('Detail') ?>

<?php

ob_start();
session_start();
if (!isset($_SESSION['id'])) header("location: detail.php");

$query = mysqli_query($koneksi, "SELECT * FROM buku");
$row_query = mysqli_fetch_array($query);



?>
<div class="content">
    <h2>Detail</h2>
</div>
<table class="content">
    <tr>
        <td>ID</td>
        <td>:</td>
        <td><?php echo $row_query['id'] ?></td>
    </tr>
    <tr>
        <td>Judul</td>
        <td>:</td>
        <td><?php echo $row_query['judul'] ?></td>
    </tr>
    <tr>
        <td>Penerbit</td>
        <td>:</td>
        <td><?php echo $row_query['penerbit'] ?></td>
    </tr>
    <tr>
        <td>Pengarang</td>
        <td>:</td>
        <td><?php echo $row_query['pengarang'] ?></td>
    </tr>
    <tr>
        <td>Tahun Terbit</td>
        <td>:</td>
        <td><?php echo $row_query['tahun'] ?></td>
    </tr>
    <tr>
        <td>Create At</td>
        <td>:</td>
        <td><?php echo $row_query['created_at'] ?></td>
    </tr>
    <tr>
        <td>Update At</td>
        <td>:</td>
        <td><?php echo $row_query['update_at'] ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td class="foto-detail"><img src="gambar/<?php echo $row_query['gambar']; ?>" style="width: 160px;"></td>
    </tr>
</table>


<?= template_footer() ?>