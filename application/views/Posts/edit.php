<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <fieldset>
    <div class="form-group">
      <label>Otsikko</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="title" placeholder="Lisää otsikko"
      value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
      <label>Teksti</label>
      <textarea class="form-control" name="body" placeholder="Lisää teksti"><?php echo $post['body']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Muokkaa</button> 
</form>