<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open_multipart('categories/create') ?>
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>