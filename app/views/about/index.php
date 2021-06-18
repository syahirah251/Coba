

    <?php foreach($data['post'] as $post) :?>
        <div class="container mb-5">
            <div class = "card border-primary shadow">
                <h4 class = "container mt-5 text-right"><?= $post['title'] ?></h4>
                <!-- <h6 class = "container text-right"><?= $data['post_id']['title']; ?></h6> -->
                <div class = "container mb-5 text-justify"><?= $post['contain'] ?></div>
            </div>
        </div>
    <?php endforeach; ?>

    