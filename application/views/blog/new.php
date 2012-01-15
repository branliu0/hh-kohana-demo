<?php if ($errors): ?>
<div class="error">
  <ul>
  <?php foreach($errors as $error): ?>
  <li><?php echo $error; ?> </li>
  <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>

<?php
echo form::open();

echo form::label('author', 'Author');
echo form::input('author', Arr::get($post, 'author'));

echo form::label('body', 'Post Body');
echo form::input('body', Arr::get($post, 'body'));

echo form::submit('submit', "Add Post");

echo form::close();
?>
