<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open('posts/create') ?>
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Add Title">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" name="body" id="body" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>