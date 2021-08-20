<html>
    <head>
        <title>ciblog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid mx-3">
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
                <a class="nav-link" href="<?= base_url(); ?>categories">Categories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if(!$this->session->userdata('logged_in')): ?>
                        <li><a class="dropdown-item" href="<?= base_url(); ?>users/login">Login</a></li>
                        <li><a class="dropdown-item" href="<?= base_url(); ?>users/register">Register</a></li>
                        <?php endif; ?>
                        <?php if($this->session->userdata('logged_in')): ?>
                        <li><a class="dropdown-item" href="<?= base_url(); ?>posts/create">Create Post</a></li>
                        <li><a class="dropdown-item" href="<?= base_url(); ?>categories/create">Create Category</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= base_url(); ?>users/logout">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div class="container mt-5">
            <!-- Flash message -->
            <?php if($this->session->flashdata('user_registered')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('user_registered') ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata('user_loggedin')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('user_loggedin') ?></p>
            <?php endif ?>
            
            <?php if($this->session->flashdata('user_loggedout')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('user_loggedout') ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata('login_failed')): ?>
                <p class="alert alert-danger"><?= $this->session->flashdata('login_failed') ?></p>
            <?php endif ?>
            
            <?php if($this->session->flashdata('post_created')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('post_created') ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata('post_updated')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('post_updated') ?></p>
            <?php endif ?>
            
            <?php if($this->session->flashdata('post_deleted')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('post_deleted') ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata('catgeory_created')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('catgeory_created') ?></p>
            <?php endif ?>
