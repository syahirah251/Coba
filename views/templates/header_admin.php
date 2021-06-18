<html>

<head>
    <meta charset="UTF-8">
    <title><?= $data['judul']; ?> GTGW</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>

<nav class="navbar navbar-expand-lg p-3 mb-5 navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
        <a class="navbar-brand font-weight-bold text-primary" href="<?= BASEURL; ?>"> G T G W </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <a class=" btn btn-outline-primary my-2 my-sm-0" href="<?= BASEURL; ?>/create" role="button">New Post</a>
        </div>
    </div>
</nav>

<!-- Modal -->