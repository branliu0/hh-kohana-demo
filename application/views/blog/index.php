<h2>All Posts</h2>
<?= html::anchor('/blog/new', "Add new post"); ?>
<?php foreach($posts as $post): ?>
  <h5><?= html::entities($post->author) ?></h5>
  <p><?= html::entities($post->body) ?></p>
  <hr />
<?php endforeach; ?>
