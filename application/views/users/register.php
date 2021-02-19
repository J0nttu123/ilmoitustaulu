<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <label>Käyttäjänimi</label>
                <input type="text" class="form-control" name="username" placeholder=" Kirjoita Käyttäjänimi">
            </div>
            <div class="form-group">
                <label>Sähköposti</label>
                <input type="email" class="form-control" name="email" placeholder="Kirjoita sähköposti">
            </div>
            <div class="form-group">
                <label>salasana</label>
                <input type="password" class="form-control" name="password" placeholder="Kirjoita salasana">
            </div>
            <div class="form-group">
                <label>Vahvista salasana</label>
                <input type="password" class="form-control" name="password2" placeholder="Vahvista salasana">
            </div>
            <button type="Submit" class="btn btn-primary btn-block">Rekisteröidy</button>
        </div>
    </div>
<?php echo form_close(); ?>