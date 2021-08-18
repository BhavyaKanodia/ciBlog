<html>
    <head>
        <title>ciblog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">ciBlog</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>posts">Posts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>posts/create">Create Post</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div class="container mt-5">