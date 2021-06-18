<!-- <div class="container">
    <div class="row">
        <div class="col-6">
            <h3>DAFTAR MAHASISWA</h3>
            <?php foreach($data['post'] as $post) :?>
                <ul>
                    <li><?= $post['title'] ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div> -->
<?php
    if (isset($_GET['message'])) {
        echo '<script>alert("'. $_GET['message'] .'")</script>';
    }
?>

<?php foreach($data['post'] as $post) :?>
    <div class="container mb-5">
        <div class = "card border-primary shadow">
            <h5 class = "container mt-3 mb-2 text-left"><?= $post['title'] ?></h5>
            <a class="btn btn-outline-warning ml-3 mr-3 mt-2 mb-2" href="<?= BASEURL; ?>/update/<?= $post['post_id']; ?>" role="button">Update</a>
            <a class="btn btn-outline-danger ml-3 mr-3 mt-2 mb-3" href="<?= BASEURL ?>/admin/hapus/<?= $post['post_id']; ?>" role="button">Delete</a>
        </div>
    </div>
<?php endforeach; ?>