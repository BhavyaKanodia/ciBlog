<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open('posts/update') ?>
<input type="hidden" name="id" value="<?= $post['id'] ?>">
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Update Title" value="<?= $post['title'] ?>">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" name="body" id="body" placeholder="Update Body"><?= $post['body'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>