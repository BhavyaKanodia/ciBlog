<?= validation_errors() ?>

<?= form_open('users/login') ?>
    <div class="row">
        <div class="d-grid col-md-4 offset-md-4">
            <h1 class="text-center"><?= $title ?></h1>
            <div class="mb-3">
                <label for="username" class="form-label">Enter Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Enter Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>