<h2><?= $post['title'] ?></h2>
<small class="post-date">Posted on: <?= $post['created_at'] ?></small>
<img class="img-thumbnail" src="<?= site_url()."assets/images/posts/".$post['post_image'] ?>" alt="">
<div class="post-body">
    <?= $post['body'] ?>
</div>

<hr>
<a class="btn btn-secondary float-start" href="<?= site_url('/posts/edit/'.$post['slug']) ?>">Edit</a>
<?= form_open('/posts/delete/'.$post['id']) ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
