<?php
include 'functions.php';
// Check that the contact ID exists
$id = $_GET["id"];

// Select the record that is going to be deleted

// Make sure the user confirms beore deletion
if (isset($_GET['confirm'])) {
    if ($_GET['confirm'] == 'yes') {
        // User clicked the "Yes" button, delete record
        $query = "DELETE FROM buku WHERE id='$id' ";
        $hasil_query = mysqli_query($koneksi, $query);
        header('Location: read.php');
    } else {
        // User clicked the "No" button, redirect them back to the read page
        header('Location: read.php');
        exit;
    }
}

?>


<?= template_header('Delete') ?>

<div class="content delete">
    <h2>Hapus Buku</h2>

    <p>Are you sure you want to delete contact ?</p>
    <div class="yesno">
        <a href="delete.php?id=<?php echo $_GET['id'] ?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?php echo $_GET['id'] ?>&confirm=no">No</a>
    </div>

</div>

<?= template_footer() ?>