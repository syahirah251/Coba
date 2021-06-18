<div class="container mt-5 ">
    <div class="container">
        <form class = "form-signin pl-3 pr-3" action="<?= BASEURL ?>/admin/update" method="post">
            <h2 class='form-signin-heading text-center'>Update Post</h2>
            <div class="input-group input-group-lg mt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text">Title</span>
                </div>
                <input class="form-control" aria-label="With textarea" name="title" value="<?= $data['post_id']['title']; ?>"/>
            </div>
            <div class="input-group input-group-lg mt-5"hidden>
                <div class="input-group-prepend">
                    <span class="input-group-text" hidden>Title</span>
                </div>
                <input class="form-control hidden" aria-label="With textarea" name="id" value="<?= $data['post_id']['post_id']; ?>" hidden/>
            </div>
            <div class="input-group mt-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Contain</span>
                </div>
                <input class="form-control" aria-label="With textarea" name="contain" value="<?= $data['post_id']['contain']; ?>"/>
            </div> 
            <button type = 'submit' class='btn btn-lg btn-primary btn-block mb-4 mt-5'>Update</button>
        </form>
    </div>
</div>
