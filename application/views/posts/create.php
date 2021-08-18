<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open_multipart('posts/create') ?>
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Add Title">
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" name="body" id="body" placeholder="Add Body"></textarea>
  </div>
  <div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select class="form-select" name="category_id" id="category_id">
		<?php foreach($categories as $category): ?>
		<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
		<?php endforeach; ?>
	</select>
  </div>
  <div class="mb-3">
    <label for="postimage" class="form-label">Upload Image</label>
    <input type="file" class="form-control" id="postimage" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>