<br>
<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?><br>
    <h3><?php echo $post['title']; ?></h3>
    <div class="container">
            <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
            <?php echo word_limiter($post['body'], 45); ?><br><br>
            <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">
            Lue lisää</a></p>   
    </div>
<?php endforeach; ?>