<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <fieldset>
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea name="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button> 
</form>