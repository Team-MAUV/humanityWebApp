
<?php  if (count($errors) > 0) : ?>
  <div class="msg">
  	<?php foreach ($errors as $error) : ?>
  	  <span><?php echo $error ?></span>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

<?php if (count($errors)==0 && count($set) >0) :?>
	<div style="color: green;">
		<span>Please check your Email</span>
	</div>
<?php endif ?>	