<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <fieldset>
    <div class="form-group">
      <label>Otsikko</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="title" placeholder="Lisää otsikko">
    </div>
    <div class="form-group">
      <label>Teksti</label>
      <textarea class="form-control" name="body" placeholder="Lisää teksti"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Luo</button> 
</form>