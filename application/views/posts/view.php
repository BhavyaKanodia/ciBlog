<h2><?= $post['title'] ?></h2>
<small class="post-date">Posted on: <?= $post['created_at'] ?></small>
<img class="img-thumbnail" src="<?= site_url()."assets/images/posts/".$post['post_image'] ?>" alt="">
<div class="post-body">
    <?= $post['body'] ?>
</div>

<hr>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<a class="btn btn-secondary float-start me-2" href="<?= site_url('/posts/edit/'.$post['slug']) ?>">Edit</a>
<?= form_open('/posts/delete/'.$post['id']) ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
<?php endif; ?>


<hr>


<h3>Comments</h3>
<?php if($comments): ?>
    <?php foreach($comments as $comment): ?>
        <div class="card card-body bg-light mb-3">
            <h5>
                <?= $comment['body'] ?>
                [by <strong><?= $comment['name'] ?></strong>]
            </h5>
        </div>
    <?php endforeach ?>
<?php else: ?>
    <p>No comments to display</p>
<?php endif ?>
<hr>
<h3>Add Comment</h3>
<?= validation_errors() ?>
<?= form_open('comments/create/'.$post['id']) ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body" cols="30" rows="10"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?= $post['slug'] ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>