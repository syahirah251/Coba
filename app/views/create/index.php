<div class="container mt-5 ">
    <div class="container">
        <form class = "form-signin pl-3 pr-3" action="<?= BASEURL ?>/admin/tambah" method="post">
            <h2 class='form-signin-heading text-center'>New Post</h2>
            <div class="input-group input-group-lg mt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="title" name="title">
            </div>
            <div class="input-group input-group-lg mt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Author ID</span>
                </div>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="admin_id" name="admin_id">
            </div>
            <div class="input-group input-group-lg mt-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Contain</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" id="contain" name="contain"></textarea>
            </div> 
            <button type ='submit' class='btn btn-lg btn-primary btn-block mb-4 mt-5'>publish</button>
        </form>
    </div>
</div>
